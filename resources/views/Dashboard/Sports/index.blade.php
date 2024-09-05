@extends('Dashboard.master')

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="col-lg-9">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>image</th>
                                <th>Court type</th>
                                <th>Actions</th>
                                {{-- <th class="text-right">quantity</th>
                                <th class="text-right">total</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sports_type as $sport_type)
                            <tr>
                                <td>{{$sport_type->id}}</td>
                                <td><img src="{{asset($sport_type->sport_image)}}" alt="sport_image" width="100px" height="100px"></td>
                                <td>{{$sport_type->sport_type}}</td>    
                                <td>
                                    <div style="display:flex; flex-direction:row;">
                                        <a href="{{route('sport-types.edit', $sport_type->id )}}" ><button type=submit class="btn btn-info btn-sm"> <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> </button></a> <br>
                                        <form action="{{route('sport-types.destroy' , $sport_type->id)}}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <button type=submit class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can" style="color: #ffffff;"></i> </button> 
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection