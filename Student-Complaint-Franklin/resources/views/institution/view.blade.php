@extends('institution.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 animate__animated animate__fadeInLeft"><i class="fas fa-users text-info"></i>
                        Applications Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right animate__animated animate__fadeInRight">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Applications</li>
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
                    <div class="small-box bg-gradient-info animate__animated animate__fadeInUp">
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
                        style="animation-delay: 0.1s">
                        <div class="inner">
                            <h3>15</h3>
                            <p>Pending Review</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-success animate__animated animate__fadeInUp"
                        style="animation-delay: 0.2s">
                        <div class="inner">
                            <h3>8</h3>
                            <p>Shortlisted</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-gradient-danger animate__animated animate__fadeInUp"
                        style="animation-delay: 0.3s">
                        <div class="inner">
                            <h3>4</h3>
                            <p>Rejected</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-times"></i>
                        </div>
                        <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="row">
                <!-- Applications List -->
                <div class="col-md-12">
                    <div class="card card-tabs animate__animated animate__fadeInUp">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="application-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-applications-tab" data-toggle="pill"
                                        href="#all-applications" role="tab" aria-controls="all-applications"
                                        aria-selected="true">All Applications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pending-tab" data-toggle="pill" href="#pending" role="tab"
                                        aria-controls="pending" aria-selected="false">Pending Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="shortlisted-tab" data-toggle="pill" href="#shortlisted"
                                        role="tab" aria-controls="shortlisted" aria-selected="false">Shortlisted</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="accepted-tab" data-toggle="pill" href="#accepted" role="tab"
                                        aria-controls="accepted" aria-selected="false">Accepted</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rejected-tab" data-toggle="pill" href="#rejected" role="tab"
                                        aria-controls="rejected" aria-selected="false">Rejected</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="application-tabContent">
                                <!-- All Applications Tab -->
                                <div class="tab-pane fade show active" id="all-applications" role="tabpanel"
                                    aria-labelledby="all-applications-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">All Applications</h5>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm mr-2" style="width: 200px;">
                                                <input type="text" class="form-control" placeholder="Search applicants">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">All Internships</a>
                                                    <a class="dropdown-item" href="#">Software Development</a>
                                                    <a class="dropdown-item" href="#">Marketing</a>
                                                    <a class="dropdown-item" href="#">Graphic Design</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Custom Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px">#</th>
                                                    <th>Applicant</th>
                                                    <th>Internship</th>
                                                    <th>Applied On</th>
                                                    <th>Status</th>
                                                    <th style="width: 200px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="animate__animated animate__fadeIn">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Nfon Andrew Abang</div>
                                                                <small class="text-muted">BSc Computer Science, University
                                                                    of Buea</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Software Development Intern</div>
                                                        <small class="text-muted">Bamenda, Up Station</small>
                                                    </td>
                                                    <td>May 15, 2025</td>
                                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item text-warning" href="#"><i
                                                                        class="fas fa-star"></i> Shortlist</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="animate__animated animate__fadeIn" style="animation-delay: 0.1s">
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Amina Bi Bongwa</div>
                                                                <small class="text-muted">HND Marketing, HTTTC
                                                                    Bamenda</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Marketing Assistant</div>
                                                        <small class="text-muted">Bamenda, Commercial Avenue</small>
                                                    </td>
                                                    <td>May 16, 2025</td>
                                                    <td><span class="badge badge-success">Shortlisted</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item text-warning disabled" href="#"><i
                                                                        class="fas fa-star"></i> Shortlisted</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="animate__animated animate__fadeIn" style="animation-delay: 0.2s">
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Fonguh Patience Akwi</div>
                                                                <small class="text-muted">B.Eng Electrical Engineering,
                                                                    COLTECH</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Graphic Design Intern</div>
                                                        <small class="text-muted">Bamenda, Nkwen</small>
                                                    </td>
                                                    <td>May 17, 2025</td>
                                                    <td><span class="badge badge-primary">Accepted</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success disabled" href="#"><i
                                                                        class="fas fa-check-circle"></i> Accepted</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-file-contract"></i> Send Contract</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-calendar-alt"></i> Schedule
                                                                    Interview</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="animate__animated animate__fadeIn" style="animation-delay: 0.3s">
                                                    <td>4</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Tabe Emmanuel Fuh</div>
                                                                <small class="text-muted">BSc Accounting, University of
                                                                    Bamenda</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Administrative Assistant</div>
                                                        <small class="text-muted">Bamenda, City Center</small>
                                                    </td>
                                                    <td>May 18, 2025</td>
                                                    <td><span class="badge badge-danger">Rejected</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Reconsider</a>
                                                                <a class="dropdown-item text-warning" href="#"><i
                                                                        class="fas fa-star"></i> Shortlist</a>
                                                                <a class="dropdown-item text-danger disabled" href="#"><i
                                                                        class="fas fa-times-circle"></i> Rejected</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="animate__animated animate__fadeIn" style="animation-delay: 0.4s">
                                                    <td>5</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Ngwa Blaise Fondzenyuy</div>
                                                                <small class="text-muted">BSc Computer Engineering,
                                                                    COLTECH</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Software Development Intern</div>
                                                        <small class="text-muted">Bamenda, Up Station</small>
                                                    </td>
                                                    <td>May 19, 2025</td>
                                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item text-warning" href="#"><i
                                                                        class="fas fa-star"></i> Shortlist</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-muted">Showing 1 to 5 of 27 entries</span>
                                        </div>
                                        <div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <i class="fas fa-chevron-left"></i> Previous
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    Next <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Tab -->
                                <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Pending Applications</h5>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm mr-2" style="width: 200px;">
                                                <input type="text" class="form-control" placeholder="Search applicants">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">All Internships</a>
                                                    <a class="dropdown-item" href="#">Software Development</a>
                                                    <a class="dropdown-item" href="#">Marketing</a>
                                                    <a class="dropdown-item" href="#">Graphic Design</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Custom Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> You have 15 pending applications that
                                        require review.
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px">#</th>
                                                    <th>Applicant</th>
                                                    <th>Internship</th>
                                                    <th>Applied On</th>
                                                    <th>Waiting Time</th>
                                                    <th style="width: 200px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Nfon Andrew Abang</div>
                                                                <small class="text-muted">BSc Computer Science, University
                                                                    of Buea</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Software Development Intern</div>
                                                        <small class="text-muted">Bamenda, Up Station</small>
                                                    </td>
                                                    <td>May 15, 2025</td>
                                                    <td><span class="text-warning">5 days</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item text-warning" href="#"><i
                                                                        class="fas fa-star"></i> Shortlist</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Ngwa Blaise Fondzenyuy</div>
                                                                <small class="text-muted">BSc Computer Engineering,
                                                                    COLTECH</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Software Development Intern</div>
                                                        <small class="text-muted">Bamenda, Up Station</small>
                                                    </td>
                                                    <td>May 19, 2025</td>
                                                    <td><span class="text-success">1 day</span></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item text-warning" href="#"><i
                                                                        class="fas fa-star"></i> Shortlist</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Shortlisted Tab -->
                                <div class="tab-pane fade" id="shortlisted" role="tabpanel"
                                    aria-labelledby="shortlisted-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Shortlisted Applications</h5>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm mr-2" style="width: 200px;">
                                                <input type="text" class="form-control" placeholder="Search applicants">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">All Internships</a>
                                                    <a class="dropdown-item" href="#">Software Development</a>
                                                    <a class="dropdown-item" href="#">Marketing</a>
                                                    <a class="dropdown-item" href="#">Graphic Design</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Custom Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle"></i> You have 8 shortlisted candidates. Consider
                                        scheduling interviews or making final decisions.
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px">#</th>
                                                    <th>Applicant</th>
                                                    <th>Internship</th>
                                                    <th>Shortlisted On</th>
                                                    <th>Match Score</th>
                                                    <th style="width: 200px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Amina Bi Bongwa</div>
                                                                <small class="text-muted">HND Marketing, HTTTC
                                                                    Bamenda</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Marketing Assistant</div>
                                                        <small class="text-muted">Bamenda, Commercial Avenue</small>
                                                    </td>
                                                    <td>May 17, 2025</td>
                                                    <td>
                                                        <div class="progress" style="height: 6px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="text-muted">85% Match</small>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Accept</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                                    data-target="#interviewModal"><i
                                                                        class="fas fa-calendar-alt"></i> Schedule
                                                                    Interview</a>
                                                                <a class="dropdown-item text-danger" href="#"
                                                                    data-toggle="modal" data-target="#rejectModal"><i
                                                                        class="fas fa-times-circle"></i> Reject</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Accepted Tab -->
                                <div class="tab-pane fade" id="accepted" role="tabpanel" aria-labelledby="accepted-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Accepted Applications</h5>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm mr-2" style="width: 200px;">
                                                <input type="text" class="form-control" placeholder="Search applicants">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">All Internships</a>
                                                    <a class="dropdown-item" href="#">Software Development</a>
                                                    <a class="dropdown-item" href="#">Marketing</a>
                                                    <a class="dropdown-item" href="#">Graphic Design</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Custom Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-success">
                                        <i class="fas fa-check-circle"></i> You have 4 accepted applicants. Remember to send
                                        onboarding information.
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px">#</th>
                                                    <th>Applicant</th>
                                                    <th>Internship</th>
                                                    <th>Accepted On</th>
                                                    <th>Start Date</th>
                                                    <th style="width: 200px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Fonguh Patience Akwi</div>
                                                                <small class="text-muted">B.Eng Electrical Engineering,
                                                                    COLTECH</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Graphic Design Intern</div>
                                                        <small class="text-muted">Bamenda, Nkwen</small>
                                                    </td>
                                                    <td>May 18, 2025</td>
                                                    <td>Jun 01, 2025</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-file-contract"></i> Send Contract</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-clipboard-list"></i> Send
                                                                    Onboarding</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-id-card"></i> Request Documents</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Rejected Tab -->
                                <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title">Rejected Applications</h5>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm mr-2" style="width: 200px;">
                                                <input type="text" class="form-control" placeholder="Search applicants">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">All Internships</a>
                                                    <a class="dropdown-item" href="#">Software Development</a>
                                                    <a class="dropdown-item" href="#">Marketing</a>
                                                    <a class="dropdown-item" href="#">Graphic Design</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Custom Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px">#</th>
                                                    <th>Applicant</th>
                                                    <th>Internship</th>
                                                    <th>Rejected On</th>
                                                    <th>Reason</th>
                                                    <th style="width: 200px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant"
                                                                class="img-circle mr-2" style="width: 35px; height: 35px;">
                                                            <div>
                                                                <div class="font-weight-bold">Tabe Emmanuel Fuh</div>
                                                                <small class="text-muted">BSc Accounting, University of
                                                                    Bamenda</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-weight-bold">Administrative Assistant</div>
                                                        <small class="text-muted">Bamenda, City Center</small>
                                                    </td>
                                                    <td>May 19, 2025</td>
                                                    <td>Insufficient experience</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-sm btn-info"
                                                                data-toggle="modal" data-target="#viewApplicationModal">
                                                                <i class="fas fa-eye"></i> View
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-toggle="modal" data-target="#messageModal">
                                                                <i class="fas fa-envelope"></i> Message
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-default dropdown-toggle dropdown-icon"
                                                                data-toggle="dropdown">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <a class="dropdown-item text-success" href="#"
                                                                    data-toggle="modal" data-target="#acceptModal"><i
                                                                        class="fas fa-check-circle"></i> Reconsider</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-briefcase"></i> Suggest
                                                                    Alternative</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-print"></i> Print</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bulk Actions Card -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary animate__animated animate__fadeInUp"
                        style="animation-delay: 0.5s">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-tasks"></i> Bulk Actions</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Internship</label>
                                        <select class="form-control">
                                            <option>All Internships</option>
                                            <option>Software Development Intern</option>
                                            <option>Marketing Assistant</option>
                                            <option>Graphic Design Intern</option>
                                            <option>Administrative Assistant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="form-control">
                                            <option>All Statuses</option>
                                            <option>Pending Review</option>
                                            <option>Shortlisted</option>
                                            <option>Accepted</option>
                                            <option>Rejected</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-cog"></i> Bulk Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Send Message</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-check-circle"></i> Accept
                                        Selected</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-star"></i> Shortlist Selected</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-times-circle"></i> Reject
                                        Selected</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-file-export"></i> Export to Excel</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i> Print Selected</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- View Application Modal -->
    <div class="modal fade" id="viewApplicationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title"><i class="fas fa-user"></i> Application Details</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row no-gutters">
                        <div class="col-md-4 border-right">
                            <div class="p-3">
                                <div class="text-center mb-3">
                                    <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant" class="img-circle"
                                        style="width: 100px; height: 100px;">
                                    <h4 class="mt-2 mb-0">Nfon Andrew Abang</h4>
                                    <p class="text-muted">BSc Computer Science, University of Buea</p>
                                    <span class="badge badge-warning">Pending Review</span>
                                </div>

                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Email</h6>
                                        </div>
                                        <p class="mb-1">andrew.nfon@email.com</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Phone</h6>
                                        </div>
                                        <p class="mb-1">+237 6XX XXX XXX</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Location</h6>
                                        </div>
                                        <p class="mb-1">Buea, SW Region</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Applied For</h6>
                                        </div>
                                        <p class="mb-1">Software Development Intern</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Applied On</h6>
                                        </div>
                                        <p class="mb-1">May 15, 2025</p>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <h6 class="text-muted mb-2">Skills</h6>
                                    <div>
                                        <span class="badge badge-info mr-1 mb-1">Java</span>
                                        <span class="badge badge-info mr-1 mb-1">Python</span>
                                        <span class="badge badge-info mr-1 mb-1">SQL</span>
                                        <span class="badge badge-info mr-1 mb-1">HTML</span>
                                        <span class="badge badge-info mr-1 mb-1">CSS</span>
                                        <span class="badge badge-info mr-1 mb-1">JavaScript</span>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <h6 class="text-muted mb-2">Documents</h6>
                                    <div class="list-group list-group-flush">
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-pdf mr-2 text-danger"></i> Resume/CV
                                            </div>
                                            <span class="badge badge-primary badge-pill"><i
                                                    class="fas fa-download"></i></span>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-word mr-2 text-primary"></i> Cover Letter
                                            </div>
                                            <span class="badge badge-primary badge-pill"><i
                                                    class="fas fa-download"></i></span>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-image mr-2 text-success"></i> ID Card
                                            </div>
                                            <span class="badge badge-primary badge-pill"><i
                                                    class="fas fa-download"></i></span>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-pdf mr-2 text-danger"></i> Academic Transcript
                                            </div>
                                            <span class="badge badge-primary badge-pill"><i
                                                    class="fas fa-download"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-3">
                                <ul class="nav nav-tabs" id="applicationDetailTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="application-tab" data-toggle="tab"
                                            href="#application" role="tab" aria-controls="application"
                                            aria-selected="true">Application</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="notes-tab" data-toggle="tab" href="#notes" role="tab"
                                            aria-controls="notes" aria-selected="false">Notes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                                            aria-controls="messages" aria-selected="false">Messages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab"
                                            aria-controls="timeline" aria-selected="false">Timeline</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="applicationDetailTabContent">
                                    <div class="tab-pane fade show active" id="application" role="tabpanel"
                                        aria-labelledby="application-tab">
                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Why interested in this internship?</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>I am interested in this internship because it aligns perfectly with my
                                                    academic background in Computer Science and my career aspirations in
                                                    software development. I am particularly drawn to your company's
                                                    innovative approach to technology solutions in Bamenda, and I believe
                                                    this opportunity would allow me to apply my theoretical knowledge in a
                                                    practical setting while contributing to meaningful projects.</p>
                                                <p>Having followed your company's growth over the past few years, I'm
                                                    impressed by your commitment to developing local talent and your focus
                                                    on creating solutions that address specific needs in our community. I am
                                                    excited about the possibility of being part of a team that values
                                                    innovation and makes a real impact.</p>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Relevant Experience</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>I have experience with Python, Java, and web development technologies
                                                    (HTML, CSS, JavaScript). I have completed several course projects
                                                    including:</p>
                                                <ul>
                                                    <li>A student management system using Java and MySQL</li>
                                                    <li>An e-commerce website using HTML, CSS, JavaScript, and PHP</li>
                                                    <li>A data analysis project using Python, Pandas, and Matplotlib</li>
                                                </ul>
                                                <p>I also participated in a coding bootcamp where I developed a
                                                    mobile-responsive web application for event management. I am familiar
                                                    with version control systems like Git and have basic knowledge of
                                                    database management with SQL.</p>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Education</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="timeline timeline-inverse">
                                                    <div class="time-label">
                                                        <span class="bg-danger">2022 - Present</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas fa-graduation-cap bg-primary"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">BSc Computer Science</h3>
                                                            <div class="timeline-body">
                                                                University of Buea<br>
                                                                Current GPA: 3.7/4.0<br>
                                                                Expected Graduation: 2026
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-label">
                                                        <span class="bg-success">2016 - 2021</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas fa-school bg-info"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">Secondary Education</h3>
                                                            <div class="timeline-body">
                                                                GBHS Bamenda<br>
                                                                GCE A-Level: 3 A's in Mathematics, Physics, and Computer
                                                                Science
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                            <div class="card-header bg-light">
                                                <h6 class="mb-0">Additional Information</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>I am available to start immediately and can work full-time throughout the
                                                    summer. I have my own laptop and reliable internet connection for any
                                                    remote work requirements. I am also willing to relocate within Bamenda
                                                    if necessary.</p>
                                                <p>I am particularly interested in backend development and database
                                                    management, but I am eager to learn and contribute in any area where I
                                                    can be of value.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Add a note about this applicant..."></textarea>
                                                </div>
                                                <button type="button" class="btn btn-primary">Add Note</button>
                                            </div>
                                        </div>

                                        <div class="timeline timeline-inverse mt-3">
                                            <div class="time-label">
                                                <span class="bg-danger">May 19, 2025</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-comment bg-yellow"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
                                                    <h3 class="timeline-header"><a href="#">Jane Doe</a> added a note</h3>
                                                    <div class="timeline-body">
                                                        Strong technical skills and good academic background. Consider for
                                                        the software development position.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="time-label">
                                                <span class="bg-primary">May 16, 2025</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-comment bg-yellow"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 5 days ago</span>
                                                    <h3 class="timeline-header"><a href="#">John Smith</a> added a note</h3>
                                                    <div class="timeline-body">
                                                        Resume looks promising. Need to verify programming skills during
                                                        interview.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                        <div class="card direct-chat direct-chat-primary">
                                            <div class="card-body">
                                                <div class="direct-chat-messages" style="height: 400px;">
                                                    <div class="direct-chat-msg">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-left">Your Company</span>
                                                            <span class="direct-chat-timestamp float-right">May 16, 2025
                                                                10:30 am</span>
                                                        </div>
                                                        <img class="direct-chat-img" src="{{asset('asset/img/avatar.png')}}"
                                                            alt="Message User Image">
                                                        <div class="direct-chat-text">
                                                            Thank you for your application to the Software Development
                                                            Intern position. We have received your documents and are
                                                            currently reviewing them. We will be in touch soon with next
                                                            steps.
                                                        </div>
                                                    </div>

                                                    <div class="direct-chat-msg right">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-right">Nfon Andrew</span>
                                                            <span class="direct-chat-timestamp float-left">May 16, 2025
                                                                11:15 am</span>
                                                        </div>
                                                        <img class="direct-chat-img" src="{{asset('asset/img/avatar.png')}}"
                                                            alt="Message User Image">
                                                        <div class="direct-chat-text">
                                                            Thank you for confirming receipt of my application. I'm looking
                                                            forward to hearing from you and potentially discussing how I can
                                                            contribute to your team.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <form action="#" method="post">
                                                    <div class="input-group">
                                                        <input type="text" name="message" placeholder="Type Message ..."
                                                            class="form-control">
                                                        <span class="input-group-append">
                                                            <button type="button" class="btn btn-primary">Send</button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                        <div class="timeline timeline-inverse">
                                            <div class="time-label">
                                                <span class="bg-danger">May 19, 2025</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-eye bg-primary"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 10:30 am</span>
                                                    <h3 class="timeline-header">Application viewed by <a href="#">Jane
                                                            Doe</a></h3>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="fas fa-comment bg-yellow"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 11:00 am</span>
                                                    <h3 class="timeline-header"><a href="#">Jane Doe</a> added a note</h3>
                                                </div>
                                            </div>
                                            <div class="time-label">
                                                <span class="bg-primary">May 16, 2025</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-envelope bg-info"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 10:30 am</span>
                                                    <h3 class="timeline-header">Automatic confirmation email sent</h3>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="fas fa-envelope bg-info"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 11:15 am</span>
                                                    <h3 class="timeline-header">Applicant replied to confirmation email</h3>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="fas fa-eye bg-primary"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2:00 pm</span>
                                                    <h3 class="timeline-header">Application viewed by <a href="#">John
                                                            Smith</a></h3>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="fas fa-comment bg-yellow"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2:15 pm</span>
                                                    <h3 class="timeline-header"><a href="#">John Smith</a> added a note</h3>
                                                </div>
                                            </div>
                                            <div class="time-label">
                                                <span class="bg-success">May 15, 2025</span>
                                            </div>
                                            <div>
                                                <i class="fas fa-file bg-warning"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 3:45 pm</span>
                                                    <h3 class="timeline-header">Application submitted</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group mr-auto">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rejectModal"
                            data-dismiss="modal">
                            <i class="fas fa-times-circle"></i> Reject
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fas fa-star"></i> Shortlist
                        </button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#acceptModal"
                            data-dismiss="modal">
                            <i class="fas fa-check-circle"></i> Accept
                        </button>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="fas fa-envelope"></i> Send Message</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="messageRecipient">To</label>
                        <input type="text" class="form-control" id="messageRecipient"
                            value="Nfon Andrew Abang <andrew.nfon@email.com>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="messageSubject">Subject</label>
                        <input type="text" class="form-control" id="messageSubject" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="messageTemplate">Use Template</label>
                        <select class="form-control" id="messageTemplate">
                            <option value="">Select a template</option>
                            <option value="interview">Interview Invitation</option>
                            <option value="additional">Request Additional Information</option>
                            <option value="acceptance">Acceptance Letter</option>
                            <option value="rejection">Rejection Letter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="messageContent">Message</label>
                        <textarea class="form-control" id="messageContent" rows="6"
                            placeholder="Type your message here..."></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ccMe">
                            <label class="custom-control-label" for="ccMe">Send me a copy</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Send Message</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Accept Modal -->
    <div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="fas fa-check-circle"></i> Accept Application</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant" class="img-circle"
                            style="width: 80px; height: 80px;">
                        <h5 class="mt-2">Nfon Andrew Abang</h5>
                        <p class="text-muted">Software Development Intern</p>
                    </div>

                    <div class="alert alert-success">
                        <i class="fas fa-info-circle"></i> You are about to accept this application. The applicant will be
                        notified via email.
                    </div>

                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>

                    <div class="form-group">
                        <label for="acceptanceNotes">Additional Notes (Optional)</label>
                        <textarea class="form-control" id="acceptanceNotes" rows="3"
                            placeholder="Add any specific instructions or information..."></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sendAcceptanceEmail" checked>
                            <label class="custom-control-label" for="sendAcceptanceEmail">Send acceptance email</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sendOnboarding">
                            <label class="custom-control-label" for="sendOnboarding">Send onboarding information</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Confirm Acceptance</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="fas fa-times-circle"></i> Reject Application</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant" class="img-circle"
                            style="width: 80px; height: 80px;">
                        <h5 class="mt-2">Nfon Andrew Abang</h5>
                        <p class="text-muted">Software Development Intern</p>
                    </div>

                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle"></i> You are about to reject this application. The applicant
                        will be notified via email.
                    </div>

                    <div class="form-group">
                        <label for="rejectionReason">Reason for Rejection</label>
                        <select class="form-control" id="rejectionReason">
                            <option value="">Select a reason</option>
                            <option value="qualifications">Insufficient qualifications</option>
                            <option value="experience">Insufficient experience</option>
                            <option value="skills">Skills mismatch</option>
                            <option value="position_filled">Position already filled</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rejectionNotes">Additional Notes (Optional)</label>
                        <textarea class="form-control" id="rejectionNotes" rows="3"
                            placeholder="Add any specific feedback..."></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sendRejectionEmail" checked>
                            <label class="custom-control-label" for="sendRejectionEmail">Send rejection email</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="keepForFuture">
                            <label class="custom-control-label" for="keepForFuture">Keep in talent pool for future
                                opportunities</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Confirm Rejection</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Interview Modal -->
    <div class="modal fade" id="interviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-calendar-alt"></i> Schedule Interview</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="{{asset('asset/img/avatar.png')}}" alt="Applicant" class="img-circle"
                            style="width: 80px; height: 80px;">
                        <h5 class="mt-2">Amina Bi Bongwa</h5>
                        <p class="text-muted">Marketing Assistant</p>
                    </div>

                    <div class="form-group">
                        <label for="interviewType">Interview Type</label>
                        <select class="form-control" id="interviewType">
                            <option value="in_person">In-Person</option>
                            <option value="video">Video Call</option>
                            <option value="phone">Phone Call</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="interviewDate">Date</label>
                        <input type="date" class="form-control" id="interviewDate">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="interviewStartTime">Start Time</label>
                                <input type="time" class="form-control" id="interviewStartTime">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="interviewEndTime">End Time</label>
                                <input type="time" class="form-control" id="interviewEndTime">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="interviewLocation">Location/Link</label>
                        <input type="text" class="form-control" id="interviewLocation"
                            placeholder="Office address or video call link">
                    </div>

                    <div class="form-group">
                        <label for="interviewers">Interviewers</label>
                        <select class="form-control" id="interviewers" multiple>
                            <option value="1">John Smith (HR Manager)</option>
                            <option value="2">Jane Doe (Marketing Director)</option>
                            <option value="3">Robert Johnson (CEO)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="interviewNotes">Notes/Instructions</label>
                        <textarea class="form-control" id="interviewNotes" rows="3"
                            placeholder="Add any specific instructions for the candidate..."></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sendCalendarInvite" checked>
                            <label class="custom-control-label" for="sendCalendarInvite">Send calendar invite</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Schedule Interview</button>
                </div>
            </div>
        </div>
    </div>

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

        /* Badge styling */
        .badge {
            font-size: 0.85rem;
            padding: 0.4em 0.8em;
            border-radius: 30px;
        }

        /* Table styling */
        .table th,
        .table td {
            vertical-align: middle;
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

        /* Direct chat styling */
        .direct-chat-text {
            border-radius: 15px;
        }

        /* Animate table rows on hover */
        .table-hover tbody tr:hover {
            transform: translateX(5px);
            transition: all 0.3s ease;
        }
    </style>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function () {
            // Message template selection
            $('#messageTemplate').change(function () {
                let template = $(this).val();
                let subject = '';
                let content = '';

                switch (template) {
                    case 'interview':
                        subject = 'Interview Invitation - Software Development Intern Position';
                        content = 'Dear Nfon Andrew,\n\nWe are pleased to inform you that we would like to invite you for an interview for the Software Development Intern position at our company. We were impressed with your application and would like to learn more about your skills and experience.\n\nPlease let us know your availability for an interview in the coming week.\n\nBest regards,\nRecruitment Team';
                        break;
                    case 'additional':
                        subject = 'Additional Information Required - Software Development Intern Application';
                        content = 'Dear Nfon Andrew,\n\nThank you for your application for the Software Development Intern position. We are currently reviewing your application and would like to request some additional information to help us better evaluate your candidacy.\n\nPlease provide examples of any programming projects you have completed, along with links to your GitHub repository if available.\n\nBest regards,\nRecruitment Team';
                        break;
                    case 'acceptance':
                        subject = 'Congratulations! Your Application Has Been Accepted';
                        content = 'Dear Nfon Andrew,\n\nWe are pleased to inform you that your application for the Software Development Intern position has been accepted. We were impressed with your qualifications and believe you would be a valuable addition to our team.\n\nWe will be in touch shortly with more details about the next steps, including start date and onboarding information.\n\nCongratulations once again!\n\nBest regards,\nRecruitment Team';
                        break;
                    case 'rejection':
                        subject = 'Update on Your Software Development Intern Application';
                        content = 'Dear Nfon Andrew,\n\nThank you for your interest in the Software Development Intern position and for taking the time to apply.\n\nAfter careful consideration of all applications, we regret to inform you that we have decided to move forward with other candidates whose qualifications more closely match our current needs.\n\nWe appreciate your interest in our company and wish you the best in your future endeavors.\n\nBest regards,\nRecruitment Team';
                        break;
                }

                $('#messageSubject').val(subject);
                $('#messageContent').val(content);
            });

            // Add animations to table rows
            $('tbody tr').each(function (index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
            });
        });
    </script>
@endsection