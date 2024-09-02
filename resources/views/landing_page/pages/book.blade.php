@extends('landing_page.layouts.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Fields</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('Home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item active text-primary">Fields</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Booking Form Start -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h1 class="h3 text-white" >Book {{ $field->field_name }}</h1>
                </div>
                <div class="card-body p-4">

                    <h2 class="h4 mb-4">Book a Court</h2>
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="field_id" value="{{ $field->id }}">

                        <!-- Date -->
                        <div class="form-group mb-3">
                            <label for="date" class="form-label">Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <!-- Start Time -->
                        <div class="form-group mb-3">
                            <label for="start_at" class="form-label">Start Time:</label>
                            <select name="start_at" id="start_at" class="form-select" required>
                                @foreach ($availableHours as $hour => $available)
                                    @if ($available)
                                        <option value="{{ $hour }}">{{ $hour }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- Duration -->
                        <div class="form-group mb-4">
                            <label for="duration" class="form-label">Duration (hours):</label>
                            <input type="number" name="duration" id="duration" class="form-control" min="1" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">

                        <button type="submit" class="btn bg-primary text-white   rounded-pill py-2 px-4">Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Form End -->
@endsection
