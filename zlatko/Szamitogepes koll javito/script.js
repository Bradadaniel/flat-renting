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
    $('errSelect2').innerHTML = '';


    let isValid = true;

    if ($('menus').value == '- Choose a plate -'){
        $('errSelect').innerHTML = 'Válassz menüt!';
        $('menus').style.border = "1px solid red";
        isValid = false;
    }
    else {
         $('menus').style.border = "1px solid black";
    }

    if ($('delivery_date').value == '- Choose a delivery date -'){
        $('errSelect1').innerHTML = 'Válassz dátumot!';
        $('delivery_date').style.border = "1px solid red";
        isValid = false;
    }
    else
    {
        $('delivery_date').style.border = "1px solid black";
    }

    if ($('txt').value == ''){
        $('errSelect2').innerHTML = 'Irjon szöveget!';
        $('txt').style.border = "1px solid red";
        isValid = false;
    }
    else {
        $('txt').style.border = "1px solid black";
    }

    return isValid;
};