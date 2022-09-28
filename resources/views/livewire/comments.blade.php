<div>
    <div class="col-12">
        <h3>{{__('comment.take')}}</h3>
    </div>
    <form
        wire:submit.prevent="addComment"
    >
        <div class="row">
            <div class="col col-lg-6 my-3">

                <input class="form-control" type="text"
                       placeholder="{{__('subscribe_name')}}"
                       wire:model="name"
                >

                @error('name')
                <span class="error small text-danger">{{$message}}</span>
                @enderror

            </div>
            <div class="col col-lg-6 my-3">

                <input class="form-control" type="email"
                       wire:model="email"
                       placeholder="e-mail">

                @error('email')
                <span class="error small text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="col col-lg-12 my-3">

                <input class="form-control" type="text"
                       wire:model="description"
                       placeholder="{{__('comment.comment')}}">

                @error('description')
                <span class="error small text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="col-12">
                <input class="btn mt-3" type="submit" value="{{__('comment.send')}}">
            </div>
        </div>
    </form>
</div>
