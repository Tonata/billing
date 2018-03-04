<div class="col-md-8">
    {{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PATCH')) }}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null, array('class' => 'form-control', 'required')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('registration', 'Registration Number:') !!}
        {!! Form::text('registration',null, array('class' => 'form-control', 'required')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email Address:') !!}
        {!! Form::text('email',null, array('class' => 'form-control', 'required')) !!}
    </div>

    <div class="row">
        <div class="col-md-6">
            {!! Form::label('license_expiry', 'License Expiry Date:') !!}
            {{--create datetimepicker component--}}
            {!! Form::component('dateTimePicker', 'components.timepicker.timepicker', ['name', 'id', 'attributes']) !!}
            {!! Form::dateTimePicker('license_expiry', 'expiry-date-picker' , [])
             !!}
            {{--<div class="form-group{{ $errors->has('license_expiry') ? ' has-error' : '' }}">--}}
              {{----}}
                {{--@if ($errors->has('license_expiry'))--}}
                    {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('license_expiry') }}</strong>--}}
                            {{--</span>--}}
                {{--@endif--}}
          {{--</div>--}}
        </div>
    </div>
    {!! Form::macro('SubmitBtn',function (){
                 return '<button type="submit" class="btn btn-primary"> <i class="fa fa-edit" ></i> Update Company </button>';
     }) !!}

    <div class="form-group">
        {!! Form::SubmitBtn() !!}
    </div>

    {{ Form::close() }}
</div>