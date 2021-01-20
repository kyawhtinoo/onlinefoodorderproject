@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Restaurant</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Restaurant</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Restaurant List</h3>
             <a href="#" class="btn btn-primary float-right btn-sm">Add New</a>
           
           <thead>
            <tr>
             <th>#</th>
             <th>Name</th>
             <th>Photo</th>
             <th>Type</th>
             <th>Actions</th>
            </tr>
           </thead>
           <tbody>
             <tr>
               <td>1</td>
               <td>Shwe Kaung</td>
               <td>url</td>
               <td>chicken,pot</td>
               <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
               </td>
             </tr>
           </tbody>

          </table>
         </div>
        </div>
      </div>
    </div>
  </div>
  </main>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/chart.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
@endsection