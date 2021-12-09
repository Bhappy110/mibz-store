icon.onclick = function(){

	var icon = document.getElementById('icon');
	var user = document.getElementById('fa-user');
	var card = document.getElementById('card');
	var title = document.getElementById('title');
	var icon2 = document.getElementById('icon2');

	title.innerHTML = "Sign in";
	card.style.height = "22rem";
	card.style.transition = "1s";
	user.style.color = "rgb(68,234,234)";
	user.style.transition = "1s";
	icon.style.border = "1px solid rgb(68,234,234)";
	icon.style.transition = "1s";
	icon2.style.color = "rgb(43,135,249)";
	icon2.style.transition = "1s";
}

up.onclick = function(){

	var icon = document.getElementById('icon');
	var user = document.getElementById('fa-user');
	var card = document.getElementById('card');
	var title = document.getElementById('title');
	var icon2 = document.getElementById('icon2');

	title.innerHTML = "Tekan Icon";
	card.style.height = "10rem";
	card.style.transition = "1s";
	user.style.color = "rgb(104,225,253)";
	user.style.transition = "1s";
	icon.style.border = "2px solid rgb(104,225,253)";
	icon.style.transition = "1s";
	icon2.style.color = "transparent";
}

$(document).ready(function() {
	var cek = $('.form-check-input').val();
	
	$('.form-check-input').click(function(){

		if ($(this).is(':checked')) {

			$('.password').attr('type','text');
		}else{
			$('.password').attr('type','password');
		}
	});

});