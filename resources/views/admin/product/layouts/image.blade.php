<div class="row user-profile mt-1 ml-0 mr-0">

        @forelse ($item->getMedia('product') as $imgUrl)
            <div class="col s12 m6 l3">
                <div class="card-panel border-radius-6 mt-10 card-animation-1">
                    <a href="#">
                        <picture>
                            <source type="image/webp"
                                    srcset="{{$imgUrl->getUrl('thumb-p')}}">
                            <img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
                                 src="{{ $imgUrl->getUrl('thumb') }}"
                                 alt="{{$item->title}}-{{$item->id}}">
                        </picture>
                    </a>

                    <div>
                        <label>
                            <input
                                type="checkbox"
                                name="imageDelete[]"
                                value="{{$imgUrl->id}}"
                            >
                            <span>Отметить для удаления</span>
                        </label>
                    </div>
                </div>
            </div>

    @empty
        <img class="img-fluid" src="{{asset('assets/i/no-photo.jpg')}}" alt="{{$item->title}}">
    @endforelse

</div>
