@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                {!! Form::open() !!}
                    {{ Form::email('email','',['placeholder' => 'Email'])}}
                    {{ Form::password('password',['placeholder' => 'Password'])}}
                    {{ Form::select('type', array(
                        'Student','Tutor'))}}
                    {{ Form::submit('Register')}}
                {!! Form::close() !!}                
            </div>
        </div>
    </div>
</div>
@endsection
