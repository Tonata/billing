<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'SMS Category:') !!}
    {{--create lists component--}}
    {!! Form::component('customSelect', 'components.select.select_message_category', ['name', 'select_tag_attributes', 'option_tag_attributes', 'lists']) !!}
    {!! Form::customSelect('category', ['class="selectpicker form-control show-menu-arrow"',
                            'data-live-search="true"', 'data-header="Select SMS Category"',
                             'showSubtext="true"', 'data-width="75%"', 'title="Choose your sms category"'], [],  $categories)
     !!}
    @if ($errors->has('category'))
        <span class="help-block">
                <strong >{{ $errors->first('category') }}</strong>
            </span>
    @endif
</div>