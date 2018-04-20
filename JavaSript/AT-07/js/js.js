function tNum(){
var num = document.getElementById("numero").value;
	
	if((num >= 0)&&(num <10)){
		return alert(num+" Insuficiente")
	}else{
		if((num >= 10)&&(num <14)){
			return alert(num+" Bom")
		}else{
			if(num >= 14){
			return alert(num+" Muito Bom")
}
}
}
}