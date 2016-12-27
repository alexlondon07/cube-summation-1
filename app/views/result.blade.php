@extends('index')

@section('result')

<pre>
@foreach($items as $item)
   @if( !is_null($item) )
    	{{ $item }}
   @endif
@endforeach
</pre>

@stop