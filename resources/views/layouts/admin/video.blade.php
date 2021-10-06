@extends('layouts.admin_layouts')

@section('content')
    <div id="main">
        <div class="container">
            <div class="row mt-2">
                <div id="card-panel-type" class="section">
                    <div class="row">
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/01.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Как зайти в административную часть</a></h6>
                                <p>Как зайти в админку, что и где прописать...</p>
                            </div>
                        </div>

                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/02.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Настройки</a></h6>
                                <p>Как изменить почту и пароль для входа. пароль должен состоять не меньше чем из 6
                                    символов. На почту указанную для входа, будут приходить все уведомления с
                                    сайта</p>
                            </div>
                        </div>

                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/03.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Контакты</a></h6>
                                <p>Страница контакты</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/04.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Слайд шоу</a></h6>
                                <p>Управление Слайдшоу. Все изображения должны быть на прозрачном фоне.</p>
                            </div>
                        </div>

                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/05.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Услуги</a></h6>
                                <p>Управление услугами..</p>
                            </div>
                        </div>

                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/06.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Новости</a></h6>
                                <p>Управление новостями..</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/07.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Категории</a></h6>
                                <p>У каждой категории должно быть изображение. Мы загружали изображение размером 500*500</p>
                            </div>
                        </div>
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/08.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Характеристики</a></h6>
                                <p>Характеристики добавляются в товары, после первого его сохранения, кол-во характеристик у товара не ограничено</p>
                            </div>
                        </div>
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/09.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Товар</a></h6>
                                <p>Работа с товаром. Обратите внимание когда загружаются характеристики. У товара может быть сколько угодно характеристик , а так же изображений.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l4 card-width">
                            <div class="card-panel border-radius-6 mt-10 card-animation-1">

                                <video class="responsive-video" controls>
                                    <source src="{{asset('video/10.mp4')}}" type="video/mp4">
                                </video>

                                <h6><a href="#" class="mt-5">Обработка уведомлений</a></h6>
                                <p>Новые уведомления отображаются со статусом "Новый". Как только уведомление будет открыто, статус "Новый" автоматически исчезнет</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
