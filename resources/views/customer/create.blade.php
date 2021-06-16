@extends('layouts.navbar')

@section('content')
@push('style')
    <link rel="stylesheet" href="{{asset('/css/form.css')}}">
@endpush

    @foreach($errors->all() as $error)
        <p style="color: red">{{$error}}</p>
    @endforeach
<div>
    <form action="{{route('customer.store')}}" method="POST">
        @csrf
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" >

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname">

      <label for="contact">Contact</label>
      <input type="text" name="contact">

      <label for="address">Address</label>
      <input type="text" name="address">

      <label for="email">Email</label>
      <input type="text" name="email">


      <input type="submit" value="Submit">
    </form>
  </div>
@endsection
