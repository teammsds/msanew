@extends('layouts.app')
@section('content')
    <h1>Teams</h1>
    <h4> Check your team in the List</h4>
    <a href="{{url('/teams/create')}}" class="btn btn-success">Create New Team?</a>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>School Number</th>
            <th>Team Number</th>
            <th>Team Name</th>
            <th>Team Coach</th>
            <th>Team Coach E-Mail</th>
            <th>Team Coach Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody style="background-color:darkseagreen">
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->school->s_number }}</td>
                <td>{{ $team->tm_number }}</td>
                <td>{{ $team->tm_name }}</td>
                <td>{{ $team->tm_coach }}</td>
                <td>{{ $team->tm_coachemail }}</td>
                <td>{{ $team->tm_coachphone }}</td>
                <td><a href="{{url('teams',$team->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('teams.edit',$team->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['teams.destroy', $team->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
