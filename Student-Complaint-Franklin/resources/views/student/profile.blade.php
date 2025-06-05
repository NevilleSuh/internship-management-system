@extends('student.includes.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 animate__animated animate__fadeIn">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <i class="fas fa-user-circle"></i> My Profile
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-indigo card-outline animate__animated animate__fadeInLeft">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle shadow"
                                    src="{{asset('asset/img/avatar.png')}}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center mt-3">{{$student->first_name}} {{$student->last_name}}</h3>
                            <p class="text-muted text-center">Student</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item animate__animated animate__fadeIn" style="animation-delay: 0.1s">
                                    <b>Applications</b> <a class="float-right">{{$student->applications->count()}}</a>
                                </li>
                                <li class="list-group-item animate__animated animate__fadeIn" style="animation-delay: 0.2s">
                                    <b>Accepted</b> <a class="float-right">{{$student->applications->where('status', 'selected')->count()}}</a>
                                </li>
                                <li class="list-group-item animate__animated animate__fadeIn" style="animation-delay: 0.3s">
                                    <b>Pending</b> <a class="float-right">{{$student->applications->where('status', 'pending')->count()}}</a>
                                </li>
                                <li class="list-group-item animate__animated animate__fadeIn" style="animation-delay: 0.4s">
                                    <b>Rejected</b> <a class="float-right">{{$student->applications->where('status', 'declined')->count()}}</a>
                                </li>
                            </ul>

                            <button class="btn btn-indigo btn-block shadow-sm animate__animated animate__fadeInUp"
                                data-toggle="modal" data-target="#editProfileModal">
                                <i class="fas fa-edit"></i> Edit Profile
                            </button>
                        </div>
                    </div>

                    <div class="card card-indigo animate__animated animate__fadeInLeft animate__delay-1s">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-info-circle mr-1"></i> About Me</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">Buea, SW Region</p>
                            <hr>

                            <strong><i class="fas fa-graduation-cap mr-1"></i> Education</strong>
                            <p class="text-muted">BSc Computer Science (University of Buea)</p>
                            <hr>

                            <strong><i class="fas fa-phone mr-1"></i> Contact</strong>
                            <p class="text-muted">+237 650729916</p>
                            <p class="text-muted">andrew.nfon@email.com</p>
                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                <span class="badge bg-teal mr-1 mb-1">Java</span>
                                <span class="badge bg-teal mr-1 mb-1">Python</span>
                                <span class="badge bg-teal mr-1 mb-1">SQL</span>
                                <span class="badge bg-teal mr-1 mb-1">HTML</span>
                                <span class="badge bg-teal mr-1 mb-1">CSS</span>
                                <span class="badge bg-teal mb-1">JavaScript</span>
                            </p>
                        </div>
                    </div>

                    <div class="card card-indigo animate__animated animate__fadeInLeft animate__delay-2s">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-file-alt mr-1"></i> My Documents</h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeIn"
                                    style="animation-delay: 0.1s">
                                    <div>
                                        <i class="fas fa-file-pdf text-danger mr-2"></i> Resume/CV
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-xs btn-info mr-1">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <button class="btn btn-xs btn-warning" data-toggle="modal"
                                            data-target="#updateDocumentModal" data-document="resume">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeIn"
                                    style="animation-delay: 0.2s">
                                    <div>
                                        <i class="fas fa-file-image text-primary mr-2"></i> ID Card
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-xs btn-info mr-1">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <button class="btn btn-xs btn-warning" data-toggle="modal"
                                            data-target="#updateDocumentModal" data-document="id">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeIn"
                                    style="animation-delay: 0.3s">
                                    <div>
                                        <i class="fas fa-file-alt text-success mr-2"></i> Academic Transcript
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-xs btn-info mr-1">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <button class="btn btn-xs btn-warning" data-toggle="modal"
                                            data-target="#updateDocumentModal" data-document="transcript">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-indigo shadow-sm" data-toggle="modal"
                                data-target="#addDocumentModal">
                                <i class="fas fa-plus"></i> Add Document
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card card-indigo card-outline animate__animated animate__fadeInRight">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-history mr-1"></i> Application History</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-indigo">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-indigo">
                                        <tr>
                                            <th>Position</th>
                                            <th>Company</th>
                                            <th>Applied On</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($student->applications as $application)
                                            <tr class="animate__animated animate__fadeIn" style="animation-delay: 0.1s">
                                                <td>{{$application->post->title}}</td>
                                                <td>{{ $application->post->institution->name }}</td>
                                                <td>{{$application->created_at->format('F d, Y')}}</td>
                                                <td>

                                                    @php
                                                        $badgeClass = '';
                                                        switch ($application->status) {
                                                            case 'pending':
                                                                $badgeClass = 'bg-warning';
                                                                break;
                                                            case 'selected':
                                                                $badgeClass = 'bg-success';
                                                                break;
                                                            case 'declined':
                                                                $badgeClass = 'bg-danger';
                                                                break;
                                                            default:
                                                                $badgeClass = 'bg-secondary';
                                                        }
                                                    @endphp

                                                    <span class="badge {{ $badgeClass }}">{{$application->status}}</span>

                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-indigo" data-toggle="modal"
                                                        data-target="#viewApplicationModal{{ $application->id }}">
                                                        <i class="fas fa-eye"></i> View
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-indigo card-outline animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-bell mr-1"></i> Recent Activity</h3>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="time-label">
                                    <span class="bg-indigo">May 15, 2025</span>
                                </div>
                                <div class="animate__animated animate__fadeIn" style="animation-delay: 0.1s">
                                    <i class="fas fa-paper-plane bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> 10:30 AM</span>
                                        <h3 class="timeline-header">You applied for <a href="#">Software Dev Intern</a> at
                                            GilloTech</h3>
                                        <div class="timeline-body">
                                            Your application has been submitted and is pending review.
                                        </div>
                                    </div>
                                </div>

                                <div class="time-label">
                                    <span class="bg-success">May 12, 2025</span>
                                </div>
                                <div class="animate__animated animate__fadeIn" style="animation-delay: 0.2s">
                                    <i class="fas fa-check-circle bg-green"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> 2:15 PM</span>
                                        <h3 class="timeline-header">Your application for <a href="#">IT Support Intern</a>
                                            was accepted</h3>
                                        <div class="timeline-body">
                                            Congratulations! H4BF has accepted your application. Please check your email for
                                            further instructions.
                                        </div>
                                    </div>
                                </div>

                                <div class="time-label">
                                    <span class="bg-info">May 10, 2025</span>
                                </div>
                                <div class="animate__animated animate__fadeIn" style="animation-delay: 0.3s">
                                    <i class="fas fa-paper-plane bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> 9:45 AM</span>
                                        <h3 class="timeline-header">You applied for <a href="#">IT Support Intern</a> at
                                            H4BF</h3>
                                        <div class="timeline-body">
                                            Your application has been submitted and is pending review.
                                        </div>
                                    </div>
                                </div>

                                <div class="time-label">
                                    <span class="bg-danger">May 5, 2025</span>
                                </div>
                                <div class="animate__animated animate__fadeIn" style="animation-delay: 0.4s">
                                    <i class="fas fa-times-circle bg-red"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> 11:20 AM</span>
                                        <h3 class="timeline-header">Your application for <a href="#">Web Intern</a> was
                                            rejected</h3>
                                        <div class="timeline-body">
                                            Unfortunately, Uncle Luke Digitals has decided not to proceed with your
                                            application at this time.
                                        </div>
                                    </div>
                                </div>

                                <div class="time-label">
                                    <span class="bg-info">April 28, 2025</span>
                                </div>
                                <div class="animate__animated animate__fadeIn" style="animation-delay: 0.5s">
                                    <i class="fas fa-paper-plane bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> 3:30 PM</span>
                                        <h3 class="timeline-header">You applied for <a href="#">Web Intern</a> at Uncle Luke
                                            Digitals</h3>
                                        <div class="timeline-body">
                                            Your application has been submitted and is pending review.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-clock bg-gray"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @foreach ($student->applications as $application)
        {{-- View application Modal --}}
        <div class="modal fade" id="viewApplicationModal{{ $application->id }}" tabindex="-1" role="dialog"
            aria-labelledby="viewApplicationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-indigo">
                        <h5 class="modal-title" id="viewApplicationModalLabel">Application Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <img src="https://via.placeholder.com/80" alt="{{ $application->post->institution->name }}" class="img-fluid rounded shadow">
                            </div>
                            <div class="col-md-10">
                                <h4>{{ $application->post->title }} - {{$application->post->institution->name}}</h4>
                                <p class="text-muted">{{$application->post->location}}</p>
                                <div>
                                    <span class="badge badge-info">{{$application->post->type}}</span>
                                    <span class="badge badge-success">{{ $application->post->compensation }}</span>
                                    <span class="badge {{ $badgeClass }}">{{ $application->status }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-outline card-indigo mb-4 animate__animated animate__fadeIn">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-info-circle mr-1"></i> Application Summary</h3>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-3">Applied On</dt>
                                    <dd class="col-sm-9">{{$application->created_at->format('F d, Y')}}</dd>

                                    <dt class="col-sm-3">Status</dt>
                                    <dd class="col-sm-9"><span class="badge {{ $badgeClass }}">{{$application->status}}</span></dd>

                                    <dt class="col-sm-3">Last Updated</dt>
                                    <dd class="col-sm-9">{{$application->updated_at->format('F d, Y')}}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="card card-outline card-indigo mb-4 animate__animated animate__fadeIn animate__delay-1s">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-file-alt mr-1"></i> Submitted Information</h3>
                            </div>
                            <div class="card-body">
                                <h5>Why are you interested in this internship?</h5>
                                <p>{{ $application->reason }}</p>

                                <h5>Relevant Skills & Experience</h5>
                                <p>{{$application->skill}}</p>
                            </div>
                        </div>

                        <div class="card card-outline card-indigo animate__animated animate__fadeIn animate__delay-2s">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-file-download mr-1"></i> Submitted Documents</h3>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-file-pdf text-danger mr-2"></i> Resume/CV
                                        </div>
                                        <a href="{{ asset('storage/'.$application->cv) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-file-word text-primary mr-2"></i> Cover Letter
                                        </div>
                                        <a href="{{ asset('storage/'.$application->letter) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-file-image text-success mr-2"></i> ID Card
                                        </div>
                                        <a href="{{ asset('storage/'.$application->id_card) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    </li>
                                    @if ($application->additional)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-file-image text-success mr-2"></i> Additional Document
                                            </div>
                                            <a href="{{ asset('storage/'.$application->additional) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">
                            <i class="fas fa-times"></i> Withdraw Application
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="profileForm">
                    <div class="modal-header bg-indigo">
                        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <img class="profile-user-img img-fluid img-circle shadow"
                                src="{{asset('asset/img/avatar.png')}}" alt="User profile picture">
                            <div class="mt-2">
                                <button type="button" class="btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-camera"></i> Change Photo
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Nfon" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Andrew Abang" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="andrew.nfon@email.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" value="+237 650729916" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" value="Buea, SW Region" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Education Level</label>
                                    <select class="form-control" required>
                                        <option>High School</option>
                                        <option selected>Bachelor's Degree</option>
                                        <option>Master's Degree</option>
                                        <option>PhD</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Field of Study</label>
                                    <input type="text" class="form-control" value="Computer Science" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Institution</label>
                            <input type="text" class="form-control" value="University of Buea" required>
                        </div>

                        <div class="form-group">
                            <label>Skills (comma-separated)</label>
                            <input type="text" class="form-control" value="Java, Python, SQL, HTML, CSS, JavaScript"
                                required>
                        </div>

                        <div class="form-group">
                            <label>Bio</label>
                            <textarea class="form-control"
                                rows="3">Computer Science student with a passion for software development and web technologies. Looking for opportunities to gain practical experience and grow professionally.</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-indigo" id="saveProfileChanges">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateDocumentModal" tabindex="-1" role="dialog" aria-labelledby="updateDocumentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="updateDocumentModalLabel">Update Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Document Type</label>
                            <input type="text" class="form-control" id="documentType" readonly>
                        </div>
                        <div class="form-group">
                            <label>Upload New Version</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="documentFile" required>
                                <label class="custom-file-label" for="documentFile">Choose file</label>
                            </div>
                            <small class="form-text text-muted">Accepted formats: PDF, DOC, DOCX, JPG, PNG (Max 5MB)</small>
                        </div>
                        <div class="form-group">
                            <label>Description (Optional)</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Add a note about this document..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning">
                        <i class="fas fa-sync-alt"></i> Update Document
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addDocumentModal" tabindex="-1" role="dialog" aria-labelledby="addDocumentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-indigo">
                    <h5 class="modal-title" id="addDocumentModalLabel">Add New Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Document Type</label>
                            <select class="form-control" required>
                                <option value="">Select Document Type</option>
                                <option value="certificate">Certificate</option>
                                <option value="recommendation">Recommendation Letter</option>
                                <option value="portfolio">Portfolio</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Document Title</label>
                            <input type="text" class="form-control" placeholder="Enter document title" required>
                        </div>
                        <div class="form-group">
                            <label>Upload File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="newDocumentFile" required>
                                <label class="custom-file-label" for="newDocumentFile">Choose file</label>
                            </div>
                            <small class="form-text text-muted">Accepted formats: PDF, DOC, DOCX, JPG, PNG (Max 5MB)</small>
                        </div>
                        <div class="form-group">
                            <label>Description (Optional)</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Add a description for this document..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-indigo">
                        <i class="fas fa-plus"></i> Add Document
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();

            $('#saveProfileChanges').click(function () {
                let isValid = true;
                const requiredFields = $('#profileForm').find('[required]');

                requiredFields.each(function () {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (isValid) {
                    $('#editProfileModal').modal('hide');
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        body: 'Your profile has been updated successfully.',
                        autohide: true,
                        delay: 3000
                    });
                }
            });

            $('#updateDocumentModal').on('show.bs.modal', function (event) {
                const button = $(event.relatedTarget);
                const documentType = button.data('document');
                const modal = $(this);

                let documentTitle = '';
                switch (documentType) {
                    case 'resume':
                        documentTitle = 'Resume/CV';
                        break;
                    case 'id':
                        documentTitle = 'ID Card';
                        break;
                    case 'transcript':
                        documentTitle = 'Academic Transcript';
                        break;
                    default:
                        documentTitle = 'Document';
                }

                modal.find('.modal-title').text('Update ' + documentTitle);
                modal.find('#documentType').val(documentTitle);
            });

            $('.card').hover(function () {
                $(this).addClass('animate__animated animate__pulse');
            }, function () {
                $(this).removeClass('animate__animated animate__pulse');
            });
        });
    </script>
@endsection