
$(document).ready(function () {
    $("#search_button").click(function () {
        let input=$("#search_input")
        $.post("search.php", {
                search: ""
            // }, function (data, status) {
            //     alert("Data: " + data + "\nStatus: " + status);
            //     $("#test").html(data);
            },
            'html');
    });
});