
 var modal = document.getElementById('modal1');
 
 var btn = document.getElementById("btn1");

 var span = document.getElementById("close1")

 var modal2 = document.getElementById('modal2');
 
 var btn2 = document.getElementById("btn2");

 var span2 = document.getElementById("close2")

 var modal3 = document.getElementById('modal3');
 
 var btn3 = document.getElementById("btn3");

 var span3 = document.getElementById("close3")

 var modal4 = document.getElementById('modal4');
 
 var btn4 = document.getElementById("btn4");

 var span4 = document.getElementById("close4")

 btn.onclick = function() {
 modal.style.display = "block";
    }
  
span.onclick = function() {
 modal.style.display = "none";
         }

 btn2.onclick = function() {
 modal2.style.display = "block";
    }
  
span2.onclick = function() {
 modal2.style.display = "none";
         }   

btn3.onclick = function() {
 modal3.style.display = "block";
    }
  
span3.onclick = function() {
 modal3.style.display = "none";
         }

         
btn4.onclick = function() {
modal4.style.display = "block";
       }
     
span4.onclick = function() {
modal4.style.display = "none";
            }

window.onclick = function(event) {
    if (event.target.className === "modal") {
        event.target.style.display = "none";
        }
    }            
   