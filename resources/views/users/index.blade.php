@extends('layouts.app')

@section('title', 'Users')

{{--custom css files--}}
@section('custom-css')
    <style>

    </style>
@endsection

@section('breadcrumb-item')
    <li class="breadcrumb-item active"> Users </li>
@endsection

@section('content')
    <div>
        @include ('flash::message')
        <ul class="nav nav-tabs">
            @can('View Users')
                <liv class="{{ session('tab') == 'view_users' || !session('tab') ? 'active': ''  }}">
                </liv>
            @endcan
        </ul>


        <div class="tab-content">
            @can('View Users')
                <div class="tab-pane {{ !session('tab') == 'view_users'? 'active': ''  }}" id="users">
                    @include('partials.users')
                </div>
            @endcan

        </div>
    </div>
@endsection