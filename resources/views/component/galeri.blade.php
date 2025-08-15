<style>
    /* Modal Overlay */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0, 0, 0, 0.8);
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    /* Modal Content */
    .modal-content {
        background: #111;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        max-width: 700px;
        color: #fff;
        text-align: center;
        position: relative;
    }

    .modal-content img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    /* Close Button */
    .modal-close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 28px;
        color: gold;
        cursor: pointer;
    }
</style>

<!-- GALERI -->
<section id="gallery" class="gallery section-modern">
    <div class="container">
        <div data-aos="fade-up">
            <h2 class="section-title">Galeri Hasil Karya</h2>
            <p class="section-subtitle">Setiap potongan adalah karya seni yang mencerminkan kepribadian dan gaya hidup Anda</p>
        </div>
        <div class="gallery-grid">
            @foreach ( $getModel as $item )
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('storage/').'/'.$item->image_path }}" alt="{{$item->name}}">
                <div class="gallery-overlay">
                    <h4> {{$item->name}} </h4>
                    <p class="p-4" > {{ $item->description }} </p>
                    <button class="btn" onclick="openModal(this)">Lihat Detail</button>
                </div>
            </div>
            @endforeach
            <!-- Tambahkan item lain seperti di kode awal -->
        </div>
    </div>
</section>

<!-- MODAL -->
<div id="galleryModal" class="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="">
        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
    </div>
</div>

<script>
    function openModal(btn) {
        const item = btn.closest(".gallery-item");
        const img = item.querySelector("img");
        const title = item.querySelector("h4").innerText;

        document.getElementById("modalImage").src = img.src;
        document.getElementById("modalTitle").innerText = title;
        document.getElementById("modalDesc").innerText = "Deskripsi lengkap untuk " + title + " akan ditampilkan di sini.";

        document.getElementById("galleryModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("galleryModal").style.display = "none";
    }

    window.onclick = function(event) {
        const modal = document.getElementById("galleryModal");
        if (event.target === modal) {
            closeModal();
        }
    }
</script>
