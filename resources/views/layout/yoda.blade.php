<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="author" content="Hypeople">
  <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('yoda') }}/app-assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/image/fav.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}//image/fav.png">
  <link rel="manifest" href="https://yoda.hypeople.studio/yoda-admin-template/app-assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="https://yoda.hypeople.studio/yoda-admin-template/app-assets/favicon/safari-pinned-tab.svg"
    color="#0010f7">
  <meta name="msapplication-TileColor" content="#0010f7">
  <meta name="theme-color" content="#ffffff">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />

  <!-- Plugin -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/plugin/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/icons/iconly/index.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/icons/remix-icon/index.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/colors.css">

  <!-- Base -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/base/typography.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/base/base.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/theme/colors-dark.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/theme/theme-dark.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/custom-rtl.css">

  <!-- Layouts -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/layouts/sider.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/layouts/header.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/layouts/page-content.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/components.css">
  <!-- Customizer -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/layouts/customizer.css">

  <!-- Charts -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/plugin/apex-charts.css">

  <!-- Pages -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/app-assets/css/pages/dashboard-analytics.css">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="{{ asset('yoda') }}/assets/css/style.css">

  <title>Dashboard THE-K2</title>

  <script>
    ! function(t, h, e, j, s, n) {
      t.hj = t.hj || function() {
          (t.hj.q = t.hj.q || []).push(arguments)
        },
        t._hjSettings = {
          hjid: 2628580,
          hjsv: 6
        },
        s = h.getElementsByTagName("head")[0],
        (n = h.createElement("script")).async = 1,
        n.src = "https://static.hotjar.com/c/hotjar-" + t._hjSettings.hjid + ".js?sv=" + t._hjSettings.hjsv,
        s.appendChild(n)
    }(window, document)
  </script>
</head>

