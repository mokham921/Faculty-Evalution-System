function checkAlert(evt){
	if (evt.target.value=="1") {
		document.getElementById("firstyr").style.display=block;
		document.getElementById("secondyr").style.display=none;
		document.getElementById("thirdyr").style.display=none;
		document.getElementById("fourthyr").style.display=none;
		document.getElementById("fiftyr").style.display=none;

	}
	if (evt.target.value=="2") {
		document.getElementById("firstyr").style.display=none;
		document.getElementById("secondyr").style.display=block;
		document.getElementById("thirdyr").style.display=none;
		document.getElementById("fourthyr").style.display=none;
		document.getElementById("fiftyr").style.display=none;
	}
	if (evt.target.value=="3") {
		document.getElementById("firstyr").style.display=none;
		document.getElementById("secondyr").style.display=none;
		document.getElementById("thirdyr").style.display=block;
		document.getElementById("fourthyr").style.display=none;
		document.getElementById("fiftyr").style.display=none;
	}
	if (evt.target.value=="4") {
		document.getElementById("firstyr").style.display=none;
		document.getElementById("secondyr").style.display=none;
		document.getElementById("thirdyr").style.display=none;
		document.getElementById("fourthyr").style.display=block;
		document.getElementById("fiftyr").style.display=none;
	}
	if (evt.target.value=="5") {
		document.getElementById("firstyr").style.display=none;
		document.getElementById("secondyr").style.display=none;
		document.getElementById("thirdyr").style.display=none;
		document.getElementById("fourthyr").style.display=none;
		document.getElementById("fiftyr").style.display=block;
	}
}