<style>
    .contact-section {
        padding: 60px 0;
        background: #111;
        color: #fff;
    }

    .contact-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .contact-subtitle {
        font-size: 1rem;
        color: #ccc;
        margin-bottom: 40px;
    }

    .contact-card {
        background: #1d1d1d;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .contact-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: gold;
        color: #111;
        font-size: 1.8rem;
        margin-bottom: 15px;
    }

    .contact-card h6 {
        font-weight: bold;
        margin-bottom: 5px;
        color: gold;
    }

    .contact-card p {
        font-size: 0.95rem;
        color: #ccc;
        margin: 0;
        line-height: 1.5;
    }
</style>

<section class="contact-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="contact-title">Hubungi Kami</h2>
            <p class="contact-subtitle">
                Siap untuk transformasi gaya Anda? Buat janji atau kunjungi langsung barbershop kami.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6>Lokasi</h6>
                    <p>Jl. Sudirman Raya No. 123<br>Pekanbaru, Riau 28116</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h6>Telepon</h6>
                    <p>+62 761 123-456<br>+62 812-3456-7890</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h6>Email</h6>
                    <p>info@royalbarber.co.id<br>booking@royalbarber.co.id</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h6>Jam Operasional</h6>
                    <p>Senin - Sabtu: 09:00 - 21:00<br>Minggu: 10:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>
</section>
