{{ Form::open(['route' => ['user.password.change'], 'class' => 'form-horizontal', 'method' => 'PATCH']) }}

{{ Form::bsInput('old_password', [
    'title' => trans('validation.attributes.old_password'),
    'type' => 'password',
    'label_col_class' => 'col-md-4',
    'field_wrapper_class' => 'col-md-6',
]) }}

{{ Form::bsInput('password', [
    'required' => true,
    'title' => trans('validation.attributes.new_password'),
    'type' => 'password',
    'strength_meter' => true,
    'label_col_class' => 'col-md-4',
    'field_wrapper_class' => 'col-md-6',
]) }}

{{ Form::bsInput('password_confirmation', [
    'required' => true,
    'title' => trans('validation.attributes.new_password_confirmation'),
    'type' => 'password',
    'label_col_class' => 'col-md-4',
    'field_wrapper_class' => 'col-md-6',
]) }}

<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        {{ Form::submit(trans('buttons.update'), ['class' => 'btn btn-primary', 'id' => 'change-password']) }}
    </div>
</div>

{{ Form::close() }}