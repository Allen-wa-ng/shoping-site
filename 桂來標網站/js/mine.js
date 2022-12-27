(function () {
    $(function () {

    })


}())


var href = function (str) {
    location.href = "./" + str
}


var hrefToPosition = function (id) {
    $("body").attr("class", "")
    var t = $('#' + id).offset().top;//  獲取需要跳轉到標籤的top值
    $(window).scrollTop(t);// 跳轉到指定位置

}