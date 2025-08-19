<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Barber - Premium Barbershop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
    --primary-gold: #00E6FF;       /* Neon Blue utama (ganti aksen gold jadi neon) */
    --secondary-gold: #33AFFF;     /* Electric Blue lebih lembut */
    --dark-charcoal: #0A0F1C;      /* Dark navy midnight (background utama) */
    --light-charcoal: #111D2F;     /* Biru gelap untuk variasi section */
    --accent-white: #E6F7FF;       /* Putih kebiruan neon */
    --text-gray: #B3D9FF;          /* Biru pucat untuk teks */
    --border-gray: #1F3B54;        /* Biru keabu-abuan (border) */
    --success-green: #00FF9D;      /* Neon Green biar matching */
    --warning-orange: #FF6B35;     /* Neon Orange */
}


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-gray);
            background: var(--dark-charcoal);
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* Modern Glassmorphism Navbar */
        .navbar {
            background: rgba(13, 17, 23, 0.85) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(212, 175, 55, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar.scrolled {
            background: rgba(13, 17, 23, 0.95) !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary-gold), var(--secondary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-nav .nav-link {
            color: var(--text-gray) !important;
            font-weight: 500;
            margin: 0 15px;
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-gold), var(--secondary-gold));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::before {
            width: 100%;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-gold) !important;
            transform: translateY(-2px);
        }

        /* Modern Hero Section with Video Background */
        .hero {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(13, 17, 23, 0.8), rgba(28, 31, 38, 0.6)),
                        url('https://images.unsplash.com/photo-1503951458645-643d53bfd90f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 3;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--accent-white), var(--primary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 600px;
        }

        .btn-modern {
            background: linear-gradient(135deg, var(--primary-gold), var(--secondary-gold));
            border: none;
            padding: 18px 40px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 50px;
            color: var(--dark-charcoal);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        .btn-modern:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.5);
            color: var(--dark-charcoal);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .floating-icon {
            position: absolute;
            color: var(--primary-gold);
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .floating-icon:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-icon:nth-child(2) { top: 60%; right: 15%; animation-delay: 2s; }
        .floating-icon:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Modern Section Styling */
        .section-modern {
            padding: 120px 0;
            position: relative;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 600;
            text-align: center;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, var(--accent-white), var(--primary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto 4rem;
        }

        /* Services Cards - Modern Design */
        .services {
            background: linear-gradient(135deg, var(--light-charcoal), var(--dark-charcoal));
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-gold), var(--secondary-gold));
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }

        .service-card:hover::before {
            transform: translateX(0);
        }

        .service-card:hover {
            transform: translateY(-15px);
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-gold);
            box-shadow: 0 25px 50px rgba(212, 175, 55, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-gold), var(--secondary-gold));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--dark-charcoal);
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-price {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 600;
            color: var(--primary-gold);
        }

        /* Gallery Section - Modern Grid */
        .gallery {
            background: var(--dark-charcoal);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .gallery-item {
            position: relative;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            group: hover;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.9), rgba(244, 208, 63, 0.9));
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay h4 {
            color: var(--dark-charcoal);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .gallery-overlay .btn {
            background: var(--dark-charcoal);
            color: var(--accent-white);
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .gallery-overlay .btn:hover {
            transform: scale(1.05);
        }

        /* Testimonials - Modern Cards */
        .testimonials {
            background: linear-gradient(135deg, var(--light-charcoal), var(--dark-charcoal));
        }

        .testimonial-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.1);
            border-radius: 20px;
            padding: 2.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 4rem;
            color: var(--primary-gold);
            font-family: 'Playfair Display', serif;
            opacity: 0.3;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
        }

        .testimonial-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-gold);
            margin-bottom: 1rem;
        }

        .stars {
            color: var(--primary-gold);
            margin-bottom: 1rem;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--primary-gold);
        }

        /* Contact Section - Modern Form */
        .contact {
            background: var(--dark-charcoal);
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.1);
            border-radius: 20px;
            padding: 3rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(10px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-gold), var(--secondary-gold));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--dark-charcoal);
            margin-right: 1.5rem;
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 15px;
            color: var(--text-gray);
            padding: 15px 20px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-gold);
            box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
            color: var(--accent-white);
        }

        /* Footer - Modern Design */
        .footer {
            background: var(--light-charcoal);
            border-top: 1px solid var(--border-gray);
            padding: 4rem 0 2rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-gray);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-link:hover {
            background: var(--primary-gold);
            color: var(--dark-charcoal);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }

            .service-card {
                padding: 2rem 1.5rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .contact-card {
                padding: 2rem;
            }

            .section-modern {
                padding: 80px 0;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid var(--dark-charcoal);
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Scroll Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-gold), var(--secondary-gold));
            z-index: 9999;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Navigation -->
   @include('component.nav')

    <!-- Hero Section -->
    @include('component.hero')
    @include('component.about')
    <!-- Services Section -->
    @include('component.service')
    <!-- Gallery Section -->
    @include('component.galeri')

    <!-- Testimonials Section -->
    @include('component.testi')

    <!-- Contact Section -->
   @include('component.contact')

    <!-- Footer -->
    @include('component.footer')
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Progress Bar
        function updateProgressBar() {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
            const clientHeight = document.documentElement.clientHeight;
            const scrolled = (scrollTop / (scrollHeight - clientHeight)) * 100;
            document.getElementById('progressBar').style.width = scrolled + '%';
        }

        window.addEventListener('scroll', updateProgressBar);

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form handling
        document.getElementById('reservationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;

            // Show loading
            submitBtn.innerHTML = '<span class="loading me-2"></span>Memproses...';
            submitBtn.disabled = true;

            // Get form data
            const formData = new FormData(this);
            const name = this.querySelector('input[type="text"]').value;
            const phone = this.querySelector('input[type="tel"]').value;
            const service = this.querySelector('select').value;
            const barber = this.querySelectorAll('select')[1].value;
            const date = this.querySelector('input[type="date"]').value;
            const time = this.querySelectorAll('select')[2].value;

            // Simulate API call
            setTimeout(() => {
                if (name && phone && service && date && time) {
                    // Success
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Berhasil!';
                    submitBtn.classList.remove('btn-modern');
                    submitBtn.classList.add('btn-success');

                    // Show success message
                    alert(`🎉 Reservasi berhasil!\n\nHalo ${name}, reservasi Anda telah dikonfirmasi:\n\n📅 Tanggal: ${new Date(date).toLocaleDateString('id-ID')}\n⏰ Waktu: ${time}\n✂️ Layanan: ${service}\n👨‍💼 Barber: ${barber}\n\nKami akan menghubungi Anda di ${phone} untuk konfirmasi lebih lanjut.\n\nTerima kasih telah memilih Royal Barber! 👑`);

                    this.reset();

                    // Reset button after 3 seconds
                    setTimeout(() => {
                        submitBtn.innerHTML = originalContent;
                        submitBtn.classList.remove('btn-success');
                        submitBtn.classList.add('btn-modern');
                        submitBtn.disabled = false;
                    }, 3000);
                } else {
                    // Error
                    submitBtn.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>Error';
                    submitBtn.classList.add('btn-danger');
                    alert('❌ Mohon lengkapi semua field yang diperlukan!');

                    // Reset button
                    setTimeout(() => {
                        submitBtn.innerHTML = originalContent;
                        submitBtn.classList.remove('btn-danger');
                        submitBtn.disabled = false;
                    }, 2000);
                }
            }, 2000);
        });

        // Gallery interactions
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                const title = this.querySelector('h4').textContent;
                const img = this.querySelector('img');

                // Create modal-like effect (simplified)
                const overlay = document.createElement('div');
                overlay.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.9);
                    z-index: 9999;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                `;

                const modalImg = document.createElement('img');
                modalImg.src = img.src;
                modalImg.style.cssText = `
                    max-width: 90%;
                    max-height: 90%;
                    object-fit: contain;
                    border-radius: 10px;
                `;

                overlay.appendChild(modalImg);
                document.body.appendChild(overlay);

                overlay.addEventListener('click', () => {
                    document.body.removeChild(overlay);
                });
            });
        });

        // Service card animations
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Animate service prices on scroll
        const serviceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const priceElement = entry.target.querySelector('.service-price');
                    if (priceElement && !priceElement.classList.contains('animated')) {
                        priceElement.classList.add('animated');
                        animatePrice(priceElement);
                    }
                }
            });
        });

        document.querySelectorAll('.service-card').forEach(card => {
            serviceObserver.observe(card);
        });

        function animatePrice(element) {
            const finalPrice = element.textContent;
            const price = parseInt(finalPrice.replace(/\D/g, ''));
            let current = 0;
            const increment = price / 50;

            const timer = setInterval(() => {
                current += increment;
                if (current >= price) {
                    current = price;
                    clearInterval(timer);
                }
                element.textContent = `Rp ${Math.floor(current).toLocaleString('id-ID')}`;
            }, 30);
        }

        // Add subtle parallax effect to hero
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-bg');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Navbar active state
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Add loading states to buttons
        document.querySelectorAll('.btn:not([type="submit"])').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (this.getAttribute('href') && this.getAttribute('href').startsWith('#')) {
                    return; // Skip navigation links
                }

                e.preventDefault();
                const originalText = this.innerHTML;
                this.innerHTML = '<span class="loading me-2"></span>Loading...';

                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 1500);
            });
        });
    </script>
</body>
</html>