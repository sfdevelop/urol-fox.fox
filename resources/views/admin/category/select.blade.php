<div class="input-field col s12">
    <select name="category_id" class="">
        <option value="">Родительская категория</option>
        @foreach ($categories as $category)

            <option
                {{old('category_id',$category->id)==$item->category_id ? 'selected': ''}}
                {{$category->id==$item->id ? 'disabled' : ''}}
                value="{{$category->id}}"
            >{{$category->title}}</option>
            @foreach ($category->childrenCategories as $childCategory)
                @include('admin.category.childrenSelect', ['child_category' => $childCategory])
            @endforeach
        @endforeach
    </select>
    <label>Родительская категория</label>
</div>
