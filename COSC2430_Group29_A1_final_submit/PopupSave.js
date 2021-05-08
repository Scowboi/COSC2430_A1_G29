

    

var btn = document.getElementById("close");

function setCookie(name,value){
    document.cookie = infor(name) + "," +infor(value); +";"
}


btn.onclick = function(){
    setCookie("popupChecked", "Y");
    self.close();
        }
