@extends('Dashboard.master')

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="col-lg-6">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header" style="background-color: #00D084; color:white">Update your Information</div>
                    <div class="card-body card-block">
                        <form action="{{ route('a_profile.update', $admin_prof->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa-solid fa-image-portrait"></i>
                                    </div>
                                    <td><img src="{{asset($admin_prof->image)}}" alt="Admin profile image" width="150px" height="150px"></td>
                                </div>
                                <div>
                                    <input type="file" id="admin_img" name="image" placeholder="Profile image" >
                                </div>
                            </div>
                            {{-- <div>
                                <img src="{{asset($admin_prof->image)}}" alt="Admin profile image" style="border-radius: 50%;  border: 0.5px solid #00D084; width:100px; hight:100px;">
                            </div> --}}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="adminName" name="name" placeholder="{{$admin_prof->name}}" class="form-control" style="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="email" id="email" name="email" placeholder="{{$admin_prof->email}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="password" id="password" name="password" placeholder="Enter New Password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <input type="text" id="phone_no" name="phone" placeholder="{{$admin_prof->phone}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm" style="width: 100%; background-color:#00D084">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection