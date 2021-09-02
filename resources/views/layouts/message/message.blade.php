@if ($errors->any())
    <div class="card-alert card red lighten-5">
        <div class="card-content red-text">
            <p>НЕУДАЧА : {{ $errors->first() }}</p>
        </div>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if (session('success'))
    <div class="card-alert card green lighten-5">
        <div class="card-content green-text">
            <p>УСПЕХ : {{ session()->get('success') }}</p>
        </div>
        <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
