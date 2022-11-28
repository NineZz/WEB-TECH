function register() {
    let idstu = document.getElementById('stuid').value;
    let firstname = document.getElementById('fname').value;
    let lastname = document.getElementById('lname').value;

    if (idstu.length == 0) {
        alert("Student ID must be filled out");
        return false;
    }
    if (firstname.length == 0) {
        alert("Firstname must be filled out");
        return false;
    }
    if (lastname.length == 0) {
        alert("Lastname must be filled out");
        return false;
    }

    let table = document.getElementById('table');
    let row = table.insertRow(-1); //Row position 0,1,2,...,n  -1 = last
    let cell, text, tnode;

    // create a new column
    cell = row.insertCell(-1);
    text = row.rowIndex;
    tnode = document.createTextNode(text);
    // add TextNode to column
    cell.appendChild(tnode);

    cell = row.insertCell(-1);
    text = document.getElementById('stuid').value;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);

    cell = row.insertCell(-1);
    text = document.getElementById('fname').value;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);

    cell = row.insertCell(-1);
    text = document.getElementById('lname').value;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);
}