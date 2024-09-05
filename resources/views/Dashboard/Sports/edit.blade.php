@extends('Dashboard.master')

@section('content')

<div class="page-container">
    <div class="main-content">
        <div class="col-lg-6" style="width: 100%;">
            <div class="card">
                {{-- <div class="card-header">Edit Sport/Court Details</div> --}}
                <div class="card-header">
                    <strong style="color: #00D084;">Edit Court Type</strong> Details for your field 
                </div>
                <div class="card-body">
                    {{-- <div class="card-title">
                        <h3 class="text-center title-2">Pay Invoice</h3>
                    </div>
                    <hr> --}}
                    <form action="{{ route('sport-types.update', $sport_type->id) }}" method="POST">
                        @csrf
                        @method("put")

                        <div class="form-group">
                            <label for="sport_type">Sport type:</label>
                            <input class="is-valid form-control-success form-control" type="text" name="sport_type"  value="{{$sport_type->sport_type}}" required>
                        </div>

                        <div class="form-group">
                            <label for="sport_image">Sport Image:</label>
                            <td><img src="{{asset($sport_type->sport_image)}}" alt="sport_image" name="sport_image" width="100px" height="100px"></td>
                        </div>
                        <div>
                            <input type="file" id="formFile" name="sport_image">
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="background-color: #00D084;">Save</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection