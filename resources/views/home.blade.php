@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <p>
        Selamat datang {{ Auth::user()->name }}
    </p>
    @yield('content')

</div>
<!-- /.container-fluid -->
@endsection
