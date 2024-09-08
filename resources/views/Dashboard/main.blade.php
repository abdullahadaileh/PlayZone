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
                                            </div>
                                        </div>
                                    </div>

                                    {{-- User Statistics: Display the number of users and admins. --}}
                                    <div class="stats-container">
                                        
                                        
                                        <div class="stat-card red">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Bookings</div>
                                            <div class="number">{{ $bookingsCount }}</div>
                                        </div>
                                        <div class="stat-card red">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Today's Reservations</div>
                                            <div class="number">{{ $todayReservations }}</div>
                                        </div>
                                        <div class="stat-card red">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Month's Reservations</div>
                                            <div class="number">{{ $monthReservations }}</div>
                                        </div>
                                        <div class="stat-card red">
                                            <div class="icon">
                                                <i class="fas fa-calendar-check" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Year's Reservations</div>
                                            <div class="number">{{ $yearReservations  }}</div>
                                        </div>
                                        <div class="stat-card blue">
                                            <div class="icon">
                                                <i class="fa-solid fa-user-tie" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Admins</div>
                                            <div class="number">{{ $adminsCount }}</div>
                                        </div>
                                        <div class="stat-card green">
                                            <div class="icon">
                                                <i class="fa-solid fa-user" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">Users</div>
                                            <div class="number">{{ $usersCount }}</div>
                                        </div>
                                        <div class="stat-card purple">
                                            <div class="icon">
                                                <i class="fa-solid fa-money-bill" style="color: #00d084;"></i>
                                            </div>
                                            <div class="text">PlayZones</div>
                                            <div class="number">{{ $fieldsCount }}</div>
                                        </div>
                                    </div>                                                                        
                                    {{-- end User Statistics: Display the number of users and admins.end --}}

                                    <!-- Users Section -->
                                    <section id="users" class="users section">
                                        <!-- Section Title -->
                                        <div class="container section-title" data-aos="fade-up">
                                            {{-- <div class="main-content"> --}}
                                                
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
                                            
                                            @if(auth()->user()->role === 'superadmin')
                                            <!-- Edit Role Button -->
                                            <a href="{{ route('users.editRole', $user->id) }}" class="btn btn-primary btn-sm">Edit Role</a>
                                            <!-- Delete Button -->
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline;">
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