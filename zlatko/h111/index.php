<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
</head>
<body>
<div id="total"><img src="ajax_loader.gif" alt="loading"></div>

<hr>
<div>
    <input type="button" id="gam" value="get all messages">
    <input type="button" id="clear" value="clear all messages">
</div>
<div id="all"></div>
<script type="text/javascript">

    var $ = function (id) {
        return document.getElementById(id);
    }

    window.addEventListener('load', init);

    function init() {
        setTimeout(loadData, 1000);
        setInterval(loadData, 10000);
        $("gam").addEventListener('click', function () {
            getAllMessages()
        });
        $("clear").addEventListener('click', function () {
            clearMessages()
        });
    }


    function loadData() { //ez az objektum miatt frissul az oldal
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }

        xmlhttp.onreadystatechange = function () { //definialjuk a fuggvenyt es mikor meghivjuk a statechange tulajdonsaga megvaltozik es az onreadystatechange tobb tulajdosaga van
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { //200 helyett pl 404 status hogy nem talalhato az oldal 406-letiltas
                $("total").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("GET", "get.php", true); //3 parametert fogad elso a get metodus, szerver file lokacio(honnan huzza az adatokat),szinkron vagy aszinkron(true  ) modon mukodik
        xmlhttp.send();//elkuldi a kerest a szervernek
    }

    function getAllMessages() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }

        xmlhttp.onreadystatechange = function () {
            $('all').innerHTML = '<img src="ajax_loader.gif" >';//all -idbe fogja beirni az adatokat
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $('all').innerHTML = xmlhttp.responseText;
                loadData();
            }
        };

        xmlhttp.open("GET", "get2.php", true);//ezek az adatbazisbol huzott adatok lesznek vegrehajtva
        xmlhttp.send();
    }

    function clearMessages() {
        $('all').innerHTML = "";
    }

</script>
</body>
</html>