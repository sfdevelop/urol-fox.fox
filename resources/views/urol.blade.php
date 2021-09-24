<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.urol.meta')
</head>

<body>

@include('layouts.urol.menu')

<div class="slider position-relative d-block d-md-block mt-80">
    <div class="slider__box position-relative  d-flex justify-content-center">
        <img class="w-100 img-back" src="assets/i/background.jpg" alt="slider">
        <div class="container h-100 position-absolute d-flex  flex-column  justify-content-center">
            <div class="d-flex">
                <div class="col-6 d-flex flex-column justify-content-center">
                    <h1 class="display-1 ">запчастини</h1>
                    <p>
                        до аграрної техніки іноземного виробництва
                    </p>
                    <ul class="p-3 m-0">
                        <li>Якість продукції</li>
                        <li>Досвідчені спеціалісти</li>
                        <li>Індивідуальний підхід до кожного клієнта</li>
                        <li>Власний склад</li>
                    </ul>
                </div>
                <div class="col-6 text-right slider-img ">
                    <div class="">
                        <img class="img-fluid float-lg-right" src="assets/i/pr-01.png" alt="pr-01.png">
                    </div>
                    <div class=" ">
                        <img class="img-fluid float-lg-right" src="assets/i/pr-02.png" alt="pr-01.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="main_new py-5">
    <div class="container">

        <h2><span>Нові</span> Товари</h2>
        <p>В нас Ви знайдете будь-яку потрібну деталь</p>

        <div class="row new_slider">
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <div class="stick-new position-absolute px-3">Новинка</div>
                    <a href="">
                        <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    </a>
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний</h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">2 870,46 грн.</div>
                    <a href="" class="btn">Переглянути</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 main_service">
    <div class="container">
        <h2>Послуги</h2>
        <div class="col-lg-5 px-0">
            <p>з виїзду спеціаліста для проведення технічного огляду техніки та складання дефектовки</p>
        </div>
        <div class="col-lg-6 px-0 main_service__text mt-4">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti dolorum hic maxime minima nihil
                soluta.
                Eius ipsum, sapiente. Animi aperiam at blanditiis corporis culpa cum dolore dolorem dolores ducimus
                eligendi, enim eveniet fugiat fugit ipsum laudantium modi, mollitia necessitatibus, nemo nihil nobis
                odio
                officia perspiciatis placeat porro provident quas quidem quisquam quo quod quos rem sunt totam unde vel
                veniam voluptates voluptatibus! Inventore suscipit, ut! Atque distinctio dolore eius eos fugit nihil
                omnis,
                reprehenderit! Ad amet atque debitis dolores, earum illo itaque laborum laudantium minus perferendis
                quia
                quod voluptatem.
            </p>
            <a class="btn mt-4">Замовити</a>
        </div>
    </div>
</section>
<section class="main_sale py-5">
    <div class="container">

        <h2><span>Акційні</span> Товари</h2>
        <p>В нас найприємніші ціни та найкращі пропозиції</p>

        <div class="row sale_slider">
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <div class="stick-sale position-absolute px-3">Акція</div>
                    <a href="">
                        <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    </a>
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний</h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price d-flex flex-column justify-content-center">
                        <div class="old ">
                            500 грн
                        </div>
                        2 870,46 грн.
                    </div>
                    <a href="" class="btn">Переглянути</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div>
                    <img class="img-fluid" src="assets/i/product_01.jpg" alt="product_01">
                    <h4 class="item_title mt-3">Підшипник кульковий радіальний однорядний </h4>
                </div>
                <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                    <div class="price">85 грн.</div>
                    <div class="btn">Переглянути</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="subscribe ">

    <!--    <img class="img-fluid" src="assets/i/subscribe_top.png" alt="subscribe_top">-->

    <div class="subscribe_box pb-5 mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>У вас є питання?</h2>
                    <div class="col-lg-5 px-0">
                        <p>
                            Напишіть їх нам, і ми обов'язково дамо на них відповідь. Або зателефонуйте
                        </p>
                        <ul class="pl-4">
                            <li>+38 (067) 522 77 87</li>
                            <li>+38 (067) 657 87 17</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form action="">
                        <div class="row d-flex align-items-center mt-5">
                            <div class="col-lg-6">
                                <input class="form-control" type="text" placeholder="Ваше ім'я">
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <input class="form-control" type="text" placeholder="Ваш email">
                            </div>
                            <div class="col-12 mt-3">
                                <input class="form-control" type="text" placeholder="Ваше запитання">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="submit" value="Відправити" class="btn">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="main_news py-5">
    <div class="container">
        <h2>Новини</h2>
        <p>Тільки свіжі та актуальні новини завжди</p>

        <div class="row news_slider">
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <a href="">
                        <img class="img-fluid" src="assets/i/news.png" alt="news">
                    </a>
                    <h4 class="news_title mt-3">VERSATILE RSM 161: Все й відразу
                    </h4>
                    <p>Участий, продуктивный, доступный- існує поширена думка, що у відношенні зернозбирального
                        комбайна з цього смислового ряду треба прибрати одне слово...</p>
                </div>
                <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                    <a href="">Дізнатися більше</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <a href="">
                        <img class="img-fluid" src="assets/i/news.png" alt="news">
                    </a>
                    <h4 class="news_title mt-3">VERSATILE RSM 161: Все й відразу
                    </h4>
                    <p>Участий, продуктивный, доступный- існує поширена думка, що у відношенні зернозбирального
                        комбайна з цього смислового ряду треба прибрати одне слово...</p>
                </div>
                <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                    <a href="">Дізнатися більше</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <a href="">
                        <img class="img-fluid" src="assets/i/news.png" alt="news">
                    </a>
                    <h4 class="news_title mt-3">VERSATILE RSM 161: Все й відразу
                    </h4>
                    <p>Участий, продуктивный, доступный- існує поширена думка, що у відношенні зернозбирального
                        комбайна з цього смислового ряду треба прибрати одне слово...</p>
                </div>
                <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                    <a href="">Дізнатися більше</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <a href="">
                        <img class="img-fluid" src="assets/i/news.png" alt="news">
                    </a>
                    <h4 class="news_title mt-3">VERSATILE RSM 161: Все й відразу
                    </h4>
                    <p>Участий, продуктивный, доступный- існує поширена думка, що у відношенні зернозбирального
                        комбайна з цього смислового ряду треба прибрати одне слово...</p>
                </div>
                <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                    <a href="">Дізнатися більше</a>
                </div>
            </div>
            <div class="item pt-4 d-flex flex-column justify-content-between">
                <div class="position-relative">
                    <a href="">
                        <img class="img-fluid" src="assets/i/news.png" alt="news">
                    </a>
                    <h4 class="news_title mt-3">VERSATILE RSM 161: Все й відразу
                    </h4>
                    <p>Участий, продуктивный, доступный- існує поширена думка, що у відношенні зернозбирального
                        комбайна з цього смислового ряду треба прибрати одне слово...</p>
                </div>
                <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                    <a href="">Дізнатися більше</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.urol.footer')

<!--JS-->
<script src="{{asset('assets/js/main.min.js')}}"></script>
</body>

</html>
