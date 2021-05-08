


window.onload = function (){
    popUp();

    };



    


function setCookie(name,value){
    document.cookie = infor(name) + "," +infor(value); +";"
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

function popUp(){
    var cookieSearch = getCookie("popupChecked");
    if (cookieSearch != "Y"){
        window.open("mallPopup.html", "myWindow", "width=400, height=200");
    }
    
}


function ClosePopup() { 

        setCookie("popupChecked", "Y");
        window.close();
    
}

