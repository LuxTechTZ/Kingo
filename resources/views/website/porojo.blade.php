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
                  @else
                <img class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}" alt="Image Description">
                @endif
                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0">
                    <li class="list-inline-item mx-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                        25
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                        12
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
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
                <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">{{$post->title}}</a></h2>
                <p>@if (strlen($post->content) > 200)
                        {{$post->content = substr($post->content, 0, 197) . '...'}}
                    @else
                        {{$post->content}}
                    @endif
                </p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="{{url('/')}}/post/{{$post->title}}/{{$post->id}}">Read More</a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->
              @endforeach

            <!-- Article -->
            <article class="text-center g-mb-100">
              <figure class="g-pos-rel mb-5">
                <img class="img-fluid" src="{{url('/')}}/assets-magazine/img-temp/900x450/img1.jpg" alt="Image Description">

                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0">
                    <li class="list-inline-item mx-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                        215
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                        9
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
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
                  <a class="g-font-weight-700" href="#!">Sport</a>
                </li>
                <li class="list-inline-item">&#8226;</li>
                <li class="list-inline-item g-ml-10">
                  <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                  Aug 14, 2017
                </li>
              </ul>
              <!-- End Category & Date -->

              <!-- Info -->
              <div class="g-px-50 g-px-100--md mb-4">
                <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">The 2018 Specialized Enduro has officially landed</a></h2>
                <p>The top line is that both platforms have been lengthened, and the 27.5 version has had a top tube tweak to give it a look more in keeping with the 29er version.</p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="bm-classic-single-2.html">Read More</a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <!-- Article -->
            <article class="text-center g-mb-100">
              <figure class="g-pos-rel mb-5">
                <div class="js-carousel g-mx-minus-10"
                     data-infinite="true"
                     data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--y g-width-30 g-height-30 g-brd-around g-brd-white g-color-white g-color-primary--hover rounded"
                     data-arrow-left-classes="fa fa-angle-left g-left-20"
                     data-arrow-right-classes="fa fa-angle-right g-right-20">
                  <div class="js-slide">
                    <img class="img-fluid" src="{{url('/')}}/assets-magazine/img-temp/900x450/img2.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide">
                    <img class="img-fluid" src="{{url('/')}}/assets-magazine/img-temp/900x450/img4.jpg" alt="Image Description">
                  </div>
                </div>

                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0">
                    <li class="list-inline-item mx-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                        76
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                        4
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
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
                  <a class="g-font-weight-700" href="#!">Spa</a>
                </li>
                <li class="list-inline-item">&#8226;</li>
                <li class="list-inline-item g-ml-10">
                  <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                  Aug 12, 2017
                </li>
              </ul>
              <!-- End Category & Date -->

              <!-- Info -->
              <div class="g-px-50 g-px-100--md mb-4">
                <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Bamford Haybarn Spas opens first US site</a></h2>
                <p>Originally created by Carole Bamford in the English Cotswolds, the Bamford Haybarn brand has migrated across the pond, with a new 4500sq ft spa in Miami Beach.</p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="bm-classic-single-2.html">Read More</a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <!-- Article -->
            <article class="text-center g-mb-100">
              <figure class="g-pos-rel mb-5">
                <img class="img-fluid" src="{{url('/')}}/assets-magazine/img-temp/900x450/img5.jpg" alt="Image Description">

                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0">
                    <li class="list-inline-item mx-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                        25
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                        12
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
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
                  <a class="g-font-weight-700" href="#!">Fashion</a>
                </li>
                <li class="list-inline-item">&#8226;</li>
                <li class="list-inline-item g-ml-10">
                  <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                  Aug 16, 2017
                </li>
              </ul>
              <!-- End Category & Date -->

              <!-- Info -->
              <div class="g-px-50 g-px-100--md mb-4">
                <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Attacks Are Nation’s Deadliest in Decade; Driver of Van Sought</a></h2>
                <p>BARCELONA, Spain — Largely spared the Islamic State attacks that have plagued Europe in recent years, Spaniards were confronted on Friday with the aftermath of a devastating terrorist plot, involving an explosives factory and two vehicular assaults, that swept through Barcelona and a seaside resort town leaving at least 14 dead and scores wounded.</p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="bm-classic-single-2.html">Read More</a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <!-- Article -->
            <article class="text-center g-mb-100">
              <figure class="g-pos-rel mb-5">
                <img class="img-fluid" src="{{url('/')}}/assets-magazine/img-temp/900x450/img6.jpg" alt="Image Description">

                <!-- Figcaption -->
                <figcaption class="w-100 g-pos-abs g-bottom-0 g-left-0 g-pa-15">
                  <ul class="d-flex justify-content-start list-inline mb-0">
                    <li class="list-inline-item mx-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-left g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                        215
                      </a>
                    </li>
                    <li class="list-inline-item g-ml-minus-1 mr-0">
                      <a class="d-inline-block g-brd-around g-brd-white-opacity-0_3 g-brd-primary-opacity-0_6--hover g-color-white g-bg-primary-opacity-0_6--hover g-text-underline--none--hover rounded-right g-px-15 g-py-4" href="#!">
                        <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                        9
                      </a>
                    </li>
                    <li class="list-inline-item ml-auto mr-0">
                      <a class="d-inline-block g-color-white g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4" href="#!"
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
                  <a class="g-font-weight-700" href="#!">Sport</a>
                </li>
                <li class="list-inline-item">&#8226;</li>
                <li class="list-inline-item g-ml-10">
                  <i class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                  Aug 14, 2017
                </li>
              </ul>
              <!-- End Category & Date -->

              <!-- Info -->
              <div class="g-px-50 g-px-100--md mb-4">
                <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">The 2018 Specialized Enduro has officially landed</a></h2>
                <p>The top line is that both platforms have been lengthened, and the 27.5 version has had a top tube tweak to give it a look more in keeping with the 29er version.</p>
              </div>
              <!-- End Info -->

              <div class="g-mb-25">
                <a class="g-font-weight-600 g-font-size-13 text-uppercase" href="bm-classic-single-2.html">Read More</a>
              </div>

              <!-- Social Icons -->
              <div class="g-overflow-hidden">
                <ul class="list-inline u-info-v10-1 mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <div id="stickyblock-end"></div>

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
            <div class="g-mb-30">
              <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Recent Posts</h2>
              </div>

              <!-- Article -->
              <article class="media g-mb-30">
                <a class="d-flex u-shadow-v25 mr-3" href="#!">
                  <img class="g-width-60 g-height-60" src="{{url('/')}}/assets-magazine/img-temp/100x100/img4.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Best dessert recipes for breakfast which will..</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                      July 20, 2017
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                      <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 18
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Article -->

              <!-- Article -->
              <article class="media g-mb-30">
                <a class="d-flex u-shadow-v25 mr-3" href="#!">
                  <img class="g-width-60 g-height-60" src="{{url('/')}}/assets-magazine/img-temp/100x100/img5.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Stylish things to do, see and purchase..</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                      July 16, 2017
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                      <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 31
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Article -->

              <!-- Article -->
              <article class="media g-mb-30">
                <a class="d-flex u-shadow-v25 mr-3" href="#!">
                  <img class="g-width-60 g-height-60" src="{{url('/')}}/assets-magazine/img-temp/100x100/img6.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Government plans to test new primary school..</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                      July 07, 2017
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                      <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 24
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Article -->

              <!-- Article -->
              <article class="media">
                <a class="d-flex u-shadow-v25 mr-3" href="#!">
                  <img class="g-width-60 g-height-60" src="{{url('/')}}/assets-magazine/img-temp/100x100/img7.jpg" alt="Image Description">
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Top 10 Luxury Hotels - 5 Star Best Luxury Hotels</a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                      July 11, 2017
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                      <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 46
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Article -->
            </div>
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
            <div class="g-mb-50">
              <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Social Links</h2>
              </div>

              <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-between g-mb-20">
                  <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#!">
                    <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-facebook g-bg-facebook--hover g-color-white rounded-circle g-mr-10" href="#!">
                      <i class="fa fa-facebook"></i>
                    </span>
                    Like
                  </a>
                  <span class="js-counter d-block g-color-gray-dark-v4">103832</span>
                </li>
                <li class="d-flex align-items-center justify-content-between g-mb-20">
                  <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#!">
                    <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-lightred g-bg-lightred--hover g-color-white rounded-circle g-mr-10" href="#!">
                      <i class="fa fa-google-plus"></i>
                    </span>
                    Add to Circle
                  </a>
                  <span class="js-counter d-block g-color-gray-dark-v4">47192</span>
                </li>
                <li class="d-flex align-items-center justify-content-between g-mb-20">
                  <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#!">
                    <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-instagram g-bg-instagram--hover g-color-white rounded-circle g-mr-10" href="#!">
                      <i class="fa fa-instagram"></i>
                    </span>
                    Follow Us
                  </a>
                  <span class="js-counter d-block g-color-gray-dark-v4">38291</span>
                </li>
                <li class="d-flex align-items-center justify-content-between g-mb-20">
                  <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#!">
                    <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-teal g-bg-teal--hover g-color-white rounded-circle g-mr-10" href="#!">
                      <i class="fa fa-medium"></i>
                    </span>
                    Writers
                  </a>
                  <span class="js-counter d-block g-color-gray-dark-v4">23871</span>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#!">
                    <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-twitter g-bg-twitter--hover g-color-white rounded-circle g-mr-10" href="#!">
                      <i class="fa fa-twitter"></i>
                    </span>
                    Follow Us
                  </a>
                  <span class="js-counter d-block g-color-gray-dark-v4">391743</span>
                </li>
              </ul>
            </div>
            <!-- End Social Links -->

            <!-- Popular Tags -->
            <div class="g-mb-20">
              <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular Tags</h2>
              </div>

              <ul class="u-list-inline g-font-size-11 text-uppercase mb-0">
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Web Design</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Bootstrap</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">SASS</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Marketing</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Unify</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Htmlstream</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Pixeel</a>
                </li>
                <li class="list-inline-item g-mb-10">
                  <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Free Themes</a>
                </li>
              </ul>
            </div>
            <!-- End Popular Tags -->

            <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
              <!-- News Feed -->
              <div class="g-mb-40">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">News Feed</h2>
                </div>

                <!-- Article -->
                <article>
                  <span class="g-font-size-12">
                    <a class="u-link-v5 g-color-gray-dark-v4" href="#!">Jonathan Owen</a>
                  </span>
                  <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#!">Architects plan to stop skyscrapers from blocking out sunlight</a>
                  </h3>
                </article>
                <!-- End Article -->

                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                <!-- Article -->
                <article>
                  <span class="g-font-size-12">
                    <a class="u-link-v5 g-color-gray-dark-v4" href="#!">James Doe</a>
                  </span>
                  <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#!">Cooltex is one of the best technology company of our age and future</a>
                  </h3>
                </article>
                <!-- End Article -->

                <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

                <!-- Article -->
                <article>
                  <span class="g-font-size-12">
                    <a class="u-link-v5 g-color-gray-dark-v4" href="#!">Albert Coolmen</a>
                  </span>
                  <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#!">Some text goes here with plain English and much more other texts go there..</a>
                  </h3>
                </article>
                <!-- End Article -->
              </div>
              <!-- End News Feed -->

              <!-- Top Authors -->
              <div class="g-mb-40">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Top Authors</h2>
                </div>

                <article class="media g-mb-35">
                  <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/assets-magazine/img-temp/100x100/img1.jpg" alt="Image Description">
                  <div class="media-body">
                    <h4 class="g-font-size-16">
                      <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Htmlstream</a> <small class="g-color-gray-dark-v4">@Htmlstream</small>
                    </h4>
                    <p>Sed ultrices velit vitae tortor posuere and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                  </div>
                </article>

                <article class="media g-mb-35">
                  <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/assets-magazine/img-temp/100x100/img3.jpg" alt="Image Description">
                  <div class="media-body">
                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                      <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Pixeel</a> <small class="g-color-gray-dark-v4">@Pixeeluk</small>
                    </h4>
                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                  </div>
                </article>

                <article class="media">
                  <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3" src="{{url('/')}}/assets-magazine/img-temp/100x100/img2.jpg" alt="Image Description">
                  <div class="media-body">
                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                      <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">WrapBootstrap</a> <small class="g-color-gray-dark-v4">@WrapBootstrap</small>
                    </h4>
                    <p>Ulvinar leo ultricies ut, grab a cup of coffee and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase" href="#!">Follow</a>
                  </div>
                </article>
              </div>
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
