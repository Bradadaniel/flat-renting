window.addEventListener('load', function () {
    document.getElementById('form').addEventListener('submit', function (e) {
       // e.preventDefault();
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

    if ($('menu_item').value == '- Choose one of our delicious plate -'){
        $('errSelect').innerHTML = 'Please select a plate!';
        $('menu_item').style.borderColor = "red";
        isValid = false;
    }

    if ($('delivery_dates').value == '- Please choose one delivery date -'){
        $('errSelect1').innerHTML = 'Please select a delivery dates!';
        $('delivery_dates').style.text = "red";
        isValid = false;
    }

    if ($('notes').value == ''){
        $('errSelect1').innerHTML = 'Irjon szöveget!';
        $('txt').style.text = "red";
        isValid = false;
    }

    return isValid;
};