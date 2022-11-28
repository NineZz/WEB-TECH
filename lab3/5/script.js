function create() {
    let fullname = document.getElementById('fname').value;
    let phone = document.getElementById('phone').value;
    let mail = document.getElementById('mail').value;
    let company = document.getElementById('company').value;
    if (fullname.length == 0) {
        alert("Fullname must be filled out");
        return false;
    }
    if (phone.length == 0) {
        alert("Phone must be filled out");
        return false;
    }
    if (mail.length == 0) {
        alert("Email must be filled out");
        return false;
    }
    if (company.length == 0) {
        alert("Company must be filled out");
        return false;
    }
    document.getElementById('cardName').innerHTML = fullname;
    document.getElementById('cardPhone').innerHTML = phone;
    document.getElementById('cardMail').innerHTML = mail;
    document.getElementById('cardCompany').innerHTML = company;
}