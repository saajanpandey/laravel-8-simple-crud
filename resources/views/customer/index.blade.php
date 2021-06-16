@extends('layouts.navbar')

@section('content')
@push('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endpush
<h1>This is customer list</h1>

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col" colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
          <tr>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->contact}}</td>
            <td><a href="{{route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-primary">Update</button></a></td>
            <td><a href="{{route('customer.destroy',$customer->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>












@endsection
