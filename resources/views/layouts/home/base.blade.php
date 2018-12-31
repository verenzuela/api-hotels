@extends('layouts.home.master')

@section('title') {{$title}} @endsection
@if($metaDescription!=null) @section('metaDescription'){{ $metaDescription }}@endsection @endif
@if($metaKeywords!=null) @section('metaKeywords'){{ $metaKeywords }}@endsection @endif

@if($styles!=null) @section('styles'){{ $styles }}@endsection @endif
@if($scripts!=null) @section('scripts'){{ $scripts }}@endsection @endif

@if($navbar!=null) @section('navbar'){{ $navbar }}@endsection @endif

@section('content')
    <div id="app">
    	@yield('app-content')
	</div>
@endsection