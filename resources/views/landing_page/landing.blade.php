
    @extends('landing_page.layouts.master')
@section('content')

@include('landing_page.sections.hero')
@include('landing_page.sections.about')


@include('landing_page.sections.services')
<!-- Services End -->

<!-- Features Start -->
@include('landing_page.sections.features')

<!-- Features End -->


<!-- Offer Start -->
@include('landing_page.sections.offer')

<!-- Offer End -->

<!-- Blog Start -->
@include('landing_page.sections.blog')

<!-- Blog End -->


<!-- FAQs Start -->

@include('landing_page.sections.FAQs')
<!-- FAQs End -->


<!-- Team Start -->
@include('landing_page.sections.team')

<!-- Team End -->

<!-- Testimonial Start -->


@include('landing_page.sections.testimonial') 

@endsection

<!--  Hero Start -->