<body>
  <main class="hp-bg-color-dark-90 d-flex min-vh-100">
    <div class="hp-sidebar hp-bg-color-black-20 hp-bg-color-dark-90 border-end border-black-40 hp-border-color-dark-80">
      <div class="hp-sidebar-container">
        <div class="hp-sidebar-header-menu">
          <div class="row justify-content-between align-items-end mx-0">
            <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
              <div class="hp-cursor-pointer">
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                    fill="#B2BEC3"></path>
                  <path
                    d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                    fill="#B2BEC3"></path>
                </svg>
              </div>
            </div>

            <div class="w-auto px-0">
              <div class="hp-header-logo d-flex align-items-center">
                <a href="/admin" class="position-relative">

                  <img class="hp-logo hp-sidebar-visible hp-dark-none"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                  <img class="hp-logo hp-sidebar-visible hp-dark-block"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                  <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                  <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                  <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                  <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                    src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                </a>
              </div>
            </div>

            <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden">
              <div class="hp-cursor-pointer mb-4">
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                    fill="#B2BEC3"></path>
                  <path
                    d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                    fill="#B2BEC3"></path>
                </svg>
              </div>
            </div>
          </div>

          <ul>
            <li>
              <div class="menu-title">DASHBOARDS</div>

              <ul>
                <li>
                  <a href="/admin">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                      title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                    <span>
                      <span class="submenu-item-icon">
                        <i class="ri-database-line"></i>
                      </span>

                      <span>Dashboard</span>
                    </span>
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <div class="menu-title">Data Master</div>

              <ul>
                <li>
                  <a href="/user">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                      title="" data-bs-original-title="Contact" aria-label="Contact"></div>

                    <span>
                      <span class="submenu-item-icon">
                        <i class="ri-admin-line"></i>
                      </span>

                      <span>Admin</span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="javascript:;" class="submenu-item">
                    <span>
                      <span class="submenu-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                          fill="none">
                          <path
                            d="M3 6H21V18H3V6ZM2 4C1.44772 4 1 4.44772 1 5V19C1 19.5523 1.44772 20 2 20H22C22.5523 20 23 19.5523 23 19V5C23 4.44772 22.5523 4 22 4H2ZM13 8H19V10H13V8ZM18 12H13V14H18V12ZM10.5 10C10.5 11.3807 9.38071 12.5 8 12.5C6.61929 12.5 5.5 11.3807 5.5 10C5.5 8.61929 6.61929 7.5 8 7.5C9.38071 7.5 10.5 8.61929 10.5 10ZM8 13.5C6.067 13.5 4.5 15.067 4.5 17H11.5C11.5 15.067 9.933 13.5 8 13.5Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                          <path
                            d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                        </svg>
                      </span>

                      <span>Portofolio</span>
                    </span>

                    <div class="menu-arrow"></div>
                  </a>

                  <ul class="submenu-children" data-level="1">
                    <li>
                      <a href="/kategori">
                        <span>Kategori</span>
                      </a>
                    </li>

                    <li>
                      <a href="/porto">
                        <span>Works</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="/blog">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                      title="" data-bs-original-title="Contact" aria-label="Contact"></div>

                    <span>
                      <span class="submenu-item-icon">
                        <i class='bx bxl-blogger'></i>
                      </span>

                      <span>Blog</span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="javascript:;" style="pointer-events: none;">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                      title="" data-bs-original-title="Mailbox" aria-label="Mailbox"></div>
              </ul>
        </div>

        <div class="row justify-content-between align-items-center hp-sidebar-footer mx-0 hp-bg-color-dark-90">
          <div class="divider border-black-40 hp-border-color-dark-70 hp-sidebar-hidden mt-0 px-0"></div>

          <div class="col">
            <div class="row align-items-center">
              <div class="w-auto px-0">
                <div class="avatar-item bg-primary-4 d-flex align-items-center justify-content-center rounded-circle"
                  style="width: 48px; height: 48px;">
                  <img src="{{ asset('yoda') }}/app-assets/img/memoji/user-avatar-8.png" height="100%"
                    class="hp-img-cover">
                </div>
              </div>

              <div class="w-auto ms-8 px-0 hp-sidebar-hidden mt-4">
                <span class="d-block hp-text-color-black-100 hp-text-color-dark-0 hp-p1-body lh-1">Septa</span>
                <a href="/logout" class="hp-badge-text fw-normal hp-text-color-dark-30">Logout</a>
              </div>
            </div>
          </div>

          <div class="col hp-flex-none w-auto px-0 hp-sidebar-hidden">
            <a href="profile-information.html">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                class="remix-icon hp-text-color-black-100 hp-text-color-dark-0" height="24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    d="M3.34 17a10.018 10.018 0 0 1-.978-2.326 3 3 0 0 0 .002-5.347A9.99 9.99 0 0 1 4.865 4.99a3 3 0 0 0 4.631-2.674 9.99 9.99 0 0 1 5.007.002 3 3 0 0 0 4.632 2.672c.579.59 1.093 1.261 1.525 2.01.433.749.757 1.53.978 2.326a3 3 0 0 0-.002 5.347 9.99 9.99 0 0 1-2.501 4.337 3 3 0 0 0-4.631 2.674 9.99 9.99 0 0 1-5.007-.002 3 3 0 0 0-4.632-2.672A10.018 10.018 0 0 1 3.34 17zm5.66.196a4.993 4.993 0 0 1 2.25 2.77c.499.047 1 .048 1.499.001A4.993 4.993 0 0 1 15 17.197a4.993 4.993 0 0 1 3.525-.565c.29-.408.54-.843.748-1.298A4.993 4.993 0 0 1 18 12c0-1.26.47-2.437 1.273-3.334a8.126 8.126 0 0 0-.75-1.298A4.993 4.993 0 0 1 15 6.804a4.993 4.993 0 0 1-2.25-2.77c-.499-.047-1-.048-1.499-.001A4.993 4.993 0 0 1 9 6.803a4.993 4.993 0 0 1-3.525.565 7.99 7.99 0 0 0-.748 1.298A4.993 4.993 0 0 1 6 12c0 1.26-.47 2.437-1.273 3.334a8.126 8.126 0 0 0 .75 1.298A4.993 4.993 0 0 1 9 17.196zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                  </path>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="hp-main-layout">
      <header>
        <div class="row w-100 m-0">
          <div class="col px-0">
            <div class="row w-100 align-items-center justify-content-between position-relative">
              <div class="col w-auto hp-flex-none hp-mobile-sidebar-button me-24 px-0" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <button type="button" class="btn btn-text btn-icon-only">
                  <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1"
                    style="font-size: 24px;"></i>
                </button>
              </div>
              <div class="hp-horizontal-logo-menu d-flex align-items-center w-auto">
                <div class="col hp-flex-none w-auto hp-horizontal-block">
                  <div class="hp-header-logo d-flex align-items-center">
                    <a href="/admin" class="position-relative">

                      <img class="hp-logo hp-sidebar-visible hp-dark-none"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                      <img class="hp-logo hp-sidebar-visible hp-dark-block"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                    </a>
                  </div>
                </div>

                <div class="col hp-flex-none w-auto hp-horizontal-block hp-horizontal-menu ps-24">
                  <ul class="d-flex flex-wrap align-items-center">
                    <li class="px-6">
                      <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                        <span>Dashboards</span>
                        <i class="ri-arrow-down-s-line"></i>
                      </a>

                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a href="dashboard-analytics.html">
                            <span>
                              <span class="submenu-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                  viewBox="0 0 24 24" fill="none">
                                  <path d="M8.97 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7h-6c-5 0-7 2-7 7v6c0 5 2 7 7 7Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path
                                    d="m1.97 12.7 6-.02c.75 0 1.59.57 1.87 1.27l1.14 2.88c.26.65.67.65.93 0l2.29-5.81c.22-.56.63-.58.91-.05l1.04 1.97c.31.59 1.11 1.07 1.77 1.07h4.06"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </svg>
                              </span>

                              <span>Dashboard</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="px-6">
                      <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                        <span>Data Master</span>
                        <i class="ri-arrow-down-s-line"></i>
                      </a>

                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a href="/user">
                            <span>
                              <span class="submenu-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                  viewBox="0 0 24 24" fill="none">
                                  <path d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path
                                    d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path
                                    d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </svg>
                              </span>

                              <span>Admin</span>
                            </span>
                          </a>
                        </li>

                        <li class="dropend">
                          <a class="dropdown-item" href="javascript:;" data-bs-toggle="dropdown">
                            <span>
                              <span class="submenu-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                  viewBox="0 0 24 24" fill="none">
                                  <path
                                    d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path
                                    d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </svg>
                              </span>

                              <span>Portofolio</span>
                            </span>

                            <i class="dropdown-menu-arrow"></i>
                          </a>

                          <ul class="dropdown-menu">
                            <li class="dropend">
                              <a href="app-ecommerce-shop.html">
                                <span>Kategori</span>
                              </a>
                            </li>

                            <li class="dropend">
                              <a href="app-ecommerce-wishlist.html">
                                <span>Works</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li>
                  <a href="/blog">
                    <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                      title="" data-bs-original-title="Contact" aria-label="Contact"></div>

                    <span>
                      <span class="submenu-item-icon">
                        <i class='bx bxl-blogger'></i>
                      </span>

                      <span>Blog</span>
                    </span>
                  </a>
                </li>
                      </ul>
                </div>
              </div>

              <div class="hp-header-search d-none col">
                <input type="text" class="form-control" placeholder="Search..." id="header-search"
                  autocomplete="off">
              </div>

              <div class="col hp-flex-none w-auto pe-0">
                <div class="row align-items-center justify-content-end">
                  <div class="hover-dropdown-fade w-auto px-0 ms-6 position-relative">
                    <div class="hp-cursor-pointer rounded-4 border hp-border-color-dark-80">
                      <div class="rounded-3 overflow-hidden m-4 d-flex">
                        <div class="avatar-item hp-bg-info-4 d-flex" style="width: 32px; height: 32px;">
                          <img src="{{ asset('yoda') }}/app-assets/img/memoji/user-avatar-4.png">
                        </div>
                      </div>
                    </div>

                    <div class="hp-header-profile-menu dropdown-fade position-absolute pt-18"
                      style="top: 100%; width: 260px;">
                      <div class="rounded hp-bg-black-0 hp-bg-dark-100 px-18 py-24">
                        <span class="d-block h5 hp-text-color-black-100 hp-text-color-dark-0 mb-16">Profile
                          Settings</span>

                        <a href="profile-information.html"
                          class="hp-p1-body fw-medium hp-hover-text-color-primary-2">Septa</a>

                        <div class="divider mt-12 mb-18"></div>

                        <div class="row">
                          <div class="col-12 mt-3">
                            <a class="hp-p1-body fw-medium" href="/logout">Logout</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="offcanvas offcanvas-start hp-mobile-sidebar bg-black-20 hp-bg-dark-90" tabindex="-1"
        id="mobileMenu" aria-labelledby="mobileMenuLabel" style="width: 256px;">
        <div class="offcanvas-header justify-content-between align-items-center ms-16 me-8 mt-16 p-0">
          <div class="w-auto px-0">
            <div class="hp-header-logo d-flex align-items-center">
              <a href="/admin" class="position-relative">

                <img class="hp-logo hp-sidebar-visible hp-dark-none"
                  src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                <img class="hp-logo hp-sidebar-visible hp-dark-block"
                  src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                  src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                  src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                  src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl.svg"
                  alt="logo">
                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                  src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl-dark.svg"
                  alt="logo">
              </a>
            </div>
          </div>

          <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <button type="button" class="btn btn-text btn-icon-only bg-transparent">
              <i class="ri-close-fill lh-1 hp-text-color-black-80" style="font-size: 24px;"></i>
            </button>
          </div>
        </div>


        {{-- VERSI HP --}}

        <div
          class="hp-sidebar hp-bg-color-black-20 hp-bg-color-dark-90 border-end border-black-40 hp-border-color-dark-80">
          <div class="hp-sidebar-container">
            <div class="hp-sidebar-header-menu">
              <div class="row justify-content-between align-items-end mx-0">
                <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                  <div class="hp-cursor-pointer">
                    <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                        fill="#B2BEC3"></path>
                      <path
                        d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                        fill="#B2BEC3"></path>
                    </svg>
                  </div>
                </div>

                <div class="w-auto px-0">
                  <div class="hp-header-logo d-flex align-items-center">
                    <a href="/admin" class="position-relative">
                      <div
                        class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                        style="width: 18px; height: 18px; top: -5px;">
                        <svg class="hp-fill-color-dark-0" width="12" height="12" viewBox="0 0 12 12"
                          fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                            fill="#2D3436" />
                        </svg>
                      </div>

                      <img class="hp-logo hp-sidebar-visible hp-dark-none"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                      <img class="hp-logo hp-sidebar-visible hp-dark-block"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-n\one"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2dark.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                        src="{{ asset('yoda') }}/app-assets/img/logo/thek2.png" alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                        src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl.svg"
                        alt="logo">
                      <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                        src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-rtl-dark.svg"
                        alt="logo">
                    </a>

                  </div>
                </div>

                <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden">
                  <div class="hp-cursor-pointer mb-4">
                    <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                        fill="#B2BEC3"></path>
                      <path
                        d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                        fill="#B2BEC3"></path>
                    </svg>
                  </div>
                </div>
              </div>

              <ul>
                <li>
                  <div class="menu-title">DASHBOARDS</div>

                  <ul>
                    <li>
                      <a href="/">
                        <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                          title="" data-bs-original-title="Analytics" aria-label="Analytics"></div>

                        <span>
                          <span class="submenu-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                              viewBox="0 0 24 24" fill="none">
                              <path d="M8.97 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7h-6c-5 0-7 2-7 7v6c0 5 2 7 7 7Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path
                                d="m1.97 12.7 6-.02c.75 0 1.59.57 1.87 1.27l1.14 2.88c.26.65.67.65.93 0l2.29-5.81c.22-.56.63-.58.91-.05l1.04 1.97c.31.59 1.11 1.07 1.77 1.07h4.06"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            </svg>
                          </span>

                          <span>Dashboard</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li>
                  <div class="menu-title">Data Master</div>

                  <ul>
                    <li>
                      <a href="/user">
                        <div class="tooltip-item in-active" data-bs-toggle="tooltip" data-bs-placement="right"
                          title="" data-bs-original-title="Contact" aria-label="Contact"></div>

                        <span>
                          <span class="submenu-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                              viewBox="0 0 24 24" fill="none">
                              <path d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path
                                d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path
                                d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            </svg>
                          </span>

                          <span>Admin</span>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="javascript:;" class="submenu-item">
                        <span>
                          <span class="submenu-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                              viewBox="0 0 24 24" fill="none">
                              <path
                                d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path
                                d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            </svg>
                          </span>

                          <span>Portofolio</span>
                        </span>

                        <div class="menu-arrow"></div>
                      </a>

                      <ul class="submenu-children" data-level="1">
                        <li>
                          <a href="/kategori">
                            <span>Kategori</span>
                          </a>
                        </li>

                        <li>
                          <a href="/porto">
                            <span>Works</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>

            </div>

            <div class="row justify-content-between align-items-center hp-sidebar-footer mx-0 hp-bg-color-dark-90">
              <div class="divider border-black-40 hp-border-color-dark-70 hp-sidebar-hidden mt-0 px-0"></div>

              <div class="col">
                <div class="row align-items-center">
                  <div class="w-auto px-0">
                    <div
                      class="avatar-item bg-primary-4 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px;">
                      <img src="{{ asset('yoda') }}/app-assets/img/memoji/user-avatar-8.png" height="100%"
                        class="hp-img-cover">
                    </div>
                  </div>

                  <div class="w-auto ms-8 px-0 hp-sidebar-hidden mt-4">
                    <span class="d-block hp-text-color-black-100 hp-text-color-dark-0 hp-p1-body lh-1">Septa</span>
                    <a href="/logout" class="hp-badge-text fw-normal hp-text-color-dark-30">Log Out</a>
                  </div>
                </div>
              </div>

              <div class="col hp-flex-none w-auto px-0 hp-sidebar-hidden">
                <a href="profile-information.html">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                    class="remix-icon hp-text-color-black-100 hp-text-color-dark-0" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path
                        d="M3.34 17a10.018 10.018 0 0 1-.978-2.326 3 3 0 0 0 .002-5.347A9.99 9.99 0 0 1 4.865 4.99a3 3 0 0 0 4.631-2.674 9.99 9.99 0 0 1 5.007.002 3 3 0 0 0 4.632 2.672c.579.59 1.093 1.261 1.525 2.01.433.749.757 1.53.978 2.326a3 3 0 0 0-.002 5.347 9.99 9.99 0 0 1-2.501 4.337 3 3 0 0 0-4.631 2.674 9.99 9.99 0 0 1-5.007-.002 3 3 0 0 0-4.632-2.672A10.018 10.018 0 0 1 3.34 17zm5.66.196a4.993 4.993 0 0 1 2.25 2.77c.499.047 1 .048 1.499.001A4.993 4.993 0 0 1 15 17.197a4.993 4.993 0 0 1 3.525-.565c.29-.408.54-.843.748-1.298A4.993 4.993 0 0 1 18 12c0-1.26.47-2.437 1.273-3.334a8.126 8.126 0 0 0-.75-1.298A4.993 4.993 0 0 1 15 6.804a4.993 4.993 0 0 1-2.25-2.77c-.499-.047-1-.048-1.499-.001A4.993 4.993 0 0 1 9 6.803a4.993 4.993 0 0 1-3.525.565 7.99 7.99 0 0 0-.748 1.298A4.993 4.993 0 0 1 6 12c0 1.26-.47 2.437-1.273 3.334a8.126 8.126 0 0 0 .75 1.298A4.993 4.993 0 0 1 9 17.196zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                      </path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content')

      <footer class="w-100 py-18 px-16 py-sm-24 px-sm-32 hp-bg-color-black-20 hp-bg-color-dark-90">
        <div class="row">
          <div class="col-12">
            <p class="hp-badge-text fw-semibold mb-0 text-center text-sm-start hp-text-color-dark-30">COPYRIGHT ©2024
              THE-K2, All rights Reserved</p>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <div class="hp-theme-customizer">
    <div class="hp-theme-customizer-button">
      <div class="hp-theme-customizer-button-bg">
        <svg width="48" height="121" viewBox="0 0 48 121" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M38.6313 21.7613C46.5046 11.6029 47.6987 2.40985 48 0V61H0C1.03187 53.7789 1.67112 44.3597 13.2122 37.7607C22.0261 32.721 32.4115 29.7862 38.6313 21.7613Z"
            fill="white"></path>
          <path
            d="M38.6058 99.5632C46.502 109.568 47.6984 118.627 48 121V61H0C1.03532 68.1265 1.67539 77.4295 13.3283 83.9234C22.1048 88.8143 32.3812 91.6764 38.6058 99.5632Z"
            fill="white"></path>
        </svg>
      </div>

      <div class="hp-theme-customizer-button-icon">
        <span>
          <span></span>
          <span></span>
          <span></span>
        </span>

        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M14.19 0H5.81C2.17 0 0 2.17 0 5.81V14.18C0 17.83 2.17 20 5.81 20H14.18C17.82 20 19.99 17.83 19.99 14.19V5.81C20 2.17 17.83 0 14.19 0ZM5.67 3.5C5.67 3.09 6.01 2.75 6.42 2.75C6.83 2.75 7.17 3.09 7.17 3.5V7.4C7.17 7.81 6.83 8.15 6.42 8.15C6.01 8.15 5.67 7.81 5.67 7.4V3.5ZM7.52282 14.4313C7.31938 14.5216 7.17 14.7132 7.17 14.9358V16.5C7.17 16.91 6.83 17.25 6.42 17.25C6.01 17.25 5.67 16.91 5.67 16.5V14.9358C5.67 14.7132 5.5206 14.5216 5.31723 14.4311C4.36275 14.0064 3.7 13.058 3.7 11.95C3.7 10.45 4.92 9.22 6.42 9.22C7.92 9.22 9.15 10.44 9.15 11.95C9.15 13.0582 8.47913 14.0066 7.52282 14.4313ZM14.33 16.5C14.33 16.91 13.99 17.25 13.58 17.25C13.17 17.25 12.83 16.91 12.83 16.5V12.6C12.83 12.19 13.17 11.85 13.58 11.85C13.99 11.85 14.33 12.19 14.33 12.6V16.5ZM13.58 10.77C12.08 10.77 10.85 9.55 10.85 8.04C10.85 6.93185 11.5209 5.98342 12.4772 5.55873C12.6806 5.46839 12.83 5.27681 12.83 5.05421V3.5C12.83 3.09 13.17 2.75 13.58 2.75C13.99 2.75 14.33 3.09 14.33 3.5V5.06421C14.33 5.28681 14.4794 5.47835 14.6828 5.56885C15.6372 5.9936 16.3 6.94195 16.3 8.05C16.3 9.55 15.08 10.77 13.58 10.77Z"
            fill="#0010F7"></path>
        </svg>
      </div>
    </div>

    <div class="hp-theme-customizer-container bg-black-0 hp-bg-dark-90">
      <div class="hp-theme-customizer-container-header bg-black-10 hp-bg-dark-85 py-16 px-24">
        <div class="d-flex justify-content-between">
          <div>
            <span class="h5 mb-0 d-block text-black-80 hp-text-color-dark-0">Customise your Dashboard</span>
            <span class="hp-caption fw-medium d-block text-black-60">Preview in Real Time</span>
          </div>

          <div>
            <button type="button" class="btn btn-text hp-bg-dark-85">
              <i class="ri-close-fill text-black-80 hp-text-color-dark-0" style="font-size: 16px;"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="hp-theme-customizer-container-body pb-md-96 pb-mb-0 py-24 px-24">
        <div class="row mx-0 hp-theme-customizer-container-body-item">
          <div class="col-12 px-0 mb-16">
            <span class="d-block hp-caption text-black-60">THEME</span>
            <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">Dark &amp; Light</span>
          </div>

          <div class="col-12 px-0">
            <div class="row g-24">
              <div class="col-12 col-md-6">
                <div class="hp-theme-customizer-container-body-item-svg active" data-theme="light">
                  <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                    <path
                      d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                      fill="#B2BEC3"></path>
                    <rect width="191" height="13" transform="translate(47 6)" fill="#DFE6E9"></rect>
                    <rect width="191" height="122" transform="translate(47 22)" fill="#DFE6E9"></rect>
                    <rect x="1" y="1" width="242" height="148" stroke="white" stroke-width="2"></rect>
                  </svg>

                  <div class="hp-theme-customizer-container-body-item-svg-check">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                      <path
                        d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                        fill="#2D3436"></path>
                      <path
                        d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                        fill="#2D3436"></path>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="hp-theme-customizer-container-body-item-svg" data-theme="dark">
                  <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="244" height="150" fill="#111314"></rect>
                    <rect width="37" height="138" transform="translate(6 6)" fill="#2D3436"></rect>
                    <path
                      d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                      fill="#F7FAFC"></path>
                    <rect width="191" height="13" transform="translate(47 6)" fill="#2D3436"></rect>
                    <rect width="191" height="122" transform="translate(47 22)" fill="#2D3436"></rect>
                    <rect width="244" height="150" stroke="#DFE6E9"></rect>
                  </svg>

                  <div class="hp-theme-customizer-container-body-item-svg-check">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                      <path
                        d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                        fill="#2D3436"></path>
                      <path
                        d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                        fill="#2D3436"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mx-0 hp-theme-customizer-container-body-item">
          <div class="col-12 mb-16 px-0">
            <span class="d-block hp-caption text-black-60">CONTENT WIDTH</span>
            <span class="d-block h5 mb-0 text-black-100 hp-text-color-dark-0">FULL Width &amp; Boxed</span>
          </div>

          <div class="col-12 px-0">
            <div class="row g-24">
              <div class="col-12 col-md-6">
                <div class="hp-theme-customizer-container-body-item-svg active" data-content="full">
                  <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1" width="242" height="148" fill="white"></rect>
                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                    <path
                      d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3632 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                      fill="#B2BEC3"></path>
                    <rect width="191" height="13" transform="translate(47 6)" fill="#DFE6E9"></rect>
                    <rect width="191" height="122" transform="translate(47 22)" fill="#DFE6E9"></rect>
                    <rect x="1" y="1" width="242" height="148" stroke="white" stroke-width="2"></rect>
                  </svg>

                  <div class="hp-theme-customizer-container-body-item-svg-check">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                      <path
                        d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                        fill="#2D3436"></path>
                      <path
                        d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                        fill="#2D3436"></path>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="hp-theme-customizer-container-body-item-svg" data-content="boxed">
                  <svg width="244" height="150" viewBox="0 0 244 150" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="244" height="150" fill="white"></rect>
                    <rect width="37" height="138" transform="translate(6 6)" fill="#DFE6E9"></rect>
                    <path
                      d="M33.7528 18.2807C32.9591 18.059 32.6126 18.0257 32.6126 18.0257C32.4785 18.0036 31.9531 17.9149 31.2377 17.8928C30.6676 17.8041 30.0751 17.6489 29.6839 17.3275C29.2591 16.9728 28.5437 16.3633 28.2642 16.2192C28.2531 16.2081 28.2419 16.2081 28.2307 16.2081C27.1576 15.4433 25.8497 15 24.4413 15C22.8316 15 21.3672 15.5653 20.227 16.5073C19.9029 16.7512 19.5116 17.0837 19.2434 17.3164C18.8521 17.6489 18.2597 17.793 17.6896 17.8817C16.9742 17.9038 16.4488 18.0036 16.3146 18.0147C16.3146 18.0147 16.0017 18.0479 15.2639 18.2474C14.9397 18.3361 14.9062 18.7794 15.208 18.9235C15.208 18.9235 15.2192 18.9235 15.2192 18.9346C15.6998 19.1673 16.1581 19.5442 16.7282 20.4419C17.4101 21.5059 17.5331 22.182 17.969 23.2017C18.6733 26.1277 21.3002 28.3 24.4301 28.3C27.4482 28.3 29.9969 26.2828 30.8129 23.5231C31.3718 22.315 31.4501 21.6167 32.199 20.4419C32.7691 19.5442 33.2274 19.1673 33.7081 18.9346C33.7416 18.9235 33.7751 18.9013 33.8087 18.8902C34.0881 18.7683 34.0546 18.3582 33.7528 18.2807ZM21.8814 23.4012C20.9872 23.1573 20.4283 22.3372 20.4283 22.3372C20.4283 22.3372 21.3896 21.6389 22.2839 21.8827C23.1781 22.1266 23.67 23.2127 23.67 23.2127C23.67 23.2127 22.7757 23.645 21.8814 23.4012ZM27.2023 23.4012C26.308 23.645 25.4138 23.2017 25.4138 23.2017C25.4138 23.2017 25.8944 22.1155 26.7999 21.8717C27.6942 21.6278 28.6555 22.3261 28.6555 22.3261C28.6555 22.3261 28.0966 23.1684 27.2023 23.4012Z"
                      fill="#B2BEC3"></path>
                    <g clip-path="url(#clip0_5050:104461)">
                      <rect width="133" height="13" transform="translate(76 6)" fill="#DFE6E9"></rect>
                    </g>
                    <rect width="133" height="122" transform="translate(76 22)" fill="#DFE6E9"></rect>
                    <rect width="244" height="150" stroke="#DFE6E9"></rect>
                    <defs>
                      <clipPath id="clip0_5050:104461">
                        <rect width="133" height="13" fill="white" transform="translate(76 6)"></rect>
                      </clipPath>
                    </defs>
                  </svg>

                  <div class="hp-theme-customizer-container-body-item-svg-check">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="16.9987" cy="17.0007" r="14.1667" fill="white"></circle>
                      <path
                        d="M16.9987 2.83398C9.1872 2.83398 2.83203 9.18915 2.83203 17.0007C2.83203 24.8122 9.1872 31.1673 16.9987 31.1673C24.8102 31.1673 31.1654 24.8122 31.1654 17.0007C31.1654 9.18915 24.8102 2.83398 16.9987 2.83398ZM16.9987 28.334C10.7498 28.334 5.66536 23.2496 5.66536 17.0007C5.66536 10.7517 10.7498 5.66732 16.9987 5.66732C23.2476 5.66732 28.332 10.7517 28.332 17.0007C28.332 23.2496 23.2476 28.334 16.9987 28.334Z"
                        fill="#2D3436"></path>
                      <path
                        d="M14.1674 19.2479L10.9105 15.9966L8.91016 18.0026L14.1702 23.2514L23.6704 13.7512L21.6672 11.748L14.1674 19.2479Z"
                        fill="#2D3436"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-to-top">
    <button type="button" class="btn btn-primary btn-icon-only rounded-circle hp-primary-shadow">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16px"
        width="16px" xmlns="http://www.w3.org/2000/svg">
        <g>
          <path fill="none" d="M0 0h24v24H0z"></path>
          <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z"></path>
        </g>
      </svg>
    </button>
  </div>

  <!-- Plugin -->
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/jquery.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/swiper-bundle.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/jquery.mask.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/autocomplete.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/moment.min.js"></script>

  <!-- Layouts -->
  <script src="{{ asset('yoda') }}/app-assets/js/layouts/header-search.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/layouts/sider.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/components/input-number.js"></script>

  <!-- Base -->
  <script src="{{ asset('yoda') }}/app-assets/js/base/index.js"></script>
  <!-- Customizer -->
  <script src="{{ asset('yoda') }}/app-assets/js/customizer.js"></script>

  <!-- Charts -->
  <script src="{{ asset('yoda') }}/app-assets/js/plugin/apexcharts.min.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/charts/apex-chart.js"></script>

  <!-- Cards -->
  <script src="{{ asset('yoda') }}/app-assets/js/cards/card-analytic.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/cards/card-advance.js"></script>
  <script src="{{ asset('yoda') }}/app-assets/js/cards/card-statistic.js"></script>

  <!-- Script CKEDITOR -->

  <!-- Custom -->
  <script src="{{ asset('yoda') }}/assets/js/main.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</body>
</html>
