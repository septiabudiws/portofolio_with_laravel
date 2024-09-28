@extends('layout.dashboard')

@section('content')
  <!-- START SECTION BANNER -->
  <section id="home_section" class="banner_section banner_shape">
    <div class="banner_slide_content pb-0">
      <div class="container"><!-- STRART CONTAINER -->
        <div class="row justify-content-between align-items-center">
          <div class="col-xl-6 col-md-7">
            <div class="banner_content banner_center_content">
              <h2 class="animation" data-animation="fadeInUp" data-animation-delay="0.02s">Hello, I'm SeptiabudiWS</h2>
              <div id="typed-strings" class="d-none">
                <b>Graphic Designer</b> <b>Web Developer</b>
              </div>
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">I'm a Freelance <span
                  id="typed-text" class="text_default"></span></h4>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.04s">Saya adalah developer website
                dan graphic designer berpengalaman, ahli Laravel dan proyek web interaktif.</p>
              <a href="{{ asset('martyn') }}/CV_FIX.pdf" download="CV_FIX.pdf" target="blank"
                class="btn btn-default rounded-0 btn-aylen animation" data-animation="fadeInUp"
                data-animation-delay="0.05s">Download CV</a>
            </div>
          </div>
          <div class="col-xl-5 col-md-5">
            <div class="banner_img animation" data-animation="fadeInUp" data-animation-delay="0.02s">
              <img src="{{ asset('martyn') }}/assets/images/myimage3.png" alt="my_image" />
            </div>
          </div>
        </div>
      </div><!-- END CONTAINER-->
    </div>
    <div class="social_banner social_vertical">
      <ul class="list_none social_icons text-center">
        <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
        <li><a href="https://www.youtube.com/c/SeptiabudiWS" target="blank" class="sc_youtube"><i
              class='bx bxl-youtube'></i></a></li>
        <li><a href="https://www.instagram.com/septiabudi.ws/" target="blank" class="sc_instagram"><i
              class='bx bxl-instagram'></i></i></a></li>
        <li><a href="https://wa.me/085335255308" target="_blank" class="sc_wa"><i class='bx bxl-whatsapp'></i></a></li>
      </ul>
    </div>
  </section>
  <!-- END SECTION BANNER -->

  <!-- START SECTION ABOUT US -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="about_img animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <img src="{{ asset('martyn') }}/assets/images/about.png" alt="about_img" />
          </div>
        </div>
        <div class="col-md-8">
          <div class="about_info animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <div class="heading_s1 mb-3">
              <h2>About Me</h2>
            </div>
            <p>Hai, nama saya Mohammad Septiabudi Wicaksono atau biasa dipanggil septa, asep, cecep. saya adalah seorang
              Web Developer yang saat ini mengemban ilmu di Universitas KH. Bahaudin Mudhary Madura.</p>
            <p>Disana saya mengambil jurusan informatika yang dimana adalah jurusan yang saya ambil sejak waktu SMK dan
              sekarang sedang memperdalam ilmu dalam Web Developer dan sebagainya.</p>
            <hr>
            <div class="heading_s1 mb-4">
              <h5>Basic Info</h5>
            </div>
            <ul class="profile_info list_none">
              <li>
                <span class="title">Tanggal Lahir:</span>
                <p>20 September 2003</p>
              </li>
              <li>
                <span class="title">Phone No:</span>
                <a href="https://wa.me/085335255308" target="_blank">+ (62) 853-3525-5308</a>
              </li>
              <li>
                <span class="title">Email:</span>
                <a href="mailto:septiabudiws@gmail.com">septiabudiws@gmail.com</a>
              </li>
              <li>
                <span class="title">Address:</span>
                <p> Jl. Raya Gapura, Sumenep, Indonesia </p>
              </li>
              <li>
                <span class="title">Website:</span>
                <a href="#">septiabudiws.site</a>
              </li>
              <li>
                <span class="title">Freelance:</span>
                <p>Available</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION ABOUT US -->

  <!-- START SECTION SERVICES -->
  <section id="services" class="bg_gray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 text-center">
          <div class="heading_s1 animation text-center" data-animation="fadeInUp" data-animation-delay="0.02s">
            <h2>Awesome Services</h2>
          </div>
          <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Beberapa keahlian saya yang mungkin
            anda butuhkan dalam bisnis atau pekerjaan anda. Visi dari program saya adalah membuat senyuman di setiap
            halaman.</p>
        </div>
      </div>
      <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.04s">
        <div class="col-lg-4 col-sm-6 text-center">
          <div class="icon_box icon_box_style_1">
            <div class="box_icon mb-3">
              <i class="ti-desktop"></i>
            </div>
            <div class="icon_box_content">
              <h5>Website Developer</h5>
              <p>Jasa Pembuatan Website seperti portofolio probadi, landing page, dan profile bisnis</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <div class="icon_box icon_box_style_1">
            <div class="box_icon mb-3">
              <i class="ti-video-camera"></i>
            </div>
            <div class="icon_box_content">
              <h5>Graphic Design</h5>
              <p>Ada keperluan untuk membuat poster, desain baju, jaket dan yang
                lain. jangan khawatir serahkan pada saya dan masalah
                terselesaikan.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <div class="icon_box icon_box_style_1">
            <div class="box_icon mb-3">
              <i class="ti-camera"></i>
            </div>
            <div class="icon_box_content">
              <h5>Editor Video</h5>
              <p>Ada tugas atau keperluan untuk video? jangan bingung, silahkan pakai jasa saya</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION SERVICES -->

  <!-- START SECTION PORTFOLIO -->
  <section id="portfolio" class="pb_70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 text-center">
          <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <h2>My Portfolio</h2>
          </div>
          <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Beberapa karya digital yang saya
            kerjakan.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="cleafix small_divider"></div>
        </div>
      </div>
      <div class="row mb-4 mb-md-5">
        <div class="col-md-12 text-center">
          <ul class="list_none grid_filter filter_tab2 animation" data-animation="fadeInUp"
            data-animation-delay="0.04s">
            <li><a href="#" class="current" data-filter="*">all</a></li>
            @foreach ($kategori as $item)
              <li><a href="#" data-filter=".{{ $item->id }}">{{ $item->nama_kategori }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="grid_container gutter_medium work_col3 portfolio_gallery portfolio_style2 animation"
            data-animation="fadeInUp" data-animation-delay="0.04s">
            <li class="grid-sizer"></li>
            <!-- START PORTFOLIO ITEM -->
            @foreach ($portofolio as $get)
              <li class="grid_item {{ $get->kategori_id }}">
                <div class="portfolio_item" data-tilt>
                  <a href="#" class="image_link">
                    <img src="{{ asset('thumbnail/' . $get->thumbnail) }}" alt="image">
                  </a>
                  <div class="portfolio_content">
                    <div class="link_container">
                      <a href="{{ asset('thumbnail/' . $get->thumbnail) }}" class="image_popup"><i
                          class="ion-image"></i></a>
                      <a href="/porto/{{ $get->token_porto }}"><i class="ion-plus"></i></a>
                    </div>
                    <h5><a href="/porto/{{ $get->token_porto }}">{{ $get->nama_project }}</a></h5>
                    <p>{{ $get->nama_kategori }}</p>
                  </div>
                </div>
              </li>
            @endforeach
            <!-- END PORTFOLIO ITEM -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION PORTFOLIO -->

  <!-- START SECTION BLOG -->
  <section id="blog" class="pb_20 bg_gray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 text-center">
          <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <h2>My Letest Blog</h2>
          </div>
          <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="clearfix small_divider"></div>
        </div>
      </div>
      <div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
        <div class="carousel_slider testimonial_style1 owl-carousel owl-theme" data-margin="20" data-dots="false"
          data-autoplay="true" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3"}}'>
          @foreach ($blog as $item)
            <div class="item">
              <div class="blog_post">
                <div class="blog_img">
                  <a href="/blog/{{ $item->token_blog }}">
                    <img src="{{ asset('thumbnail_blog/' . $item->thumbnail_blog) }}" alt="blog_small_img1">
                  </a>
                </div>
                <div class="blog_content">
                  <div class="blog_text">
                    <div class="post_category"><a href="/blog/{{ $item->token_blog }}">{{ $item->kategori_blog }}</a>
                    </div>
                    <h5 class="blog_title"><a href="/blog/{{ $item->token_blog }}">{{ $item->judul_blog }}</a></h5>
                    <ul class="list_none blog_meta">
                      <li><a href="/blog/{{ $item->token_blog }}"><i class="ion-calendar"></i>{{ $item->date }}</a>
                      </li>
                    </ul>
                    <p>{{ $item->deskripsi_singkat }}</p>
                    <a href="/blog/{{ $item->token_blog }}" class="read_more">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION BLOG -->

  <!-- START SECTION CONTACT -->
  <section id="contact" class="small_pt">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <h2>Contact Me</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="field_form form_style3 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Thank you!</strong> Your message was delivered
            </div>
            <form name="porto-contact">
              <div class="row">
                <div class="form-group col-12">
                  <input required="required" placeholder="Enter Name *" id="first-name" class="form-control"
                    name="nama" type="text">
                </div>
                <div class="form-group col-12">
                  <input placeholder="Enter Mobile Phone Number *" id="number" class="form-control" name="nomer_hp"
                    type="text">
                </div>
                <div class="form-group col-12">
                  <input required="required" placeholder="Enter Email *" id="email" class="form-control"
                    name="email" type="email">
                </div>
                <div class="form-group col-lg-12">
                  <textarea required="required" placeholder="Message *" id="description" class="form-control" name="pesan"
                    rows="5"></textarea>
                </div>
                <div class="col-lg-12">
                  <button type="submit" title="Submit Your Message!"
                    class="btn btn-default btn-kirim rounded-0 btn-aylen" value="Submit">Submit</button>
                  <button type="submit" disabled class="btn btn-default btn-loading rounded-0 d-none"
                    value="Submit">
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...</button>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="alert-msg" class="alert-msg text-center"></div>
                </div>
              </div>
            </form>

            <script>
              const scriptURL =
                'https://script.google.com/macros/s/AKfycbwGHrfDgnoNeXw-DRTfQBeSNoWDfsnsP28I7rlJKzPkt4mq1RhzebbOdbAmGklOVrzbLQ/exec';
              const form = document.forms['porto-contact']
              const btnKirim = document.querySelector('.btn-kirim');
              const btnLoading = document.querySelector('.btn-loading');
              const myAlert = document.querySelector('.my-alert');

              form.addEventListener('submit', e => {
                e.preventDefault()
                // ketika tombol submit diklik
                // tampilkan tombol loading, hilangkan tombol kirim
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                  })
                  .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    myAlert.classList.toggle('d-none')

                    form.reset();
                    console.log('Success!', response)
                  })
                  .catch(error => console.error('Error!', error.message))
              })
            </script>

          </div>
        </div>
        <div class="col-md-6">
          <div class="contact_map mt-4 mt-md-0 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1177.338856900154!2d113.87216196644809!3d-6.999849449740748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1706413746946!5m2!1sid!2sid"
              allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- START SECTION CONTACT -->
@endsection
