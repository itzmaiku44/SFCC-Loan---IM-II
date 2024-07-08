$(document).ready(function () {
    $('.transferBtn').on('click', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'transferData.php',
            type: 'post',
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                if (response.status == 'success') {
                    alert(response.message);
                    location.reload(); // Reload the page to update the table
                } else {
                    alert('Error: ' + response.message);
                }
            }
        });
    });
});