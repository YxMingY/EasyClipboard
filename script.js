function inputting(ele){
	text = ele.value;
	if(text == "输入你的内容") {
		ele.value = "";
	}else if(text == "") {
		ele.style.color = "rgba(0,0,0,0.5)";
		ele.value = "输入你的内容";
	}else{
		ele.style.color = "#000";
	}
}