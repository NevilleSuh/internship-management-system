@extends("admin.includes.layout")

@section("content")

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-building"></i> Manage Institutions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Institutions</li>
                    </ol>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registered Institutions List</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-success" data-toggle="modal"
                                    data-target="#addInstitutionModal">
                                    <i class="fas fa-plus"></i> Add New Institution
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="institutionsTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Institution Name</th>
                                        <th>Industry</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Joined Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($institutions as $institution)
                                        <tr>
                                            <td>{{$institution->name}}</td>
                                            <td>{{$institution->industry}}</td>
                                            <td>{{$institution->location}}</td>
                                            <td><span class="badge badge-success">active</span></td>
                                            <td>{{$institution->created_at->format('Y-m-d')}}</td>
                                            <td>
                                                <button class="btn btn-xs btn-info" data-toggle="modal"
                                                    data-target="#viewInstitutionModal{{$institution->id}}"
                                                    title="View Details"><i class="fas fa-eye"></i></button>
                                                {{-- <button class="btn btn-xs btn-warning" data-toggle="modal"
                                                    data-target="#editInstitutionModal" title="Edit"><i
                                                        class="fas fa-edit"></i></button> --}}
                                                <button class="btn btn-xs btn-danger" data-toggle="modal"
                                                    data-target="#delete{{$institution->id}}"><i
                                                        class="fas fa-times-circle"></i></button>
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



    {{-- //Add Institution Modal --}}
    <div class="modal fade" id="addInstitutionModal" tabindex="-1" role="dialog" aria-labelledby="addInstitutionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{route('admin.add.institution')}}" method="POST">
                    @csrf
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="addInstitutionModalLabel">Add New Institution (Bamenda)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Institution Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter institution name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Industry</label>
                                <input type="text" class="form-control" name="industry"
                                    placeholder="e.g., Technology, Education, NGO" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" placeholder="e.g., Nkwen, Bamenda"
                                    required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Website</label>
                                <input type="url" class="form-control" name="website" placeholder="https://www.example.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" name="person" placeholder="Full Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact Email</label>
                                <input type="email" class="form-control" name="email" placeholder="email@example.com">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact Phone</label>
                                <input type="tel" class="form-control" name="tell" placeholder="+237 650729916">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="*********"
                                    required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="*********" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3"
                                placeholder="Brief description of the institution..."></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add Institution</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @foreach ($institutions as $institution)
        {{-- View Institution Modal --}}
        <div class="modal fade" id="viewInstitutionModal{{$institution->id}}" tabindex="-1" role="dialog"
            aria-labelledby="viewInstitutionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title">{{$institution->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Industry:</strong> {{$institution->industry}}</p>
                                <p><strong>Location:</strong> {{$institution->location}}</p>
                                <p><strong>Website:</strong> <a href="{{$institution->website}}"
                                        target="_blank">{{$institution->website}}</a> (Example)</p>
                                <p><strong>Contact Person:</strong> {{$institution->person}}</p>
                                <p><strong>Contact Email:</strong> <a
                                        href="mailto:{{$institution->email}}">{{$institution->email}}</a>
                                </p>
                                <p><strong>Contact Phone:</strong> {{$institution->tell}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Status:</strong> Active</p>
                                <p><strong>Joined Date:</strong>{{$institution->created_at->format('Y-m-d')}} </p>
                                <p><strong>Added By:</strong>{{$institution->admin->first_name}}</p>
                                {{-- <p><strong>Approval Date:</strong> 2024-03-11</p> --}}
                            </div>
                        </div>
                        <hr>
                        <h6>Description</h6>
                        <p>{{$institution->Description}}</p>
                        <hr>
                        <h6>Posted Internships (2)</h6>
                        <ul class="list-group">
                            <li class="list-group-item">Junior Web Developer Intern (Active)</li>
                            <li class="list-group-item">IT Support Intern (Active)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- Delete Institution Modal --}}
        <div class="modal fade" id="delete{{$institution->id}}" tabindex="-1" role="dialog"
            aria-labelledby="confirmActionModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmActionModalLabel">Confirm Action</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to <span id="action-type">Delete</span> this institution: <strong
                            id="institution-name"> [{{$institution->name}}] </strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="{{route('admin.delete.institution', $institution->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmActionButton">Delete</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    @endforeach




    <div class="modal fade" id="editInstitutionModal" tabindex="-1" role="dialog"
        aria-labelledby="editInstitutionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="#" method="POST">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="editInstitutionModalLabel">Edit Institution: GilloTech Co Ltd</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Institution Name</label>
                                <input type="text" class="form-control" value="GilloTech Co Ltd" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Industry</label>
                                <input type="text" class="form-control" value="Technology / Web Development" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" value="Nkwen, Bamenda" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Website</label>
                                <input type="url" class="form-control" value="https://www.gillotech.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" value="Gilbert N.">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact Email</label>
                                <input type="email" class="form-control" value="info@gillotech.com">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact Phone</label>
                                <input type="tel" class="form-control" value="+237 650729916">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"
                                rows="3">GilloTech Co Ltd provides web development and IT solutions in Bamenda. Offering internships in frontend and backend development.</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="approved" selected>Approved</option>
                                <option value="pending">Pending Approval</option>
                                <option value="rejected">Rejected</option>
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




@endsection



@push("scripts")
    <script>
        $(function () {
            $("#institutionsTable").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#institutionsTable_wrapper .col-md-6:eq(0)');

            $('#confirmActionModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var action = button.data('action');
                var name = button.data('name');
                var modal = $(this);
                modal.find('.modal-body #action-type').text(action);
                modal.find('.modal-body #institution-name').text(name);

                var confirmBtn = modal.find('#confirmActionButton');
                confirmBtn.removeClass('btn-success btn-danger').addClass(action === 'approve' ? 'btn-success' : 'btn-danger');
                confirmBtn.text(action.charAt(0).toUpperCase() + action.slice(1));

            });

            // Basic handling for view/edit modals (replace with dynamic data loading later)
            $('#viewInstitutionModal').on('show.bs.modal', function (event) {
                // In a real app, you'd fetch data based on the clicked row
                // For now, it just shows the hardcoded GilloTech data
            });
            $('#editInstitutionModal').on('show.bs.modal', function (event) {
                // Similar to view, fetch data for the specific institution
                // For now, it shows hardcoded GilloTech data
            });

        });
    </script>
@endpush