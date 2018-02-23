@extends('layouts.app')

@section('title', '{{ put some dynamic data here }}')

{{--custom css files--}}
@section('custom-css')
    <style>

    </style>
@endsection

{{--breadcrmb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item">{{ 'put some dynamic data here' }}</li>
    <li class="breadcrumb-item active">{{ 'put some dynamic data here' }}/li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"><h4>{{ 'put some dynamic data here' }}</h4></div>
        {{--@foreach ($posts as $post)--}}
            <div class="panel-body">
                {{ 'put some dynamic data here' }}
            </div>
        {{--@endforeach--}}
    </div>

    @endsection