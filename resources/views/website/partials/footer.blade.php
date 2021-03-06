<!-- Footer -->
<hr>
      <footer class="g-bg-white">
        <div class="g-brd-bottom g-brd-secondary-light-v2 g-py-50">
          <div class="container">
            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Zilizovuma!</h3>

            <!-- Footer - Popular Stories Carousel -->
            <div class="js-carousel g-mx-minus-10"
                 data-infinite="true"
                 data-slides-show="4"
                 data-autoplay="true"
                 data-speed="7000"
                 data-lazy-load="ondemand"
                 data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-35 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                 data-arrow-left-classes="fa fa-angle-left g-right-30"
                 data-arrow-right-classes="fa fa-angle-right g-right-0"
                 data-responsive='[{
                   "breakpoint": 1200,
                   "settings": {
                     "slidesToShow": 4
                   }
                 }, {
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 3
                   }
                 }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2
                   }
                 }, {
                   "breakpoint": 480,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]'>

                @foreach(App\Models\Post::orderBy('views','desc')->limit(6)->get() as $popular)
              <div class="js-slide g-px-10">
                <!-- Article -->
                <article class="media g-bg-white g-pa-10">
                  <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                      @if($popular->category->id == 5)
                        <img class= "img-fluid g-width-100 g-height-50"
                           src="https://img.youtube.com/vi/{{$popular->image_url}}/0.jpg" alt="{{$popular->title}}">
                          <figcaption class="g-absolute-centered">
                              <a class="js-fancybox d-block" href="javascript:;"
                                 data-src="https://www.youtube.com/embed/{{$popular->image_url}}"
                                 data-speed="350"
                                 data-caption="Single Image">
                                <span class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                                  <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                              </a>
                            </figcaption>
                      @else
                          <img class="img-fluid g-width-100 g-height-50" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}" alt="{{$popular->title}}">
                      @endif

                  </figure>

                  <div class="media-body">
                    <a class="d-block g-color-darkred g-font-weight-700 g-font-size-12 text-uppercase mb-1" href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">
                        {{$popular->category->name}}
                    </a>
                    <h4 class="g-font-size-13 mb-0">
                        <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">
                          {{$popular->title}}
                        </a>
                    </h4>
                  </div>
                </article>
                <!-- End Article -->
              </div>
                @endforeach
            </div>
            <!-- End Footer - Popular Stories Carousel -->
          </div>
        </div>

          <div style="background-color: red">

              <div class="container">
          <!-- Footer - Content -->
          <div class="g-brd-bottom--md g-brd-secondary-light-v2 g-pb-30--md g-mb-30 g-pt-30">
            <div class="row">

              <div class="col-sm-4 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3 text-white">Linki</h3>

                <!-- Arts -->
                <ul class="list-unstyled mb-0">
                    @foreach(App\Models\PostCategory::get() as $category)
                      <li class="g-px-0 g-my-8">
                        <i class="g-color-white mr-2 fa fa-angle-right"></i>
                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7 text-white"
                           href="{{url('/')}}/category/{{str_replace(' ','_',strtolower($category->name))}}">
                            {{$category->name}}
                        </a>
                      </li>
                    @endforeach
                </ul>
                <!-- End Arts -->
              </div>

              <div class="col-sm-8 col-md-6 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                <div class="g-pl-10--md">
                  <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-2 text-white">Kuhusu Kingo</h3>

                  <div class="row">
                    <!-- Listing & More -->
                      <div>

                        <p class="text-white" style="font-family: 'Liberation Sans'; color: black; font-size: 14px" >
                            Kingo ni jarida la katuni na vichekesho linalolenga kuburudisha <br>
                            kwa namna ya mizaha kupitia matukio ya kawaida katika jamii. <br>
                            Kwa zaidi ya miaka 28 ya uchapishaji Kingo, Kingo limejizolea umaarufu<br>
                            kutokana na namna yake ya kuzodoa maisha ya<br>
                            kila siku ya wananchi wa kawaida.
                        </p>
                      </div>
                    <!-- End Listing & More -->

                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="g-pl-10--md">
                  <img style="max-height: 250px" src="{{url('/')}}/assets-magazine/img/kingo-footer.png">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer - Content -->

          <!-- Footer - Top Section -->
          <div class="g-brd-bottom g-brd-secondary-light-v2 g-mb-30">
            <div class="row align-items-center">
{{--              <div class="col-md-4 g-hidden-sm-down g-mb-30">--}}
{{--                <!-- Logo -->--}}
{{--                <a href="bm-classic-home-2.html">--}}
{{--                  <img style="max-height: 70px" class="g-width-150" src="{{url('/')}}/assets-magazine/img/logo.png" alt="Kingo Logo">--}}
{{--                </a>--}}
{{--                <!-- End Logo -->--}}
{{--              </div>--}}

              <div class="col-md-4 mr-auto g-mb-30">
                <!-- Social Icons -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-light-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://web.facebook.com/kingomagazine"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Like Us on Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-light-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://twitter.com/kingomagazine"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Follow Us on Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-light-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://www.youtube.com/channel/UCmb989XkSPIIPJ0yMuaVMBg"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Subscribe to Our YouTube Channel">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-light-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       target="_blank"
                       href="https://www.instagram.com/official.kingomagazine/"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Follow Us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>

                </ul>
                <!-- End Social Icons -->
              </div>

              <div class="col-md-4 text-center text-md-right g-mb-30">
                <!-- Subscribe Form -->
                <form class="input-group rounded">
                  <input class="form-control g-brd-secondary-light-v2 g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-secondary-light-v3 g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="email" placeholder="Andika Email Yako">
                  <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">Subscribe</button>
                  </span>
                </form>
                <!-- End Subscribe Form -->
              </div>
            </div>
          </div>
          <!-- End Footer - Top Section -->

          <!-- Footer - Bottom Section -->
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto g-brd-secondary-light-v2 g-mb-30">
              <!-- Copyright -->
              <p class="g-color-secondary-light-v2 g-font-size-12 mb-0">&copy; {{date('Y')}} Kingo. Haki zimehifadhiwa</p>
              <!-- End Copyright -->
            </div>

            <div class="col-md-8 ml-auto g-brd-secondary-light-v2 g-mb-30">
              <!-- Links -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-pl-0 g-pr-10">
                  <a class="u-link-v5 g-color-secondary-light-v2 g-font-size-12" href="#!">Wasiliana nasi</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v2 g-font-size-12" href="#!">Msaada</a>
                </li>

                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v2 g-font-size-12" href="#!">Sera ya Matumizi</a>
                </li>

              </ul>
              <!-- End Links -->
            </div>
              <p class="text-white g-font-size-14" style="text-align: center">
                  Majina na tungo zote kwenye hadithi za Kingo ni za kubuni. Endapo itatokea kufanana kwa namna yoyote ile basi na ieleweke kuwa jambo hilo limetokea kwa bahati tu.
              </p>

          </div>
          <!-- End Footer - Bottom Section -->
        </div>

          </div>
      </footer>
      <!-- End Footer -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TQJJY3X1Y2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TQJJY3X1Y2');
</script>
