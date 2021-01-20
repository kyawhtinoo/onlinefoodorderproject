@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>Restaurants</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Restaurants</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="tile">
        <div class="tile-body">
          <h3 class="d-inline-block">Restaurant Edit Form</h3>
          <a href="{{route('restaurants.index')}}" class="btn btn-info float-right">Back</a>
          <form method="post" action="{{route('restaurants.update',$restaurant->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$restaurant->name}}">

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
                    <img src="{{asset($restaurant->photo)}}" width="100">
              </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="photo">
                    @error('photo')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
              <label for="name">Type</label>
              <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{$restaurant->type}}">

              @error('type')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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