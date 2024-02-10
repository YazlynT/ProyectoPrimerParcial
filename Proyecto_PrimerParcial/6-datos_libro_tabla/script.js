$(document).ready(function() {
    var modal = $("#miModal");
    var btn = $("#modalBtn");
    var span = $(".close");
    var jsonDataDisplay = $("#jsonData");

    btn.click(function() {
        $.ajax({
            url: './json.php',
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                jsonDataDisplay.html(JSON.stringify(data, undefined, 2));
                modal.show();
            },
            error: function() {
                alert("Error al cargar los datos.");
            }
        });
    });

    span.click(function() {
        modal.hide();
    });

    $(window).click(function(event) {
        if (event.target == modal[0]) {
            modal.hide();
        }
    });
});