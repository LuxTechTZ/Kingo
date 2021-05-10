<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/multipage/blog-magazine/classic/bm-classic-home-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:25:02 GMT -->

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Kingo') }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/assets/kingo-favi.png">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets-main/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{{url('/')}}/assets-magazine/css/styles.bm-classic.css?v.1">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{url('/')}}/assets-main/css/custom.css">
</head>

<body>
    <main>
        <!-- Header -->
        @include('website.partials.header')
        <!-- End Header -->

        <!-- Promo Block -->
        <section class="g-py-50">
            <div class="container">

                <div class="row">
                    {{-- first column --}}
                    <div class="col-lg-3 g-mb-30 g-mb-2--lg"
                        style="padding-right: 15px;border-right: 1px solid rgb(195, 193, 193)">

                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="https://kingo.s3-eu-west-1.amazonaws.com/dynamic-content/images/small-4206-20210427073010-157595.jpg"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">POST MPYA</a>
                        </span>

                        <h5 class="h5"
                            style="border-bottom: 1px solid rgb(195, 193, 193); margin-bottom: 20px; padding-bottom: 5px">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Mwana wa Kondoo
                                Kafufuka</a>
                        </h5>


                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="https://kingo.s3-eu-west-1.amazonaws.com/dynamic-content/images/small-6779-20210424121250-399198.jpg"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">METHALI MPYA</a>
                        </span>

                        <h5 class="h5"
                            style="border-bottom: 1px solid rgb(195, 193, 193); margin-bottom: 20px; padding-bottom: 5px">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Mwana wa Kondoo
                                Kafufuka</a>
                        </h5>

                        {{-- article --}}
                        <article class="u-block-hover">
                            <a href="{{url('/')}}/post/{{$video->title}}/{{$video->id}}">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <iframe style="width: 100%; height: 150px"
                                      src="https://www.youtube.com/embed/{{$video->image_url}}"
                                      title="{{$video->title}}" frameborder="0"
                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                              </iframe>
                                <span
                                    class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                    <i class="fa fa-play g-left-2"></i>
                                </span>
                            </figure>
                                </a>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">VIDEO</a>
                        </span>

                        <h5 class="h5 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$video->title}}</a>
                        </h5>

                    </div>

                    {{-- second column --}}
                    <div class="col-lg-6 g-mb-30 g-mb-2--lg" style="padding: 0 40px 0 40px">


                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($domokaya->image_url)}}"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">DOMOKAYA</a>
                        </span>

                        <h5 class="h5"
                            style="border-bottom: 1px solid rgb(195, 193, 193); margin-bottom: 20px;padding-bottom: 10px">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$domokaya->title}}</a>
                        </h5>

                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($porojo->image_url)}}"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">POROJO</a>
                        </span>

                        <h5 class="h5 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$porojo->title}}</a>
                            <p>
                                @if (strlen($porojo->content) > 60)
                                    {{$porojo->content = substr($porojo->content, 0, 57) . '...'}}
                                @else
                                    {{$porojo->content}}
                                @endif
                            </p>
                        </h5>

                    </div>

                    {{-- third column --}}
                    <div class="col-lg-3 g-mb-30 g-mb-2--lg"
                        style="padding-left: 15px;border-left: 1px solid rgb(195, 193, 193)">

                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after"
                                style="height: 308px">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($porojo_live->image_url)}}"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">Porojo Live</a>
                        </span>

                        <h5 class="h5"
                            style="border-bottom: 1px solid rgb(195, 193, 193); margin-bottom: 20px;padding-bottom: 5px">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$porojo_live->title}}</a>
                        </h5>

                        {{-- article --}}
                        <article class="u-block-hover">
                            <figure class="u-shadow-v25 g-bg-cover g-bg-white-gradient-opacity-v1--after">
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($kingo_katuni->image_url)}}"
                                    alt="Image Description">
                            </figure>

                        </article>

                        <span class="g-mb-10">
                            <a class="btn btn-xs u-btn-red text-uppercase rounded-0" href="#!">KINGO</a>
                        </span>

                        <h5 class="h5" style="margin-bottom: 20px">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">{{$kingo_katuni->title}}</a>
                        </h5>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Promo Block -->

        <!-- News Content -->
      <section class="g-pb-100">
        <div class="container">
          <!-- News Section 1 -->
          <div class="row g-mb-60">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
              <!-- Latest News -->
              <div class="g-mb-50">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">
                      Mpya
                  </h2>
                </div>

                <div class="row">
                  <!-- Article (Leftside) -->
                  <div class="col-lg-7 g-mb-50 g-mb-0--lg">

                    <article>
                        @php
                            $new_porojo = \App\Models\Post::where('post_category_id','1')->orderBy('id','desc')->first();
                        @endphp
                      <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                        <img class="img-fluid w-100"
                             src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url(\App\Models\Post::where('post_category_id','1')->orderBy('id','desc')->first()->image_url)}}"
                             alt="Image Description">

                        <figcaption class="g-pos-abs g-top-20 g-left-20">
                          <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="{{url('/')}}/post/{{$new_porojo->title}}/{{$new_porojo->id}}">
                              {{\App\Models\Post::where('post_category_id','1')->orderBy('id','desc')->first()->category->name}}
                          </a>
                        </figcaption>
                      </figure>

                      <h3 class="h4 g-mb-10">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                            {{\App\Models\Post::where('post_category_id','1')->orderBy('id','desc')->first()->title}}
                        </a>
                      </h3>

                      <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                        <li class="list-inline-item">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">{{$new_porojo->artist_name}}</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          {{date('M d, Y',strtotime($new_porojo->post_date))}}
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                              {{$new_porojo->views}}
                          </a>
                        </li>
                      </ul>

                      <p class="g-color-gray-dark-v2">
                          @if (strlen($new_porojo->content) > 200)
                              {{$new_porojo->content = substr($new_porojo->content, 0, 197) . '...'}}
                          @else
                              {{$new_porojo->content}}
                          @endif
                      </p>
                      <a class="g-font-size-12" href="{{url('/')}}/post/{{$new_porojo->title}}/{{$new_porojo->id}}">
                          Soma Zaidi...
                      </a>
                    </article>
                  </div>
                  <!-- End Article (Leftside) -->

                  <!-- Article (Rightside) -->
                  <div class="col-lg-5">
                    <!-- Article -->
                      @foreach(\App\Models\Post::where('post_category_id','!=','7')->where('post_category_id','!=','5')->orderBy('id','desc')->limit(4)->get() as $new_post)
                    <article class="media">
                      <a class="d-flex u-shadow-v25 align-self-center mr-3"
                         href="{{url('/')}}/post/{{$new_post->title}}/{{$new_post->id}}">
                        <img class="g-width-80 g-height-80"
                             src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($new_post->image_url)}}"
                             alt="{{$new_post->title}}">
                      </a>

                      <div class="media-body">
                        <h3 class="h6">
                          <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                             href="{{url('/')}}/post/{{$new_post->title}}/{{$new_post->id}}">
                              {{$new_post->title}}
                          </a>
                        </h3>

                        <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                          <li class="list-inline-item">
                            {{date('M d, Y',strtotime($new_post->post_date))}}
                          </li>
                          <li class="list-inline-item">/</li>
                          <li class="list-inline-item">
                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover">
                              <i class="icon-eye u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                {{$new_post->views}}
                            </a>
                          </li>
                        </ul>
                      </div>
                    </article>

                    <!-- End Article -->
                      @if(!$loop->last)
                        <hr class="g-brd-gray-light-v4 g-my-25">
                      @endif

                  @endforeach
                  </div>
                  <!-- End Article (Rightside) -->
                </div>
              </div>
              <!-- End Latest News -->

                <div class="g-mb-60">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">
                      Zinazotazamwa Zaidi
                  </h2>
                </div>

                <div class="row">
                    @foreach(App\Models\Post::where('post_category_id','!=','3')->orderBy('views','desc')->limit(10)->get() as $popular)
                        @if($loop->iteration == 1 || $loop->iteration == 6)
                            <div class="col-lg-6 g-mb-50 g-mb-0--lg">
                                <!-- Article -->
                                <article class="g-mb-40">
                                  <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                      <a href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">
                                          @if($popular->category->id == 5)
                                            <video class="img-fluid w-100"
                                                 src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}"
                                                   alt="{{$popular->title}}"></video>
                                          @else
                                              <img class="img-fluid w-100"
                                                 src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}"
                                                 alt="{{$popular->title}}">
                                          @endif
                                      </a>
                                    <figcaption class="g-pos-abs g-top-20 g-left-20">
                                      <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="#!">
                                          {{$popular->category->name}}
                                      </a>
                                    </figcaption>
                                  </figure>

                                  <h3 class="h4 g-mb-10">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                                        {{$popular->title}}
                                    </a>
                                  </h3>

                                  <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                                    <li class="list-inline-item">
                                      <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Mike Coolman</a>
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                      {{date('M d, Y',strtotime($popular->post_date))}}
                                    </li>
                                    <li class="list-inline-item">/</li>
                                    <li class="list-inline-item">
                                      <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                        <i class="icon-eye u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                          {{$popular->views}}
                                      </a>
                                    </li>
                                  </ul>

                                  <p class="g-color-gray-dark-v2">
                                      @if (strlen($popular->content) > 200)
                                            {!! $popular->content = substr($popular->content, 0, 197) . '...' !!}
                                        @else
                                            {!! $popular->content !!}
                                        @endif
                                  </p>
                                  <a class="g-font-size-12" href="#!">Read More..</a>
                                </article>
                                <!-- Article -->
                            @elseif($loop->iteration == 6)
                            @else
                                <!-- Other Articles -->
                                    <article class="media">
                                              <a href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">
                                          <figure class="d-flex u-shadow-v25 mr-3 g-pos-rel">
                                                  @if($popular->category->id == 5)
                                                      <iframe class="g-width-140 g-height-80"
                                                              src="https://www.youtube.com/embed/{{$popular->image_url}}"
                                                              title="{{$popular->title}}" frameborder="0"
                                                              allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                      </iframe>
                                                  @else
                                                      <img class="g-width-140 g-height-80"
                                                         src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}"
                                                         alt="Image Description">
                                                  @endif
                                          </figure>
                                              </a>

                                          <div class="media-body">
                                            <h3 class="g-font-size-16">
                                              <a class="g-color-gray-dark-v1" href="#!">
                                                  {{$popular->title}}
                                              </a>
                                            </h3>

                                            <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                              <li class="list-inline-item">
                                                {{date('M d, Y',strtotime($popular->post_date))}}
                                              </li>
                                              <li class="list-inline-item">/</li>
                                              <li class="list-inline-item">
                                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                                  <i class="icon-eye u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                                    {{$popular->views}}
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                        </article>
                                    <!-- End Other Articles -->
                                    <hr class="g-brd-gray-light-v4 g-my-25">
                                @endif
                                @if($loop->iteration == 5)
                            </div>
                        @endif
                    @endforeach
                            </div>
                </div>
              </div>


            </div>
            <!-- End Articles Content -->

            <!-- Sidebar -->
            <div class="col-lg-3">
              <!-- Useful Links -->
              @include('website.partials.popular')
              <!-- End Useful Links -->

              <!-- Subscribe -->
              @include('website.partials.add1')
              <!-- End Subscribe -->

              <!-- Recent Posts -->
              @include('website.partials.recent')
              <!-- End Recent Posts -->

              @include('website.partials.ad2')
            </div>
            <!-- End Sidebar -->
          </div>
          <!-- News Section 1 -->


          <!-- News Section 3 -->
          <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
              <!-- Popular News -->
              @foreach(App\Models\PostCategory::where('id','!=','6')->get() as $category)
                    @if($category->id == 1)
                        @php  $colour  = 'blue';  @endphp
                    @elseif($category->id == 2)
                        @php  $colour  = 'pink';  @endphp
                    @elseif($category->id == 3)
                        @php  $colour  = 'teal';  @endphp
                    @elseif($category->id == 4)
                        @php  $colour  = 'brown';  @endphp
                    @elseif($category->id == 5)
                        @php  $colour  = 'darkred';  @endphp
                    @elseif($category->id == 6)
                        @php  $colour  = 'indigo';  @endphp
                    @elseif($category->id == 7)
                        @php  $colour  = 'darkred';  @endphp
                    @endif
              <!-- Featured Articles -->
              <div class="g-mb-60">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">
                      {{$category->name}}
                  </h2>
                </div>

                <div class="row g-mb-60">
                    @foreach($category->posts as $post)
                    <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                        <!-- Article -->
                        <article class="g-mb-30">
                          <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                              <a href="{{url('/')}}/post/{{str_replace('?','',strtolower($post->title))}}/{{$post->id}}">
                                  @if($category->id == 5)
                                  <img class="img-fluid w-100"
                                       src="https://img.youtube.com/vi/{{$post->image_url}}/0.jpg"
                                         alt="{{$post->title}}">
                                  @else
                                      <img class="img-fluid w-100"
                                       src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($post->image_url)}}"
                                       alt="{{$post->title}}">
                                  @endif

                              </a>
                          </figure>

                          <h3 class="h4 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                               href="{{url('/')}}/post/{{str_replace('?','',strtolower($post->title))}}/{{$post->id}}">
                                {{$post->title}}
                            </a>
                          </h3>

                          <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                            <li class="list-inline-item">
                              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                  {{$post->artist_name}}
                              </a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                              {{date('M d, Y',strtotime($post->post_date))}}
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                              <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover">
                                <i class="icon-eye u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                  {{$post->views}}
                              </a>
                            </li>
                          </ul>

                          <p class="g-color-gray-dark-v2">
                                @if (strlen($post->content) > 60)
                                    {!! $post->content = substr($post->content, 0, 57) . '...' !!}
                                @else
                                    {!! $post->content !!}
                                @endif
                          </p>
                        </article>
                        <!-- End Article -->
                    </div>
                        @break($loop->iteration == 6)
                    @endforeach
                    <div class="col-12">
                    <a class="g-font-size-12" href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($category->name))}}">
                        Ona {{$category->name}} Zaidi..
                    </a>
                    </div>

                </div>
              </div>
              <!-- End Articles -->
            @endforeach
              <!-- End Popular News -->

              <!-- Weekly News -->
              <div class="g-mb-60">
                <div class="u-heading-v3-1 g-mb-30">
                  <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">
                      Riwaya
                  </h2>
                </div>

                <!-- Articles -->
                  @foreach(\App\Models\Post::where('post_category_id','6')->orderBy('id','desc')->get() as $riwaya)
                    <div class="row g-mb-30">
                      <!-- Article Image -->
                      <div class="col-md-5">
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20 g-mb-0--lg">
                          <img class="img-fluid w-100"
                               src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($riwaya->image_url)}}"
                               alt="{{$riwaya->title}}">

                          <figcaption class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-xs u-btn-darkpurple text-uppercase rounded-0" href="#!">
                                {{$riwaya->category->name}}
                            </a>
                          </figcaption>
                        </figure>
                      </div>
                      <!-- End Article Image -->

                      <!-- Article Content -->
                      <div class="col-md-7 align-self-center">
                        <h3 class="h4 g-mb-15">
                          <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                             href="{{url('/')}}/post/{{$riwaya->title}}/{{$riwaya->id}}">
                              {{$riwaya->title}}
                          </a>
                        </h3>

                        <ul class="list-inline g-color-gray-dark-v4 g-font-size-12">
                          <li class="list-inline-item">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" >
                                {{$riwaya->artist_name}}
                            </a>
                          </li>
                          <li class="list-inline-item">/</li>
                          <li class="list-inline-item">
                            {{date('M d, Y',strtotime($riwaya->post_date))}}
                          </li>
                          <li class="list-inline-item">/</li>
                          <li class="list-inline-item">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                              <i class="icon-eye u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                {{$riwaya->views}}
                            </a>
                          </li>
                        </ul>

                        <p class="g-color-gray-dark-v2">
                            @if (strlen($riwaya->content) > 200)
                                {!! $riwaya->content = substr($riwaya->content, 0, 197) . '...' !!}
                            @else
                                {!! $riwaya->content !!}
                            @endif
                        </p>
                        <a class="g-font-size-12" href="{{url('/')}}/post/{{$riwaya->title}}/{{$riwaya->id}}">Soma Zaidi..</a>
                      </div>
                      <!-- End Article Content -->
                    </div>
                  @endforeach
                <!-- End Articles -->
              </div>
              <!-- End Weekly News -->

              <!-- Pagination -->
              <nav id="stickyblock-end-1" aria-label="Page Navigation">

              </nav>
              <!-- End Pagination -->
            </div>
            <!-- End Articles -->

            <!-- Sidebar -->
            <div class="col-lg-3">


              <div id="stickyblock-start-1" class="js-sticky-block g-sticky-block--lg g-pt-20" data-start-point="#stickyblock-start-1" data-end-point="#stickyblock-end-1">
                <!-- News Feed -->
                <div class="g-mb-40">
                  <div class="u-heading-v3-1 g-mb-30">
                    <h2 class="h5 u-heading-v3__title g-font-primary g-font-weight-700 g-color-gray-dark-v1 text-uppercase g-brd-primary">
                        Mithali
                    </h2>
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
                @include('website.partials.authors')
                <!-- End Top Authors -->
              </div>
            </div>
            <!-- End Sidebar -->
          </div>
          <!-- News Section 3 -->
        </div>
      </section>
      <!-- End News Content -->

        <!-- Footer -->
        @include('website.partials.footer')
        <!-- End Footer -->

        <!-- Go To -->
        <a class="js-go-to u-go-to-v2" href="#!" data-type="fixed" data-position='{
           "bottom": 15,
           "right": 15
         }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
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
    <script src="{{url('/')}}/assets-main/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{{url('/')}}/assets-main/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="{{url('/')}}/assets-main/js/hs.core.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.header.js"></script>
    <script src="{{url('/')}}/assets-main/js/helpers/hs.hamburgers.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.dropdown.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.counter.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.onscroll-animation.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.sticky-block.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.carousel.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.popup.js"></script>
    <script src="{{url('/')}}/assets-main/js/components/hs.go-to.js"></script>

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
            // initialization of scroll animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
            // initialization of counters
            var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');
            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');
        });
        $(window).on('load', function () {
            // initialization of sticky blocks
            setTimeout(function () { // important in this case
                $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
            }, 1);
        });

    </script>
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v2.6/multipage/blog-magazine/classic/bm-classic-home-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 07:25:31 GMT -->

</html>