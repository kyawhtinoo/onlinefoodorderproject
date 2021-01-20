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
             <a href="{{route('restaurants.create')}}" class="btn btn-primary float-right btn-sm">Add New</a>
           
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
             @php $i=1; @endphp
             @foreach($restaurants as $restaurant)
             <tr>
               <td>{{$i++}}</td>
               <td>{{$restaurant->name}}</td>
               <td><img src="{{asset($restaurant->photo)}}" width="100"></td>
               <td>{{$restaurant->type}}</td>
               <td>
                <a href="{{route('restaurants.edit',$restaurant->id)}}" class="btn btn-warning btn-sm">Edit</a>
            <form method="post" action="{{route('restaurants.destroy',$restaurant->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
              @csrf
              @method('DELETE')
              <input type="submit" name="btn-delete" class="btn btn-danger btn-sm" value="Delete">
            </form>
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
  </main>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/chart.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
@endsection