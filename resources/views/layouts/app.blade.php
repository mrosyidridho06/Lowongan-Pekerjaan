<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/plugins.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/common.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> --}}
        
        <link rel="stylesheet" href="{{ asset('vendors/chartjs/Chart.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset("images/favicon.svg")}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/simple-datatables/style.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
            
        <!-- Scripts -->
        <script src="{{ asset('js/feather-icons/feather.min.js') }}" defer></script>
        <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('vendors/chartjs/Chart.min.js') }}" defer></script>
        <script src="{{ asset('vendors/apexcharts/apexcharts.min.js') }}" defer></script>
        <script src="{{ asset('js/pages/dashboard.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <!--editloker-->
        <script src="{{asset('vendors/simple-datatables/simple-datatables.js')}}"defer></script>
        <script src="{{asset('js/vendors.js')}}"defer></script>
        <!--detail-->
    </head>
    <body>

        <div id="app">
        @include('layouts.sidebar')   
            <div id="main">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
