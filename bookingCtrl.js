/**
 * Created by martapancaldi on 13/10/2016.
 */

function validateInput() {
    var first = document.forms["table-form"]["firstname"].value;
    var last = document.forms["table-form"]["lastname"].value;
    var email = document.forms["table-form"]["email"].value;
    var depDate = new Date(document.forms["table-form"]["dep-date"].value);
    var retDate = new Date(document.forms["table-form"]["ret-date"].value);
    var retCity = document.forms["table-form"]["ret-city"].value;

    if (checkDates(depDate, retDate) && checkCity(retCity) && checkUserData(first, last) && checkEmail(email)) {
        alert("Request correctly submitted");
        console.log("Request submitted at " + new Date()); //Check 'Preserve log' in the browser
    } else return false;
};

function reset() {
    console.log("Resetted at " + new Date());
    return true;
};

function checkDates(depDate, retDate) {
    var min = new Date().setHours(0,0,0);
    var max = new Date(2017,11,31);
    //Dates must be in the range. Also, departure date must be before the return date
    if (min <= depDate && depDate <= max && min <= retDate && retDate <= max && depDate <= retDate)
        return true;
    else alert("Please insert valid dates.");
};

function checkCity(retCity) {
    if (retCity == "")
        alert("Please select a return city.");
    else return true;
};

function checkUserData(first, last) {
    if (first == "" || last == "")
        alert ("Please insert valid user data.");
    else return true;
};

function checkEmail(email) {
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (regex.test(email)) return true;
        else alert("Please insert a valid email address.");
};
