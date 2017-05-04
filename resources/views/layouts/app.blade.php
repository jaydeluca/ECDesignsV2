@include('layouts.head')

<div id="app">
    <div class="container">

        @include('layouts.nav')

        @yield('content')

    </div>
</div>

@include('layouts.footer')
