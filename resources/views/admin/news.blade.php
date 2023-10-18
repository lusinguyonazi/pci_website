@extends('admin.layouts.app')
@section('content')
    <!-- Page content -->

    <div id="app-content">
        <div class="app-content-area">
            <!-- Container fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-xl-9 col-md-12 col-sm-12 col-12 ">

                        <!-- Content -->
                        <div class="">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mb-8" id="intro">
                                        <h1 class="mb-0 h2 ">News</h1>
                                        <p class="mb-0 text-muted">To be displayed in Website.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <!-- basic-forms -->
                            <form action="">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <!-- Card -->
                                        <div class="mb-6 ">
                                            <h3 class="h4 mb-3" id="input">Title</h3>
                                            <div class="card">

                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-design-tab">

                                                        <!-- Input -->
                                                        <div class="mb-3">

                                                            <input type="text" id="textInput" class="form-control"
                                                                placeholder="Kufunguliwa Dirisha la Usajili">
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade " id="pills-basic-forms-html"
                                                        role="tabpanel" aria-labelledby="pills-basic-forms-html-tab">



                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="textarea">Description</h3>
                                            <div class="card">

                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms-textarea">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-textarea-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-textarea-design-tab">

                                                        <!-- Textarea -->
                                                        <div class="mb-3">

                                                            <textarea class="form-control" id="textarea-input" rows="5"></textarea>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-textarea-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-textarea-html-tab">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="search">Date</h3>
                                            <div class="card">

                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms-search">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-search-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-search-design-tab">

                                                        <!-- Search input -->
                                                        <div class="mb-3">
                                                            <label for="search-input" class="form-label">Search</label>
                                                            <input class="form-control" type="date" id="search-input"
                                                                value="Search components">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-search-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-search-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Search input --&gt;</span>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit
                                    form</button>
                            </div>
                            </form>
                            <!-- basic-forms -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection









</body>

</html>
