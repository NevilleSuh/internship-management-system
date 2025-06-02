@extends('student.includes.layout')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h5><img src="../asset/img/user.png" width="30"> Student Information</h5>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="../asset/img/avatar.png"
                            alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center"></h3>
                    <p class="text-muted text-center"></p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Personal Information</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Matricule</b> <span class="float-right"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <span class="float-right"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Level</b> <span class="float-right">N/A</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Phone</b> <span class="float-right"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Complaint Statistics</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Total Complaints</b> <span class="float-right"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Pending</b> <span class="float-right"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Declined</b> <span class="float-right"></span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Resolved</b> <span class="float-right"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#editProfile">
                                <i class="fa fa-edit"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-info">
                <div class="card-header">
                    <h5><img src="../asset/img/complaint.png" width="30"> Recent Complaints</h5>
                </div>
                <div class="card-body">
                    <table id="example1" class="table">
                        <thead class="btn-cancel">
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        {{-- @php
                                            $badgeClass = '';
                                            switch ($complaint->status) {
                                                case 'pending':
                                                    $badgeClass = 'bg-warning';
                                                    break;
                                                case 'resolved':
                                                    $badgeClass = 'bg-success';
                                                    break;
                                                case 'declined':
                                                    $badgeClass = 'bg-danger';
                                                    break;
                                                default:
                                                    $badgeClass = 'bg-secondary';
                                            }
                                        @endphp
                                        <span class="badge {{ $badgeClass }}">{{$complaint->status}}</span> --}}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info" href="#" data-toggle="modal"
                                            data-target="#viewComplaint">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                    </td>
                                </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit Profile Modal -->

    <div id="editProfile" class="modal animated rubberBand delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form method="POST" action="#">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h5><img src="../asset/img/user.png" width="40"> Student Profile</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Full Name</label>
                                                <input type="text" name="name" class="form-control" value="NEVILLE SUH">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="neville@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Phone</label>
                                                <input type="text" name="phone" class="form-control" value="123456789">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Current Password</label>
                                                <input type="password" name="current_password" class="form-control"
                                                    placeholder="Enter current password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">New Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter new password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Confirm New Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Confirm new password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-save">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- View Complaint Modal 001 -->
        <div id="viewComplaint" class="modal animated rubberBand delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header">
                                        <h5><img src="../asset/img/complaint.png" width="40"> Complaint Details</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="float-left">Complaint ID</label>
                                                <input type="text" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="float-left">Date Submitted</label>
                                                <input type="text" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Subject</label>
                                                <input type="text" class="form-control"
                                                    value="" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Description</label>
                                                <textarea class="form-control" rows="4"
                                                    readonly></textarea>
                                            </div>
                                        </div>
                                        {{-- @if ($complaint->comment)
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="float-left">Comment</label>
                                                    <textarea class="form-control" rows="4"
                                                        readonly>{{$complaint->comment}}</textarea>
                                                </div>
                                            </div>
                                        @endif --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="float-left">Attachments</label>
                                                <div class="row">
                                                    {{-- @foreach ($complaint->files as $file)

                                                        @if ($file->ext == 'jpg' || $file->ext == 'jpeg' || $file->ext == 'png')
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">
                                                                            <i class="fas fa-image"></i> Screenshot Evidence
                                                                        </h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <img src="{{ asset('storage/'.$file->path) }}" class="img-fluid"
                                                                            alt="Evidence">
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <a href="{{ asset('storage/'.$file->path) }}"
                                                                            class="btn btn-sm btn-info" download>
                                                                            <i class="fas fa-download"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif


                                                        @if ($file->ext == 'docx' || $file->ext == 'pdf')
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">
                                                                            <i class="fas fa-file-word"></i> Submission Document
                                                                        </h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="text-center">
                                                                            <i class="fas fa-file-word fa-5x text-primary"></i>
                                                                            <p class="mt-2">document</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <a href="{{ asset('storage/'.$file->path) }}"
                                                                            class="btn btn-sm btn-info" download>
                                                                            <i class="fas fa-download"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    @endforeach --}}




                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- @php
                                                    $badgeClass = '';
                                                    switch ($complaint->status) {
                                                        case 'pending':
                                                            $badgeClass = 'bg-warning';
                                                            break;
                                                        case 'resolved':
                                                            $badgeClass = 'bg-success';
                                                            break;
                                                        case 'declined':
                                                            $badgeClass = 'bg-danger';
                                                            break;
                                                        default:
                                                            $badgeClass = 'bg-secondary';
                                                    }
                                                @endphp --}}
                                                <label class="float-left">Status</label>
                                                <input type="text" class="form-control  readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-cancel" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection