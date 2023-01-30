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

var insert = function(){

    dataJson={
        "guid":_uuid,
        "email":"email",
        "phone":"phone",
        "address":"address",
        "name":"name",
    }

    $.ajax({
        url:'./php/insert.php',
        method:"POST",
        data:dataJson,
        success:function(res){
            var obj = jQuery.parseJSON(res);
            if(obj.status_code==="200"){
                console.log("success")
                window.location.href='index.php'
            }else{
                console.log("fail")
            }
        },
        error:function(err){
            console.log(err)},
      });


}


var _uuid = function () {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {var r = Math.random()*16|0,v=c=='x'?r:r&0x3|0x8;return v.toString(16);});
  }