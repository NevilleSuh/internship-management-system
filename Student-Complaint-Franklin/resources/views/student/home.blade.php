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
            <!-- Search and Filter Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
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
                                            <button type="submit" class="btn btn-info btn-block">
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

            <!-- Featured Internships Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Featured Internships in Bamenda</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Internship Card 1 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="mr-3">
                                                    <img src="https://via.placeholder.com/60" alt="GilloTech"
                                                        class="img-circle elevation-2" style="width: 60px; height: 60px;">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Software Development Intern</h5>
                                                    <p class="text-muted mb-0">GilloTech</p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <span class="badge badge-info mr-1">Full-time</span>
                                                <span class="badge badge-success mr-1">Paid</span>
                                                <span class="badge badge-warning">Featured</span>
                                            </div>
                                            <p><i class="fas fa-map-marker-alt mr-1"></i> Bamenda, Up Station</p>
                                            <p class="text-truncate">Join our team to develop innovative solutions and gain
                                                hands-on experience with cutting-edge technologies in Bamenda.</p>
                                            <div class="mb-3">
                                                <span class="badge bg-light text-dark mr-1">Python</span>
                                                <span class="badge bg-light text-dark mr-1">JavaScript</span>
                                                <span class="badge bg-light text-dark">Web Development</span>
                                            </div>
                                            <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Internship Card 2 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="mr-3">
                                                    <img src="https://via.placeholder.com/60" alt="H4BF"
                                                        class="img-circle elevation-2" style="width: 60px; height: 60px;">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">IT Support Intern</h5>
                                                    <p class="text-muted mb-0">H4BF</p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <span class="badge badge-info mr-1">Part-time</span>
                                                <span class="badge badge-success mr-1">Paid</span>
                                            </div>
                                            <p><i class="fas fa-map-marker-alt mr-1"></i> Bamenda, Commercial Avenue</p>
                                            <p class="text-truncate">Provide technical support and troubleshooting for our
                                                organization's IT infrastructure and users.</p>
                                            <div class="mb-3">
                                                <span class="badge bg-light text-dark mr-1">Networking</span>
                                                <span class="badge bg-light text-dark mr-1">Hardware</span>
                                                <span class="badge bg-light text-dark">Customer Service</span>
                                            </div>
                                            <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Internship Card 3 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="mr-3">
                                                    <img src="https://via.placeholder.com/60" alt="Uncle Luke Digitals"
                                                        class="img-circle elevation-2" style="width: 60px; height: 60px;">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Web Development Intern</h5>
                                                    <p class="text-muted mb-0">Uncle Luke Digitals</p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <span class="badge badge-info mr-1">Full-time</span>
                                                <span class="badge badge-secondary mr-1">Unpaid</span>
                                            </div>
                                            <p><i class="fas fa-map-marker-alt mr-1"></i> Bamenda, Nkwen</p>
                                            <p class="text-truncate">Create responsive websites and web applications for our
                                                clients in the Bamenda region.</p>
                                            <div class="mb-3">
                                                <span class="badge bg-light text-dark mr-1">HTML/CSS</span>
                                                <span class="badge bg-light text-dark mr-1">JavaScript</span>
                                                <span class="badge bg-light text-dark">PHP</span>
                                            </div>
                                            <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Browse By Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-info">
                                        <span class="info-box-icon"><i class="fas fa-laptop-code"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Technology</span>
                                            <span class="info-box-number">15 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-success">
                                        <span class="info-box-icon"><i class="fas fa-chart-line"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Business</span>
                                            <span class="info-box-number">8 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-warning">
                                        <span class="info-box-icon"><i class="fas fa-heartbeat"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Healthcare</span>
                                            <span class="info-box-number">6 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-danger">
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
                                    <div class="info-box bg-primary">
                                        <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Education</span>
                                            <span class="info-box-number">7 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-secondary">
                                        <span class="info-box-icon"><i class="fas fa-gavel"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Legal</span>
                                            <span class="info-box-number">3 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-info">
                                        <span class="info-box-icon"><i class="fas fa-globe"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Marketing</span>
                                            <span class="info-box-number">5 Internships</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="info-box bg-success">
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

            <!-- How It Works Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="card-title">How It Works</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card bg-light">
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
                                    <div class="card bg-light">
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
                                    <div class="card bg-light">
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

            <!-- Recent Internships Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Internships</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-primary btn-sm">View All</a>
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
                                    <tr>
                                        <td>Marketing Assistant</td>
                                        <td>Bamenda Digital Solutions</td>
                                        <td>Bamenda, Commercial Avenue</td>
                                        <td><span class="badge badge-info">Part-time</span></td>
                                        <td>2 days ago</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Accounting Intern</td>
                                        <td>NW Finance Ltd</td>
                                        <td>Bamenda, Up Station</td>
                                        <td><span class="badge badge-info">Full-time</span></td>
                                        <td>3 days ago</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Graphic Design Intern</td>
                                        <td>Creative Hub Bamenda</td>
                                        <td>Bamenda, Nkwen</td>
                                        <td><span class="badge badge-info">Part-time</span></td>
                                        <td>5 days ago</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Administrative Assistant</td>
                                        <td>Bamenda City Council</td>
                                        <td>Bamenda, City Center</td>
                                        <td><span class="badge badge-info">Full-time</span></td>
                                        <td>1 week ago</td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal"
                                                data-target="#internshipModal">
                                                <i class="fas fa-eye"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Internship Details Modal -->
    <div class="modal fade" id="internshipModal" tabindex="-1" role="dialog" aria-labelledby="internshipModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="internshipModalLabel">Software Development Intern - GilloTech</h5>
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
                            <h4>GilloTech</h4>
                            <p class="text-muted">Bamenda, Up Station</p>
                            <div>
                                <span class="badge badge-info mr-1">Full-time</span>
                                <span class="badge badge-success mr-1">Paid</span>
                                <span class="badge badge-warning">Featured</span>
                            </div>
                        </div>
                    </div>

                    <div class="internship-details">
                        <h5>About the Internship</h5>
                        <p>GilloTech is seeking a Software Development Intern to join our dynamic team in Bamenda. This
                            internship offers a unique opportunity to work on real-world projects alongside experienced
                            developers in the Bamenda tech ecosystem.</p>

                        <h5>Responsibilities</h5>
                        <ul>
                            <li>Assist in designing, developing, and testing software applications</li>
                            <li>Collaborate with cross-functional teams to define, design, and ship new features</li>
                            <li>Identify and resolve performance bottlenecks and bugs</li>
                            <li>Participate in code reviews and contribute to team discussions</li>
                            <li>Learn from experienced engineers and receive mentorship</li>
                        </ul>

                        <h5>Requirements</h5>
                        <ul>
                            <li>Currently pursuing a degree in Computer Science, Software Engineering, or related field</li>
                            <li>Strong programming skills in one or more of: Python, JavaScript, PHP</li>
                            <li>Basic understanding of web technologies (HTML, CSS, JavaScript)</li>
                            <li>Ability to work collaboratively in a team environment</li>
                            <li>Strong problem-solving and analytical skills</li>
                            <li>Fluency in English; knowledge of French is a plus</li>
                        </ul>

                        <h5>Benefits</h5>
                        <ul>
                            <li>Monthly stipend</li>
                            <li>Transportation allowance</li>
                            <li>Flexible working hours</li>
                            <li>Networking opportunities within the Bamenda tech community</li>
                            <li>Potential for full-time employment after internship</li>
                        </ul>

                        <h5>Duration</h5>
                        <p>3 months (with possibility of extension)</p>

                        <h5>Start Date</h5>
                        <p>Immediate</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyModal"
                        data-dismiss="modal">Apply Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="applyModalLabel">Apply for Software Development Intern - GilloTech</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Education Level</label>
                            <select class="form-control" required>
                                <option value="">Select Education Level</option>
                                <option value="high_school">High School</option>
                                <option value="bachelors">Bachelor's Degree</option>
                                <option value="masters">Master's Degree</option>
                                <option value="phd">PhD</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institution</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Field of Study</label>
                                    <input type="text" class="form-control" required>
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
                                        <input type="file" class="custom-file-input" id="resumeUpload" required>
                                        <label class="custom-file-label" for="resumeUpload">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">PDF or Word document (Max 2MB)</small>
                                </div>

                                <div class="form-group">
                                    <label>Cover Letter</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="coverLetterUpload">
                                        <label class="custom-file-label" for="coverLetterUpload">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">PDF or Word document (Max 2MB)</small>
                                </div>

                                <div class="form-group">
                                    <label>ID Card</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="idCardUpload" required>
                                        <label class="custom-file-label" for="idCardUpload">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">JPG, PNG, or PDF format (Max 1MB)</small>
                                </div>

                                <div class="form-group">
                                    <label>Additional Documents (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="additionalDocs" multiple>
                                        <label class="custom-file-label" for="additionalDocs">Choose files</label>
                                    </div>
                                    <small class="form-text text-muted">Certificates, portfolios, or other relevant
                                        documents (Max 5MB total)</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Why are you interested in this internship?</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Relevant Skills & Experience</label>
                            <textarea class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">I confirm that all information provided is
                                accurate and true</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submitApplication">Submit Application</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
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

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function () {
            // Initialize custom file input
            bsCustomFileInput.init();

            // Handle application submission
            $('#submitApplication').click(function () {
                // Simple validation
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
                    // Show success message
                    $('#applyModal').modal('hide');
                    setTimeout(function () {
                        $('#successModal').modal('show');
                    }, 500);

                    // Reset form
                    $('#applicationForm')[0].reset();
                    $('.custom-file-label').text('Choose file');
                }
            });

            // Animation for cards
            $('.card').addClass('animate__animated animate__fadeIn');
        });
    </script>
@endsection