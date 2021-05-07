<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/multipage/blog-magazine/classic/bm-classic-home-page-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:48:37 GMT -->
<head>
    <!-- Title -->
    <title>{{$post->title}} | Kingo</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta property="og:title"       content="{{$post->title}}">
    @if($post->category->id == 5)
        <meta property="og:video"       content="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}">
    @else
        <meta property="og:image"       content="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}">
    @endif
    <meta property="og:description" content="{!! $post->content !!}">
    <meta property="og:url"         content="{{URL::full()}}">
    <meta property="og:type"        content="website" />

    <link rel="canonical" href="{{URL::full()}}">

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
  <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <main>
      @include('website.partials.header')

      <!-- Promo Articles -->
      <!-- End Promo Articles -->

      <!-- News Content -->
      <section class="g-pt-50 g-pb-100">
        <div class="container">
          <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
              <article class="g-mb-60">
                <header class="g-mb-30">
                  <h2 class="h1 g-mb-15">{{$post->title}}</h2>

                  <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                    <li class="list-inline-item">
                      <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">{{$post->artist_name}}</a>
                    </li>
                    <li class="list-inline-item g-mx-10">/</li>
                    <li class="list-inline-item">
                      {{date('M d, Y',strtotime($post->post_date))}}
                    </li>
                    <li class="list-inline-item g-mx-10">/</li>
                    <li class="list-inline-item g-mr-10">
                      <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> {{$post->shares}}
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto">
                      <i class="icon-eye u-line-icon-pro align-middle mr-1"></i> Views {{$post->views}}
                    </li>
                  </ul>

                  <hr class="g-brd-gray-light-v4 g-my-15">

                </header>

                <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                  <figure class="u-shadow-v25 g-mb-30">
                      @if($post->category->id == 5)
                          <iframe style="width: 100%; height: 500px"
                                  src="https://www.youtube.com/embed/XiiuObp9PaE"
                                  title="{{$post->title}}" frameborder="0"
                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                          </iframe>
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
                    <img class="img-fluid w-100" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}" alt="Image Description">
                      @endif
                  </figure>

                        {!! $post->content !!}
                </div>

                <!-- Sources & Tags -->
                <div class="g-mb-30">

                      @if(isset($post->tags))
                  <h6 class="g-color-gray-dark-v1">
                    <strong class="g-mr-5">Tags:</strong>
                      @foreach(explode(',',$post->tags) as $tag)
                        <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">
                            {{$tag}}
                        </a>
                      @endforeach
                  </h6>
                      @endif
                </div>
                <!-- End Sources & Tags -->

                <hr class="g-brd-gray-light-v4">

                <!-- Social Shares -->
                <div class="g-mb-30">
                  <ul class="list-inline text-uppercase mb-0">
                    <li class="list-inline-item g-mr-10">
                      <strong class="align-middle g-font-size-24">{{$post->views}}</strong>
                    </li>
                    <li class="list-inline-item g-mr-10">
                      <span class="g-color-gray-dark-v5">|</span>
                    </li>

                    <li class="list-inline-item g-mr-10">
                      <a class="twitter-share-button"
                         data-size="large">
                        <i class="fa fa-twitter g-mr-5--sm"></i>
                          <span class="g-hidden-xs-down">Tweet on Twitter</span>
                      </a>
                    </li>
                      <li class="list-inline-item g-mr-10">
                          <!-- Your share button code -->
                            <div class="fb-share-button g-py-5"
                                 data-href="{{URL::full()}}"
                                 data-size="large"
                                 data-layout="button_count">
                            </div>
                      </li>
                    <li class="list-inline-item">
                      <a class="btn u-btn-lightred g-font-size-12 rounded g-py-5" href="#!">
                        <i class="fa fa-heart"></i>
                          <span class="g-hidden-xs-down">Like Post</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- End Social Shares -->

                <hr class="g-brd-gray-light-v4 g-mb-40">

                <!-- Related Articles -->
                <div class="g-mb-40">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Related Articles</h2>
                  </div>

                  <div class="row">
                  @foreach(\App\Models\Post::where('status','1')->where('post_category_id','!=','3')->limit(6)->get() as $popular)
                    <!-- Article Video -->
                    <div class="col-lg-4 col-sm-6 g-mb-30">
                      <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            @if($popular->category->id == 5)
                                <video class="img-fluid w-100"
                               src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}" alt="Image Description">
                            @else
                                <img class="img-fluid w-100"
                               src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}" alt="Image Description">
                            @endif

                          <figcaption class="g-pos-abs g-top-10 g-left-10">
                              @if($popular->category->id == 1)
                                    <a class="btn btn-xs u-btn-blue text-uppercase rounded-0"
                                       href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                        {{$popular->category->name}}
                                    </a>
                              @elseif($popular->category->id == 2)
                                  <a class="btn btn-xs u-btn-pink text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @elseif($popular->category->id == 3)
                                  <a class="btn btn-xs u-btn-teal text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @elseif($popular->category->id == 4)
                                  <a class="btn btn-xs u-btn-brown text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @elseif($popular->category->id == 5)
                                  <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @elseif($popular->category->id == 6)
                                  <a class="btn btn-xs u-btn-indigo text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @elseif($popular->category->id == 7)
                                  <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0"
                                     href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($popular->category->name))}}">
                                      {{$popular->category->name}}
                                  </a>
                              @endif
                          </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                          <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                             href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">
                              {{$popular->title}}</a>
                        </h3>
                      </article>
                    </div>
                    <!-- End Article Video -->
                  @endforeach
                  </div>
                </div>

                <!-- Author Block -->
                <div class="g-mb-60">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Kuhusu Mtunzi</h2>
                  </div>

                  <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                    <img class="d-flex u-shadow-v25 g-width-80 g-height-80 rounded-circle g-mr-15" src="{{url('/')}}/assets-magazine/img-temp/100x100/img8.jpg" alt="Image Description">

                    <div class="media-body">
                      <h4 class="g-color-gray-dark-v1 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$post->artist_name}}</a>
                      </h4>

                      <div class="g-mb-15">
                        <p class="g-color-gray-dark-v2">About my site amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at.</p>
                      </div>

                      <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mr-10">
                          <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                          <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                          <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End Author Block -->


                <!-- End Add Comment -->
              </article>

              <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->

            <!-- Sidebar -->
            <div class="col-lg-3">
              <!-- Useful Links -->
              @include('website.partials.popular')
              <!-- End Useful Links -->

              <!-- ad1 -->
              @include('website.partials.add1')
              <!-- End ad1 -->

              <!-- Recent Posts -->
              @include('website.partials.recent')
              <!-- End Recent Posts -->

              <!-- Popular ad2 -->
              @include('website.partials.ad2')
              <!-- End Popular ad2 -->

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
      </section>
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

  <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

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
