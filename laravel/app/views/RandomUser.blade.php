@extends('_master')

@section('title')
	Random User
@stop

@section('content')
	<h1>Random User Generator</h1>
This Generator will create a list of fake users with:<br />
name, date of birth, email, address, phone number and a description.<br />
<br />Choose the number of users you wish to create:<br />
    {{ Form::open(array('url' => 'RandomUser')) }}
    {{ Form::label('num_users', 'Number of users (max 100) ') }}
    {{ Form::text('num_users', '', array('id'=>'num_users')) }}

    {{ Form::submit('Generate!') }} 
    {{ Form::close() }}
<hr>
<!-- If the number of users is set: -->
@if (isset($num_users))
    {{ $outputsentence }}

    <!-- If the users have been generated (i.e. no error in number of users requested): -->
    @if(isset($faker))
        <!-- Display the list of users: -->
        @for ($i=0; $i<$num_users; $i++)
            <section>
            {{ "<br />" . $faker->name, "<br />" }}
            {{ $faker->dateTimeThisCentury->format('Y-m-d'), "<br />" }}
            {{ $faker->email, "<br />" }}
            {{ $faker->address . "<br />" }}
            {{ $faker->phoneNumber . "<br />" }}
            {{ $faker->text . "<br />" }}
            </section>
        @endfor
    @endif
@endif

<!--end of 'content' section-->
@stop