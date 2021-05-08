

var alert = window.open("", "myWindow", "width=400, height=200");
function openWin() {

// alert.document.write("<p>This is 'myWindow'</p>");
alert.document.getElementByID("close").onclick =
    function(){
        alert.close();
    }
}



 