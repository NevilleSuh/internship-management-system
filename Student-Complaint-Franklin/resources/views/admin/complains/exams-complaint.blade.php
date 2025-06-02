
@extends('admin.includes.layout')

@section('content')

<style type="text/css">
    table tr td {
       padding: 0.3rem !important;
    }
    table tr td p{
       margin-top: -0.8rem !important;
       margin-bottom: -0.8rem !important;
       font-size: 0.9rem;
    }
    td a.btn{
       font-size: 0.7rem;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1 class="m-0"><img src="../asset/img/complaint.png" width="40">Exams Complaints</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Exams Complaints</li>
             </ol>
          </div><br>
       </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
       <div class="card card-info">
          <br>
          <div class="col-md-12">
             <table id="example1" class="table">
                <thead class="btn-cancel">
                   <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Course</th>
                        <th>status</th>
                        <th class="text-center">Action</th>
                   </tr>
                </thead>
                <tbody>

                    @foreach ($complaints as $complaint)
                        @if($complaint->course->department->id == $id)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$complaint->subject}}</td>
                                <td>{{$complaint->course->code}}</td>
                                <td>
                                    @php
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
                                    <span class="badge {{ $badgeClass }}">{{$complaint->status}}</span>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#resolve{{ $complaint->id }}"><i
                                            class="fa fa-thumbs-up"></i> resolve</a>

                                    <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#decline{{ $complaint->id }}"><i
                                        class="fa fa-thumbs-down"></i> decline</a>

                                    <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#viewComplaint{{ $complaint->id }}"><i
                                        class="fa fa-eye"></i> view</a>
                                </td>
                            </tr>
                        @endif

                    @endforeach

                </tbody>
             </table>
          </div>
       </div>
    </div>
</section>


    <!-- View Complaint Modal 001 -->
    @foreach ($complaints as $complaint)
        @if($complaint->course->department->id == $id)

            <div id="viewComplaint{{ $complaint->id }}" class="modal animated rubberBand delete-modal" role="dialog">
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
                                                    <input type="text" class="form-control" value="{{$loop->index + 1}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left">Date Submitted</label>
                                                    <input type="text" class="form-control" value="{{$complaint->created_at->format('F j, Y')}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left">Course Code</label>
                                                    <input type="text" class="form-control" value="{{$complaint->course->code}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left">Course Name</label>
                                                    <input type="text" class="form-control" value="{{$complaint->course->name}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="float-left">Subject</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $complaint->subject }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="float-left">Description</label>
                                                    <textarea class="form-control" rows="4"
                                                        readonly>{{$complaint->description}}</textarea>
                                                </div>
                                            </div>
                                            @if ($complaint->comment)
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="float-left">Comment</label>
                                                        <textarea class="form-control" rows="4"
                                                            readonly>{{$complaint->comment}}</textarea>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="float-left">Attachments</label>
                                                    <div class="row">
                                                        @foreach ($complaint->files as $file)

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

                                                        @endforeach




                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @php
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
                                                    <label class="float-left">Status</label>
                                                    <input type="text" class="form-control {{ $badgeClass }}" value="{{ $complaint->status }}" readonly>
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
        @endif
    @endforeach



        {{-- Resolve and Decline Modal --}}
    @foreach ($complaints as $complaint)
        @if($complaint->course->department->id == $id)
            <div id="resolve{{ $complaint->id }}" class="modal animated rubberBand delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        {{-- <img class="text text-bg-success" src="{{asset('asset/img/sent.png')}}" alt="" width="50" height="46"> --}}
                        <b class="text text-2xl font-bolder ">Resolve Complain</b>
                        <h3>Are you sure want to Resolve this complaint "{{$complaint->subject}}"?</h3>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

                            <form action="{{ route('resolve.complain', $complaint->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success"><i
                                    class="fa fa-thumbs-up"></i> Resolve</button>

                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>




            <div id="decline{{ $complaint->id }}" class="modal animated rubberBand delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="{{asset('asset/img/sent.png')}}" alt="" width="50" height="46">
                        <h3>Are you sure want to Decline this Complaint "{{$complaint->subject}}"?</h3>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

                            <form action="{{ route('decline.complain', $complaint->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <textarea type="text" class="form-control" placeholder="Type in Comment" name="comment" required></textarea>
                                <br>
                                <button type="submit" class="btn btn-danger"><i
                                    class="fa fa-thumbs-down"></i> Decline</button>

                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endif
    @endforeach

 @endsection