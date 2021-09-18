@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Edit Offer
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
         </div>
         @endif
         {{-- @dd($offer) --}}
        <form method='POST' action="{{route('offers.update',['offer_id'=>$offer->id])}}">
            @csrf
            <div class="form-group">
              <label >Offer name:</label>
              <input type="text" name='name' class="form-control" value="{{$offer->name}}">
              @error('name')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label>Offer price:</label>
              <input type="text" name='price' class="form-control" value="{{$offer->price}}">
              @error('price')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
                <label>Offer details:</label>
                <input type="text" name='details' class="form-control" value="{{$offer->details}}">
                @error('details')
               <small id="photo_error" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">edit Offer</button>
          </form>
    </div>
</div>
@endsection
