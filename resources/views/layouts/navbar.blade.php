<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    @stack('style')

</head>
<body>
    <ul>
        <li><a class="active" href="{{route('welcome')}}">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        {{-- <li><a href="{{route('login')}}">Login</a></li> --}}
        <li><a href="{{route('customer.create')}}">Add Customer</a></li>
        <li><a href="{{route('customer.index')}}">All Customers</a>
      </ul>

      <div class="container">
          @yield('content')
      </div>
</body>
</html>
