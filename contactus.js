                    
var fields = {};

   document.addEventListener("DOMContentLoaded", function() {
    fields.First_Name = document.getElementById('firstName');
    fields.Last_Name = document.getElementById('lastName');
    fields.Email = document.getElementById('email');
    fields.House_Address = document.getElementById('address');
    fields.House_Number = document.getElementById('houseNumber');
    fields.Country = document.getElementById('country');
    fields.Query = document.getElementById('question');
   })

   function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined' ) return false;
    return (value.length > 0);
   }

   function isNumber(num) {
    return (num.length > 0) && !isNaN(num);
   }

   function isEmail(email) {
    let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    return regex.test(String(email).toLowerCase());
   }


   function fieldValidation(field, validationFunction) {
    if (field == null) return false;
   
    let isFieldValid = validationFunction(field.value)
    if (!isFieldValid) {
    field.className = 'placeholderRed';
    } else {
    field.className = '';
    }
   
    return isFieldValid;
   }

   function isValid() {
    var valid = true;
    
    valid &= fieldValidation(fields.First_Name, isNotEmpty);
    valid &= fieldValidation(fields.Last_Name, isNotEmpty);
    valid &= fieldValidation(fields.Gender, isNotEmpty);
    valid &= fieldValidation(fields.House_Address, isNotEmpty);
    valid &= fieldValidation(fields.Country, isNotEmpty);
    valid &= fieldValidation(fields.Email, isEmail);
    valid &= fieldValidation(fields.House_Number, isNumber);
    valid &= fieldValidation(fields.Query, isNotEmpty);
   
    return valid;
   }

   

   class User {
    constructor(First_Name, Last_Name, Gender, House_Address, Country, Email, Query) {
    this.First_Name = First_Name;
    this.Last_Name = Last_Name;
    this.Gender = Gender;
    this.House_Address = House_Address;
    this.Country = Country;
    this.Email = Email;
    this.Query = Query;
    }
   }

   function sendContact()
    {
    fields.Gender = getGender();

    function getGender() {
        return document.querySelector('input[name="Gender"]:checked')
       }
    if (isValid()) {
    let usr = new User (First_Name.value, Last_Name.value, fields.Gender.value,
    House_Address.value, Country.value, Email.value);
    alert('$[usr.firstName} thanks for contacting.')
     } else {
    alert("Try again.")
    }
}
