$(document).ready(function () {
    $('.viewBtn').on('click', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'fetch_admin.php',
            type: 'post',
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                var fullName = response.fname + ' ' + response.lname;
                $('#adminName').text(fullName);
                $('#pos').text(response.position);
            }
        });
    });
});