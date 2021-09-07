<div class="col s12">
    <div class="container">
        <div class="section">

            @include('layouts.message.message')

            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="basic-tabs" class="card card card-default scrollspy">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        @if ($item->exists)
                                            <h4 class="card-title">Редактируем
                                                запись</h4>
                                        @else
                                            <h4 class="card-title">Новая запись</h4>
                                        @endif
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            @include('admin.product.layouts.category')
                            @include('admin.product.layouts.tabs')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-overlay"></div>
</div>
