@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Item</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Item</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
         <div class="table-responsive">
          <table class="table table-hover table-bordered mt-3" id="sampleTable">
             <h3 class="d-inline-block">Item List</h3>
             <a href="{{route('items.create')}}" class="btn btn-primary float-right btn-sm">Add New</a>
           
           <thead>
            <tr>
             <th>#</th>
             <th>Name</th>
             <th>Photo</th>
             <th>Price</th>
            {{--  <th>Discount</th> --}}
             <th>Description</th>
             <th>Restaurant</th>
             <th>Actions</th>
            </tr>
           </thead>
           <tbody>
             @php $i=1; @endphp
             @foreach($items as $item)
             <tr>
               <td>{{$i++}}</td>
               <td>{{$item->name}}</td>
               <td><img src="{{asset($item->photo)}}" width="100"></td>
               <td>{{$item->price}}</td>
              {{--  <td>{{$item->discount}}</td> --}}
               <td>{{$item->description}}</td>
               <td>{{$item->restaurant->name}}</td>
               <td>
                <a href="{{route('items.edit',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
            <form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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