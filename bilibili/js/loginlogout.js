var beforelogin = document.querySelector('.beforelogin');
var afterlogin = document.querySelector('.afterlogin');
var exit = document.querySelector('.logout');

logined();

function logined() {
    beforelogin.style = 'display:none';
    afterlogin.style = 'display:block';
}

exit.onclick = function() {
    afterlogin.style = 'display:none';
    beforelogin.style = 'display:block';
    session_destory();
}

//翻车的
//writecookie();

//function writecookie(){
//   var cookiename = "SESEEIONID";
    //cookiename在这里
//    var cookievalue = "1";
//    var date = new Date();
//    date.setDate(date.getDate()+30);
//    var totalcookie = cookiename+'='+cookievalue+'; expries='+date.toGMTString();
//    document.cookie = totalcookie;
//}

