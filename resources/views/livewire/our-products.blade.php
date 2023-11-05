<div>
    <div class="hero_area">
    @include('layout.landingheader')
    </div>
    <section class="service_section layout_padding">
        <div class="container">
        <div class="heading_container">
            <h2>
            Our Products
            </h2>
            <p>
            Statement....
            </p>
        </div>
        <div class="row">
            @for($x = 0; $x < 4; $x++)
            <div class="col-md-6 col-lg-3">
            <div class="box">
                <div class="img-box">
                <img src="images/default.png" width="300" alt="">
                </div>
                <div class="detail-box">
                <h5>
                    Sample Product
                </h5>
                <p>
                    Statement....
                </p>
                <a href="">
                    <span>
                    Read More
                    </span>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
                </div>
            </div>
            </div>
            @endfor
        </div>
        <div class="btn-box">
            <a href="">
            View More
            </a>
        </div>
        </div>
    </section>
</div>