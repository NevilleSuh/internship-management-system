@extends('institution.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 animate__animated animate__fadeInLeft"><i class="fas fa-briefcase text-purple"></i>
                        Internship Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right animate__animated animate__fadeInRight">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Internships</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Dashboard Cards -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-primary animate__animated animate__fadeInUp">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Active Internships</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success animate__animated animate__fadeInUp"
                        style="animation-delay: 0.1s">
                        <div class="inner">
                            <h3>27</h3>
                            <p>Total Applications</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-warning animate__animated animate__fadeInUp"
                        style="animation-delay: 0.2s">
                        <div class="inner">
                            <h3>5</h3>
                            <p>Pending Reviews</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-danger animate__animated animate__fadeInUp"
                        style="animation-delay: 0.3s">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Positions Filled</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="row">
                <!-- Internship List -->
                <div class="col-md-8">
                    <div class="card card-tabs animate__animated animate__fadeInLeft">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="internship-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="internship-active-tab" data-toggle="pill"
                                        href="#internship-active" role="tab" aria-controls="internship-active"
                                        aria-selected="true">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="internship-pending-tab" data-toggle="pill"
                                        href="#internship-pending" role="tab" aria-controls="internship-pending"
                                        aria-selected="false">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="internship-expired-tab" data-toggle="pill"
                                        href="#internship-expired" role="tab" aria-controls="internship-expired"
                                        aria-selected="false">Expired</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="internship-draft-tab" data-toggle="pill"
                                        href="#internship-draft" role="tab" aria-controls="internship-draft"
                                        aria-selected="false">Drafts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="internship-tabContent">
                                <!-- Active Internships Tab -->
                                <div class="tab-pane fade show active" id="internship-active" role="tabpanel"
                                    aria-labelledby="internship-active-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Active Internships</h5>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="internship-list">
                                        <!-- Internship Item 1 -->

                                        @foreach($posts as $post)
                                            <div class="card mb-3 internship-item animate__animated animate__fadeIn">
                                                <div class="card-body p-0">
                                                    <div class="d-flex position-relative">
                                                        <div class="internship-status bg-success"></div>
                                                        <div class="p-3 flex-grow-1">
                                                            <div class="d-flex justify-content-between align-items-start">
                                                                <div>
                                                                    <h5 class="mb-1">{{$post->title}}</h5>
                                                                    <p class="text-muted mb-1"><i
                                                                            class="fas fa-map-marker-alt"></i>{{$post->location}}</p>
                                                                    <div>
                                                                        <span class="badge badge-info mr-1">{{$post->type}}</span>
                                                                        <span class="badge badge-success mr-1">{{$post->compensation}}</span>
                                                                        {{-- <span class="badge badge-warning">Featured</span> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <span class="text-muted">Posted: {{$post->created_at}}</span><br>
                                                                    <span class="text-success">{{ $post->applications->count() }} Applications</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-light p-2">
                                                        <div class="btn-group btn-group-sm">
                                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#viewApplicationsModal{{$post->id}}">
                                                                <i class="fas fa-users"></i> Applications
                                                            </button>
                                                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#editInternshipModal">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </button> --}}
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </div>
                                                        <span class="float-right">
                                                            <span class="badge bg-primary">Expires: {{$post->deadline}}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>


                                </div>



                                <!-- Pending Internships Tab -->
                                <div class="tab-pane fade" id="internship-pending" role="tabpanel"
                                    aria-labelledby="internship-pending-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Pending Approval</h5>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="internship-list">
                                        <!-- Pending Internship Item -->
                                        <div class="card mb-3 internship-item">
                                            <div class="card-body p-0">
                                                <div class="d-flex position-relative">
                                                    <div class="internship-status bg-warning"></div>
                                                    <div class="p-3 flex-grow-1">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h5 class="mb-1">Administrative Assistant</h5>
                                                                <p class="text-muted mb-1"><i
                                                                        class="fas fa-map-marker-alt"></i> Bamenda, City
                                                                    Center</p>
                                                                <div>
                                                                    <span class="badge badge-info mr-1">Full-time</span>
                                                                    <span class="badge badge-success mr-1">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <span class="text-muted">Submitted: May 20, 2025</span><br>
                                                                <span class="text-warning">Under Review</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-light p-2">
                                                    <div class="btn-group btn-group-sm">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#editInternshipModal">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                    <span class="float-right">
                                                        <span class="badge bg-warning">Est. Review: 24-48 hours</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Expired Internships Tab -->
                                <div class="tab-pane fade" id="internship-expired" role="tabpanel"
                                    aria-labelledby="internship-expired-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Expired Internships</h5>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="internship-list">
                                        <!-- Expired Internship Item -->
                                        <div class="card mb-3 internship-item">
                                            <div class="card-body p-0">
                                                <div class="d-flex position-relative">
                                                    <div class="internship-status bg-secondary"></div>
                                                    <div class="p-3 flex-grow-1">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h5 class="mb-1">IT Support Intern</h5>
                                                                <p class="text-muted mb-1"><i
                                                                        class="fas fa-map-marker-alt"></i> Bamenda,
                                                                    Commercial Avenue</p>
                                                                <div>
                                                                    <span class="badge badge-info mr-1">Part-time</span>
                                                                    <span class="badge badge-success mr-1">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <span class="text-muted">Posted: Apr 10, 2025</span><br>
                                                                <span class="text-secondary">Expired: May 10, 2025</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-light p-2">
                                                    <div class="btn-group btn-group-sm">
                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target="#viewApplicationsModal">
                                                            <i class="fas fa-users"></i> Applications (15)
                                                        </button>
                                                        <button type="button" class="btn btn-success">
                                                            <i class="fas fa-sync"></i> Repost
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                    <span class="float-right">
                                                        <span class="badge bg-secondary">Expired</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Draft Internships Tab -->
                                <div class="tab-pane fade" id="internship-draft" role="tabpanel"
                                    aria-labelledby="internship-draft-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Draft Internships</h5>
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="internship-list">
                                        <!-- Draft Internship Item -->
                                        <div class="card mb-3 internship-item">
                                            <div class="card-body p-0">
                                                <div class="d-flex position-relative">
                                                    <div class="internship-status bg-info"></div>
                                                    <div class="p-3 flex-grow-1">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h5 class="mb-1">Finance Intern</h5>
                                                                <p class="text-muted mb-1"><i
                                                                        class="fas fa-map-marker-alt"></i> Bamenda, Up
                                                                    Station</p>
                                                                <div>
                                                                    <span class="badge badge-info mr-1">Full-time</span>
                                                                    <span class="badge badge-success mr-1">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <span class="text-muted">Last Edited: May 18,
                                                                    2025</span><br>
                                                                <span class="text-info">Draft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-light p-2">
                                                    <div class="btn-group btn-group-sm">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#editInternshipModal">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>
                                                        <button type="button" class="btn btn-success">
                                                            <i class="fas fa-paper-plane"></i> Submit
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </div>
                                                    <span class="float-right">
                                                        <span class="badge bg-info">Draft</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <!-- Quick Actions Card -->
                    <div class="card card-primary animate__animated animate__fadeInRight">
                        <div class="card-header bg-gradient-purple">
                            <h3 class="card-title"><i class="fas fa-bolt"></i> Quick Actions</h3>
                        </div>
                        <div class="card-body">
                            <button type="button"
                                class="btn btn-lg btn-block btn-gradient-primary animate__animated animate__pulse animate__infinite"
                                id="createInternshipBtn" data-toggle="modal" data-target="#createInternshipModal">
                                <i class="fas fa-plus-circle"></i> Create New Internship
                            </button>
                            <div class="mt-4">
                                <div class="list-group">
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-users text-primary mr-2"></i> Review Applications
                                        </div>
                                        <span class="badge badge-primary badge-pill">27</span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-bell text-warning mr-2"></i> Pending Approvals
                                        </div>
                                        <span class="badge badge-warning badge-pill">1</span>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-chart-line text-success mr-2"></i> View Analytics
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-cog text-secondary mr-2"></i> Settings
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity Card -->
                    <div class="card card-success animate__animated animate__fadeInRight" style="animation-delay: 0.2s">
                        <div class="card-header bg-gradient-teal">
                            <h3 class="card-title"><i class="fas fa-history"></i> Recent Activity</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="timeline timeline-inverse p-3">
                                <div class="time-label">
                                    <span class="bg-danger">Today</span>
                                </div>
                                <div>
                                    <i class="fas fa-user bg-primary"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 2 hours ago</span>
                                        <h3 class="timeline-header">New application for <a href="#">Software Development
                                                Intern</a></h3>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-check bg-success"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 5 hours ago</span>
                                        <h3 class="timeline-header">Your internship <a href="#">Marketing Assistant</a> was
                                            approved</h3>
                                    </div>
                                </div>
                                <div class="time-label">
                                    <span class="bg-warning">Yesterday</span>
                                </div>
                                <div>
                                    <i class="fas fa-edit bg-info"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 1 day ago</span>
                                        <h3 class="timeline-header">You created a draft for <a href="#">Finance Intern</a>
                                        </h3>
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-paper-plane bg-primary"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 1 day ago</span>
                                        <h3 class="timeline-header">You submitted <a href="#">Administrative Assistant</a>
                                            for review</h3>
                                    </div>
                                </div>
                                <div>
                                    <i class="far fa-clock bg-gray"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="text-muted">View All Activity</a>
                        </div>
                    </div>

                    <!-- Tips Card -->
                    <div class="card card-warning animate__animated animate__fadeInRight" style="animation-delay: 0.4s">
                        <div class="card-header bg-gradient-orange">
                            <h3 class="card-title"><i class="fas fa-lightbulb"></i> Tips & Resources</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="carouselTips" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselTips" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselTips" data-slide-to="1"></li>
                                    <li data-target="#carouselTips" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="p-4">
                                            <h5 class="text-warning"><i class="fas fa-star mr-2"></i>Writing Great
                                                Descriptions</h5>
                                            <p>Clear, detailed descriptions attract more qualified candidates. Include
                                                specific responsibilities and requirements.</p>
                                            <a href="#" class="btn btn-sm btn-warning">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            <h5 class="text-info"><i class="fas fa-chart-line mr-2"></i>Boost Your
                                                Visibility</h5>
                                            <p>Featured internships receive 3x more applications. Consider upgrading your
                                                listings for better results.</p>
                                            <a href="#" class="btn btn-sm btn-info">Upgrade Now</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="p-4">
                                            <h5 class="text-success"><i class="fas fa-check-circle mr-2"></i>Screening
                                                Applicants</h5>
                                            <p>Use our built-in screening tools to quickly identify the best candidates for
                                                your internships.</p>
                                            <a href="#" class="btn btn-sm btn-success">View Tools</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Create Internship Modal -->
    <div class="modal fade" id="createInternshipModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Create New Internship</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Stepper -->
                            <div class="bs-stepper" id="internshipStepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#basic-info">
                                        <button type="button" class="step-trigger" role="tab" id="basic-info-trigger">
                                            <span class="bs-stepper-circle bg-primary">1</span>
                                            <span class="bs-stepper-label">Basic Info</span>
                                        </button>
                                    </div>


                                </div>


                                <form action="{{route('perform.post')}}" method="POST">
                                    @csrf
                                    <div class="bs-stepper-content">
                                        <!-- Basic Info Step -->
                                        <div id="basic-info" class="content" role="tabpanel"
                                            aria-labelledby="basic-info-trigger">
                                            <div class="form-group">
                                                <label for="position-title">Position Title <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" id="position-title"
                                                    placeholder="e.g., Software Development Intern" required>
                                            </div>

                                            <div class="row">
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="department">Department <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="department"
                                                            placeholder="e.g., Engineering, Marketing" required>
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="location">Location <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="location" class="form-control" id="location"
                                                            placeholder="e.g., Bamenda, Up Station" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="internship-type">Internship Type <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="type" id="internship-type" required>
                                                            <option value="">Select Type</option>
                                                            <option value="full_time">Full-time</option>
                                                            <option value="part_time">Part-time</option>
                                                            <option value="flexible">Flexible Hours</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="category">Category <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" id="category" name="category" required>
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="compensation">Compensation <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="compensation" id="compensation" required>
                                                            <option value="">Select Compensation</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="unpaid">Unpaid</option>
                                                            <option value="stipend">Stipend</option>
                                                            <option value="other">Other (Specify)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="positions">Number of Positions <span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" name="number" class="form-control" id="positions" min="1"
                                                            value="1" required>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div id="compensation-details" class="form-group" style="display: none;">
                                                <label for="compensation-amount">Compensation Details</label>
                                                <input type="text" class="form-control" id="compensation-amount"
                                                    placeholder="e.g., 50,000 FCFA monthly, Transportation allowance">
                                            </div> --}}

                                        </div>

                                        <!-- Details Step -->

                                        <div class="line"></div>
                                        <div class="step" data-target="#details">
                                            <button type="button" class="step-trigger" role="tab" id="details-trigger">
                                                <span class="bs-stepper-circle bg-primary">2</span>
                                                <span class="bs-stepper-label">Details</span>
                                            </button>
                                        </div>
                                        <div id="details" class="content" role="tabpanel" aria-labelledby="details-trigger">
                                            <div class="form-group">
                                                <label for="description">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="descriptions[]" id="description" rows="4"
                                                    placeholder="Provide a detailed description of the internship..."
                                                    required></textarea>
                                                    <small class="form-text text-muted">Enter each Description on a new
                                                        line</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="responsibilities">Responsibilities <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" name="responsibilities[]" id="responsibilities" rows="4"
                                                    placeholder="List the key responsibilities..." required></textarea>
                                                <small class="form-text text-muted">Enter each responsibility on a new
                                                    line</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="benefits">Benefits (Optional)</label>
                                                <textarea class="form-control" name="benefits[]" id="benefits" rows="3"
                                                    placeholder="List the benefits..."></textarea>
                                                <small class="form-text text-muted">Enter each benefit on a new line</small>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="start-date">Start Date <span
                                                                class="text-danger">*</span></label>
                                                        <input type="date" name="start" class="form-control" id="start-date" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="duration">Duration <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input type="number" name="i" class="form-control" id="duration" min="1"
                                                                required>
                                                            <div class="input-group-append">
                                                                <select class="form-control" name="j" id="duration-type">
                                                                    <option value="weeks">Weeks</option>
                                                                    <option value="months" selected>Months</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="application-deadline">Application Deadline <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="deadline" class="form-control" id="application-deadline" required>
                                            </div>


                                        </div>

                                        <!-- Requirements Step -->
                                        <div class="line"></div>
                                        <div class="step" data-target="#requirements">
                                            <button type="button" class="step-trigger" role="tab" id="requirements-trigger">
                                                <span class="bs-stepper-circle bg-primary">3</span>
                                                <span class="bs-stepper-label">Requirements</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>

                                        <div id="requirements" class="content" role="tabpanel"
                                            aria-labelledby="requirements-trigger">
                                            <div class="form-group">
                                                <label for="requirements-text">Requirements <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" name="requirements[]" id="requirements-text" rows="4"
                                                    placeholder="List the key requirements..." required></textarea>
                                                <small class="form-text text-muted">Enter each requirement on a new line</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="skills">Required Skills <span class="text-danger">*</span></label>
                                                <input type="text" name="skills[]" class="form-control" id="skills"
                                                    placeholder="e.g., Python, Communication, Microsoft Office" required>
                                                <small class="form-text text-muted">Separate skills with commas</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="application-instructions">Application Instructions
                                                    (Optional)</label>
                                                <textarea class="form-control" name="instruction[]" id="application-instructions" rows="3"
                                                    placeholder="Provide specific instructions for applicants..."></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="contact-person">Contact Person <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="person" class="form-control" id="contact-person"
                                                            placeholder="Name of contact person" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="contact-email">Contact Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" name="email" class="form-control" id="contact-email"
                                                            placeholder="Email address for applications" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="contact-phone">Contact Phone (Optional)</label>
                                                <input type="tel" name="phone" class="form-control" id="contact-phone"
                                                    placeholder="Phone number">
                                            </div>

                                        </div>

                                        <!-- Review Step -->
                                        <div id="review" class="content" role="tabpanel" aria-labelledby="review-trigger">
                                            <div class="alert alert-info">
                                                <i class="fas fa-info-circle"></i> Please review your internship details before
                                                submitting.
                                            </div>


                                            <div class="form-group mt-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="featured-check" required>
                                                    <label class="custom-control-label" for="featured-check">Mark as Featured
                                                        (Additional fee may apply)</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="terms-check"
                                                        required>
                                                    <label class="custom-control-label" for="terms-check">I confirm that all
                                                        information provided is accurate and complies with the platform's
                                                        guidelines</label>
                                                </div>
                                            </div>


                                            <div class="float-right">

                                                <button type="submit" class="btn btn-primary" id="submit-internship-btn">Submit
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Tips Sidebar -->
                            <div class="card bg-light">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0"><i class="fas fa-lightbulb text-warning"></i> Tips for This Step</h5>
                                </div>
                                <div class="card-body">
                                    <div id="basic-info-tips">
                                        <div class="callout callout-info">
                                            <h6>Position Title</h6>
                                            <p>Be specific and clear. Use titles that applicants are likely to search for.
                                            </p>
                                        </div>
                                        <div class="callout callout-info">
                                            <h6>Location</h6>
                                            <p>Include neighborhood or area for better visibility in location-based
                                                searches.</p>
                                        </div>
                                    </div>

                                    <div id="details-tips" style="display: none;">
                                        <div class="callout callout-info">
                                            <h6>Description</h6>
                                            <p>Provide a comprehensive overview of the internship and your organization.</p>
                                        </div>
                                        <div class="callout callout-info">
                                            <h6>Responsibilities</h6>
                                            <p>Be specific about day-to-day tasks and projects the intern will work on.</p>
                                        </div>
                                    </div>

                                    <div id="requirements-tips" style="display: none;">
                                        <div class="callout callout-info">
                                            <h6>Requirements</h6>
                                            <p>List both required and preferred qualifications to attract the right
                                                candidates.</p>
                                        </div>
                                        <div class="callout callout-info">
                                            <h6>Skills</h6>
                                            <p>Include both technical and soft skills relevant to the position.</p>
                                        </div>
                                    </div>

                                    <div id="review-tips" style="display: none;">
                                        <div class="callout callout-warning">
                                            <h6>Final Check</h6>
                                            <p>Review all information carefully before submitting. Ensure all required
                                                fields are complete and accurate.</p>
                                        </div>
                                        <div class="callout callout-info">
                                            <h6>Featured Listings</h6>
                                            <p>Featured internships appear at the top of search results and receive 3x more
                                                applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Preview Card -->
                            <div class="card mt-3 d-none d-lg-block">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0"><i class="fas fa-eye text-primary"></i> Live Preview</h5>
                                </div>
                                <div class="card-body">
                                    <div class="internship-preview">
                                        <h5 id="preview-title" class="text-bold">Position Title</h5>
                                        <p id="preview-company" class="text-muted">Your Company Name</p>
                                        <div class="mb-2">
                                            <span class="badge badge-info mr-1">Full-time</span>
                                            <span class="badge badge-success">Paid</span>
                                        </div>
                                        <p><i class="fas fa-map-marker-alt mr-1"></i> <span
                                                id="preview-location-text">Location</span></p>
                                        <p id="preview-description-text" class="text-truncate">Internship description will
                                            appear here...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach($posts as $post)
        <!-- View Applications Modal -->
        <div class="modal fade" id="viewApplicationsModal{{$post->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title"><i class="fas fa-users"></i> Applications: Software Development Intern</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="row no-gutters">
                            <div class="col-md-4 border-right">
                                <div class="list-group list-group-flush" id="applicant-list">

                                   @foreach ($post->applications as $key => $application)
                                     <a href="#" class="list-group-item list-group-item-action {{$key == 0 ? 'active': '' }}" data-toggle="list"
                                         data-target="#applicant{{ $application->id }}">

                            

                                         @php
                                            $i = $application->id   
                                         @endphp
                                         <div class="d-flex w-100 justify-content-between">
                                             <h6 class="mb-1">{{$application->student->first_name}}  {{$application->student->last_name}}</h6>
                                             <small>{{$application->created_at->format('F d, Y')}}</small>
                                         </div>
                                         <p class="mb-1">{{$application->field}}</p>
                                         <small><i class="fas fa-star text-warning"></i> Highly Qualified</small>
                                     </a>
                                   @endforeach

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id="applicant-tabContent">


                                    @foreach ($post->applications as $key => $application)
                                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="applicant{{ $application->id }}" role="tabpanel">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                            class="img-circle mr-3" style="width: 60px; height: 60px;">
                                                        <div>
                                                            <h5 class="mb-0">{{$application->student->first_name}} {{$application->student->last_name}}</h5>
                                                            <p class="text-muted mb-0">{{$application->post->location}}</p>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <span class="badge badge-info">Qualified</span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <p><strong>Email:</strong>{{ $application->student->email }}</p>
                                                            <p><strong>Phone:</strong> {{$application->student->tell}}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong>Education:</strong> {{$application->education}}</p>
                                                            <p><strong>Applied:</strong> {{$application->created_at->format('F d, Y')}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="card mb-3">
                                                        <div class="card-header bg-light">
                                                            <h6 class="mb-0">Skills</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="badge badge-info mr-1">Python</span>
                                                            <span class="badge badge-info mr-1">SQL</span>
                                                            <span class="badge badge-info mr-1">HTML</span>
                                                            <span class="badge badge-info mr-1">CSS</span>
                                                            <span class="badge badge-info">JavaScript</span>
                                                        </div>
                                                    </div>

                                                    <div class="card mb-3">
                                                        <div class="card-header bg-light">
                                                            <h6 class="mb-0">Why interested in this internship?</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>{{$application->reason}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="card mb-3">
                                                        <div class="card-header bg-light">
                                                            <h6 class="mb-0">Relevant Experience</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>{{$application->skill}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="card mb-3">
                                                        <div class="card-header bg-light">
                                                            <h6 class="mb-0">Documents</h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <ul class="list-group list-group-flush">
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <i class="fas fa-file-pdf mr-2"></i> Resume/CV
                                                                    </div>
                                                                    <a href="{{ asset('storage/'.$application->cv) }}" class="btn btn-sm btn-info">
                                                                        <i class="fas fa-download"></i> Download
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <i class="fas fa-file-word mr-2"></i> Cover Letter
                                                                    </div>
                                                                    <a href="{{ asset('storage/'.$application->letter) }}" class="btn btn-sm btn-info">
                                                                        <i class="fas fa-download"></i> Download
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <i class="fas fa-file-image mr-2"></i> ID Card
                                                                    </div>
                                                                    <a href="{{ asset('storage/'.$application->id_card) }}" class="btn btn-sm btn-info">
                                                                        <i class="fas fa-download"></i> Download
                                                                    </a>
                                                                </li>
                                                                @if ($application->additional)
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                        <div>
                                                                            <i class="fas fa-file-image mr-2"></i> Additional Document
                                                                        </div>
                                                                        <a href="{{ asset('storage/'.$application->additional) }}" class="btn btn-sm btn-info">
                                                                            <i class="fas fa-download"></i> Download
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                </ul>
                                                        </div>
                                                    </div>

                                                    <div class="text-right">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                                    data-target="#rejectModal{{$application->id}}">
                                                                    <i class="fas fa-users"></i> Reject
                                                            </button>
                                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                                    data-target="#acceptModal{{$application->id}}">
                                                                    <i class="fas fa-users"></i> Accept
                                                            </button>
                                                            {{-- <button type="button" class="btn btn-warning">Shortlist</button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Export All Applications</button>
                    </div>
                </div>
            </div>
        </div>


        @foreach ($post->applications as $application)
            {{-- Delete Modal --}}
            <div class="modal fade" id="acceptModal{{ $application->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title">Accepting Application</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#">
                            <div class="modal-body text-center">
                                <div class="my-4 animate__animated animate__bounceIn">
                                    <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                                </div>
                                <h4>Accept Intern</h4>
                                <p>{{$application->student->first_name}} {{$application->student->last_name}}</p>

                                <textarea class="form-control" name="message" cols="4" required placeholder="Example: Get to us at the Office"></textarea>
                                {{-- <div class="progress mt-3">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
                                </div> --}}
                                {{-- <p class="mt-2 text-muted">Estimated review time: 24-48 hours</p> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach



                <!-- Success Modal -->
    @if(session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Internship Posted Successfully!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="my-4 animate__animated animate__bounceIn">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h4>Thank You!</h4>
                        <p>Your internship posting has been submitted for review. You will be notified once it is approved and published.</p>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mt-2 text-muted">Estimated review time: 24-48 hours</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-success" data-dismiss="modal">View My Internships</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#successModal').modal('show'); // Show the modal on page load
            });
        </script>
    @endif


    <!-- Custom CSS -->
    <style>
        /* Custom animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Colorful styling */
        .bg-gradient-primary {
            background: linear-gradient(45deg, #4361ee, #3a0ca3) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(45deg, #2ecc71, #27ae60) !important;
        }

        .bg-gradient-warning {
            background: linear-gradient(45deg, #f39c12, #e67e22) !important;
        }

        .bg-gradient-danger {
            background: linear-gradient(45deg, #e74c3c, #c0392b) !important;
        }

        .bg-gradient-info {
            background: linear-gradient(45deg, #3498db, #2980b9) !important;
        }

        .bg-gradient-purple {
            background: linear-gradient(45deg, #9b59b6, #8e44ad) !important;
        }

        .bg-gradient-teal {
            background: linear-gradient(45deg, #1abc9c, #16a085) !important;
        }

        .bg-gradient-orange {
            background: linear-gradient(45deg, #f39c12, #d35400) !important;
        }

        /* Button gradients */
        .btn-gradient-primary {
            background: linear-gradient(45deg, #4361ee, #3a0ca3);
            border: none;
            color: white;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(45deg, #3a0ca3, #4361ee);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
            color: white;
        }

        /* Card styling */
        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: 0;
            padding: 15px 20px;
        }

        /* Internship list styling */
        .internship-item {
            transition: all 0.3s ease;
            overflow: hidden;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
        }

        .internship-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .internship-status {
            width: 5px;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* Badge styling */
        .badge {
            font-size: 0.85rem;
            padding: 0.4em 0.8em;
            border-radius: 30px;
        }

        /* Stepper styling */
        .bs-stepper .line {
            min-height: 2px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .bs-stepper-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .bs-stepper-label {
            font-weight: 600;
            margin-top: 0.5rem;
        }

        /* Tabs styling */
        .nav-tabs .nav-link {
            border: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-weight: 600;
            padding: 12px 20px;
            color: #495057;
        }

        .nav-tabs .nav-link.active {
            color: #4361ee;
            background-color: #fff;
            border-bottom: 3px solid #4361ee;
        }

        /* Timeline styling */
        .timeline-item {
            border-radius: 8px;
        }

        /* Carousel styling */
        .carousel-item {
            min-height: 200px;
        }

        /* Callout styling */
        .callout {
            border-radius: 5px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .callout:hover {
            transform: translateX(5px);
        }

        /* Applicant list styling */
        #applicant-list .list-group-item.active {
            background-color: #f8f9fa;
            color: #212529;
            border-color: rgba(0, 0, 0, 0.125);
            border-left: 4px solid #4361ee;
        }

        /* Small box styling */
        .small-box {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .small-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .small-box .icon {
            transition: all 0.3s ease;
            font-size: 70px;
            padding-top: 5px;
        }

        .small-box:hover .icon {
            transform: scale(1.1);
        }
    </style>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function () {
            // Initialize BS Stepper
            var stepper = new Stepper(document.querySelector('#internshipStepper'), {
                linear: false,
                animation: true
            });

            // Handle next step buttons
            $('.next-step').click(function () {
                stepper.next();
                updateTips();
            });

            // Handle previous step buttons
            $('.prev-step').click(function () {
                stepper.previous();
                updateTips();
            });

            // Update tips based on current step
            function updateTips() {
                $('#basic-info-tips, #details-tips, #requirements-tips, #review-tips').hide();

                if ($('#basic-info').hasClass('active')) {
                    $('#basic-info-tips').show();
                } else if ($('#details').hasClass('active')) {
                    $('#details-tips').show();
                } else if ($('#requirements').hasClass('active')) {
                    $('#requirements-tips').show();
                } else if ($('#review').hasClass('active')) {
                    $('#review-tips').show();
                    updateReviewContent();
                }
            }

            // Update review content
            function updateReviewContent() {
                // Basic info
                $('#review-title').text($('#position-title').val() || 'Position Title');
                $('#review-department').text($('#department').val() || 'Not specified');
                $('#review-location').text($('#location').val() || 'Not specified');
                $('#review-type').text($('#internship-type option:selected').text() || 'Not specified');
                $('#review-category').text($('#category option:selected').text() || 'Not specified');
                $('#review-compensation').text($('#compensation option:selected').text() || 'Not specified');
                $('#review-positions').text($('#positions').val() || '1');

                // Details
                $('#review-description').text($('#description').val() || 'No description provided.');

                // Parse responsibilities
                var responsibilities = $('#responsibilities').val().split('\n').filter(item => item.trim() !== '');
                var responsibilitiesList = '';
                responsibilities.forEach(function (item) {
                    responsibilitiesList += '<li>' + item + '</li>';
                });
                $('#review-responsibilities').html(responsibilitiesList || '<li>No responsibilities specified.</li>');

                // Parse benefits
                var benefits = $('#benefits').val().split('\n').filter(item => item.trim() !== '');
                var benefitsList = '';
                benefits.forEach(function (item) {
                    benefitsList += '<li>' + item + '</li>';
                });
                $('#review-benefits-list').html(benefitsList || '<li>No benefits specified.</li>');

                // Dates and duration
                var startDate = $('#start-date').val() ? new Date($('#start-date').val()).toLocaleDateString() : 'Not specified';
                $('#review-start-date').text(startDate);

                var duration = $('#duration').val() ? $('#duration').val() + ' ' + $('#duration-type option:selected').text() : 'Not specified';
                $('#review-duration').text(duration);

                var deadline = $('#application-deadline').val() ? new Date($('#application-deadline').val()).toLocaleDateString() : 'Not specified';
                $('#review-deadline').text(deadline);

                // Requirements
                var requirements = $('#requirements-text').val().split('\n').filter(item => item.trim() !== '');
                var requirementsList = '';
                requirements.forEach(function (item) {
                    requirementsList += '<li>' + item + '</li>';
                });
                $('#review-requirements-list').html(requirementsList || '<li>No requirements specified.</li>');

                // Skills
                $('#review-skills').text($('#skills').val() || 'No skills specified.');

                // Contact
                $('#review-contact').text($('#contact-person').val() || 'Not specified');
                $('#review-email').text($('#contact-email').val() || 'Not specified');
                $('#review-phone').text($('#contact-phone').val() || 'Not specified');
            }

            // Live preview updates
            $('#position-title').on('input', function () {
                $('#preview-title').text($(this).val() || 'Position Title');
            });

            $('#location').on('input', function () {
                $('#preview-location-text').text($(this).val() || 'Location');
            });

            $('#description').on('input', function () {
                $('#preview-description-text').text($(this).val() || 'Internship description will appear here...');
            });

            $('#internship-type').on('change', function () {
                let badgeText = '';
                switch ($(this).val()) {
                    case 'full_time':
                        badgeText = 'Full-time';
                        break;
                    case 'part_time':
                        badgeText = 'Part-time';
                        break;
                    case 'flexible':
                        badgeText = 'Flexible';
                        break;
                    default:
                        badgeText = 'Full-time';
                }
                $('.badge-info').text(badgeText);
            });

            $('#compensation').on('change', function () {
                let badgeText = '';
                switch ($(this).val()) {
                    case 'paid':
                        badgeText = 'Paid';
                        $('.badge-success').removeClass('badge-secondary').addClass('badge-success');
                        break;
                    case 'unpaid':
                        badgeText = 'Unpaid';
                        $('.badge-success').removeClass('badge-success').addClass('badge-secondary');
                        break;
                    case 'stipend':
                        badgeText = 'Stipend';
                        $('.badge-success').removeClass('badge-secondary').addClass('badge-success');
                        break;
                    case 'other':
                        badgeText = 'Other';
                        $('.badge-success').removeClass('badge-secondary').addClass('badge-success');
                        break;
                    default:
                        badgeText = 'Paid';
                        $('.badge-success').removeClass('badge-secondary').addClass('badge-success');
                }
                $('.badge-success').text(badgeText);

                // Show/hide compensation details
                if ($(this).val() === 'paid' || $(this).val() === 'stipend' || $(this).val() === 'other') {
                    $('#compensation-details').slideDown();
                } else {
                    $('#compensation-details').slideUp();
                }
            });

            // Submit internship
            $('#submit-internship-btn').click(function () {
                // Simple validation
                let isValid = true;

                if (!$('#terms-check').prop('checked')) {
                    isValid = false;
                    alert('Please confirm that all information is accurate by checking the confirmation box.');
                }

                if (isValid) {
                    // Hide modal
                    $('#createInternshipModal').modal('hide');

                    // Show success message
                    setTimeout(function () {
                        $('#successModal').modal('show');
                    }, 500);
                }
            });

            // Save as draft
            $('#save-draft-btn').click(function () {
                // Hide modal
                $('#createInternshipModal').modal('hide');

                // Show toast notification
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Draft Saved',
                    body: 'Your internship has been saved as a draft.',
                    autohide: true,
                    delay: 3000
                });
            });

            // Add pulse animation to create button
            setInterval(function () {
                $('#createInternshipBtn').toggleClass('animate__pulse');
            }, 2000);

            // Add animations to internship items
            $('.internship-item').each(function (index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
            });
        });
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection