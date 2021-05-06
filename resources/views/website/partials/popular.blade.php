<!-- Useful Links -->
            <div class="g-mb-50">
              <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
                    Maarufu Zaidi
                </h2>
              </div>

              <ul class="list-unstyled">
                  @foreach(\App\Models\Post::where('status','1')->limit(6)->get() as $popular)
                      @if($loop->last)
                        <li class="mb-0">
                          <h4 class="h6">
                            <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">{{$popular->title}}</a>
                          </h4>
                        </li>
                      @else
                          <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                          <h4 class="h6">
                            <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="{{url('/')}}/post/{{$popular->title}}/{{$popular->id}}">{{$popular->title}}</a>
                          </h4>
                        </li>
                      @endif
                  @endforeach

              </ul>
            </div>
            <!-- End Useful Links -->
