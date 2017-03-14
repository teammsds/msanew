@extends('layouts.app')
@section('content')
    <h1>Create New Player</h1>
    {!! Form::open(['url' => 'players']) !!}

    <div class="form-group">
        {!! Form::select('id', $teams) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_number', 'Player Number:') !!}
        {!! Form::text('p_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_lname', 'Player Last Name:') !!}
        {!! Form::text('p_lname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_fname', 'Player First Name:') !!}
        {!! Form::text('p_fname',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_street', 'Player Street Address:') !!}
        {!! Form::text('p_street',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_city', 'Player City:') !!}
        {!! Form::text('p_city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_state', 'Player State:') !!}
        {!! Form::text('p_state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_zip', 'Player Zip Code:') !!}
        {!! Form::text('p_zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_email', 'Player Email Address:') !!}
        {!! Form::text('p_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_phone', 'Player Phone No:') !!}
        {!! Form::text('p_phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('p_estatus', 'Player Eligibility Status:') !!}
        {!! Form::text('p_estatus',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
