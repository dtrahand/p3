@extends('_master')

@section('title')
	Random User
@stop

@section('content')
	<h1>Random User Generator</h1>
This Generator will create a list of fake users, giving their name, date of birth, emai, address, phone number and a description.<br />
<br />Choose the number of users you wish to create:<br />
    {{ Form::open(array('url' => 'RandomUser')) }}
    {{ Form::label('num_users', 'Number of users', array('id'=>'num_users')) }}
    {{ Form::text('num_users') }}
    {{ Form::submit('Generate!') }} 
    {{ Form::close() }}
<hr>

<?php
//if(isset($_POST['num_users'])){
if(isset($num_users)){
    //Calling the Faker package:
    $faker = Faker::create();
    echo "Following are " . $num_users . " users: <br/><br/>";

    for ($i=0; $i < $num_users; $i++) {
        echo "<br />" . $faker->name, "<br />";
        echo $faker->dateTimeThisCentury->format('Y-m-d'), "<br />";
        echo $faker->email, "<br />";
        echo $faker->address . "<br />";
        echo $faker->phoneNumber . "<br />";
        echo $faker->text . "<br />";
    }
}
?>    
@stop