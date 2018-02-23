<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--custom title--}}
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    @include('includes.css.core')
    @include('includes.css.custom')

    <style>
        #dataTable_length > label > select{
            height: 36px;
        }
        fieldset
        {
            border: 1px solid #ddd !important;
            margin: 0;
            xmin-width: 0;
            padding: 10px;
            position: relative;
            border-radius:4px;
            background-color:#f5f5f5;
            padding-left:10px!important;
        }
        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px;
            width: 35%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }
    </style>

    @yield('custom-css')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<div id="app">
    <!-- Navigation-->

    @include('includes.navbar')

    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Dashboard</a>
                </li>

                @yield('breadcrumb-item')
            </ol>

            @yield('content')
        </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    {{--include footer--}}
    @include('includes.footer')
    @include('includes.scroll-to-top')
    @include('includes.modals.logout')

</div>

{{--for scripts that need to be before all the scripts--}}
@yield('js-before')

@include('includes.js.core')
@include('includes.js.custom')

{{--for scripts that need to be after all the scripts--}}
@yield('js-after')
</body>
</html>
