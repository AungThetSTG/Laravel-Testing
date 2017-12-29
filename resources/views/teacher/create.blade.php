@extends('layouts.app')

@section('content')
    <div class="col-lg-offset-2 col-lg-8">

        <div class="well">
            {{ Form::open(array('url' => 'teacher', 'method' => 'POST', 'class' => 'form-horizontal')) }}
                <fieldset>
                    <legend>Create</legend>
                    <!-- Field Name -->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('name', $value=null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            <p class="help-block">
                                {{ $errors->first('name', ':message') }}
                            </p>
                        </div>
                    </div>
                    <!-- Field Password -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Password', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            <p class="help-block">
                                {{ $errors->first('password', ':message') }}
                            </p>
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password']) !!}
                            <p class="help-block">
                                {{ $errors->first('password_confirmation', ':message') }}
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::email('email', $value=null,['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            <p class="help-block">
                                {{ $errors->first('email', ':message') }}
                            </p>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                        </div>
                    </div>
                </fieldset>
            {{ Form::close() }}
        </div>
    </div>
            @if($flash = session('message'))
                <div class="alert alert-success flash-message" role="alert">
                    {{ $flash }}
                </div>
                @endif
    @endsection
