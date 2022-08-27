window.addEventListener('load', function() {
    document.getElementById('education-form').addEventListener('submit', function(e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });

    //https://www.w3schools.com/jsref/met_document_queryselectorall.asp
    document.querySelectorAll(".education-radio").forEach(function (element, id) {
        element.addEventListener("change", function ()
        {
            if(element.value == 'college') {
                $('college-input').classList.remove("hidden");
                $('college_name').removeAttribute('disabled');
            } else {
                $('college-input').classList.add("hidden");
                $('college_name').setAttribute('disabled', 'disabled');
            }
        });
    });
});

var $ = function(id) {
    return document.getElementById(id);
}

var checkForm = function() {
    $('name_error').innerHTML = '';
    $('last_name_error').innerHTML = '';
    $('email_error').innerHTML = '';
    $('education_radio_error').innerHTML = '';
    $('college_error').innerHTML = '';

    var isValid = true;

    if ($('name').value == '') {
        $('name_error').innerHTML = 'The name field is required';
        isValid = false;
    }

    if ($('last_name').value == '') {
        $('last_name_error').innerHTML = 'The last name field is required';
        isValid = false;
    }

   // https://www.w3resource.com/javascript/form/email-validation.php
    var rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!rex.test($('email').value)) {
        $('email_error').innerHTML = 'incorrect format';
        isValid = false;
    }
    if ($('email').value == '') {
        $('email_error').innerHTML = 'email is empty';
        isValid = false;
    }

    var radios = document.querySelectorAll('input[type="radio"]:checked');
    var checked = radios.length>0 ? true : false;
    if(!checked) {
        $('education_radio_error').innerHTML = 'Please select one option';
        isValid = false;
    }

    var collegeInputHidden = $('college-input').classList.contains('hidden');
    if(!collegeInputHidden) {
        if ($('college_name').value == '') {
            $('college_error').innerHTML = 'Please type in your college';
            isValid = false;
        }
    }

    return isValid;
}