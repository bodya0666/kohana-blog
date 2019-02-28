function answer(id)
{
	var f = document.createElement("form");
	f.setAttribute('method',"post");
	f.setAttribute('class',"asw_form");
	f.setAttribute('id',"id" + id);

	var t = document.createElement("textarea");
	t.setAttribute('type',"text");
	t.setAttribute('name',"comment");

	var i = document.createElement("input"); 
	i.setAttribute('type',"hidden");
	i.setAttribute('value',id);
	i.setAttribute('name',"parent_id");

	var s = document.createElement("input"); 
	s.setAttribute('type',"submit");
	s.setAttribute('name',"submit");
	s.setAttribute('value',"Ответить");

	f.appendChild(i);
	f.appendChild(t);
	f.appendChild(s);
 
 	identifier = document.getElementById(id);
 	identifier.setAttribute('onclick',"hide('id" + id + "','" + id + "')"); 
	identifier.innerHTML = "Скрыть";
	identifier.parentNode.insertBefore( f, identifier.nextSibling );
}
function hide(text,id)
{
    document.getElementById(text).style.display = 'none';
    document.getElementById(id).setAttribute('onclick',"show('id" + id + "','" + id + "')");
    document.getElementById(id).innerHTML = "Ответить";   
}
function show(text,id)
{
    document.getElementById(text).style.display = 'flex';
    document.getElementById(id).setAttribute('onclick',"hide('id" + id + "','" + id + "')");
    document.getElementById(id).innerHTML = "Скрыть";   
}
