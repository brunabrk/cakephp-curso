function valueToClass(value, td1, text){
	$(td1).attr('data-id', value + '').html(text);
}

// Adição de nomes
function addName(){

	var table = document.getElementById('table-add-palestra');

	var row = document.createElement('tr');
	var td1 = document.createElement('td');
	var td2 = document.createElement('td');

	td1.innerHTML = document.getElementById('add-palestras').value;
	td2.innerHTML = document.getElementById('add-descricao').value;

	row.appendChild(td1);
	row.appendChild(td2);

	table.children[1].appendChild(row);

	var e = document.getElementById("add-palestras");
	var optionValue = e.options[e.selectedIndex].value;

	valueToClass(optionValue, td1, $(e.options[e.selectedIndex]).html());

}



