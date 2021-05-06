<!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-md-3 g-hidden-md-down">
                <a href="{{url('/')}}" class="navbar-brand">
                  <img style="max-height: 70px" src="{{url('/')}}/assets-magazine/img/logo.png" alt="Logo">
                </a>
              </div>
              <!-- End Logo -->

              <!-- Search Form -->
              <div class="col-6 col-md-5">
                <form class="input-group rounded">
                  <input class="form-control g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="text" placeholder="Search the entire site">
                  <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">
                      <span class="g-hidden-md-down">Search</span>
                      <i class="g-hidden-lg-up fa fa-search"></i>
                    </button>
                  </span>
                </form>
              </div>
              <!-- End Search Form -->



            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
              <!-- Logo -->
              <a class="navbar-brand g-hidden-lg-up" href="{{url('/')}}">
                <img style="max-height: 50px" src="{{url('/')}}/assets-magazine/img/logo.png" alt="Kingo Logo">
              </a>
              <!-- End Logo -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                <ul class="navbar-nav g-font-weight-600">
                    <!-- Home -->
                  <li class="nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('/')}}">
                      Home
                    </a>
                  </li>
                  <!-- End Home -->

                  <!-- Mega Porojo Item -->
                    <li class="g-hidden-md-up nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/porojo">
                      Porojo
                    </a>
                  </li>
                  <li class="g-hidden-sm-down hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-1" class="nav-link text-uppercase g-px-0" href="{{url('/')}}/category/porojo" aria-haspopup="true" aria-expanded="false">
                        Porojo
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Porojo Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-1">
                      <div class="row">
                        <div class="col-lg-2">
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Porojo</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Zinazokiki</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Mpya</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Vichekesho</a></li>

                          </ul>
                        </div>
                        <div class="col-lg-5">
                          @foreach(\App\Models\Post::where('post_category_id','1')->limit(6)->get() as $poj)
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="{{url('/')}}/post/{{$poj->title}}/{{$poj->id}}">
                                <img class="g-width-120 g-height-70" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($poj->image_url)}}"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="{{url('/')}}/post/{{$poj->title}}/{{$poj->id}}">{{$poj->title}}</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">{{date('M d, Y',strtotime($poj->post_date))}}</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-heart-o"></i> 12
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                                @if($loop->iteration == 3)
                                    </div>
                                    <div class="col-lg-5">
                                @endif
                            @endforeach
                        </div>
                      </div>
                    </div>
                    <!-- End Porojo Menu -->
                  </li>
                  <!-- End Mega Porojo Item -->

                    <!-- Mega Domokaya Item -->
                    <li class="g-hidden-md-up nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/domokaya">
                      Domokaya
                    </a>
                  </li>
                  <li class="g-hidden-sm-down hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-1" class="nav-link text-uppercase g-px-0" href="{{url('/')}}/category/domokaya" aria-haspopup="true" aria-expanded="false">
                        Domokaya
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Domokaya Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-1">
                      <div class="row">
                        <div class="col-lg-2">
                          <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Porojo</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Zinazokiki</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Mpya</a></li>
                            <li class="g-brd-bottom g-brd-gray-light-v4 g-py-10">
                              <a class="g-color-main g-color-main--hover" href="{{url('/')}}/porojo">Vichekesho</a></li>

                          </ul>
                        </div>
                        <div class="col-lg-5">
                          @foreach(\App\Models\Post::where('post_category_id','2')->limit(6)->get() as $poj)
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="{{url('/')}}/post/{{$poj->title}}/{{$poj->id}}">
                                <img class="g-width-120 g-height-70" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($poj->image_url)}}"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="{{url('/')}}/post/{{$poj->title}}/{{$poj->id}}">{{$poj->title}}</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">{{date('M d, Y',strtotime($poj->post_date))}}</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-heart-o"></i> 12
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                                @if($loop->iteration == 3)
                                    </div>
                                    <div class="col-lg-5">
                                @endif
                            @endforeach
                        </div>
                      </div>
                    </div>
                    <!-- End Domokaya Menu -->
                  </li>
                  <!-- End Mega Domokaya Item -->


                  <!-- Mega Porojo Live Item -->
                    <li class="g-hidden-md-up nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/porojo_live">
                      Porojo Live
                    </a>
                  </li>
                  <li class="g-hidden-sm-down hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-3" class="nav-link text-uppercase g-px-0" href="{{url('/')}}/category/porojo_live" aria-haspopup="true" aria-expanded="false">
                        Porojo Live
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i>
                    </a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-3">
                      <div class="row">
                        <div class="col-lg-4">
                            @php $main_porojo_live = \App\Models\Post::where('post_category_id','3')->where('status','1')->first() @endphp
                          <article>
                            <figure class="g-pos-rel">
                              <img class="img-fluid w-100 g-mb-20" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($main_porojo_live->image_url)}}" alt="Image Description">
                            </figure>
                            <h3 class="h4 g-mb-10"><a class="g-color-gray-dark-v2" href="#!">{{$main_porojo_live->title}}</a>
                            </h3>
                            <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                              <li class="list-inline-item">
                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">{{$main_porojo_live->artist_name}}</a>
                              </li>
                              <li class="list-inline-item">/</li>
                              <li class="list-inline-item">{{date('M d, Y',strtotime($main_porojo_live->post_date))}}</li>
                              <li class="list-inline-item">/</li>
                              <li class="list-inline-item">
                                <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                  <i class="fa fa-heart-o"></i> 18
                                </a>
                              </li>
                            </ul>
                          </article>
                        </div>
                        <div class="col-lg-4">
                          @foreach(\App\Models\Post::where('post_category_id','3')->limit(6)->get() as $main_porojo_live_d)
                          <article class="media g-mb-20">
                            <a class="d-flex mr-3" href="{{url('/')}}/post/{{$main_porojo_live_d->title}}/{{$main_porojo_live_d->id}}">
                                <img class="g-width-120" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($main_porojo_live_d->image_url)}}"></a>
                            <div class="media-body">
                              <h3 class="h6">
                                <a class="g-color-main" href="{{url('/')}}/post/{{$main_porojo_live_d->title}}/{{$main_porojo_live_d->id}}">{{$main_porojo_live_d->title}}</a></h3>
                              <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                                <li class="list-inline-item">{{date('M d, Y',strtotime($main_porojo_live_d->post_date))}}</li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                                    <i class="fa fa-heart-o"></i> 12
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </article>
                                @if($loop->iteration == 3)
                                    </div>
                                    <div class="col-lg-4">
                                @endif
                            @endforeach
                        </div>
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Porojo Live Item -->

                    <!-- Mjue Maarufu -->
                    <li class="nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0" href="{{url('/')}}/category/mjue_maarufu">
                      Mjue Maarufu
                    </a>
                  </li>
                    <!-- End Mjue Maarufu -->

                  <!-- Mega Video Item -->
                    <li class="g-hidden-md-up nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/video">
                      Video
                    </a>
                  </li>
                  <li class="g-hidden-sm-down hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-4" class="nav-link text-uppercase g-px-0" href="{{url('/')}}/category/video" aria-haspopup="true" aria-expanded="false">
                        Video
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-4">
                      <div class="row">
                            @foreach(\App\Models\Post::where('post_category_id','5')->limit(3)->get() as $vid)
                        <div class="col-lg-4">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                                <video class="img-fluid u-block-hover__main--zoom-v1" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($vid->image_url)}}" alt="{{$vid->title}}"></video>
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" href="{{url('/')}}/category/video">{{$vid->category->name}}</a>
                          </span>
                            <span class="u-icon-v3 u-icon-size--sm g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-top-20 g-right-20">
                            <i class="icon-camrecorder"></i>
                          </span>
                            <header class="g-pos-abs g-bottom-10 g-left-20 g-right-20">
                              <small class="g-color-white">
                                <i class="icon-clock g-pos-rel g-top-1 g-mr-2"></i> {{date('M d, Y',strtotime($vid->post_date))}}
                              </small>
                              <h3 class="h4 g-font-weight-600 g-mt-5">
                                <a class="g-color-white g-color-white--hover" href="{{url('/')}}/post/{{$vid->title}}/{{$vid->id}}">
                                    {{$vid->title}}
                                </a>
                              </h3>
                            </header>
                          </article>
                        </div>
                          @endforeach

                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Video Item -->


                  <!-- Mega Riwaya Item -->
                    <li class="g-hidden-md-up nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/riwaya">
                      Riwaya
                    </a>
                  </li>
                  <li class="g-hidden-sm-down hs-has-mega-menu nav-item g-mx-10--lg g-mx-20--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-position="right">
                    <a id="mega-menu-label-6" class="nav-link text-uppercase g-px-0" href="{{url('/')}}/category/riwaya" aria-haspopup="true" aria-expanded="false">
                        Riwaya
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-5"></i></a>

                    <!-- Mega Menu -->
                    <div class="hs-mega-menu u-shadow-v11 g-text-transform-none g-font-weight-400 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-left-15 g-right-15 g-pa-30 g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-label-6">
                      <div class="row">
                          @foreach(\App\Models\Post::where('post_category_id','6')->limit(3)->get() as $rew)
                              <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                          <article class="u-block-hover">
                            <figure class="g-bg-cover g-bg-black-gradient-opacity-v1--after">
                              <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                   src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($rew->image_url)}}" alt="Image Description">
                            </figure>
                            <span class="g-pos-abs g-top-20 g-left-20">
                            <a class="btn btn-sm u-btn-red rounded-0" >
                              <i class="icon-energy"></i>
                            </a>
                            <a class="btn btn-sm u-btn-black rounded-0" href="{{url('/')}}/post/{{$rew->title}}/{{$rew->id}}">{{date('M d, Y',strtotime($rew->post_date))}}</a>
                          </span>
                            <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">
                              <ul class="list-inline g-font-size-12 g-color-white g-mb-5">
                                <li class="list-inline-item">
                                  <i class="icon-eye g-pos-rel g-top-1 g-mr-2"></i> 152
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-heart g-pos-rel g-top-1 g-mr-2"></i> 17
                                </li>
                                <li class="list-inline-item">/</li>
                                <li class="list-inline-item">
                                  <i class="icon-share g-pos-rel g-top-1 g-mr-2"></i> 35
                                </li>
                              </ul>
                              <h3 class="h5 g-font-weight-300 g-mb-0">
                                <a class="g-color-white g-color-white--hover" href="{{url('/')}}/post/{{$rew->title}}/{{$rew->id}}">
                                    {{$rew->title}}
                                </a>
                              </h3>
                            </div>
                          </article>
                        </div>
                          @endforeach
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Mega Riwaya Item -->


                  <!-- Main -->
                  <li class="nav-item g-mx-10--lg g-mx-20--xl">
                    <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-0"
                       href="{{url('/')}}/category/kingo_katuni">
                      Kingo Katuni
                    </a>
                  </li>
                  <!-- End Main -->
                </ul>
              </div>
              <!-- End Navigation -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->
