@extends('Dashboard.master')

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="col-lg-9">
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
                                <td>{{$sport_type->img}}</td>
                                <td>{{$sport_type->sport_type}}</td>
                                <td>
                                    <a href="{{route('sport-types.edit', $sport_type->id )}}" > Edit </a> <br>
                                    <form action="{{route('sport-types.destroy' , $sport_type->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                            <button type=submit> Delete </button> 
                                    </form>
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