@extends('layouts.app')
@section('content')
    <h1>Players</h1>
    <h4> Check your name in the List</h4>
    <a href="{{url('/players/create')}}" class="btn btn-success">Create New Player?</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>School Number</th>
            <th>Team Number</th>
            <th>Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Street address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>E-Mail</th>
            <th>Phone</th>
            <th>Status</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->school->s_number }}</td>
                <td>{{ $player->team->tm_number }}</td>
                <td>{{ $player->p_number }}</td>
                <td>{{ $player->p_lname }}</td>
                <td>{{ $player->p_fname }}</td>
                <td>{{ $player->p_street }}</td>
                <td>{{ $player->p_city }}</td>
                <td>{{ $player->p_state }}</td>
                <td>{{ $player->p_zip }}</td>
                <td>{{ $player->p_email }}</td>
                <td>{{ $player->p_phone }}</td>
                <td>{{ $player->p_estatus }}</td>
                <td><a href="{{url('players',$player->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('players.edit',$player->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['players.destroy', $player->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
