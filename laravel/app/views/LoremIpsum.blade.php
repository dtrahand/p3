@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>
<?php
//Using the Lorem Ipsum package:
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(3);
    echo implode('<p>', $paragraphs);
?>
@stop