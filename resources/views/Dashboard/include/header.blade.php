        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src={{asset("Dashboard/images/iccon/logo.png")}} alt="PlayZone logo" />    {{-- RGD --}}
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('dash')}}">
                                <i class="fa-solid fa-table" style="color: #00d084;"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar" style="color: #00d084;"></i>My Fields</a>
                        </li>
                        {{-- RGD --}}
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-futbol" style="color: #00d084;"></i>Sports</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('sport-types.create')}}"><i class="fa-regular fa-plus" style="color: #00d084;"></i>Add sport</a>
                                </li>
                                <li>
                                    <a href="index2.html">Sport Details</a>
                                </li>
                            </ul>
                        </li>
                        {{-- /RGD --}}
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table" style="color: #00d084;"></i>Subscribers/Users</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square" style="color: #00d084;"></i>Reservations Details</a>
                        </li>
                        <li>
                            <a href="{{url('calendar')}}">
                                <i class="fas fa-calendar-alt" style="color: #00d084;"></i>Calendar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('dash')}}">
                    <img src="{{ asset('landing/img/image.png') }}" alt="PlayZone logo" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('dash')}}">
                                <i class="fa-solid fa-table" style="color: #00d084;"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/dash') }}">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                        {{-- /RGD --}}
                        <li>
                            <a href="table.html">
                                <i class="fa-solid fa-users" style="color: #00d084;"></i>Subscribers/Users</a>
                        </li>
                        {{-- Add sports --}}
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-solid fa-futbol" style="color: #00d084;"></i>Sports</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('sport-types.create')}}"><i class="fa-regular fa-plus" style="color: #00d084;"></i>Add sport</a>
                                </li>
                                <li>
                                    <a href="{{route('sport-types.index')}}"><i class="fa-solid fa-table" style="color: #00d084;"></i>Sports Details</a>
                                </li>
                            </ul>
                        </li>    
                     <!-- zaina change -->
                      <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa-regular fa-paste" style="color: #00d084;"></i>Zones</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               <li>
                        <a href="{{route('fields.index')}}">
                           <i class="fa-regular fa-futbol" style="color: #00d084;"></i> All Zones</a>
                        </li>
                                <li>
                                     <a href="{{route('fields.create')}}"><i class="fa-solid fa-plus"></i>New Zone</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square" style="color: #00d084;"></i>Reservations Details</a>
                        </li>
                   
                        <!-- zaina change -->
                        <li>
                            <a href="{{url('calendar')}}">
                                <i class="fas fa-calendar-alt"  style="color: #00d084;"></i>Calendar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        {{-- <div class="page-container">           //this tag moved to main page--}}
            <!-- HEADER Navbar DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src={{asset("Dashboard/images/icon/avatar-06.jpg")}} alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src={{asset("Dashboard/images/icon/avatar-04.jpg")}} alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src={{asset("Dashboard/images/icon/avatar-06.jpg")}} alt="Cynthia Harvey" />   {{-- RGD --}}
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src={{asset("Dashboard/images/icon/avatar-05.jpg")}} alt="Cynthia Harvey" />   {{-- RGD --}}
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src={{asset("Dashboard/images/icon/avatar-04.jpg")}} alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src={{asset("Dashboard/images/icon/avatar-01.jpg")}} alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}   
                                                {{-- تعديل --}}
                                            </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src={{asset("Dashboard/images/icon/avatar-01.jpg")}} alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>                                                    </h5>
                                                        <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ url('/') }}">
                                                        <i class="zmdi zmdi-home"></i>Home</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href={{route('a_profile.index')}}>
                                                        <i class="zmdi zmdi-account"></i>Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER Navbar DESKTOP-->
