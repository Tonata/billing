@extends('layouts.app')

@section('title', 'Edit Company')



@section('custom-css')

    <style>

    </style>

@endsection

{{--breadcrumb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{url('companies')}}">Companies</a></li>
    <li class="breadcrumb-item active">Edit Company</li>
@endsection

@section('content')

    @include('flash::message')
    <div class="panel panel-default">

        <div class="panel panel-heading"><h4><i class="fa fa-edit"></i> Edit Company</h4></div>

        <div class="panel panel-body">

            @include('partials.forms.edit_company')

        </div>
    </div>
@endsection

@section('js-after')
    @include('components.jsFiles.start_and_end_datepicker')
@endsection