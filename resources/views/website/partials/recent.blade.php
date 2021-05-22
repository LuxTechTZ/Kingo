<div class="g-mb-30">
    <div class="u-heading-v3-1 g-mb-30">
        <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
            Mpya
        </h2>
    </div>
        @foreach(\App\Models\Post::orderBy('id','desc')->limit(5)->get() as $recent)
            <!-- Article -->
                <article class="media g-mb-30">
                <a class="d-flex u-shadow-v25 mr-3" href="{{url('/')}}/post/{{str_replace('?','',$recent->title)}}/{{$recent->id}}">
                    @if($recent->category->id == 5)
                        <span class="g-width-60 g-height-60"
                              style="background-image: url(https://img.youtube.com/vi/{{$recent->image_url}}/0.jpg);
                                  background-size: contain; background-repeat: no-repeat; background-position: center"></span>
                    @else
                        <img class="g-width-60 g-height-60" src="{{url('/')}}/{{Illuminate\Support\Facades\Storage::url($recent->image_url)}}"
                       alt="{{$recent->title}}">
                    @endif
                </a>

                <div class="media-body">
                  <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="{{url('/')}}/post/{{str_replace('?','',$recent->title)}}/{{$recent->id}}">
                        {{$recent->title}}
                    </a>
                  </h3>

                  <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                      {{date('M d, Y',strtotime($recent->post_date))}}
                    </li>
                    <li class="list-inline-item">/</li>
                    <li class="list-inline-item">
                      <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> {{$recent->shares}}
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Article -->
        @endforeach
</div>
