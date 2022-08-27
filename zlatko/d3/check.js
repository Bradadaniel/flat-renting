window.addEventListener('load', function () {
    document.getElementById('frm1').addEventListener('submit', function (e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });
});

let $ = function (id) {
    return document.getElementById(id);
};

let checkForm = function () {
    $('errTitle').innerHTML = '';
    $('errName').innerHTML = '';
    $('errEmail').innerHTML = '';

    let isValid = true;

    if ($('title').value === '-1') {
        $('errTitle').innerHTML = 'select one title';
        isValid = false;
    }

    if ($('name').value === '') {
        $('errName').innerHTML = 'name is empty';
        isValid = false;
    }

    let rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!rex.test($('email').value)) {
        $('errEmail').innerHTML = 'incorrect format';
        isValid = false;
    }
    if ($('email').value === '') {
        $('errEmail').innerHTML = 'email is empty';
        isValid = false;
    }

    return isValid;
};