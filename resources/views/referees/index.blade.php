@extends('layouts.app')
@section('content')
    <h1>Referees</h1>
    <h4>Check your name in the List</h4>
    <a href="{{url('/referees/create')}}" class="btn btn-success">Create New Referee?</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Referee Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Street address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($referees as $referee)
            <tr>
                <td>{{ $referee->r_number }}</td>
                <td>{{ $referee->p_lname }}</td>
                <td>{{ $referee->p_fname }}</td>
                <td>{{ $referee->p_street }}</td>
                <td>{{ $referee->p_city }}</td>
                <td>{{ $referee->p_state }}</td>
                <td>{{ $referee->p_zip }}</td>
                <td>{{ $referee->p_email }}</td>
                <td>{{ $referee->p_phone }}</td>
                <td>{{ $referee->p_estatus }}</td>
                <td><a href="{{url('referees',$referee->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('referees.edit',$referee->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['referees.destroy', $referee->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
