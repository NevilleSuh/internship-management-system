@extends("admin.includes.layout")

@section("content")

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-users"></i> Manage Users (Applicants)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Registered User List</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table id="usersTable" class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Highest Qualification</th>
                                        <th>Registered On</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nfon Andrew Abang</td>
                                        <td>andrew.nfon@email.com</td>
                                        <td>Buea, SW Region</td>
                                        <td>BSc Computer Science</td>
                                        <td>2024-05-20</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#viewUserModal" title="View Profile"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editUserModal" title="Edit (Placeholder)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#confirmUserActionModal" data-action="block" data-name="Nfon Andrew Abang" title="Block User"><i class="fas fa-user-lock"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amina Bi Bongwa</td>
                                        <td>amina.bongwa@email.com</td>
                                        <td>Bamenda, NW Region</td>
                                        <td>HND Marketing</td>
                                        <td>2024-06-01</td>
                                         <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#viewUserModal" title="View Profile"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editUserModal" title="Edit (Placeholder)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#confirmUserActionModal" data-action="block" data-name="Amina Bi Bongwa" title="Block User"><i class="fas fa-user-lock"></i></button>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>Etienne Moukoko</td>
                                        <td>etienne.m@email.com</td>
                                        <td>Douala, Littoral Region</td>
                                        <td>Masters in Finance</td>
                                        <td>2024-04-11</td>
                                         <td><span class="badge badge-danger">Blocked</span></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#viewUserModal" title="View Profile"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editUserModal" title="Edit (Placeholder)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#confirmUserActionModal" data-action="unblock" data-name="Etienne Moukoko" title="Unblock User"><i class="fas fa-unlock"></i></button>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>Fonguh Patience Akwi</td>
                                        <td>patience.fonguh@email.com</td>
                                        <td>Yaounde, Centre Region</td>
                                        <td>B.Eng Electrical Engineering</td>
                                        <td>2024-05-05</td>
                                         <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#viewUserModal" title="View Profile"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editUserModal" title="Edit (Placeholder)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#confirmUserActionModal" data-action="block" data-name="Fonguh Patience Akwi" title="Block User"><i class="fas fa-user-lock"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                         <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="viewUserModalLabel">User Profile: Nfon Andrew Abang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                             <img class="profile-user-img img-fluid img-circle" src="{{asset('asset/img/avatar.png')}}" alt="User profile picture" style="height: 100px; width: 100px;">
                             <h5 class="mt-2">Nfon Andrew Abang</h5>
                             <p class="text-muted">Buea, SW Region</p>
                             <span class="badge badge-success">Active</span>
                        </div>
                        <div class="col-md-8">
                            <h6>Contact Information</h6>
                            <p><strong>Email:</strong> andrew.nfon@email.com</p>
                            <p><strong>Phone:</strong> +237 6XX XXX XXX (Placeholder)</p>
                            <hr>
                            <h6>Qualifications</h6>
                            <p><strong>Highest Degree:</strong> BSc Computer Science (University of Buea)</p>
                            <p><strong>Skills:</strong> Java, Python, SQL, Web Development (HTML, CSS, JS)</p>
                            <p><strong>Experience:</strong> 1 Year Internship at Tech Solutions Inc.</p>
                            <p><strong>CV/Resume:</strong> <a href="#" target="_blank">View/Download CV</a></p>
                             <hr>
                             <h6>Application History (3)</h6>
                             <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Software Dev Intern @ GilloTech
                                    <span class="badge badge-info">Pending</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    IT Support Intern @ H4BF
                                    <span class="badge badge-success">Accepted</span>
                                </li>
                                 <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Web Intern @ Uncle Luke Digitals
                                    <span class="badge badge-danger">Rejected</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                 <form action="#" method="POST">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="editUserModalLabel">Edit User: Nfon Andrew Abang (Placeholder)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted text-center">Admin user editing functionality would be implemented here.</p>
                        <div class="row">
                             <div class="col-md-6 form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" value="Nfon Andrew Abang" required>
                            </div>
                             <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="andrew.nfon@email.com" required>
                            </div>
                        </div>
                         <div class="row">
                             <div class="col-md-6 form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" value="Buea, SW Region">
                            </div>
                             <div class="col-md-6 form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" value="+237 6XX XXX XXX">
                            </div>
                        </div>
                         <div class="form-group">
                             <label>Highest Qualification</label>
                             <input type="text" class="form-control" value="BSc Computer Science">
                         </div>
                         <div class="form-group">
                             <label>Skills (Comma-separated)</label>
                             <input type="text" class="form-control" value="Java, Python, SQL, Web Development (HTML, CSS, JS)">
                         </div>
                         <div class="form-group">
                             <label>Status</label>
                             <select class="form-control">
                                 <option value="active" selected>Active</option>
                                 <option value="blocked">Blocked</option>
                             </select>
                         </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmUserActionModal" tabindex="-1" role="dialog" aria-labelledby="confirmUserActionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserActionModalLabel">Confirm Action</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to <span id="user-action-type">[block/unblock]</span> the user: <strong id="user-action-name">[User Name]</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmUserActionButton">Confirm</button> 
                </div>
            </div>
        </div>
    </div>

@endsection

@push("scripts")
    <script>
        $(function () {
            // Note: Using basic table hover and search, not full DataTable for this example
            // If full DataTable features are needed, initialize like in institutions.blade.php

            $('#confirmUserActionModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); 
                var action = button.data('action'); 
                var name = button.data('name'); 
                var modal = $(this);
                modal.find('.modal-body #user-action-type').text(action);
                modal.find('.modal-body #user-action-name').text(name);

                var confirmBtn = modal.find('#confirmUserActionButton');
                confirmBtn.removeClass('btn-success btn-danger').addClass(action === 'unblock' ? 'btn-success' : 'btn-danger');
                confirmBtn.text(action.charAt(0).toUpperCase() + action.slice(1)); 
            });

            // Placeholder for view/edit modal data loading
             $('#viewUserModal').on('show.bs.modal', function (event) {
                // Fetch specific user data based on clicked row
             });
             $('#editUserModal').on('show.bs.modal', function (event) {
                // Fetch specific user data for editing
             });
        });
    </script>
@endpush

