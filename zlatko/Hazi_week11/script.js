window.addEventListener('load', function () {
    document.getElementById('form1').addEventListener('submit', function (e) {
        e.preventDefault();
        if (check()) this.submit();
    });
})

let $ = function (id) {
    return document.getElementById(id);
};

let check = function () {
    let isValid = true;

    if ($('name').value == ''){
        $('name').style.border="1px solid red";
        isValid = false;
    }
    if ($('last_name').value == ''){
        $('last_name').style.border="1px solid red";
        isValid = false;
    }
    if ($('email').value == ''){
        $('email').style.border="1px solid red";
        isValid = false;
    }
    if ($('city').value == ''){
        $('city').style.border="1px solid red";
        isValid = false;
    }
    if ($('address').value == ''){
        $('address').style.border="1px solid red";
        isValid = false;
    }
    if ($('phone').value == ''){
        $('phone').style.border="1px solid red";
        isValid = false;
    }
    if ($('category').value == 'choose'){
        $('category').style.border="1px solid red";
        isValid = false;
    }
    if ($('text').value == ''){
        $('text').style.border="1px solid red";
        isValid = false;
    }
    if ($('price').value == ''){
        $('price').style.border="1px solid red";
        isValid = false;
    }



    return isValid;
};