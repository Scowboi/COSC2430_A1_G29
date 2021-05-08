




window.onload = function (){
    popUp();
    
};


function popUp(){
    var cookieSearch = getCookie("popupChecked");
    if (cookieSearch != "Y"){
        window.open("mallPopup.html", "myWindow", "width=400, height=200");
    }
    
}

function getCookie(name){
    var cookie = document.cookie;
    if (document.cookie != ""){
        var cookieList = cookie.split(";");
        for (var index in cookieList){
            var cookieName = cookieList[index].split(",");
            if(cookieName[0] == "popupChecked"){
                return cookieName[1];
            }
        }
    }
}



