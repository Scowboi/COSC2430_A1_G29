// // main function to validate
// function Validator(object) {
// 	var formElement = document.querySelector(object.form);
	
// 	if (formElement) {
// 		object.rules.forEach(function (rule){
// 			var userinput = formElement.querySelector(rule.selector);
			
// 			if (userinput) {
// 				userinput.onblur = function () {
// 				var errormes = rule.test(userinput.value)
// 				if (errormes){
					
// 				}
// 				}
// 			}
// 		});
// 	}
// };

// //rules to validate form
// Validator.checkName = function(selector) {
// 	return {
// 		selector: selector,
// 		test (value) {
// 			if ((value.trim()).length > 3){
// 				return undefined;
// 			}
// 			else{
// 				return "Name cannot be less than 3 characters";
// 			}
// 			}
// 		}
// 	};

// Validator.checkEmail = function(selector) {
// 	return {
// 		selector: selector,
// 		test () {

// 			}
// 		}
// 	};


vad.validate = function  (){
	var bool = [Namecheck(), Emailcheck(), Phonecheck(),checkboxes()];
	var counterr = 0;
	Namecheck();
	Emailcheck();
	Phonecheck();
	checkboxes();


	for (let idx in bool) {
		if(bool[idx] == false){
			counterr++;
	}
	}; 

	if (counterr > 0){
		counterr = 0
		return false;

	} else{
		alert('contact sent')
		return true;

	}
}





function vad(event) {
	vad.validate();
	console.log(vad.validate())
  }
  
const formElement = document.querySelector('#contact_form');

formElement.addEventListener('submit', vad);







//name validate
function Namecheck() {
	inputname = formElement.querySelector('#name')
	
	if ((inputname.value).length >= 3){
		(formElement.querySelector('.namemess')).innerHTML = ""
		inputname.classList.remove("error")
		inputname.classList.add("success")
		return true;}
	
	else {
		(formElement.querySelector('.namemess')).innerHTML = "Name must not be less than 3 characters"
		inputname.classList.remove("success")
		inputname.classList.add("error")
		return false;}
}


//mail validate
function Emailcheck(){
	
	inputemail = formElement.querySelector('#email')
	regexMail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,5}$/
	if (inputemail.value){
		if (regexMail.test(inputemail.value)){
			(formElement.querySelector('.emailmess')).innerHTML = ""
			inputemail.classList.remove("error")
			inputemail.classList.add("success")

			return true;
		} else{
			(formElement.querySelector('.emailmess')).innerHTML = "Please enter a valid email"
			inputemail.classList.remove("success")
			inputemail.classList.add("error")
			return false;
		}
	} else{
		(formElement.querySelector('.emailmess')).innerHTML = "Please enter an email"
		inputemail.classList.remove("success")
		inputemail.classList.add("error")
		return false;
	}
}


//phone validate
function Phonecheck () {
	inputphone = formElement.querySelector('#phone')
	regexPhone = /^([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})[-. ]?([0-9]{1})?[-. ]?([0-9]{1})?$/
	if (inputphone.value){
		if (regexPhone.test(inputphone.value)){
			(formElement.querySelector('.phonemess')).innerHTML = ""
			inputphone.classList.remove("error")
			inputphone.classList.add("success")

			return true;
		}else{
		(formElement.querySelector('.phonemess')).innerHTML = "invalid phone number"
			inputphone.classList.remove("success")
			inputphone.classList.add("error")
			return false;}
	} else{
		(formElement.querySelector('.phonemess')).innerHTML = "Please enter phone number"
		inputphone.classList.remove("success")
		inputphone.classList.add("error")
		return false;}

}

//checkbox validate
function checkboxes(){
	//select checkboxes label
	contdays = formElement.querySelector('.contact_days')
	var markedCheckbox = formElement.querySelectorAll('input[type="checkbox"]:checked');
	if (markedCheckbox.length < 1){
		(contdays.querySelector('.checkboxmess')).innerHTML = "At least one checkbox must be marked"
			contdays.classList.remove("success")
			contdays.classList.add("error")
			return false;}
			else{
				(contdays.querySelector('.checkboxmess')).innerHTML = ''
				contdays.classList.remove("error")
				contdays.classList.add("success")
				return true;
			}
	}

	var	typingmess = (formElement.querySelector('.text_area')).querySelector('.typing_mess');
	var txtamess;
	var textleng = 0;
//Contact desc text count

txtcal = function(input)	{
	textleng = input.length
	if (textleng < 50){
		txtamess = (50 - textleng) + " more letters are needed"
		typingmess.innerHTML = txtamess
		txtarea.classList.remove("success")
		txtarea.classList.add("error")
		return false;
	} else if (50 <= textleng <= 500) {txtamess = "You can type " + (500 - textleng) + " more letters"
	typingmess.innerHTML = txtamess
	txtarea.classList.remove("error")
	txtarea.classList.add("success")
	return true;}
		
		else{
		txtamess = "deleting " + (textleng - 500) + " letters is needed"
		typingmess.innerHTML = txtamess
		txtarea.classList.remove("success")
		txtarea.classList.add("error")
		return false;
	} 
}



txtarea = (formElement.querySelector('.text_area')).querySelector('#desc')
txtarea.addEventListener('input', function(){
	var storevar = txtarea.value;

	txtcal(storevar)
})
