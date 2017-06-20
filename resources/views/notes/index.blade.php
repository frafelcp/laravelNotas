@extends('layout')

@section('content')
	<h2>List of Notes</h2>
	<p>
        <a href="{{ url('notes/create') }}">Add a note</a>
    </p>
	<ul>
		@foreach($notes as $note)
		<li>
			{{$note->note}}
		</li>
		@endforeach
	</ul>
	{!! $notes->render() !!}
@endsection