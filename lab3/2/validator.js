function validateForm() {
  let id = document.forms.myForm.ID.value;
  if (id.length == 0) {
    alert("ID-Card must be filled out");
    return false;
  } else if (id.length != 13) {
    alert("ID-Card must have 13 numbers");
    return false;
  }
  let prefix = document.forms.myForm.Prefix.value;
  if (prefix == "00") {
    alert("Prefix must be selected");
    return false;
  }
  let fname = document.forms.myForm.FirstName.value;
  if (fname.length == 0) {
    alert("FirstName must be filled out");
    return false;
  } else if ((fname.length < 2) & (fname.length > 20)) {
    alert("FistName must have between 2-20 characters");
    return false;
  }
  let lname = document.forms.myForm.LastName.value;
  if (lname.length == 0) {
    alert("LastName must be filled out");
    return false;
  } else if ((lname.length < 2) & (lname.length > 30)) {
    alert("LastName must have between 2-30 characters");
    return false;
  }
  let address = document.forms.myForm.Address.value;
  if (address.length == 0) {
    alert("Address must be filled out");
    return false;
  } else if (address.length < 5) {
    alert("Address must have more than 5 characters");
    return false;
  }
  let district = document.forms.myForm.District.value;
  if (district.length == 0) {
    alert("District must be filled out");
    return false;
  } else if (district.length < 2) {
    alert("District must have more than 2 characters");
    return false;
  }
  let canton = document.forms.myForm.Canton.value;
  if (canton.length == 0) {
    alert("Canton must be filled out");
    return false;
  } else if (canton.length < 2) {
    alert("Canton must have more than 2 characters");
    return false;
  }
  let province = document.forms.myForm.Province.value;
  if (province == "000") {
    alert("Country must be selected");
    return false;
  }
  let post = document.forms.myForm.Post.value;
  if (post.length == 0) {
    alert("Post number must be filled out");
    return false;
  } else if (post.length != 5) {
    alert("Post number have 5 numbers");
    return false;
  }
}
