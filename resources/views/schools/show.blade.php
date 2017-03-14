@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 style="color:gainsboro">School Details</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($school['s_name']); ?></td>
            </tr>
            <tr>
                <td>Street</td>
                <td><?php echo ($school['s_street']); ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo ($school['s_city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($school['s_state']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($school['s_zip']); ?></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><?php echo ($school['s_contact']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo ($school['s_email']); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo ($school['s_phone']); ?></td>
            </tr>


            </tbody>
        </table>
    </div>

    <div class="container">
        <h1 style="color:gainsboro">School Teams</h1>
        <table class="table table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Team Number</th>
                <th>Team Name</th>
                <th>Team Coach</th>
                <th>Team Coach Email</th>
                <th>Team Coach Phone</th>
            </tr>
            </thead>
            <tbody style="background-color:darkseagreen">
            @foreach ($school->teams as $team)
                <tr>
                    <td>{{ $team->tm_number }}</td>
                    <td>{{ $team->tm_name }}</td>
                    <td>{{ $team->tm_coach }}</td>
                    <td>{{ $team->tm_coachemail }}</td>
                    <td>{{ $team->tm_coachphone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
