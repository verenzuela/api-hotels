@component('layouts.home.base')
    @slot('title') Documentation @endslot
    @slot('metaDescription')
    @slot('metaKeywords')

    @slot('styles')

    	<link href="{{ asset('css/docs-template.css') }}" rel="stylesheet">

    @endslot

    @slot('scripts')

    @slot('navbar') @include('layouts.home.navbar') @endslot

    @section('app-content')

    	<div class="container">
    		
    	
		<div class="sidenav">
			<a href="{{ route('doc', ['doc' => 'get-token']) }}">Get Token</a>
            <a href="{{ route('doc', ['doc' => 'country']) }}">Country</a>

		</div>

		<div class="main">
			<div id="document-content"></div>
		</div>

		</div>

	@endsection
@endcomponent