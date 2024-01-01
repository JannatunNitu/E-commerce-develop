{{-- Header & Footer extends here --}}
@extends('Frontend.frontendLayouts.mainlayouts')


{{-- Main_frontend layouts starts here --}}
@section('Main_frontend')

{{-- Banner slider includes here --}}
@include('Frontend.frontend_homepage.banner_slider')
{{-- Banner slider includes ends here --}}

{{-- featured-area start --}}
@include('Frontend.frontend_homepage.featured_area')
{{--  featured-area end  --}}

{{-- start count-down-section --}}
@include('Frontend.frontend_homepage.dealOfTheDay')
{{-- end count-down-section --}}

{{-- best seller start --}}
@include('Frontend.frontend_homepage.bestSeller')
{{-- best seller end --}}

{{-- product-area start --}}
@include('Frontend.frontend_homepage.latestProduct')
{{-- product-area end --}}

{{-- testmonial-area start --}}
@include('Frontend.frontend_homepage.testimonial')
{{-- testmonial-area end --}}

{{-- start social-newsletter-section --}}
@include('Frontend.frontend_homepage.newsletter')
{{-- end social-newsletter-section --}}

@endsection
{{-- Main_frontend layouts ends here --}}
 
    
