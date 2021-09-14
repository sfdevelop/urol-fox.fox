<div class="col s12">
    <div class="container">
        <section class="users-list-wrapper section">
            <div class="users-list-table">
                <div class="card">
                    <div class="card-content">

                        @include('layouts.message.message')
                        <a class="waves-effect waves-light btn mb-1 mr-1 gradient-45deg-red-pink gradient-shadow" href="{{route('admin.addCharacteristicProduct', $item->id)}}">
                            <i class="material-icons left">add</i> Добавить характеристики для товара</a>
                        <div class="responsive-table">
                            <table>
                                <thead>
                                <tr>
                                    <th style="">Характеристика</th>
                                    <th style="">Значение</th>
                                    <th style="">Сортировка</th>
                                    <th class="right-align">Управление</th>
                                    <th class="right-align">Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ( $characterShow as $item_haracter)
                                    <tr>
                                        <td>{{$item_haracter->characteristic->title}}</td>
                                        <td>{{$item_haracter->translate('ru', true)->title_character}}</td>
                                        <td>{{$item_haracter->characteristic->sort}}</td>
                                        <td class="right-align">
                                            <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped right"
                                               href="{{route('admin.product-character.edit', $item_haracter->id)}}"
                                               data-position="left"
                                               data-tooltip="Редактирование"
                                            >
                                                <i class="material-icons dp48">create</i>
                                            </a>
                                        </td>
                                        <td class="right-align">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    name="characterDelete[]"
                                                    value="{{old('characterDelete', $item_haracter->id)}}"
                                                >
                                                <span>Удалить</span>
                                            </label>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="card-alert card cyan lighten-5">
                                            <div class="card-content cyan-text">
                                                <p>INFO : В данный момент нету ни одной записи!</p>
                                            </div>
                                        </div>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="content-overlay"></div>
</div>
