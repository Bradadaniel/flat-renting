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
    $('errSelect').innerHTML = '';
    $('errSelect1').innerHTML = '';


    let isValid = true;

    if ($('menu_item').value == '- Choose the problem type -'){
        $('errSelect').innerHTML = 'Válassz problémát!';
        $('menu_item').style.border = "1px solid red";
        isValid = false;
    }

    if ($('repair_date').value == '- Choose the date -'){
        $('errSelect1').innerHTML = 'Válassz dátumot!';
        $('repair_date').style.border = "1px solid red";
        isValid = false;
    }

    if ($('txt').value == ''){
        $('errSelect1').innerHTML = 'Irjon szöveget!';
        $('txt').style.border = "1px solid red";
        isValid = false;
    }

    return isValid;
};