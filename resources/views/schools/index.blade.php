@extends('layouts.app')
<body>

</body>
@section('content')
    <div>
    <h1 style="color:rosybrown">Schools</h1>
    <h4 style="color:rosybrown"> Check your school in the List</h4>
    <a href="{{url('/schools/create')}}" class="btn btn-success">Create New School?</a>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Number</th>
            <th>Name</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody style="background-color:darkseagreen">
        @foreach ($schools as $school)
            <tr>
                <td>{{ $school->s_number }}</td>
                <td>{{ $school->s_name }}</td>
                <td>{{ $school->s_street }}</td>
                <td>{{ $school->s_city }}</td>
                <td>{{ $school->s_state }}</td>
                <td>{{ $school->s_zip }}</td>
                <td>{{ $school->s_contact }}</td>
                <td>{{ $school->s_email }}</td>
                <td>{{ $school->s_phone }}</td>
                <td><a href="{{url('schools',$school->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('schools.edit',$school->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['schools.destroy', $school->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    </div>
@endsection


