const fileUpload = document.getElementById("cv-upload");
const uplaodBtn = document.getElementById("cv-btn");
const uploadText = document.getElementById("cv-text");

uplaodBtn.addEventListener('click',function(){
	fileUpload.click();
});

fileUpload.addEventListener('change',function(){
	if(fileUpload.value){
		uploadText.innerHTML = fileUpload.value;
	}
	else{
		uploadText.innerHTML = "No file chosen";
	}
});



