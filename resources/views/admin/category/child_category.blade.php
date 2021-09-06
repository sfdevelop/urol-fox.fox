<li class="category_li pl-1">
    {{$separator ?? ''}} {{ $child_category->title ??'' }}

    <div class="right">
        <img style="border-radius: 8px; border: 1px solid #ccc; max-width: 40px"
             class="responsive-img"
             src="{{$child_category->getFirstMediaUrl('category', 'thumb-p')}}"/>
        <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped"
           href="{{route('admin.category.edit', $child_category->id)}}"
           data-position="left"
           data-tooltip="Редактирование"
        >
            <i class="material-icons dp48">create</i>
        </a>

        <form method="POST" action="{{route('admin.category.destroy', $child_category->id)}} "
              class="col"
        >
            @csrf
            @method('DELETE')
            <button class="btn-floating mb-1 waves-effect waves-light tooltipped"
                    type="submit"
                    href="#"
                    data-position="left"
                    data-tooltip="Удалить"
            >
                <i class="material-icons">clear</i>
            </button>
        </form>

    </div>

</li>
@if ($child_category->categories)
    <ul class="pl-2">
        @foreach ($child_category->categories as $childCategory)
            @include('admin.category.child_category', ['child_category' => $childCategory, 'separator'=>'-'.$separator])
        @endforeach
    </ul>
@endif
{{--<ul>--}}
{{--    @foreach($categories as $category)--}}
{{--        <li>--}}
{{--            {{$separator ?? ''}} {{$category->title}}--}}
{{--            @if($category->sub->count())--}}
{{--                <a>--}}
{{--                @include('admin.category.child_category', ['categories' => $category->sub, 'separator'=>'-'.$separator])--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
