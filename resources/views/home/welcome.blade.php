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
                <h1><a href="{{ url('/') }}" style="text-decoration: none; color: grey;">Api Hotels</a></h1>
                            
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Auth Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/docs') }}">Documentation</a>
                    </li>
                </ul>
            </div>

        </main>

    @endsection
@endcomponent