<!-- Footer -->
      <footer class="g-bg-secondary">
        <div class="g-brd-bottom g-brd-secondary-light-v2 g-py-50 g-mb-50">
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
                    <video class="img-fluid"
                           src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}" alt="{{$popular->title}}"></video>
                          <figcaption class="g-absolute-centered">
                              <a class="js-fancybox d-block" href="javascript:;"
                                 data-src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}"
                                 data-speed="350"
                                 data-caption="Single Image">
                                <span class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                                  <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                              </a>
                            </figcaption>
                      @else
                    <img class="img-fluid" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($popular->image_url)}}" alt="{{$popular->title}}">
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

        <div class="container">
          <!-- Footer - Content -->
          <div class="g-brd-bottom--md g-brd-secondary-light-v2 g-pb-30--md g-mb-30">
            <div class="row">

              <div class="col-sm-4 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Linki</h3>

                <!-- Arts -->
                <ul class="list-unstyled mb-0">
                    @foreach(App\Models\PostCategory::get() as $category)
                      <li class="g-px-0 g-my-8">
                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
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
                  <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-2">Kuhusu Kingo</h3>

                  <div class="row">
                    <!-- Listing & More -->
                      <div>

                        <p>
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
              <div class="col-md-4 g-hidden-sm-down g-mb-30">
                <!-- Logo -->
                <a href="bm-classic-home-2.html">
                  <img style="max-height: 70px" class="g-width-150" src="{{url('/')}}/assets-magazine/img/logo.png" alt="Kingo Logo">
                </a>
                <!-- End Logo -->
              </div>

              <div class="col-md-4 ml-auto g-mb-30">
                <!-- Social Icons -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://web.facebook.com/kingomagazine"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Like Us on Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://twitter.com/kingomagazine"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Follow Us on Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                       href="https://www.youtube.com/channel/UCmb989XkSPIIPJ0yMuaVMBg"
                       target="_blank"
                       data-toggle="tooltip"
                       data-placement="top"
                       title="Subscribe to Our YouTube Channel">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
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
            <div class="col-md-2 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
              <!-- Copyright -->
              <p class="g-color-secondary-light-v1 g-font-size-12 mb-0">&copy; 2021 Kingo.</p>
              <!-- End Copyright -->
            </div>

            <div class="col-md-8 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
              <!-- Links -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-pl-0 g-pr-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Contact Us</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Help</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Work with Us</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Advertise</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Your Ad Choices</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Privacy</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Terms of Use</a>
                </li>
                <li class="list-inline-item g-px-10">
                  <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#!">Send Feedback</a>
                </li>
              </ul>
              <!-- End Links -->
            </div>

          </div>
          <!-- End Footer - Bottom Section -->
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
