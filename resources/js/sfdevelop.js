//боковое  меню
$(document).ready(function () {
    $("#navToggle").click(function () {
        $(this).toggleClass("active");
        $(".overlay").toggleClass("open");
        // this line ▼ prevents content scroll-behind
        $("body").toggleClass("locked");
    });
});

$('.mobile_li').click(function (ev) {
    $(this).find('>ul').slideToggle();
    ev.stopPropagation();
});
