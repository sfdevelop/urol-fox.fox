<div class="card">
    <div class="row">

        <div class="col l12">
            <div class="col mt-3">
                <a id="createNewSpecification" href="#character_modal"
                   class="btn waves-effect waves-light purple lightrn-1 modal-trigger" data-product_id="{{$item->id}}">
                    Добавить
                </a>
            </div>
            <table class="responsive-table Highlight striped" id="table_character" style="width: 90%!important;">
                {{--                <thead class="thead-light">--}}
                {{--                <tr style="width: 100%">--}}
                {{--                    <th>id</th>--}}
                {{--                    <th>Название</th>--}}
                {{--                    <th class="right">Управление</th>--}}
                {{--                </tr>--}}
                {{--                </thead>--}}
                <tbody>
                </tbody>
            </table>


        </div>
    </div>
</div>

{{--<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="add_specification"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="modelHeading"></h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--                <form id="specificationForm" name="specificationForm" class="form-horizontal">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <input type="hidden" name="id" id="id">--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <input type="hidden" name="product_id" id="product_id">--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <select name="specification_id"--}}
{{--                                    id="specification_id_select"--}}
{{--                                    class="select2 w-100 d-block position-relative form-control"--}}
{{--                            >--}}
{{--                                @foreach($allCharacteristic as $Specification)--}}
{{--                                    <option value="{{$Specification->id}}">{{$Specification->title}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <input id="description" name="description" type="text" class="form-control" value="">--}}
{{--                            <span class="text-danger small"--}}
{{--                                  id="description-error"--}}
{{--                            >--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mt-4">--}}
{{--                        <a href="javascript:void(0)" type="submit" class="btn btn-success"--}}
{{--                           id="saveBtnSpec" value="create"><i class="fas fa-save mr-3"></i>Сохранить--}}
{{--                        </a>--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<style>--}}
{{--    .select2-container {--}}
{{--        display: block;--}}
{{--    !important;--}}
{{--    }--}}
{{--</style>--}}

@include('admin.product.layouts.modal')
