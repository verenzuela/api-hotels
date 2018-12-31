@component('layouts.home.base')
    @slot('title') Auth Dashboard @endslot
    @slot('metaDescription')
    @slot('metaKeywords')

    @slot('styles')
    	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endslot

    @slot('scripts')
    	<script src="{{ asset('js/app.js') }}"></script>
    @endslot

    @slot('navbar') @include('layouts.home.navbar') @endslot

    @section('app-content')

     
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<passport-authorized-clients></passport-authorized-clients>
					<passport-clients></passport-clients>
					<passport-personal-access-tokens></passport-personal-access-tokens>

				</div>
			</div>
		</div>


	@endsection
@endcomponent