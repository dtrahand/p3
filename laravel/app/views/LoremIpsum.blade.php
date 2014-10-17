@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>
<p>"Lorem ipsum" text is derived from Cicero's De finibus bonorum et malorum (On the Ends of Goods and Evils. The original passage began: Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit (translation: "Neithera is there anyone who loves, pursues or desires pain itself baecause it is pain").</p>

<p>Type in the number of "Lorem Ipsum" paragraph(s) to generate:</p>

    {{ Form::open(array('url' => 'LoremIpsum')) }}
    {{ Form::label('num_paragraph', 'Number of paragraph(s) (maximum 100) ', array('id'=>'num_paragraphs')) }}
    {{ Form::text('num_paragraphs') }}
    {{ Form::submit('Generate!') }} 
    {{ Form::close() }}
<hr>

<?php
if(isset($num_paragraphs)){
    if($num_paragraphs > 100) {
        echo "The maximum number of paragraphs is 100, please type in a number <=100.";
                              }
    else
    {    //Using the Lorem Ipsum package:
    $generator = new LoremIpsumGenerator();
    $paragraphs = $generator->getParagraphs($num_paragraphs);
    echo "Following are " . $num_paragraphs . "Lorem Ipsum paragraphs: <br/><br/>";
    echo implode('<p>', $paragraphs);
    }
}
?>
@stop