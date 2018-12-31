@component('layouts.home.base')
    @slot('title') Api Hotels @endslot
    @slot('metaDescription')
    @slot('metaKeywords')

    @slot('styles')

        <style type="text/css">
            .starter-template {
              padding: 3rem 1.5rem;
              text-align: center;
            }
        </style>

    @endslot

    @slot('scripts')

    @slot('navbar') @include('layouts.home.navbar') @endslot

    @section('app-content')

        <main role="main" class="container">

            <div class="starter-template">
                <h1 style="text-decoration: none; color: grey;">Sorry, the page you are looking for could not be found.</h1>
                            
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Return to home page</a>
                    </li>

                </ul>
            </div>

        </main>

    @endsection
@endcomponent