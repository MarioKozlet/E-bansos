@include('loaders/css')
@include('component/menu')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h2 style="color:black">Selamat datang di portal</h2>
                <h1 style="text-align:left;color:black; font-size: 30px;">Sistem Online Data Penerima Bantuan Sosial</h1>
                <h2 style="color:black">Pemerintah Kabupaten Ciamis</h2>
                <p style="text-align:justify;">Program bantuan sosial dirancang pemerintah untuk mendukung kesejahteraan
                    masyarakat yang terdampak ekonominya akibat pandemi COVID-19.
                    <a href="assets/img/bansos-1.png"class="glightbox play-btn mb-4">
                        <u><strong>Lihat Selengkapnya</strong></u></a>
                <p>
                <p>Sekarang Anda dapat melihat daftar penerima bantuan di wilayah Anda.
                <p>
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal"
                        data-target="#exampleModal" style="font-size: 14px;">
                        Lihat Daftar Penerimaan Bantuan <i class='fas fa-external-link-alt'></i>
                    </button>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero-img.png" class="img-fluid" alt=""width="500" height="600">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
@include('modal/modal-search')
@include('loaders/js')
