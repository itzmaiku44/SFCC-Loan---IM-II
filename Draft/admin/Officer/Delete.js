$(document).ready(function () {
    var deleteId;

    // Capture the ID of the row to be deleted
    $('.deleteBtn').on('click', function () {
        deleteId = $(this).data('id');
    });

    // Handle the delete confirmation
    $('.confirmDeleteBtn').on('click', function () {
        $.ajax({
            url: 'Delete.php',
            type: 'POST',
            data: { id: deleteId },
            success: function (response) {
                // Handle success
                location.reload(); // Reload the page after the changes
            },
            error: function () {
                // Handle error
                alert('Failed to delete the record.');
            }
        });
    });
});
