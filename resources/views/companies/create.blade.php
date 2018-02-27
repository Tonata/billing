@extends('layouts.app')

@section('title', 'Create Company')

@section('custom-css')

    <style>

    </style>

@endsection

{{--breadcrumb links--}}
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{url('companies')}}">Companies</a></li>
    <li class="breadcrumb-item active">Create Company</li>
@endsection

@section('content')

    <div class="col-md-8">
        {!! Form::open(array('route' => 'companies.store', 'method' => 'POST')) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Company Name') !!}
            {!! Form::text('name',null, array('class' => 'form-control')) !!}
            @if ($errors->has('name'))
                <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('registration') ? ' has-error' : '' }}">
            {!! Form::label('registration', 'Registration Number') !!}
            {!! Form::text('registration',null, array('class' => 'form-control')) !!}
            @if ($errors->has('registration'))
                <span class="help-block">
            <strong>{{ $errors->first('registration') }}</strong>
        </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'Email Address') !!}
            {!! Form::text('email',null, array('class' => 'form-control')) !!}
            @if ($errors->has('email'))
                <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                    {!! Form::label('license_expiry', 'License Expiry Date') !!}
                    {{--create datetimepicker component--}}
                    {!! Form::component('dateTimePicker', 'components.timepicker.timepicker', ['name', 'id', 'attributes']) !!}
                    {!! Form::dateTimePicker('license_expiry', 'expiry-date-picker' , [])
                     !!}
                    @if ($errors->has('license_expiry'))
                        <span class="help-block">
                <strong >{{ $errors->first('license_expiry') }}</strong>
            </span>
                    @endif
                </div>
            </div>
        </div>


    {!! Form::macro('SubmitBtn',function (){
            return '<button type="submit" class="btn btn-primary"> <i></i> Save </button>';
    }) !!}

    <button type="submit" class="btn btn-primary" style="position:relative;left:150px;top:38px"> <i  ></i> Cancel </button>;

    <div class="form-group">
        {!! Form::SubmitBtn() !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection


@section('js-after')
    @include('components.jsFiles.start_and_end_datepicker')
@endsection


