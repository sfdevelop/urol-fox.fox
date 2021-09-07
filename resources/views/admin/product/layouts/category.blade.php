<div class="input-field col s12">
    <select
        name="category_id"
        class="
        @error("category_id")
            is-invalid
        @enderror
            "
    >
        <option selected disabled value="">Выберите категорию</option>
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
    @error("category_id")
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
</div>
