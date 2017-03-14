@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 style="color:gainsboro">Team Details</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
            <tr class="bg-info">
            <tr>
                <td>Team Number</td>
                <td><?php echo ($team['tm_number']); ?></td>
            </tr>
            <tr>
                <td>Team Name</td>
                <td><?php echo ($team['tm_name']); ?></td>
            </tr>
            <tr>
                <td>Team Coach</td>
                <td><?php echo ($team['tm_coach']); ?></td>
            </tr>
            <tr>
                <td>Team Coach email</td>
                <td><?php echo ($team['tm_coachemail']); ?></td>
            </tr>
            <tr>
                <td>Team Coach Phone</td>
                <td><?php echo ($team['tm_coachphone']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop
