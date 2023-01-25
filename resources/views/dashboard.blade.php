<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <style>
        .sidenav {
            width: 84px;
            height: 100%;
            position: fixed;
            background-color: rgb(160, 156, 156);
        }

        .sidenav a {
            text-decoration: none;
            display: block;
            padding: 10px;
            font-weight: 300;
            font-size: 16px;
            color: black;
        }

        .sidenav a:hover {
            transform: scale(1.1);
            color: white;
            background-color: blueviolet;
        }

        #product-image:hover {
            transform: scale(5);
        }
    </style>


</head>

<body>
    <!-- {{-- laravel nav --}}
    {{-- <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </x-slot>
    </x-app-layout> --}} -->


    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark sticky-top pl-2">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Admin Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto p-0.5">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"
                                    onclick="return confirm('Are u sure you want to log out')">Log
                                    Out</button>
                            </form>

                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>



    {{-- side nav --}}
    <div class="sidenav">
        <a href="{{ url('/users') }}">User</a>
        <a href="{{ url('/products') }}">Product</a>
        <a href="{{ url('/clients') }}">Clinet</a>
        <a href="{{ url('/categories') }}">Category</a>
        <a href="">Invoice</a>
        <a href="">Order</a>
        <a href="">Stock</a>
    </div>

    {{-- body --}}
    <div class="main">
        @yield('content')
    </div>
    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
