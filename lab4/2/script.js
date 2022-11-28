let check = true;
function change() {
    let name = document.getElementById('fname');
    let lastname = document.getElementById('lname');
    let country = document.getElementById('coun');
    let but = document.getElementById('butt');
    if(check) {
        name.innerHTML = "First Name:";
        lastname.innerHTML = "Last Name:";
        country.innerHTML = "Country:";
        but.innerHTML = "Change to Thai";
        document.getElementById('0').innerHTML = 'Select a country';
        document.getElementById('1').innerHTML = 'Thailand';
        document.getElementById('2').innerHTML = 'Vietnam';
        document.getElementById('3').innerHTML = 'Laos';
        document.getElementById('4').innerHTML = 'Malaysia';
        document.getElementById('5').innerHTML = 'Singapore';
        document.getElementById('6').innerHTML = 'Philipines';
        document.getElementById('7').innerHTML = 'Myanmar';
        document.getElementById('8').innerHTML = 'Cambodia';
        document.getElementById('9').innerHTML = 'Brunei';
        check = false;
    }
    else {
        name.innerHTML = "ชื่อ:";
        lastname.innerHTML = "นามสกุล:";
        country.innerHTML = "ประเทศ:";
        but.innerHTML = "เปลี่ยนเป็นภาษาอังกฤษ";
        document.getElementById('0').innerHTML = 'เลือกประเทศ';
        document.getElementById('1').innerHTML = 'ไทย';
        document.getElementById('2').innerHTML = 'เวียดนาม';
        document.getElementById('3').innerHTML = 'ลาว';
        document.getElementById('4').innerHTML = 'มาเลย์เซีย';
        document.getElementById('5').innerHTML = 'สิงค์โปร์';
        document.getElementById('6').innerHTML = 'ฟิลิปปินส์';
        document.getElementById('7').innerHTML = 'เมียนมาร์';
        document.getElementById('8').innerHTML = 'กัมพูชา';
        document.getElementById('9').innerHTML = 'บรูไน';
        check = true;
    }
}