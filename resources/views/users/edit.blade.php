@extends('layouts.app')

@section('title', 'Edit User')

@section('custom-css')

    <style>

    </style>

@endsection

{{--breadcrumb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{url('users')}}">Users</a></li>
    <li class="breadcrumb-item active">Edit User</li>
@endsection

@section('content')

    @include('flash::message')
    <div class="panel panel-default">

        <div class="panel panel-heading"><h4><i class="fa fa-edit"></i> Edit User</h4></div>

        <div class="panel panel-body">

            @include('partials.forms.edit_user')

        </div>
    </div>
@endsection