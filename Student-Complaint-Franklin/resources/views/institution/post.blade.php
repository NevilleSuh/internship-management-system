@extends('institution.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 animate__animated animate__fadeInLeft"><i class="fas fa-plus-circle text-success"></i>
                        Post New Internship</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right animate__animated animate__fadeInRight">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Internships</a></li>
                        <li class="breadcrumb-item active">Post New</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Introduction Card -->
            <div class="row">
                <div class="col-12">
                    <div class="card bg-gradient-info animate__animated animate__fadeInDown">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-info-circle"></i> Posting Guidelines</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Welcome to the internship posting platform! Please follow these guidelines to create an
                                effective internship listing:</p>
                            <ul>
                                <li>Provide clear and specific information about responsibilities and requirements</li>
                                <li>Be transparent about compensation (paid/unpaid) and duration</li>
                                <li>Include details about the application process and deadlines</li>
                                <li>Specify the location (on-site/remote) and working hours</li>
                                <li>All postings will be reviewed before being published</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Internship Form -->
                <div class="col-md-8">
                    <div class="card card-primary animate__animated animate__fadeInUp">
                        <div class="card-header bg-gradient-primary">
                            <h3 class="card-title"><i class="fas fa-briefcase"></i> Internship Details</h3>
                        </div>
                        <div class="card-body">
                            <form id="internshipForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="position">Position Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="position"
                                                placeholder="e.g., Software Development Intern" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="department">Department <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="department"
                                                placeholder="e.g., Engineering, Marketing" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">Location <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="location"
                                                placeholder="e.g., Bamenda, Up Station" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Internship Type <span class="text-danger">*</span></label>
                                            <select class="form-control" id="type" required>
                                                <option value="">Select Type</option>
                                                <option value="full_time">Full-time</option>
                                                <option value="part_time">Part-time</option>
                                                <option value="flexible">Flexible Hours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="compensation">Compensation <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" id="compensation" required>
                                                <option value="">Select Compensation</option>
                                                <option value="paid">Paid</option>
                                                <option value="unpaid">Unpaid</option>
                                                <option value="stipend">Stipend</option>
                                                <option value="other">Other (Specify)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="compensationDetails" class="row" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="compensationAmount">Compensation Details</label>
                                            <input type="text" class="form-control" id="compensationAmount"
                                                placeholder="e.g., 50,000 FCFA monthly, Transportation allowance">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="startDate">Start Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="startDate" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="duration">Duration <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="duration" min="1" required>
                                                <div class="input-group-append">
                                                    <select class="form-control" id="durationType">
                                                        <option value="weeks">Weeks</option>
                                                        <option value="months" selected>Months</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="applicationDeadline">Application Deadline <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="applicationDeadline" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="positions">Number of Positions <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="positions" min="1" value="1"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category">Category <span class="text-danger">*</span></label>
                                    <select class="form-control" id="category" required>
                                        <option value="">Select Category</option>
                                        <option value="technology">Technology</option>
                                        <option value="business">Business</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="education">Education</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="arts">Arts & Design</option>
                                        <option value="legal">Legal</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" rows="5"
                                        placeholder="Provide a detailed description of the internship..."
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="responsibilities">Responsibilities <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="responsibilities" rows="5"
                                        placeholder="List the key responsibilities..." required></textarea>
                                    <small class="form-text text-muted">Enter each responsibility on a new line</small>
                                </div>

                                <div class="form-group">
                                    <label for="requirements">Requirements <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="requirements" rows="5"
                                        placeholder="List the key requirements..." required></textarea>
                                    <small class="form-text text-muted">Enter each requirement on a new line</small>
                                </div>

                                <div class="form-group">
                                    <label for="benefits">Benefits (Optional)</label>
                                    <textarea class="form-control" id="benefits" rows="3"
                                        placeholder="List the benefits..."></textarea>
                                    <small class="form-text text-muted">Enter each benefit on a new line</small>
                                </div>

                                <div class="form-group">
                                    <label for="skills">Required Skills <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="skills"
                                        placeholder="e.g., Python, Communication, Microsoft Office" required>
                                    <small class="form-text text-muted">Separate skills with commas</small>
                                </div>

                                <div class="form-group">
                                    <label for="applicationInstructions">Application Instructions (Optional)</label>
                                    <textarea class="form-control" id="applicationInstructions" rows="3"
                                        placeholder="Provide specific instructions for applicants..."></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="contactPerson">Contact Person <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactPerson"
                                        placeholder="Name of contact person" required>
                                </div>

                                <div class="form-group">
                                    <label for="contactEmail">Contact Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="contactEmail"
                                        placeholder="Email address for applications" required>
                                </div>

                                <div class="form-group">
                                    <label for="contactPhone">Contact Phone (Optional)</label>
                                    <input type="tel" class="form-control" id="contactPhone" placeholder="Phone number">
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="featuredCheck">
                                        <label class="custom-control-label" for="featuredCheck">Mark as Featured (Additional
                                            fee may apply)</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCheck" required>
                                        <label class="custom-control-label" for="termsCheck">I confirm that all information
                                            provided is accurate and complies with the platform's guidelines</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary">Save as Draft</button>
                            <button type="button" class="btn btn-primary float-right" id="submitInternship">
                                <i class="fas fa-paper-plane"></i> Submit for Review
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <!-- Preview Card -->
                    <div class="card card-success animate__animated animate__fadeInRight">
                        <div class="card-header bg-gradient-success">
                            <h3 class="card-title"><i class="fas fa-eye"></i> Preview</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="{{asset('asset/img/preview.png')}}" alt="Preview" class="img-fluid"
                                    style="max-height: 150px;">
                            </div>
                            <div id="previewContent">
                                <h5 id="previewTitle" class="text-bold">Position Title</h5>
                                <p id="previewCompany" class="text-muted">Your Company Name</p>
                                <div class="mb-2">
                                    <span class="badge badge-info mr-1">Full-time</span>
                                    <span class="badge badge-success">Paid</span>
                                </div>
                                <p><i class="fas fa-map-marker-alt mr-1"></i> <span id="previewLocation">Location</span></p>
                                <p id="previewDescription" class="text-truncate">Internship description will appear here...
                                </p>
                            </div>
                            <div class="alert alert-info mt-3">
                                <i class="fas fa-info-circle"></i> This is how your internship will appear in search
                                results.
                            </div>
                        </div>
                    </div>

                    <!-- Tips Card -->
                    <div class="card card-warning animate__animated animate__fadeInRight" style="animation-delay: 0.2s">
                        <div class="card-header bg-gradient-warning">
                            <h3 class="card-title"><i class="fas fa-lightbulb"></i> Tips for Success</h3>
                        </div>
                        <div class="card-body">
                            <div class="callout callout-warning">
                                <h5>Be Specific</h5>
                                <p>Clear descriptions attract qualified candidates.</p>
                            </div>
                            <div class="callout callout-info">
                                <h5>Highlight Benefits</h5>
                                <p>Mention learning opportunities and perks.</p>
                            </div>
                            <div class="callout callout-success">
                                <h5>Set Clear Expectations</h5>
                                <p>Define hours, duration, and responsibilities.</p>
                            </div>
                            <div class="callout callout-danger">
                                <h5>Avoid Jargon</h5>
                                <p>Use clear language that students understand.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Card -->
                    <div class="card card-danger animate__animated animate__fadeInRight" style="animation-delay: 0.4s">
                        <div class="card-header bg-gradient-danger">
                            <h3 class="card-title"><i class="fas fa-chart-bar"></i> Your Internship Stats</h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Active Internships
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Total Applications
                                    <span class="badge badge-primary badge-pill">27</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Positions Filled
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Average Response Time
                                    <span class="badge badge-primary badge-pill">2 days</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="text-danger">View Detailed Analytics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
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
                    <p>Your internship posting has been submitted for review. You will be notified once it is approved and
                        published.</p>
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: 100%"></div>
                    </div>
                    <p class="mt-2 text-muted">Estimated review time: 24-48 hours</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">View My Internships</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function () {
            // Live preview functionality
            $('#position').on('input', function () {
                $('#previewTitle').text($(this).val() || 'Position Title');
            });

            $('#location').on('input', function () {
                $('#previewLocation').text($(this).val() || 'Location');
            });

            $('#description').on('input', function () {
                $('#previewDescription').text($(this).val() || 'Internship description will appear here...');
            });

            $('#type').on('change', function () {
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
                    $('#compensationDetails').slideDown();
                } else {
                    $('#compensationDetails').slideUp();
                }
            });

            // Form submission
            $('#submitInternship').click(function () {
                // Simple validation
                let isValid = true;
                const requiredFields = $('#internshipForm').find('[required]');

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
                    $('#successModal').modal('show');
                } else {
                    // Scroll to first invalid field
                    $('html, body').animate({
                        scrollTop: $('.is-invalid:first').offset().top - 100
                    }, 500);
                }
            });

            // Add animations to form sections on scroll
            const animateOnScroll = function () {
                const elements = $('.form-group');

                elements.each(function (index) {
                    const element = $(this);
                    const elementPosition = element.offset().top;
                    const windowHeight = $(window).height();
                    const scrollPosition = $(window).scrollTop();

                    if (elementPosition < scrollPosition + windowHeight - 100) {
                        setTimeout(function () {
                            element.addClass('animate__animated animate__fadeInUp');
                        }, index * 50); // Staggered animation
                    }
                });
            };

            // Run animation check on scroll
            $(window).on('scroll', animateOnScroll);
            // Run once on page load
            setTimeout(animateOnScroll, 500);

            // Add pulse animation to submit button
            setInterval(function () {
                $('#submitInternship').toggleClass('animate__animated animate__pulse');
            }, 2000);
        });
    </script>

    <!-- Additional CSS -->
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

        /* Colorful form styling */
        .form-control:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.25);
        }

        .card {
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: 0;
        }

        .callout {
            border-radius: 5px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .callout:hover {
            transform: translateX(5px);
        }

        .badge {
            font-size: 0.85rem;
            padding: 0.4em 0.8em;
            border-radius: 30px;
        }

        /* Animated background for preview */
        .card-success .card-body {
            background: linear-gradient(120deg, #f8f9fa 0%, #e9ecef 100%);
            background-size: 200% 200%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Custom styling for form groups */
        .form-group {
            opacity: 0;
            /* Start invisible for scroll animation */
        }

        .form-group.animate__animated {
            opacity: 1;
        }

        /* Colorful labels */
        label {
            font-weight: 600;
            background: linear-gradient(90deg, #4361ee, #3a0ca3);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }

        /* Custom styling for buttons */
        .btn-primary {
            background: linear-gradient(45deg, #4361ee, #3a0ca3);
            border: none;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #3a0ca3, #4361ee);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: linear-gradient(45deg, #495057, #6c757d);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
        }

        /* Custom styling for checkboxes */
        .custom-control-input:checked~.custom-control-label::before {
            background: linear-gradient(45deg, #4361ee, #3a0ca3);
            border-color: #3a0ca3;
        }
    </style>
@endsection