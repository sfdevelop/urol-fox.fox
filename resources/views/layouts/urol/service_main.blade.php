<section class="py-5 main_service">
    <div class="container">
        <h2>{{__('service_main')}}</h2>
        <div class="col-lg-5 px-0">
            <p>{{__('service_main_slogan')}}</p>
        </div>
        <div class="col-lg-6 px-0 main_service__text mt-4">
            <p>
                {!! short_service($serviceMain->translate(app()->getLocale(), true)->description) !!}
            </p>
            <a class="btn mt-4">{{__('service_order')}}</a>
        </div>
    </div>
</section>
