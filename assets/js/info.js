var info = document.getElementById('more-info');

more.onclick=function() {

	

	info.style.opacity="1"; 
	info.style.transition = "0.5s";
}

hide.onclick=function(){
	info.style.opacity="0";
	info.style.transition="0.3s";
}