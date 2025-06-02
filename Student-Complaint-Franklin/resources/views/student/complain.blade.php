@extends('student.includes.layout')

@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><img src="../asset/img/complaint.png" width="35"> Submit Complaint</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('show.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Submit Complaint</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-info complaint-form-card">
                        <div class="card-header">
                            <h5><img src="../asset/img/edit.png" width="30"> Complaint Form</h5>
                        </div>
                        <div class="card-body">
                            <form id="complaintForm" method="POST" action="{{ route('create.complain') }}" enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="row">
                                    <div class="col-md-6 animate__animated animate__fadeInLeft">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" class="form-control" value="NEVILLE SUH"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate__animated animate__fadeInRight">
                                        <div class="form-group">
                                            <label>Matricule</label>
                                            <input type="text" name="matricule" class="form-control" value="UBa22PB000" readonly>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-6 animate__animated animate__fadeInLeft">
                                        <div class="form-group">
                                            <label>Year</label>
                                            <select class="form-control" name="year" id="year">
                                                <option value="">Select Year</option>
                                                @foreach ($years as $year)
                                                    <option value="{{ $year->id }}">{{ $year->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate__animated animate__fadeInRight">
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" name="semester" id="semester">
                                                <option value="">Select Semester</option>
                                                <option value="first">First</option>
                                                <option value="second">Second</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group animate__animated animate__fadeInUp">
                                    <label>Department</label>
                                    <select name="department" class="form-control" id="department">
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{$department->code}} {{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group animate__animated animate__fadeInUp">
                                    <label>Course</label>
                                    <select name="course" class="form-control" id="course">
                                        <option value="">Select Course</option>
                                    </select>
                                </div>

                                <div class="form-group animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="ca">CA</option>
                                        <option value="exam">Examination</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                                    <label>Academic Year <span class="text-danger">*</span></label>
                                    <select name="academic_year" class="form-control" required>
                                        <option value="">Select Academic year</option>
                                        <option value="2024/2025">2024/2025</option>
                                        <option value="2025/2026">2025/2026</option>
                                        <option value="2026/2027">2026/2027</option>
                                        <option value="2027/2028">2027/2028</option>
                                        <option value="2028/2029">2028/2029</option>
                                        <option value="2029/2030">2029/2030</option>
                                    </select>
                                </div>

                                <div class="form-group animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                                    <label>Subject <span class="text-danger">*</span></label>
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Brief title of your complaint" required>
                                </div>


                                <div class="form-group animate__animated animate__fadeInUp" style="animation-delay: 0.8s">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control" rows="6"
                                        placeholder="Provide detailed information about your complaint..."
                                        required></textarea>
                                    <small class="text-muted">Please be specific and include all relevant details such as
                                        dates, course codes, and people involved.</small>
                                </div>

                                <div class="form-group animate__animated animate__fadeInUp" style="animation-delay: 1s">
                                    <label>Supporting Documents</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="documentUpload" name="documents[]"
                                            multiple>
                                        <label class="custom-file-label" for="documentUpload">Choose file(s)</label>
                                    </div>
                                    <small class="text-muted">Upload any relevant documents (PDF, DOC, JPG, PNG). Maximum
                                        5MB per file.</small>
                                </div>

                                <div id="filePreviewArea" class="mt-3" style="display: none;">
                                    <h6>Selected Files:</h6>
                                    <div id="fileList" class="list-group"></div>
                                </div>

                                <div class="form-check animate__animated animate__fadeInUp" style="animation-delay: 1.2s">
                                    <input type="checkbox" class="form-check-input" id="confirmCheck" required>
                                    <label class="form-check-label" for="confirmCheck">I confirm that all information
                                        provided is accurate and true.</label>
                                </div>

                                <div class="mt-4 text-center animate__animated animate__fadeInUp"
                                    style="animation-delay: 1.4s">
                                    <button type="submit" class="btn btn-info btn-lg submit-btn">
                                        <i class="fa fa-paper-plane"></i> Submit Complaint
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-info animate__animated animate__fadeInRight">
                        <div class="card-header">
                            <h5><img src="{{asset('asset/img/profile.png')}}" width="30"> Guidelines</h5>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="time-label">
                                    <span class="bg-info">Complaint Process</span>
                                </div>

                                <div>
                                    <i class="fas fa-edit bg-blue"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">Submit Complaint</h3>
                                        <div class="timeline-body">
                                            Fill out the form with all required details and attach supporting documents.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-clock bg-yellow"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">Review Process</h3>
                                        <div class="timeline-body">
                                            Your complaint will be reviewed by the appropriate department within 48 hours.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-comments bg-purple"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">Communication</h3>
                                        <div class="timeline-body">
                                            You may be contacted for additional information if needed.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <i class="fas fa-check-circle bg-green"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">Resolution</h3>
                                        <div class="timeline-body">
                                            You will be notified once your complaint has been resolved.
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <i class="far fa-circle bg-gray"></i>
                                </div>
                            </div>

                            <div class="alert alert-info mt-4">
                                <h5><i class="icon fas fa-info"></i> Important!</h5>
                                <p>Please ensure all information is accurate. False complaints may result in disciplinary
                                    action.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card card-info animate__animated animate__fadeInRight" style="animation-delay: 0.3s">
                        <div class="card-header">
                            <h5><img src="../asset/img/faq.png" width="30"> FAQs</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="accordion" id="faqAccordion">
                                <div class="card">
                                    <div class="card-header" id="faqOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                How long does the process take?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="faqOne"
                                        data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Most complaints are processed within 5-7 working days, depending on complexity.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Can I update my complaint?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="faqTwo"
                                        data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Yes, you can add additional information to your complaint until it enters the
                                            "In Progress" status.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                What documents should I attach?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="faqThree"
                                        data-parent="#faqAccordion">
                                        <div class="card-body">
                                            Attach any evidence that supports your complaint, such as emails, screenshots,
                                            medical documents, or receipts.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center py-5">
                            <div class="animate__animated animate__bounceIn">
                                <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                            </div>
                            <h3 class="mt-4 animate__animated animate__fadeInUp">Complaint Submitted Successfully!</h3>
                            <p class="animate__animated animate__fadeInUp" style="animation-delay: 0.3s">Your complaint has
                                been received and will be processed shortly.</p>
                            <p class="animate__animated animate__fadeInUp" style="animation-delay: 0.5s">Complaint ID:
                                <strong id="complaintId">C-2025-001</strong>
                            </p>
                            <button type="button" class="btn btn-success mt-3 animate__animated animate__fadeInUp"
                                style="animation-delay: 0.7s" data-dismiss="modal">
                                <i class="fas fa-check"></i> OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

        .complaint-form-card {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .complaint-form-card:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        .submit-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .submit-btn:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }

        .submit-btn:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }

        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }

            100% {
                transform: scale(20, 20);
                opacity: 0;
            }
        }

        .timeline {
            position: relative;
            margin: 0 0 30px 0;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #ddd;
            left: 31px;
            margin: 0;
            border-radius: 2px;
        }

        .timeline>div {
            position: relative;
            margin-right: 10px;
            margin-bottom: 15px;
        }

        .timeline>div>.timeline-item {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            margin-top: 0;
            background-color: #fff;
            color: #444;
            margin-left: 60px;
            margin-right: 0;
            padding: 0;
            position: relative;
        }

        .timeline>div>.fa,
        .timeline>div>.fas,
        .timeline>div>.far {
            width: 30px;
            height: 30px;
            font-size: 15px;
            line-height: 30px;
            position: absolute;
            color: #fff;
            background: #d2d6de;
            border-radius: 50%;
            text-align: center;
            left: 18px;
            top: 0;
        }

        .timeline>.time-label>span {
            font-weight: 600;
            padding: 5px 10px;
            display: inline-block;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            margin-left: 50px;
            margin-bottom: 10px;
        }

        .timeline-item>.timeline-header {
            margin: 0;
            color: #555;
            border-bottom: 1px solid #f4f4f4;
            padding: 10px;
            font-size: 16px;
            line-height: 1.1;
            font-weight: 600;
        }

        .timeline-item>.timeline-body {
            padding: 10px;
            font-size: 14px;
        }

        .bg-blue {
            background-color: #3c8dbc !important;
        }

        .bg-yellow {
            background-color: #f39c12 !important;
        }

        .bg-purple {
            background-color: #605ca8 !important;
        }

        .bg-green {
            background-color: #00a65a !important;
        }

        .bg-gray {
            background-color: #d2d6de !important;
        }

        #fileList .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .file-preview-icon {
            margin-right: 10px;
        }

        .file-remove-btn {
            cursor: pointer;
            color: #dc3545;
        }

        #faqAccordion .card-header {
            padding: 0;
        }

        #faqAccordion .btn-link {
            color: #17a2b8;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 15px;
        }

        #faqAccordion .btn-link:hover {
            background-color: rgba(23, 162, 184, 0.1);
        }

        #faqAccordion .btn-link.collapsed:after {
            content: '\f067';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            float: right;
        }

        #faqAccordion .btn-link:not(.collapsed):after {
            content: '\f068';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            float: right;
        }
    </style>

    <!-- JavaScript for file upload preview and form submission -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const fileInput = document.getElementById('documentUpload');
            const filePreviewArea = document.getElementById('filePreviewArea');
            const fileList = document.getElementById('fileList');

            fileInput.addEventListener('change', function () {
                fileList.innerHTML = '';

                if (this.files.length > 0) {
                    filePreviewArea.style.display = 'block';

                    Array.from(this.files).forEach(function (file, index) {
                        const fileItem = document.createElement('div');
                        fileItem.className = 'list-group-item animate__animated animate__fadeIn';

                        let iconClass = 'fa-file';
                        if (file.type.includes('pdf')) {
                            iconClass = 'fa-file-pdf';
                        } else if (file.type.includes('word') || file.type.includes('doc')) {
                            iconClass = 'fa-file-word';
                        } else if (file.type.includes('image')) {
                            iconClass = 'fa-file-image';
                        } else if (file.type.includes('excel') || file.type.includes('sheet')) {
                            iconClass = 'fa-file-excel';
                        }

                        let fileSize = file.size / 1024;
                        let fileSizeStr = fileSize < 1024 ?
                            fileSize.toFixed(1) + ' KB' :
                            (fileSize / 1024).toFixed(1) + ' MB';

                        fileItem.innerHTML = `
                                        <div>
                                            <i class="fas ${iconClass} file-preview-icon"></i>
                                            <span>${file.name}</span>
                                            <small class="text-muted ml-2">${fileSizeStr}</small>
                                        </div>
                                        <div>
                                            <i class="fas fa-times-circle file-remove-btn" data-index="${index}"></i>
                                        </div>
                                    `;

                        fileList.appendChild(fileItem);
                    });

                    document.querySelector('.custom-file-label').textContent =
                        this.files.length > 1 ? `${this.files.length} files selected` : this.files[0].name;
                } else {
                    filePreviewArea.style.display = 'none';
                    document.querySelector('.custom-file-label').textContent = 'Choose file(s)';
                }
            });

            fileList.addEventListener('click', function (e) {
                if (e.target.classList.contains('file-remove-btn')) {
                    e.target.closest('.list-group-item').remove();

                    if (fileList.children.length === 0) {
                        filePreviewArea.style.display = 'none';
                        document.querySelector('.custom-file-label').textContent = 'Choose file(s)';
                    } else {
                        document.querySelector('.custom-file-label').textContent =
                            fileList.children.length > 1 ? `${fileList.children.length} files selected` : 'File selected';
                    }
                }
            });

            // const complaintForm = document.getElementById('complaintForm');

            // complaintForm.addEventListener('submit', function (e) {
            //     e.preventDefault();

            //     const subject = document.querySelector('input[name="subject"]').value;
            //     const category = document.querySelector('select[name="category"]').value;
            //     const description = document.querySelector('textarea[name="description"]').value;
            //     const confirmCheck = document.getElementById('confirmCheck').checked;

            //     if (!subject || !category || !description || !confirmCheck) {
            //         alert('Please fill in all required fields and confirm the information is accurate.');
            //         return;
            //     }

            //     const randomId = 'C-2025-' + Math.floor(Math.random() * 1000).toString().padStart(3, '0');
            //     document.getElementById('complaintId').textContent = randomId;

            //     $('#successModal').modal('show');

            //     setTimeout(() => {
            //         complaintForm.reset();
            //         filePreviewArea.style.display = 'none';
            //         document.querySelector('.custom-file-label').textContent = 'Choose file(s)';
            //         fileList.innerHTML = '';
            //     }, 500);
            // });
        });
    </script>



    {{-- Javascript to filter --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#year, #semester, #department').change(function() {
                var year = $('#year').val();
                var semester = $('#semester').val();
                var department = $('#department').val();

                if (year && semester && department) {
                    $.ajax({
                        url: '{{ route("courses.filter") }}',
                        type: 'GET',
                        data: {
                            year: year,
                            semester: semester,
                            department: department
                        },
                        success: function(data) {
                            $('#course').empty();
                            $('#course').append('<option value="">Select Course</option>');
                            $.each(data, function(index, course) {
                                $('#course').append('<option value="'+ course.id +'">'+course.code + ":: "+ course.name +'</option>');
                            });
                        }
                    });
                } else {
                    $('#course').empty();
                    $('#course').append('<option value="">Select Course</option>');
                }
            });
        });
    </script>



@endsection