@include('layouts.partials-website.header')

<!-- /. Header -->
<body id="page-top">   
    {{-- @include('layouts.partials.messages') --}}
    @if (\Session::get('lang') == 'es')		
    	@include('layouts.partials-website.navbar-es')
	@else
    	@include('layouts.partials-website.navbar')
    @endif

    @yield('content')


   <!-- /Footer -->
   @include('layouts.partials-website.botton-bar')

    @include('layouts.partials-website.footer')
   <!-- /. Footer -->

   

	@yield('scripts')
</body>

</html>
