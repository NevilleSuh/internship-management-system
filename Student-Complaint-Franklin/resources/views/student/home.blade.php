@extends('student.includes.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-briefcase"></i> Available Internships</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Internships</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-indigo">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-search"></i> Find Your Perfect Internship</h3>
                        </div>
                        <div class="card-body">
                            <form class="search-form">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" class="form-control"
                                                placeholder="Skills, position, or company">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                                <option value="">All Categories</option>
                                                <option value="technology">Technology</option>
                                                <option value="business">Business</option>
                                                <option value="healthcare">Healthcare</option>
                                                <option value="education">Education</option>
                                                <option value="engineering">Engineering</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="btn btn-indigo btn-block">
                                                <i class="fas fa-search"></i> Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Featured Internships in Bamenda</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">


                                @foreach ($posts->slice(0, 6) as $post)

                                    <div class="col-md-4">
                                        <div class="card animate__animated animate__fadeInUp">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="mr-3">
                                                        <img src="https://via.placeholder.com/60" alt="{{$post->institution->name}}"
                                                            class="img-circle elevation-2" style="width: 60px; height: 60px;">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">Software Development Intern</h5>
                                                        <p class="text-muted mb-0">{{$post->institution->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="badge badge-teal mr-1">{{$post->type}}</span>
                                                    <span class="badge badge-success mr-1">{{$post->compensation}}</span>
                                                    {{-- <span class="badge badge-warning">Featured</span> --}}
                                                </div>
                                                <p><i class="fas fa-map-marker-alt mr-1"></i> {{$post->location}}</p>
                                                <p class="text-truncate">Join our team to develop innovative solutions and gain
                                                    hands-on experience with cutting-edge technologies in Bamenda.</p>
                                                <div class="mb-3">
                                                    @foreach ($post->skills as $skill)
                                                        @foreach (explode("\r\n", $skill) as $line)
                                                            <span class="badge bg-light text-dark mr-1">{{ trim($line) }}</span>
                                                        @endforeach
                                                    @endforeach

                                                </div>
                                                <button class="btn btn-outline-teal btn-block" data-toggle="modal"
                                                    data-target="#internshipModal{{ $post->id }}">
                                                    <i class="fas fa-eye"></i> View Details
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-purple">
                        <div class="card-header">
                            <h3 class="card-title">Browse By Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-gradient-indigo animate__animated animate__fadeIn">
                                        <span class="info-box-icon"><i class="fas fa-laptop-code"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Technology</span>
                                            <span class="info-box-number">15 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-green animate__animated animate__fadeIn animate__delay-1s">
                                        <span class="info-box-icon"><i class="fas fa-chart-line"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Business</span>
                                            <span class="info-box-number">8 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-yellow animate__animated animate__fadeIn animate__delay-2s">
                                        <span class="info-box-icon"><i class="fas fa-heartbeat"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Healthcare</span>
                                            <span class="info-box-number">6 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-red animate__animated animate__fadeIn animate__delay-3s">
                                        <span class="info-box-icon"><i class="fas fa-paint-brush"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Arts & Design</span>
                                            <span class="info-box-number">4 Internships</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-primary animate__animated animate__fadeIn animate__delay-1s">
                                        <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Education</span>
                                            <span class="info-box-number">7 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-secondary animate__animated animate__fadeIn animate__delay-2s">
                                        <span class="info-box-icon"><i class="fas fa-gavel"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Legal</span>
                                            <span class="info-box-number">3 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-info animate__animated animate__fadeIn animate__delay-3s">
                                        <span class="info-box-icon"><i class="fas fa-globe"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Marketing</span>
                                            <span class="info-box-number">5 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div
                                        class="info-box bg-gradient-success animate__animated animate__fadeIn animate__delay-4s">
                                        <span class="info-box-icon"><i class="fas fa-cogs"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Engineering</span>
                                            <span class="info-box-number">9 Internships</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-orange">
                        <div class="card-header">
                            <h3 class="card-title">How It Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card bg-light animate__animated animate__zoomIn">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <span class="badge badge-primary" style="font-size: 1.5rem;">1</span>
                                            </div>
                                            <div class="icon mb-3">
                                                <i class="fas fa-search fa-3x text-primary"></i>
                                            </div>
                                            <h4>Search & Discover</h4>
                                            <p>Browse internships in Bamenda filtered by your preferences, skills, and
                                                interests.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card bg-light animate__animated animate__zoomIn animate__delay-1s">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <span class="badge badge-success" style="font-size: 1.5rem;">2</span>
                                            </div>
                                            <div class="icon mb-3">
                                                <i class="fas fa-file-alt fa-3x text-success"></i>
                                            </div>
                                            <h4>Apply with Ease</h4>
                                            <p>Upload your documents and apply to multiple internships with just a few
                                                clicks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card bg-light animate__animated animate__zoomIn animate__delay-2s">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <span class="badge badge-info" style="font-size: 1.5rem;">3</span>
                                            </div>
                                            <div class="icon mb-3">
                                                <i class="fas fa-briefcase fa-3x text-info"></i>
                                            </div>
                                            <h4>Land Your Internship</h4>
                                            <p>Get notified when employers respond and track your application status in
                                                real-time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-teal">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Internships</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-teal btn-sm">View All</a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Company</th>
                                        <th>Location</th>
                                        <th>Type</th>
                                        <th>Posted</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr class="animate__animated animate__fadeIn">
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->institution->name}}</td>
                                            <td>{{$post->location}}</td>
                                            <td><span class="badge badge-teal">{{$post->type}}</span></td>
                                            <td>{{$post->created_at->format('F d, Y')}}</td>
                                            <td>
                                                <button class="btn btn-xs btn-teal" data-toggle="modal"
                                                    data-target="#internshipModal{{ $post->id }}">
                                                    <i class="fas fa-eye"></i> View
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @foreach ($posts as $post)
        {{-- View Internship Modal --}}
        <div class="modal fade" id="internshipModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="internshipModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-teal">
                        <h5 class="modal-title" id="internshipModalLabel">{{ $post->title }} - {{$post->institution->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-2">
                                <img src="https://via.placeholder.com/80" alt="GilloTech" class="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <h4>{{$post->institution->name}}</h4>
                                <p class="text-muted">{{$post->location}}</p>
                                <div>
                                    <span class="badge badge-teal mr-1">{{$post->type}}</span>
                                    <span class="badge badge-success mr-1">{{ $post->compensation }}</span>
                                    {{-- <span class="badge badge-warning">Featured</span> --}}
                                </div>
                            </div>
                        </div>

                        <div class="internship-details">
                            <h5>About the Internship</h5>

                            <ul>
                                @if (!empty($post->descriptions))
                                    @foreach ($post->descriptions as $description)
                                        @foreach (explode("\r\n", $description) as $line)
                                            <li>{{ trim($line) }}</li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <li>No responsibilities listed.</li>
                                @endif
                            </ul>

                            <h5>Responsibilities</h5>
                            <ul>
                                @if (!empty($post->responsibilities))
                                    @foreach ($post->responsibilities as $responsibility)
                                        @foreach (explode("\r\n", $responsibility) as $line)
                                            <li>{{ trim($line) }}</li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <li>No responsibilities listed.</li>
                                @endif
                            </ul>

                            <h5>Requirements</h5>
                            <ul>
                                @if (!empty($post->requirements))
                                    @foreach ($post->requirements as $requirement)
                                        @foreach (explode("\r\n", $requirement) as $line)
                                            <li>{{ trim($line) }}</li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <li>No responsibilities listed.</li>
                                @endif
                            </ul>

                            <h5>Benefits</h5>
                            <ul>
                                @if (!empty($post->benefits))
                                    @foreach ($post->benefits as $benefit)
                                        @foreach (explode("\r\n", $benefit) as $line)
                                            <li>{{ trim($line) }}</li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <li>No responsibilities listed.</li>
                                @endif
                            </ul>

                            <h5>Duration</h5>
                            <p>{{ $post->duration }} </p>

                            <h5>Start Date</h5>
                            <p>{{$post->start->format('F d, Y')}}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-teal" data-toggle="modal" data-target="#applyModal{{ $post->id }}"
                            data-dismiss="modal">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- Application Modal --}}
        <div class="modal fade" id="applyModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-teal">
                        <h5 class="modal-title" id="applyModalLabel">Apply for {{ $post->title }} - {{ $post->institution->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="applicationForm" action="{{ route('apply', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" readonly value="{{ $student->first_name }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" readonly name="last_name" value="{{ $student->last_name }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" readonly name="email" value="{{ $student->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" readonly name="tell" value="{{ $student->tell }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Education Level</label>
                                <select class="form-control" name="education" required>
                                    <option value="">Select Education Level</option>
                                    <option value="primary_school" >Primary School</option>
                                    <option value="secondary_school" >Secondary School</option>
                                    <option value="high_school">High School</option>
                                    <option value="bachelors">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="phd">PhD</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Field of Study</label>
                                        <input type="text" name="field" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-light mt-4 mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Required Documents</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Resume/CV</label>
                                        <div class="custom-file">
                                            <input type="file" name="cv" class="custom-file-input" id="resumeUpload" required>
                                            <label class="custom-file-label" for="resumeUpload">Choose file</label>
                                        </div>
                                        <small class="form-text text-muted">PDF or Word document (Max 2MB)</small>
                                    </div>

                                    <div class="form-group">
                                        <label>Cover Letter</label>
                                        <div class="custom-file">
                                            <input type="file" name="letter" class="custom-file-input" id="coverLetterUpload">
                                            <label class="custom-file-label" for="coverLetterUpload">Choose file</label>
                                        </div>
                                        <small class="form-text text-muted">PDF or Word document (Max 2MB)</small>
                                    </div>

                                    <div class="form-group">
                                        <label>ID Card</label>
                                        <div class="custom-file">
                                            <input type="file" name="id" class="custom-file-input" id="idCardUpload" required>
                                            <label class="custom-file-label" for="idCardUpload">Choose file</label>
                                        </div>
                                        <small class="form-text text-muted">JPG, PNG, or PDF format (Max 1MB)</small>
                                    </div>

                                    <div class="form-group">
                                        <label>Additional Documents (Optional)</label>
                                        <div class="custom-file">
                                            <input type="file" name="additional" class="custom-file-input" id="additionalDocs" multiple>
                                            <label class="custom-file-label" for="additionalDocs">Choose files</label>
                                        </div>
                                        <small class="form-text text-muted">Certificates, portfolios, or other relevant
                                            documents (Max 5MB total)</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Why are you interested in this internship?</label>
                                <textarea class="form-control" name="reason" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Relevant Skills & Experience (Optional)</label>
                                <textarea class="form-control" name="skill" rows="4" required></textarea>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">I confirm that all information provided is
                                    accurate and true</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-teal" id="submitApplication">Submit Application</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    @endforeach





    @if(session('message'))
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Application Submitted!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="my-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h4>Thank You!</h4>
                        <p>Your application has been successfully submitted. You will receive a confirmation email shortly.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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

    <script>

        $(document).ready(function () {
            bsCustomFileInput.init();

            $('.custom-file-input').on('change', function () {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName);
            });
        });


        $(document).ready(function () {
            bsCustomFileInput.init();

            $('#submitApplication').click(function () {
                let isValid = true;
                const requiredFields = $('#applicationForm').find('[required]');

                requiredFields.each(function () {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (isValid) {
                    $('#applyModal').modal('hide');
                    setTimeout(function () {
                        $('#successModal').modal('show');
                    }, 500);

                    $('#applicationForm')[0].reset();
                    $('.custom-file-label').text('Choose file');
                }
            });

            $('.card').hover(function () {
                $(this).addClass('animate__animated animate__pulse');
            }, function () {
                $(this).removeClass('animate__animated animate__pulse');
            });
        });
    </script>
@endsection