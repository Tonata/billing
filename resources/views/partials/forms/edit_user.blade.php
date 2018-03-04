<div class="col-md-8">
    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PATCH')) }}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null, array('class' => 'form-control', 'required')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email Address:') !!}
        {!! Form::text('email',null, array('class' => 'form-control', 'required')) !!}
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
                 return '<button type="submit" class="btn btn-primary"> <i class="fa fa-edit" ></i> Update User </button>';
     }) !!}

    <div class="form-group">
        {!! Form::SubmitBtn() !!}
    </div>

    {{ Form::close() }}
</div>