@extends("admin.includes.layout")

@section("content")

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
   </div>

   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                 <h3>{{$institution}}</h3>
                 <p>Registered Companies</p>
               </div>
               <div class="icon">
                 <i class="fas fa-building"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                 <h3>{{$student}}</h3>
                 <p>Registered Students (Applicants)</p>
               </div>
               <div class="icon">
                 <i class="fas fa-users"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
               <div class="inner">
                 <h3>{{$post}}</h3>
                 <p>Open Internship Postings</p>
               </div>
               <div class="icon">
                 <i class="fas fa-briefcase"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
               <div class="inner">
                 <h3>{{$application}}</h3>
                 <p>Total Applications Received</p>
               </div>
               <div class="icon">
                 <i class="fas fa-file-alt"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
               <div class="inner">
                 <h3>5</h3>
                 <p>Pending Company Approvals</p>
               </div>
               <div class="icon">
                 <i class="fas fa-user-check"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
               <div class="inner">
                 <h3>{{$pending}}</h3>
                 <p>Pending Internship Approvals</p>
               </div>
               <div class="icon">
                 <i class="fas fa-clipboard-check"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="info-box bg-light">
               <span class="info-box-icon bg-info"><i class="far fa-newspaper"></i></span>
               <div class="info-box-content">
                 <span class="info-box-text">Recent Activity</span>
                 <span class="info-box-number">3 New Internships Posted Today</span>
                 <div class="progress">
                   <div class="progress-bar bg-info" style="width: 70%"></div>
                 </div>
                 <span class="progress-description">
                   5 Applications Received in Last Hour
                 </span>
               </div>
            </div>
          </div>
        </div>

        <div class="row">
          <section class="col-lg-7 connectedSortable">
            <div class="card">
               <div class="card-header">
                 <h3 class="card-title">
                   <i class="fas fa-chart-pie mr-1"></i>
                   Application Trends (Placeholder)
                 </h3>
               </div>
               <div class="card-body">
                 <div class="tab-content p-0">
                   <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                     <p class="text-center text-muted">Chart data would go here.</p>
                   </div>
                 </div>
               </div>
            </div>
          </section>
          <section class="col-lg-5 connectedSortable">
            <div class="card">
               <div class="card-header">
                 <h3 class="card-title">
                   <i class="fas fa-list-alt mr-1"></i>
                   Recent Internship Postings (Placeholder)
                 </h3>
               </div>
               <div class="card-body">
                 <ul class="list-group list-group-flush">
                   <li class="list-group-item">Marketing Intern - TechCorp (Pending Approval)</li>
                   <li class="list-group-item">Software Dev Intern - Innovate Ltd (Active)</li>
                   <li class="list-group-item">Graphic Design Intern - Creative Solutions (Active)</li>
                   <li class="list-group-item">HR Assistant Intern - PeopleFirst Inc (Expired)</li>
                 </ul>
               </div>
               <div class="card-footer text-center">
                 <a href="#" class="uppercase">View All Internships</a>
               </div>
            </div>
          </section>
        </div>
      </div>
   </section>

@endsection