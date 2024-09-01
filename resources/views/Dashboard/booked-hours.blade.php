@extends('Dashboard.master')
@section('content')
<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">Reservations</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning" id="bookingTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>start-time</th>
                                        <th>day</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($opening_hours as $opening_hour)
                                    <tr>
                                        <td>{{ $opening_hour->id }}</td>
                                        <td>{{ $opening_hour->opening_hour }}</td>
                                        <td>{{ $opening_hour->day }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>

</style>
@endsection
