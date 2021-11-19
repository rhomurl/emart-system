<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <meta name="description" content="The owner of the Allena Mindoro Store is Mrs. Emelina Almarez, they started their business on May, 2006. They started with a small store and only sold a few. Gradually it grew, developed and had several more brances due to the cooperation of the siblings of the owner of this store.">
        <meta name="keywords" content="e-mart, Allena mindoro store, balete batangas">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <style>
        /*body {
            background-image: url('images/user-bg.svg');
            background-repeat: no-repeat;
            background-size: cover;
        }   */ 
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery-2.0.0.min.js") }}" type="text/javascript"></script>

        <!-- Bootstrap4 files-->
        <script src="{{ asset("js/bootstrap.bundle.min.js") }}" type="text/javascript"></script>
        <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet" type="text/css"/>

        <!-- Font awesome 5 -->
        <link href="{{ asset("fonts/fontawesome/css/all.min.css") }}" type="text/css" rel="stylesheet">

        <!-- custom style -->
        <link href="{{ asset("css/ui.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("css/responsive.css") }}" rel="stylesheet" type="text/css" />

        <!-- custom javascript -->
        <script src="{{ asset("js/script.js") }}" type="text/javascript"></script>

    </head>
    <body class="font-sans antialiased">
        <b class="screen-overlay"></b>

        @include('layouts.header')

        <div>
            <section class="section-pagetop bg-gray">
                <div class="container">
                    <h2 class="title-page">@yield('title')</h2>
                </div> <!-- container //  -->
            </section>
            
            <section class="section-content padding-y">
                <div class="container">
                
                <div class="row">
                    <aside class="col-md-3">
                        <nav class="list-group">
                            <a class="list-group-item {{ \Route::current()->getName() == 'user.overview' ? 'active' : '' }}" href="{{ route('user.overview') }}"> Account overview  </a>
                            <a class="list-group-item {{ \Route::current()->getName() == 'user.address' ? 'active' : '' }}" href="{{ route('user.address') }}"> My Address </a>
                            <a class="list-group-item" href="{{ route('user.orders') }}"> My Orders </a>
                            <a class="list-group-item" href="page-profile-setting.html"> Settings </a>
                            <a class="list-group-item" href="page-index-1.html"> Log out </a>
                        </nav>
                    </aside> <!-- col.// -->
                    <main class="col-md-9">
                    @if (\Route::current()->getName() == 'user.address')
                        <a href="{{ route('user.address.create')}}" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Add new address </a>
                    @endif 
                    
                        {{ $slot }}
                    
                    </main> <!-- col.// -->
                </div>
            
                </div> <!-- container .//  -->
            </section>
        </div>
    
        @include('layouts.footer')

        @stack('modals')

        @livewireScripts 
    </body>
</html>
