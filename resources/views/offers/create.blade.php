@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add your offer
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
         </div>
         @endif
        <form method='POST' action="{{route('offers.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
            <input type="file" name='photo' class="form-control">
              <label >Offer name:</label>
              <input type="text" name='name' class="form-control" value="{{--old()->name--}}">
              @error('name')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror

            </div>
            <div class="form-group">
              <label>Offer price:</label>
              <input type="text" name='price' class="form-control">
              @error('price')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
                <label>Offer details:</label>
                <input type="text" name='details' class="form-control">
                @error('details')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save Offer</button>
          </form>
    </div>
</div>
@endsection
