<div class="mainContent clearfix">
    <div class="container">
        <div class="row clearfix">

            <div class="col-sm-8 col-xs-12">
                <div class="videoNine clearfix">

                    <div class="videoArea clearfix">
                        <h3>Welcome To Royal College</h3>
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-xs-12 videoLeft">
                                <img src="img/home/video/video_image.jpg"
                                    data-video="https://www.youtube.com/embed/oOMcZoeEK0A?autoplay=1">
                            </div>
                            <!-- videoLeft -->
                            <div class="col-lg-4 col-md-5 col-xs-12 videoRight">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur ante
                                    volutpat sem aliquam lobortis. Mauris porta fermentum volutpat. Praesent est sapien,
                                    tincidunt vel arcu vitae, mattis sollicitudin
                                    lectus. Mauris porta fermentum volutpat. Praesent est sapien, tincidunt vel arcu
                                    vitae, mattis sollicitudin lectus.</p>
                                <a href="about.html" class="btn btn-block learnBtn">Learn More</a>
                            </div>
                            <!-- videoRight -->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- videoArea -->

                    <div class="related_post_sec single_post">
                        <h3>Recent News</h3>
                        <ul>
                            @foreach ($news as $news)
                            <li>
                                <span class="rel_thumb">
                                    <a href="single-post-right-sidebar.html"><img src="{{asset('NewsImage')}}/{{$news->image}}"
                                            alt=""></a>
                                </span>
                                <!--end rel_thumb-->
                                <div class="rel_right">
                                    <h4><a href="single-post-right-sidebar.html">{{$news->title}}</a></h4>
                                    <div class="meta">
                                        <span class="author">Posted in: <a href="#">Update</a></span>
                                        <span class="date">on: <a href="#">{{$news->newsDate}}</a></span>
                                    </div>
                                    <p>{{$news->description}}</p>
                                </div>
                                <!--end rel right-->
                            </li>
                           
                            @endforeach
                        </ul>
                    </div>
                    <!--related_post_sec-->

                </div>
                <!--videoNine-->
            </div>
            <!-- col-sm-8 col-xs-12 -->

            <div class="col-sm-4 col-xs-12">
                <div class="formArea clearfix">
                    <div class="formTitle">
                        <h3>Find a Course</h3>
                        <p>Offered in small class sizes with great emphasis on the demands of the specification and exam
                            technique.</p>
                    </div>
                    <!-- formTitle -->
                    <form action="#" method="post">
                        <div class="selectBox clearfix">
                            <select name="guiest_id1" id="guiest_id1">
                                <option value="0">Location</option>
                                <option value="1">Location_1</option>
                                <option value="2">Location_2</option>
                                <option value="3">Location_3</option>
                            </select>
                        </div>
                        <!-- selectBox -->
                        <div class="selectBox clearfix">
                            <select name="guiest_id2" id="guiest_id2">
                                <option value="0">Level</option>
                                <option value="1">Level_1</option>
                                <option value="2">Level_2</option>
                                <option value="3">Level_3</option>
                            </select>
                        </div>
                        <!-- selectBox -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Course Name">
                        </div>
                        <button type="submit" class="btn btn-default btn-block commonBtn">Search</button>
                    </form>
                </div>
                <!-- formArea -->
                <div class="list_block related_post_sec">
                    <div class="upcoming_events">
                        <h3>Upcoming Events</h3>
                        <ul>
                            <li class="related_post_sec single_post">
                                <span class="date-wrapper">
                                    <span class="date"><span>24</span>January</span>
                                </span>
                                <div class="rel_right">
                                    <h4><a href="single-events.html">Offered in small class sizes with great
                                            emphasis...</a></h4>
                                    <div class="meta">
                                        <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                        <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                    </div>
                                </div>
                            </li>
                            <li class="related_post_sec single_post">
                                <span class="date-wrapper">
                                    <span class="date"><span>24</span>January</span>
                                </span>
                                <div class="rel_right">
                                    <h4><a href="single-events.html">Offered in small class sizes with great
                                            emphasis...</a></h4>
                                    <div class="meta">
                                        <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                        <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                    </div>
                                </div>
                            </li>
                            <li class="related_post_sec single_post">
                                <span class="date-wrapper">
                                    <span class="date"><span>24</span>January</span>
                                </span>
                                <div class="rel_right">
                                    <h4><a href="single-events.html">Offered in small class sizes with great
                                            emphasis...</a></h4>
                                    <div class="meta">
                                        <span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
                                        <span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="events-3col.html" class="btn btn-default btn-block commonBtn">More Events</a>
                    </div>
                </div>
                <!-- end list_block -->
            </div>
            <!-- col-sm-4 col-xs-12 -->

        </div>
        <!-- row clearfix -->
    </div>
    <!-- container -->
</div>
<!-- mainContent -->
