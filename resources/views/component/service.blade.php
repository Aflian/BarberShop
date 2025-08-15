<section id="services" class="services section-modern">
    <div class="container">
        <div data-aos="fade-up">
            <h2 class="section-title">Layanan Premium Kami</h2>
            <p class="section-subtitle">Setiap layanan dirancang untuk memberikan pengalaman terbaik dengan standar
                kualitas tertinggi</p>
        </div>
        <div class="row g-4">
            @foreach ($getService as $gs)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card text-center h-100">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h4 class="mb-3"> {{ $gs->name }} </h4>
                        <p class="mb-4 p-2 "> {{ $gs->description }} </p>
                        <div class="service-price">Rp .{{ $gs->price }} </div>
                        <p class="mb-4"> Durasi : {{ $gs->duration_minutes }} / Menit </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
