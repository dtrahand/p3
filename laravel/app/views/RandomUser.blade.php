@extends('_master')

@section('title')
	Random User
@stop

@section('content')
	<h1>Random User Generator</h1>
<!--Calling the Faker package:-->
<?php
    $faker = Faker\Factory::create();
    for ($i=0; $i < 5; $i++) {
        echo "<br />" . $faker->name, "<br />";
        echo $faker->dateTimeThisCentury->format('Y-m-d'), "<br />";
        echo $faker->email, "<br />";
        echo $faker->address . "<br />";
        echo $faker->phoneNumber . "<br />";
        echo $faker->text . "<br />";
    }
?>        
@stop