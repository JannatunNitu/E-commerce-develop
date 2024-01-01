{{-- Backend header starts here --}}
@include('Backend.backendLayouts.header')
{{-- Backend header ends here --}}


{{-- Maincontent starts here --}}
@yield('Main_backend')
{{-- Maincontent ends here --}}

{{-- Backend footer starts here --}}
@include('Backend.backendLayouts.footer')
{{-- Backend footer ends here --}}