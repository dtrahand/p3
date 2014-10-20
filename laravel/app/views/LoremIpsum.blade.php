@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>
<p>"Lorem ipsum" text is derived from Cicero's De finibus bonorum et malorum (On the Ends of Goods and Evils. The original passage began: Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit (translation: "Neithera is there anyone who loves, pursues or desires pain itself baecause it is pain").</p>

<p>Type in the number of "Lorem Ipsum" paragraph(s) to generate:</p>

    {{ Form::open(array('url' => 'LoremIpsum')) }}
    {{ Form::label('num_paragraphText', 'Number of paragraph(s) (maximum 100)') }}
    {{ Form::text('num_paragraphs') }}
    {{ Form::submit('Generate!') }} 
    {{ Form::close() }}
<hr>

<!-- If the number of paragraphs is set: -->
@if(isset($num_paragraphs))
    {{ $outputsentence }}

    <!-- If the paragraphs have been generated (i.e. no error in number of paragraphs requested): -->
    @if(isset($paragraphs))
        <!-- Display the Lorem Ipsum package:-->
        {{ implode('<p>', $paragraphs) }}
    @endif
@endif

@stop