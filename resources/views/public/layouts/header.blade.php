<header class="header-wrapper">
    <div class="topbar clearfix">
        <div class="container">
            <ul class="topbar-left">
                <li class="phoneNo"><i class="fa fa-phone"></i>{{$item->phone}}</li>
                <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
                    <a href="{{$item->email}}">{{$item->email}}</a>
                </li>
            </ul>
            <ul class="topbar-right">
                <li class="hidden-xs"><a href="{{$item->twitter}}"><i class="fa fa-twitter"></i></a></li>
                <li class="hidden-xs"><a href="{{$item->facebook}}"><i class="fa fa-facebook"></i></a></li>
                <li class="hidden-xs"><a href="{{route('homePage')}}"><i class="fa fa-google-plus"></i></a></li>
                <li class="hidden-xs"><a href="{{$item->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
                <li class="top-search list-inline">
                    <a href="#"><i class="fa fa-search"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <span class="input-group">
            <input type="text" class="form-control" placeholder="Course Name">
            <button type="submit" class="btn btn-default commonBtn">Search</button>
          </span>
                        </li>
                    </ul>
                </li>
                <li class="dropdown language">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-globe"></i>EN
      <i class="fa fa-caret-down"></i>
      </a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="#">English </a>
                        </li>
                        <li><a href="#">Spanish</a></li>
                        <li><a href="#">Russian</a></li>
                        <li><a href="#">German</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_inner">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                                <a class="navbar-brand logo clearfix" href="index.html"><img src="{{$item->image}}" alt="" class="img-responsive" /></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active dropdown">
                                        <li><a href="about.html">Home</a></li>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="index.html">Home Default</a></li>
                                            <li><a href="index-course.html">Home Course</a></li>
                                            <li><a href="index-university.html">Home University</a></li>
                                        </ul> --}}
                                    </li>
                                    

                                    {{-- About  --}}

                                    <li class=" dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About College</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="photo-gallery3col.html">Gallery 3 Columns</a></li>
                                                    <li><a href="photo-gallery4col.html">Gallery 4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply Now</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="buying-steps.html">Apply For Addmission</a></li>
                                                    <li><a href="buying-confirmation.html">Confirmation</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices Table</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="price-table-3col.html">Prices 3 column</a></li>
                                                    <li><a href="price-table-4col.html">Prices 4 column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="campus.html">Our Campus</a></li>
                                            <li><a href="stuff.html">Stuff</a></li>
                                            <li><a href="international_students.html">International Students</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="404-error.html">404 Not Found</a></li>
                                            <li><a href="coming-soon-dark.html" target="_blank">Coming Soon</a></li>
                                        </ul>
                                    </li>

                                    {{-- Portifolio --}}
                                    <li class="active dropdown">
                                        <li><a href="about.html">Portifolio</a></li>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="index.html">Home Default</a></li>
                                            <li><a href="index-course.html">Home Course</a></li>
                                            <li><a href="index-university.html">Home University</a></li>
                                        </ul> --}}
                                    </li>





                                    <li class=" dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid Version1</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="course-grid-3col.html">3 Columns</a></li>
                                                    <li><a href="course-grid-4col.html">4 Columns</a></li>
                                                    <li><a href="course-grid-sidebar-right.html">Sidebar Right</a></li>
                                                    <li><a href="course-grid-sidebar-left.html">Sidebar Left</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses Grid Version2</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="course-grid-version2-4col.html">4 Columns</a></li>
                                                    <li><a href="course-grid-version2-3col.html">3 Columns</a></li>
                                                    <li><a href="course-version2-right-sidebar.html">Sidebar Right</a></li>
                                                    <li><a href="course-version2-left-sidebar.html">Sidebar Left</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses List View</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="course-right-sidebar.html">Sidebar Right</a></li>
                                                    <li><a href="course-left-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="course-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Single Course</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="single-course-right-sidebar.html">Sidebar Right</a></li>
                                                    <li><a href="single-course-left-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="single-course-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy Course</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="confirmation.html">Confirmation </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active dropdown">
                                        <li><a href="about.html">Contact</a></li>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="index.html">Home Default</a></li>
                                            <li><a href="index-course.html">Home Course</a></li>
                                            <li><a href="index-university.html">Home University</a></li>
                                        </ul> --}}
                                    </li>

                                    <li class="active dropdown">
                                        <li><a href="about.html">Alumn</a></li>
                                        {{-- <ul class="dropdown-menu">
                                            <li><a href="index.html">Home Default</a></li>
                                            <li><a href="index-course.html">Home Course</a></li>
                                            <li><a href="index-university.html">Home University</a></li>
                                        </ul> --}}
                                    </li>

                                    <li class=" dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News & Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="events-3col.html">Events 3 Columns</a></li>
                                            <li><a href="events-right-sidebar.html">Events Sidebar Right</a></li>
                                            <li><a href="events-left-sidebar.html">Events Sidebar Left</a></li>
                                            <li><a href="single-events.html">Single Event</a></li>
                                            <li><a href="events-calendar.html">Events Callender</a></li>
                                        </ul>
                                    </li>
                                    <li class="apply_now"><a href="buying-steps.html">Apply Now</a></li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>
        <!-- navbar -->
    </div>
</header>