@extends('layout.portofolio')

@section('content')
<!-- START SECTION PORTFOLIO DETAIL -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="carousel_slider owl-carousel owl-theme" data-margin="20" data-dots="false" data-loop="true" data-nav="true" data-autoplay="true" data-items="1">
                    <div class="item">
                        <img src="{{ asset('thumbnail/' . $detail->thumbnail) }}" alt="portfolio_img1"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('foto_project1/' . $detail->foto_project) }}" alt="portfolio_img2"/>
                    </div>
                    <div class="item">
                        <img src="{{ asset('foto_project2/' . $detail->foto_project2) }}" alt="portfolio_img3"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="list_none portfolio_info_box">
                    <li><span class="text-uppercase">CLIENT</span>{{ $detail->nama_client }}</li>
                    <li><span class="text-uppercase">Date</span>{{ $detail->date }}</li>
                    <li><span class="text-uppercase">Category</span>{{ $detail->nama_kategori }}</li>
                    <li><span class="text-uppercase">PROJECT link</span>{{ $detail->link }}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pf_content">
                    <div class="heading_s1">
                        <h2>{{ $detail->nama_project }}</h2>
                    </div>
                    <p>{!! $detail->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PORTFOLIO DETAIL -->
@endsection
