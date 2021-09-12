@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">offer name</th>
        <th scope="col">offer price</th>
        <th scope="col">offer details</th>
        <th scope="col">oprations</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($offers as $offer )
        <tr>
        <th scope="row">{{$offer->id}}</th>
        <td>{{$offer->name}}</td>
        <td>{{$offer->price}}</td>
        <td>{{$offer->details}}</td>
        <td><a href='{{url('offers/edit/'.$offer->id)}}' class="btn btn-success">edit</a></td>
      </tr>
    @endforeach


    </tbody>
  </table>
@endsection
