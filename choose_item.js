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
		item.setAttribute("class", "button");
		bglist.appendChild(item);
	}
}