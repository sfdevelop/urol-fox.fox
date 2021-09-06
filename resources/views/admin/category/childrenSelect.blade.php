<option
    {{old('category_id',$childCategory->id)==$item->category_id ? 'selected': ''}}
    {{$childCategory->id==$item->id ? 'disabled' : ''}}
    value="{{$childCategory->id}}"

>
    {{$separator ?? ''}} {{ $child_category->title ??'' }}
</option>
@if ($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('admin.category.childrenSelect', ['child_category' => $childCategory, 'separator'=>' - '.$separator])
    @endforeach
@endif
