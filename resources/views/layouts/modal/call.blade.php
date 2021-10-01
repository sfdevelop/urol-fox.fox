<div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="call" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__("call_title")}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="call-form">
                    <div class="col-12 mt-3">
                        <input class="form-control" id="name_call" name="name_call" type="text"
                               placeholder="{{__('subscribe_name')}}">
                        <span class="text-danger small" id="name_call-error"></span>
                    </div>
                    <div class="col-12 mt-3">
                        <input class="form-control" id="phone" name="phone" type="text"
                               placeholder="{{__('call_phone')}}">
                        <span class="text-danger small" id="phone-error"></span>
                    </div>
                    <div class="col-12 mt-3">
                        <input type="submit" value="{{__('service_order')}}" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
