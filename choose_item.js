function choose_item(event) {
	var bglist = document.getElementById("bglist");
	var mylist = document.getElementById("mylist");
	var item = event.currentTarget;
	var chosen = item.getAttribute("data-chosen");
	
	if(chosen == "no") {
		item.setAttribute("data-chosen", "yes");
		mylist.appendChild(item);
	}
	else if(chosen == "yes"){
		item.setAttribute("data-chosen", "no");
		//item.setAttribute("class", "button");
		bglist.appendChild(item);
	}
	
	var xmlhttp;		
	if(window.XMLHttpRequest)
		xmlhttp = new XMLHttpRequest();
	else
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("hint").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","handle.php?bgid="+item.getAttribute("data-bgid"),true);
	xmlhttp.send();
}