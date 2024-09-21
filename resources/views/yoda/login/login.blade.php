@extends('layout.login')

@section('content')
  <section class="fxt-template-animation fxt-template-layout4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-12 fxt-bg-wrap">
          <div class="fxt-bg-img" data-bg-image="{{ asset('loginn') }}/img/figure/bg4-l.jpg">
            <div class="fxt-header">
              <div class="fxt-transformY-50 fxt-transition-delay-1">
                <a href="/" class="fxt-logo"><img src="{{ asset('martyn') }}/assets/images/fav.png"
                    alt="Logo"></a>
              </div>
              <div class="fxt-transformY-50 fxt-transition-delay-2">
                <h1>Welcome To Halaman Admin</h1>
              </div>
              <div class="fxt-transformY-50 fxt-transition-delay-3">
                <p>Selamat datang di halaman admin, explore lebih web anda dengan login disini.</p>
              </div>
            </div>
            <ul class="fxt-socials">
              <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href="#" title="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="twitter"><i
                    class="fab fa-twitter"></i></a></li>
              <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="google"><i
                    class="fab fa-google-plus-g"></i></a></li>
              <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="linkedin"><i
                    class="fab fa-linkedin-in"></i></a></li>
              <li class="fxt-youtube fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="youtube"><i
                    class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-12 fxt-bg-color">
          <div class="fxt-content">
            <div class="fxt-form">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="email" class="input-label">Email Address</label>
                  <input value="{{ old('email') }}" type="email" id="email" class="form-control" name="email"
                    required="required">
                </div>
                <div class="form-group">
                  <label for="password" class="input-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" placeholder="********"
                    required="required">
                  <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>
                <div class="form-group">
                  <button type="submit" class="fxt-btn-fill">Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
