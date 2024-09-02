<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Book_Page extends Controller
    {
        public function index($field_id)
        {      if (!auth()->check()) {
                return redirect()->route('login')->with('error', 'You need to be logged in to make a booking.');
            }

            $field = Field::findOrFail($field_id);

            $date = request()->input('date', now()->format('Y-m-d'));

            $bookings = Booking::where('field_id', $field_id)
                ->where('date', $date)
                ->where('status', '!=', 'confirmed') 
                ->get();

            $availableHours = [];
            for ($hour = 0; $hour < 24; $hour++) {
                $hourStr = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00';
                $availableHours[$hourStr] = true;
            }

            foreach ($bookings as $booking) {
                $startTime = Carbon::parse($booking->start_at);
                $endTime = $startTime->copy()->addHours($booking->duration);

                for ($time = $startTime; $time < $endTime; $time->addHour()) {
                    $timeStr = $time->format('H:i');
                    if (isset($availableHours[$timeStr])) {
                        unset($availableHours[$timeStr]);
                    }
                }
            }

            return view('landing_page.pages.book', compact('field', 'bookings', 'availableHours'));
        }

        public function store(Request $request)
        {
        $request->validate([
                'field_id' => 'required|exists:fields,id',
                'date' => 'required|date',
                'start_at' => 'required|date_format:H:i',
                'duration' => 'required|integer|min:1',
            ]);

            $field = Field::findOrFail($request->input('field_id'));
            $endTime = date('H:i', strtotime($request->input('start_at') . ' + ' . $request->input('duration') . ' hours'));

            // Check if the selected time slot is available
            $existingBooking = Booking::where('field_id', $request->input('field_id'))
                ->where('date', $request->input('date'))
                ->where('status', '!=', 'confirmed') // Exclude confirmed bookings
                ->where(function ($query) use ($request, $endTime) {
                    $query->where(function ($q) use ($request, $endTime) {
                        $q->whereBetween('start_at', [$request->input('start_at'), $endTime])
                        ->orWhereBetween('end_at', [$request->input('start_at'), $endTime]);
                    })
                    ->orWhere(function ($q) use ($request, $endTime) {
                        $q->where('start_at', '<=', $request->input('start_at'))
                        ->where('end_at', '>=', $request->input('start_at'));
                    });
                })
                ->exists();

            if ($existingBooking) {
                return redirect()->back()->with('error', 'The selected time slot is already booked.');
            }

            Booking::create([
                'field_id' => $request->input('field_id'),
                'user_id' => auth()->id(),
                'total_price' => $request->input('duration') * $field->field_price,
                'status' => 'pending',
                'date' => $request->input('date'),
                'start_at' => $request->input('start_at'),
                'duration' => $request->input('duration'),
            ]);

            return redirect()->route('services.index')->with('success', 'Booking successfully created!');
        }
    }



