@extends('layouts.app')

@section('title', 'Edit Post')

{{--custom css files--}}
@section('custom-css')
    <style>

    </style>
@endsection

{{--breadcrmb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item">Posts</li>
    <li class="breadcrumb-item active">Edit Post</li>
@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel panel-heading"><h4>Edit Post</h4></div>

        <div class="panel panel-body">

            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

            {{ Form::close() }}

        </div>
    </div>
@endsection