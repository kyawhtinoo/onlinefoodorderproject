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
          <h3 class="d-inline-block">Item Form</h3>
          <a href="{{route('items.index')}}" class="btn btn-info float-right">Back</a>
          <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

              @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="photo">Photo</label>
              <input type="file" name="photo" id="photo" class="form-control-file @error('photo') is-invalid @enderror" value="{{old('photo')}}">

               @error('photo')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
              <label for="price">Price</label>
              <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">

              @error('price')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

           {{--  <div class="form-group">
              <label for="discount">Discount</label>
              <input type="text" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{old('discount')}}">

              @error('discount')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
 --}}
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">

              @error('description')
               <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group ">
                  <label for="restaurant" class=" ">Restaurant</label>
                    <select class="form-control" name="restaurant">
                     
                        @foreach($restaurants as $restaurant)
                          <option value="{{$restaurant->id}}">{{ $restaurant->name}}</option>
                        @endforeach
                     
                    </select>
                 
            </div>

            <div class="form-group">
              <input type="submit" name="btn-submit" value="Save" class="btn btn-info">
            </div>
            
          </form>

        </div>
       </div>
      </div>
    </div>
</main>
@endsection