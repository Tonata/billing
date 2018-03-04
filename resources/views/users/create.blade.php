@extends('layouts.app')

@section('title', 'Create User')

@section('custom-css')

    <style>

    </style>

@endsection

@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{url('users')}}">Users</a></li>
    <li class="breadcrumb-item active">Create User</li>
@endsection

@section('content')
    <div class="col-md-8">

        {!! Form::open(array('route' => 'users.store', 'method' => 'POST')) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name',null, array('class' => 'form-control')) !!}
            @if ($errors->has('name'))
                <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
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

        <h5><b>Assign Menu Access To User</b></h5>
        <div class="form-group{{ $errors->has('permissions') ? ' has-error' : '' }}">
            @if ($errors->has('permissions'))
                <span class="help-block">
                    <strong style="color: red" >{{ $errors->first('permissions') }}</strong>
                </span>
            @endif
            <br>
            {{--create lists component--}}
            {{--{!! Form::component('customSelect', 'components.select.select_permissions', ['name', 'select_tag_attributes', 'option_tag_attributes', 'lists']) !!}--}}
            {{--{!! Form::customSelect('permissions[]', ['class="selectpicker form-control show-menu-arrow"',--}}
                                    {{--'data-live-search="true"', 'data-header="Select Permissions"',--}}
                                     {{--'showSubtext="true"', 'data-width="100%"', 'title="Choose your menu access items"', 'multiple'], [],  $permissions)--}}
             {{--!!}--}}

            {{--{!! Form::select('permissions[]', implode("','", $permissions) , [],['class'=>'selectpicker form-control show-menu-arrow', 'data-live-search="true"', 'data-width="100%"', 'title="Choose your menu access items"', 'multiple']) !!}--}}

                @foreach($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach

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

<script>
    $("#permission_select").selectpicker('render') ;

</script>