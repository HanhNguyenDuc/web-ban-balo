
$(document).ready(function () {
    // $('.display-content').hide();
    $('#all').show();
});


$('#myTab li a').on('click', function (e) {
    // e.preventDefault();
    $(this).tab().show();
});
