@extends('admin.layouts.master')


@section('content')


<table class="table" id="myTable">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">Account</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
      @foreach($transations as $transation)
      
    <tr>
    <td>{{$transation->name}}</td>
      <td>{{$transation->email}}</td>
      <td>{{$transation->account}}</td>
      <td>{{$transation->amount}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection