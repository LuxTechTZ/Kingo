<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/multipage/blog-magazine/classic/bm-classic-home-page-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:48:37 GMT -->
<head>
    <!-- Title -->
    <title>Multipage - Blog and Magazine Page Layout 1 | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets-magazine/css/styles.bm-classic.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/css/custom.css">
  </head>

  <body>
    <main>
      @include('website.partials.header');

      <!-- Promo Articles -->
      <!-- End Promo Articles -->

      <!-- News Content -->
      <div class="container g-pt-100 g-pb-50">
        <div class="row">
          <!-- Articles Content -->
          <div class="col-lg-9 g-mb-50 g-mb-0--lg">
              @foreach($porojo as $post)
            <!-- Article -->
            <article class="text-center g-mb-100">
              <figure class="g-pos-rel mb-5">
                  @if($post->category->id == 5)
                <video controls class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}" alt="Image Description">
                  @elseif($post->category->id == 3)
                      <div class="js-carousel g-mx-minus-10"
                     data-infinite="true"
                     data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--y g-width-30 g-height-30 g-brd-around g-brd-white g-color-white g-color-primary--hover rounded"
                     data-arrow-left-classes="fa fa-angle-left g-left-20"
                     data-arrow-right-classes="fa fa-angle-right g-right-20">
                          @if(count($post->images) > 0)
                          @foreach($post->images as $image)
                              <div class="js-slide">
                                <img class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($image->path)}}" alt="Image Description">
                              </div>
                          @endforeach
                          @else
                              <img class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}" alt="Image Description">
                          @endif
                    </div>
                  @else
                <img class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}" alt="Image Description">
                @endif
                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0 ">
                    <li class="list-inline-item mx-0">
                      <a class=" bg-dark d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                          {{$post->likes}}
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="bg-dark d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                          {{$post->shares}}
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="bg-dark d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
                         data-toggle="tooltip"
                         data-placement="top"
                         title="Save to Read Later">
                        <i class="fa fa-bookmark-o"></i>
                      </a>
                    </li>
                  </ul>
                </figcaption>
                <!-- End Figcaption -->
              </figure>

              <!-- Category & Date -->
              <ul class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                <li class="list-inline-item g-mr-10">
                  <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                  <a class="g-font-weight-700" href="{{url('/')}}/{{strtolower($post->category->name)}}">{{$post->category->name}}</a>
                </li>
                <li class="list-inline-item">&#8226;</li>
                <li class="list-inline-item g-ml-10">
                  <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                    {{date('M d, Y',strtotime($post->post_date))}}
                </li>
              </ul>
              <!-- End Category & Date -->

              <!-- Info -->
              <div class="g-px-50 g-px-100--md mb-4">
                <h2 class="h3 mb-4" style="font-size: 35px">
                    <a class="u-link-v5 g-color-main g-color-primary--hover"
                       href="{{url('/')}}/post/{{$post->title}}/{{$post->id}}">
                        {{$post->title}}</a>
                </h2>
                <p style="font-size: 18px">
                    @if (strlen($post->content) > 200)
                        {!! $post->content = substr($post->content, 0, 197) . '...' !!}
                    @else
                        {!! $post->content !!}
                    @endif
                </p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="{{url('/')}}/post/{{$post->title}}/{{$post->id}}">
                    Soma zaidi
                </a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">

                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->
              @endforeach



            <div id="stickyblock-end"></div>

                  @if(count($porojo) > 20)
            <!-- Pagination -->
            <nav class="g-pb-50" aria-label="Page Navigation">
              <ul class="list-inline text-center mb-0">
                <li class="list-inline-item">
                  <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded g-pa-5" href="#!">1</a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5" href="#!">2</a>
                </li>
                <li class="list-inline-item g-hidden-xs-down">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5" href="#!">3</a>
                </li>
                <li class="list-inline-item">
                  <span class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded g-pa-5">...</span>
                </li>
                <li class="list-inline-item g-hidden-xs-down">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5" href="#!">15</a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item g-brd-secondary-light-v2 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded g-px-15 g-py-5 g-ml-15" href="#!" aria-label="Next">
                    <span aria-hidden="true">
                      Next
                      <i class="ml-2 fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
                  @endif
          </div>

          <!-- Sidebar -->
          <div class="col-lg-3">
            @include('website.partials.popular')

            <!-- Subscribe -->
            <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50" style="background-image: url(assets/img-temp/500x600/img1.jpg);">
              <div class="u-bg-overlay__inner text-center">
                <div class="g-mb-40">
                  <h2 class="g-color-white">Vancouver, BC</h2>
                  <p class="g-color-white-opacity-0_8">Unit 25 Suite 3, 925 Prospect PI,<br>Beach Resort, 23001</p>
                </div>

                <div class="g-mb-30">
                  <h3 class="d-inline-block g-bg-primary-opacity-0_6 g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-py-5 g-px-10">Phone number</h3>
                  <span class="d-block g-color-white g-font-size-18">+01 (0) 333 444 55</span>
                </div>

                <div class="input-group rounded">
                  <input class="form-control g-brd-none g-px-13" type="email" placeholder="Your Email">
                  <div class="input-group-append">
                    <button class="btn u-btn-primary text-uppercase g-px-20 g-py-14" type="submit">
                      <i class="icon-envelope g-pos-rel g-top-1"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Subscribe -->

            <!-- Recent Posts -->
            @include('website.partials.recent')
            <!-- End Recent Posts -->

            <!-- Popular Videos -->
            <div class="g-mb-50">
              <article class="g-pos-rel">
                <figure class="u-shadow-v25 g-bg-img-hero g-min-height-400" style="background-image: url(assets/img-temp/500x650/img2.jpg);">
                </figure>

                <span class="text-center g-pos-abs g-top-20 g-left-0">
                  <a class="btn u-btn-red text-uppercase rounded-0" href="#!">Discover</a>
                  <small class="g-bg-black g-color-white g-pa-5 d-block">July 09, 2017</small>
                </span>

                <span class="u-icon-v3 g-font-size-18 g-bg-white g-color-black g-bg-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-cursor-pointer g-absolute-centered">
                  <i class="icon-control-play g-left-2"></i>
                </span>

                <header class="g-pos-abs g-bottom-20 g-left-0">
                  <h3 class="h5 g-bg-red-opacity-0_5 g-pa-5-10--sm">
                    <a class="g-color-white g-color-white--hover" href="#!">Traveling</a>
                  </h3>
                </header>
              </article>
            </div>
            <!-- End Popular Videos -->

            <!-- Social Links -->
            @include('website.partials.social_links')
            <!-- End Social Links -->


            <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">

              <!-- Top Authors -->
              @include('website.partials.authors')
              <!-- End Top Authors -->
            </div>
          </div>
          <!-- End Sidebar -->
        </div>
      </div>
      <!-- End News Content -->

      @include('website.partials.footer');

      <!-- Go To -->
      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go To -->
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="{{url('/')}}/assets-main/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/popper.min.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{url('/')}}/assets-main/vendor/appear.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/assets-main/js/hs.core.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/assets-main/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/assets-main/js/helpers/hs.height-calc.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.carousel.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.go-to.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.popup.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.sticky-block.js"></script>

    <!-- JS Customization -->
    <script src="{{url('/')}}/assets-main/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of MegaMenu
        $('.js-mega-menu').HSMegaMenu();

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of header's height equal offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of sticky blocks
        $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
      });
    </script>
  </body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/multipage/blog-magazine/classic/bm-classic-home-page-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:48:47 GMT -->
</html>
