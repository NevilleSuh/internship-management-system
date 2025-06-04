@extends("admin.includes.layout")

@section("content")

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-building"></i> Manage Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">categories</li>
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
                            <h3 class="card-title">Registered Category List</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-success" data-toggle="modal"
                                    data-target="#addInstitutionModal">
                                    <i class="fas fa-plus"></i> Add New Category
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="institutionsTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at->format('Y-m-d')}}</td>
                                            <td>
                                                <button class="btn btn-xs btn-danger" data-toggle="modal"
                                                    data-target="#delete{{$category->id}}"><i
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
                <form action="{{route('admin.add.category')}}" method="POST">
                    @csrf
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="addInstitutionModalLabel">Add New Category </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label> Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Category name"
                                    required>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @foreach ($categories as $category)

        {{-- Delete Category Modal --}}
        <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" role="dialog"
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
                            id="institution-name"> [{{$category->name}}] </strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form action="{{route('admin.delete.category', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmActionButton">Delete</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    @endforeach








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