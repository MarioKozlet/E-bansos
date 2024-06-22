@include('loaders/css')
@include('component/menu')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h2 style="color:black">Selamat datang di E-Bansos</h2>
                <h1 style="text-align:left;color:black; font-size: 30px;">Sistem Online Data Penerima Bantuan Sosial</h1>
                <h2 style="color:black">Pemerintah Kendari</h2>
                <p>Sekarang Anda dapat melihat daftar penerima bantuan.</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('penerima-bantuan') }}" class="btn btn-primary rounded" style="font-size: 14px;">
                        Lihat Daftar Penerimaan Bantuan <i class='fas fa-external-link-alt'></i>
                    </a>
                    <button type="button" class="btn text-light rounded" style="font-size: 14px; background: #0783f0">
                        Pendaftaran Bansos
                    </button>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero-img.png" class="img-fluid" alt=""width="500" height="600">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
@include('modal/modal-search')
@include('loaders/js')
