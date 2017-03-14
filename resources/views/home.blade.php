@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="background-color:lemonchiffon">
                <div class="panel-heading"><h1 style="font-size:30px">Welcome</h1></div>


                <pre><h4 style="color:blue">  Congratulations!!!You are registered to the Missouri Soccer Association</h4></pre>


                <div class="panel-body">
                    <a href="{{action('RegisterController@index')}}" style="color:blue">Click Here to Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
