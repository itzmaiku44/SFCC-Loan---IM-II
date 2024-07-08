$(document).ready(function () {


    // Handle the approve action
    $('.approveBtn').on('click', function () {
        var approveId = $(this).data('id');
        $.ajax({
            url: 'update_status.php',
            type: 'POST',
            data: { id: approveId },
            success: function (response) {
                // Handle success
                alert('Application approved successfully.');
                location.reload(); // Reload the page to see the changes
            },
            error: function () {
                // Handle error
                alert('Failed to approve the application.');
            }
        });
    });
});
