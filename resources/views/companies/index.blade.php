@extends('layouts.app')

@section('title', 'Companies')

{{--custom css files--}}
@section('custom-css')
    <style>

    </style>
@endsection

{{--breadcrmb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item active"> Companies </li>
@endsection

@section('content')
    <div>
        @include ('flash::message')
        <ul class="nav nav-tabs">
            @can('View Companies')
                <liv class="{{ session('tab') == 'view_companies' || !session('tab') ? 'active': ''  }}">
                </liv>
            @endcan
        </ul>


    <div class="tab-content">
        @can('View Companies')
            <div class="tab-pane {{ !session('tab') == 'view_companies'? 'active': ''  }}" id="companies">
                @include('partials.companies')
            </div>
        @endcan

    </div>
    </div>
    @endsection