@extends('Dashboard.master')
@section('content')
        <!-- PAGE CONTAINER-->
        <div class="page-container">
                        <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="overview-wrap">
                                                <h2 class="title-1">overview</h2>
                                                <button class="au-btn au-btn-icon au-btn--blue">
                                                    <i class="zmdi zmdi-plus"></i>add item</button>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- User Statistics: Display the number of users and admins. --}}
                                    <div class="row m-t-25">
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="overview-item overview-item--c1">
                                                <div class="overview__inner">
                                                    <div class="overview-box clearfix">
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-account-o"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h2>{{ $usersCount }}</h2>
                                                            <span>Users</span>
                                                        </div>
                                                    </div>
                                                    <div class="overview-chart">
                                                        <canvas id="widgetChart1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="overview-item overview-item--c2">
                                                <div class="overview__inner">
                                                    <div class="overview-box clearfix">
                                                        <div class="icon">
                                                            <i class="zmdi zmdi-account-o"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h2>{{ $adminsCount }}</h2>
                                                            <span>Admins</span>
                                                        </div>
                                                    </div>
                                                    <div class="overview-chart">
                                                        <canvas id="widgetChart2"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="overview-item overview-item--c3">
                                                <div class="overview__inner">
                                                    <div class="overview-box clearfix">
                                                        <div class="icon">
                                                            <i class="fas fa-flag"></i>
                                                        </div>                                                                                                                <div class="text">
                                                            <h2>{{ $fieldsCount }}</h2>
                                                            <span>PlayZones</span>
                                                        </div>
                                                    </div>
                                                    <div class="overview-chart">
                                                        <canvas id="widgetChart3"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="overview-item overview-item--c4">
                                                <div class="overview__inner">
                                                    <div class="overview-box clearfix">
                                                        <div class="icon">
                                                            <i class="fas fa-calendar-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h2>{{ $bookingsCount }}</h2> <!-- تغيير المتغير إلى $bookingsCount -->
                                                            <span>Bookings</span>
                                                        </div>
                                                    </div>
                                                    <div class="overview-chart">
                                                        <canvas id="widgetChart4"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- end User Statistics: Display the number of users and admins.end --}}
 
                                    


                                    
                                    
                                    
                                    <!-- Users Section -->
                                    <section id="users" class="users section">
                                        <!-- Section Title -->
                                        <div class="container section-title" data-aos="fade-up">
                                            {{-- <div class="main-content"> --}}
                                                <div class="main-content">
                                                    <div class="section__content section__content--p30">
                                                        <div class="card w-100">
                                                            <div class="card-header">
                                                                <strong>Create New</strong> User
                                                            </div>
                                                            <div class="card-body card-block">
                                                                <!-- Display validation errors -->
                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                
                                                                <form action="{{ route('users.store') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="name" class="form-control-label">Name</label>
                                                                        <input type="text" id="name" name="name" placeholder="Enter User Name.." class="form-control" required>
                                                                        <span class="help-block">Please enter the user name</span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email" class="form-control-label">Email</label>
                                                                        <input type="email" id="email" name="email" placeholder="Enter User Email.." class="form-control" required>
                                                                        <span class="help-block">Please enter the user email</span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password" class="form-control-label">Password</label>
                                                                        <input type="password" id="password" name="password" placeholder="Enter User Password.." class="form-control" required>
                                                                        <span class="help-block">Please enter the user password</span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="role" class="form-control-label">Role</label>
                                                                        <input type="text" id="role" name="role" placeholder="Enter User Role.." class="form-control" required>
                                                                        <span class="help-block">Please enter the user role</span>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                                        </button>
                                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                                            <i class="fa fa-ban"></i> Reset
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <h2>All Users</h2>
                    <div><span>View All</span> <span class="description-title">Users</span></div>
                </div><!-- End Section Title -->
            
                <div class="container">            
                    <!-- Users Table -->
                    <div class="table-responsive table--no-card mb-4">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="text-right">Created At</th>
                                    <th class="text-right">Updated At</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td class="text-right">{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td class="text-right">{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
                                        <td class="text-right">
                                            <!-- Delete Button -->
                                            @if(auth()->user()->role === 'superadmin')
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- /Users Section -->
            
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
        </div>
@endsection