@extends('layouts.frontend')

@section('body_class', 'login-page')

<!-- Main Content -->
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-4">
            <div class="card">
                <div class="card-header">@lang('labels.user.send_password_link')</div>
                <div class="card-block">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        {{ Form::bsInput('email', [
                            'required' => true,
                            'type' => 'email',
                            'title' => trans('validation.attributes.email'),
                            'label_col_class' => 'col-md-4',
                            'field_wrapper_class' => 'col-md-6',
                            'input_group_prefix' => '<i class="icon-envelope"></i>',
                        ]) }}

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('labels.user.send_password_link')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
