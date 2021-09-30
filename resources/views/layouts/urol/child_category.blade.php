<li class="dropdown-item">
    <a href="{{route('catalog', $child_category->slug)}}">
        {{ $child_category->translate(app()->getLocale(), true)->title}}
    </a>
</li>
@if ($child_category->categories->count()>0)
    <ul class="submenu dropdown-menu">
        @foreach ($child_category->categories as $childCategory)
            @include('layouts.urol.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
