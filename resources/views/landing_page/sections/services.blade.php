    <div class="container-fluid service pb-5 py-5">
                <div class="container pb-5">
                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                        <h4 class="text-primary">Our Services</h4>
                        <h1 class="display-5 mb-4">Top-Notch Sports Facilities at PlayZone</h1>
            <p class="mb-0">At PlayZone, we offer a variety of state-of-the-art sports courts tailored to meet the needs of every athlete. From basketball to tennis, our facilities provide an unparalleled experience for all sports enthusiasts. Discover the perfect court for your game and enjoy our premium amenities.</p>
        </div>
                    <div class="row g-4">
                           @foreach($sportTypes as $sportType)
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
        <div class="service-item">
            <div class="service-img">
                <img src="{{ asset('storage/' . $sportType->sport_image) }}" class="img-fluid rounded-top w-100" alt="{{ $sportType->sport_type }}">
            </div>
            <div class="rounded-bottom p-4">
                <a href="#" class="h4 d-inline-block mb-4">{{ $sportType->sport_type }}</a>
                            <p class="mb-4">Experience the best in {{ ($sportType->sport_type) }} with our top-of-the-line courts. </p>
            </div>
        </div>
    </div>
@endforeach
                            </div>
                    </div>
                </div>
      