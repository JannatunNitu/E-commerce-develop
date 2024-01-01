{{-- Header & Footer extends here --}}
@extends('Frontend.layouts.mainlayouts')


{{-- Main_frontend layouts starts here --}}
@section('Main_frontend')

{{-- Banner slider includes here --}}
@include('Frontend.homepage.banner_slider')
{{-- Banner slider includes ends here --}}

{{-- featured-area start --}}
@include('Frontend.homepage.featured_area')
{{--  featured-area end  --}}

{{-- start count-down-section --}}
@include('Frontend.homepage.dealOfTheDay')
{{-- end count-down-section --}}

{{-- best seller start --}}
@include('Frontend.homepage.bestSeller')
{{-- best seller end --}}

{{-- product-area start --}}
@include('Frontend.homepage.latestProduct')
{{-- product-area end --}}

{{-- testmonial-area start --}}
@include('Frontend.homepage.testimonial')
{{-- testmonial-area end --}}

{{-- start social-newsletter-section --}}
@include('Frontend.homepage.newsletter')
{{-- end social-newsletter-section --}}

@endsection
{{-- Main_frontend layouts ends here --}}
 
    
