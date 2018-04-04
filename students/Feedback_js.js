//My Code 
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
function Reset(){
	var x = document.getElementsByTagName('span');
	x[0].style.color ='red';
	x[1].style.color ='red';
	x[0].style.fontSize='large';
	x[1].style.fontSize='large';
	return 0;
}
function glow(a,b){
	var x=document.querySelectorAll("div.rate");
	for(i=1;i<=b;i+=2){
		x[a].childNodes[i].style.color="#FFD700";
		x[a].childNodes[i].style.fontSize="52px"
		x[a].childNodes[11].value=b/2 + 0.5;
	}
	for(i=b+2;i<=9;i+=2){
		x[a].childNodes[i].style.color="#00d8ff";
		x[a].childNodes[i].style.fontSize="40px"
	}
	return 0;
}
if(x==1){
	document.getElementById('Thank').style.display ='block';
	document.getElementById('fform').style.display ='block';
}
if(x==0){
	document.getElementById('wrong').style.display='block'
}
if(y==1){
	document.getElementById('err').style.display='block';
}

//document.getElementById('test').innerHTML=y;