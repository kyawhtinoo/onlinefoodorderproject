@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Items</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Items</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
          <h3 class="d-inline-block">Item Edit Form</h3>
          <a href="{{route('items.index')}}" class="btn btn-info float-right">Back</a>
          <form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}">

              @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="photo">Photo</label>
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
                  </li>
              </ul>
              <div class="tab-content my-2" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img src="{{asset($item->photo)}}" width="100">
              </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="photo">
                    @error('photo')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{$item->price}}">

              @error('price')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

           {{--  <div class="form-group">
              <label for="discount">Discount</label>
              <input type="text" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{$item->discount}}">

              @error('discount')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div> --}}

            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{$item->description}}">

              @error('description')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group ">
                  <label for="restaurant" class=" ">Restaurant</label>
                    <select class="form-control" name="restaurant">
                     
                        @foreach($restaurants as $restaurant)
                          <option value="{{$restaurant->id}}" @if($restaurant->id==$item->restaurant_id) selected="selected" @endif>{{ $restaurant->name}}</option>
                        @endforeach
                     
                    </select>
                 
                </div>

            <div class="form-group mt-4">
              <input type="submit" name="btn-submit" value="Update" class="btn btn-info">
            </div>
            
          </form>

        </div>
       </div>
      </div>
    </div>
</main>
@endsection