<div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="order" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="w-100 text-center">{{__("order_title")}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-lg-5">
                <form id="order-form">
                    <div class="col-12">
                        <h6 hidden id="product"></h6>
                        <h6 hidden><small>Артикул: <span id="vendor"></span></small></h6>
                        <h6 hidden><span id="price"></span> грн.</h6>
                    </div>
                    <div class="col-12 mt-3">
                        <input class="form-control" id="name_order" name="name_order" type="text"
                               placeholder="{{__('subscribe_name')}}">
                        <span class="text-danger small" id="name_order-error"></span>
                    </div>
                    <div class="col-12 mt-3">
                        <input class="form-control" id="phone_order" name="phone_order" type="text"
                               placeholder="{{__('call_phone')}}">
                        <span class="text-danger small" id="phone_order-error"></span>
                    </div>
                    <div class="col-12 mt-3 text-center mt-lg-5">
                        <input type="submit" value="{{__('service_order')}}" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
