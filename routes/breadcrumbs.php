<?php
// Home
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('main', function ($trail) {
    $trail->push(__('menu_main'), route('main'));
});

Breadcrumbs::for('pages', function ($trail, $item) {
    $trail->parent('main');
    $trail->push($item->translate(app()->getLocale(), true)->title, route('pages', $item->slug));
});

Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('main');
    $trail->push(trans('menu.menu_contacts'), route('contacts'));
});

Breadcrumbs::for('search', function ($trail) {
    $trail->parent('main');
    $trail->push(__('search'), route('search'));
});

Breadcrumbs::for('news', function ($trail) {
    $trail->parent('main');
    $trail->push(trans('menu.menu_news'), route('news'));
});

Breadcrumbs::for('item', function ($trail, $item) {
    $trail->parent('news');
    $trail->push($item->translate(app()->getLocale(), true)->title, route('item', $item->slug));
});

Breadcrumbs::for('category', function ($trail, $category) {
    if ($category->parentCategory->title ?? '') {
        $trail->parent('category', $category->parentCategory);
    } else {
        $trail->parent('main');
    }

    $trail->push($category->translate(app()->getLocale(), true)->title, route('catalog', $category->slug));
});

Breadcrumbs::for('product', function ($trail, $item) {
    $trail->parent('category', $item->category);
    $trail->push($item->translate(app()->getLocale(), true)->title, route('product', $item->slug));
});


//
//Breadcrumbs::for('search', function ($trail) {
//    $trail->parent('home');
//    $trail->push('Поиск', route('search'));
//});
//
//Breadcrumbs::for('cart', function ($trail) {
//    $trail->parent('home');
//    $trail->push('Корзина / Оформить заказ', route('cart'));
//});
//
//Breadcrumbs::for('category', function ($trail, $category) {
//    $trail->parent('home');
//    $trail->push($category->name, route('viagra.category', $category->slug));
//});
//

