@extends('Dashboard.master')

@section('content')
    <div class="page-container">
    <div class="main-content">
        <h1>Edit Sport/Court Details</h1>
        <form action="{{ route('sport-types.update', $sport_type->id) }}" method="POST">
            @csrf
            @method("put")
            <label for="sport_type">Sport type:</label>
            <input type="text" name="sport_type"  value="{{$sport_type->sport_type}}"  required>

            <label for="sport_image">Description:</label>
            <input type="text" name="sport_image"  value="{{$sport_type->sport_image}}" required>

            <button type="submit">Save</button>
        </form>
    </div>
    </div>
@endsection