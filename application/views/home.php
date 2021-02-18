<main class="home">
    <!-- Banner -->
    <section class="home-banner custom-my">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h1 class="banner-title">VIRTUDROBE</h1>
                    <p class="banner-text">The first Virtual Wardrobe in Indonesia. Start using our technology to
                        reflect your lifestyle.</p>
                    <a class="btn c-btn-primary" href="#">Discover Now</a>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img class="img-fluid" src="<?= base_url('assets/'); ?>img/home-vector.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission -->
    <section class="vision-mission custom-my">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <h1 class="vision-mission-title">
                        VISION & MISSION
                    </h1>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="text-box">
                        <p class="vision-mission-text">Our Vision is to become a household name of quality, fashionable
                            and affordable clothing and apparel.</p>
                    </div>
                    <div class="text-box">
                        <p class="vision-mission-text">Our Mission is to provide what you will love to wear</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trends -->
    <section class="home-trends custom-my">
        <div class="container-fluid">
            <div class="trends-heading mb-3">
                <h1 class="trends-title">TRENDS</h1>
                <p>Check out what’s trending these day</p>
            </div>
        </div>
        <div class="trends-clothes py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="clothes">
                                <img class="clothes-img mb-3" src="<?= base_url('assets/'); ?>img/clothes/clothes1.jpg" alt="Clothes">
                                <h3>Lorem Ipsum</h3>
                                <p>ut sem viverra aliquet eget sit</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="clothes">
                                <img class="clothes-img mb-3" src="<?= base_url('assets/'); ?>img/clothes/clothes2.jpg" alt="Clothes">
                                <h3>Lorem Ipsum</h3>
                                <p>ut sem viverra aliquet eget sit</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="clothes">
                                <img class="clothes-img mb-3" src="<?= base_url('assets/'); ?>img/clothes/clothes3.jpg" alt="Clothes">
                                <h3>Lorem Ipsum</h3>
                                <p>ut sem viverra aliquet eget sit</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="home-products custom-my">
        <div class="container">
            <div class="products-heading">
                <h1 class="product-title">PRODUCTS</h1>
                <p>Shop Now!</p>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-women-tab" data-toggle="pill" href="#pills-women" role="tab" aria-controls="pills-women" aria-selected="false">Women's</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-man-tab" data-toggle="pill" href="#pills-man" role="tab" aria-controls="pills-man" aria-selected="false">Man's</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#"><img class="products-clothes" src="<?= base_url('assets/'); ?>img/clothes/clothes4.jpg" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#"><img class="products-clothes" src="<?= base_url('assets/'); ?>img/clothes/clothes5.jpg" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#"><img class="products-clothes" src="<?= base_url('assets/'); ?>img/clothes/clothes6.png" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#"><img class="products-clothes" src="<?= base_url('assets/'); ?>img/clothes/clothes7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">...
                </div>
                <div class="tab-pane fade" id="pills-man" role="tabpanel" aria-labelledby="pills-man-tab">...
                </div>
            </div>
        </div>
    </section>
</main>