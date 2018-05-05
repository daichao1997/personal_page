var bglist = document.getElementById("bglist").childNodes;
for(var i = 0; i < bglist.length; i++) {
	bglist[i].onclick = choose_item;
}
