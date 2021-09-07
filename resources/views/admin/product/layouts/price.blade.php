<div class="col s12 m6">
    <h4 class="card-title">Цена</h4>
    <div class="input-field col s12">
        <input type="text"
               name="price"
               id="price"
               value="{{old('price', $item->price ?? '0.00')}}"
               class="
                    @error("price")
                   is-invalid
@enderror
                   "
        >

        <label
            for="price">
            Цена
        </label>
        @error("price")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="col s12 m6">
    <h4 class="card-title"> Цена со скидкой</h4>
    <div class="input-field col s12">
        <input type="text"
               name="price_sale"
               id="price_sale"
               value="{{old('price_sale', $item->price_sale ?? '')}}"
               class="
                    @error("price_sale")
                   is-invalid
@enderror
                   "
        >

        <label
            for="price_sale">
            Цена со скидкой
        </label>
        @error("price_sale")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

