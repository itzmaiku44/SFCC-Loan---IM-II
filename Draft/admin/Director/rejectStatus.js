$('.rejectBtn').on('click', function () {
    var id = $(this).data('id');

    $.ajax({
        url: 'rejectStatus.php',
        type: 'POST',
        data: { id: id },
        success: function (response) {
            // Handle success
            console.log(response); // Log the response for debugging
            try {
                var jsonResponse = JSON.parse(response);
                if (jsonResponse.status === 'success') {
                    location.reload(); // Reload the page to see the changes
                } else {
                    alert(jsonResponse.message);
                }
            } catch (e) {
                console.error('Error parsing JSON response:', e);
                alert('Failed to reject the application.');
            }
        },
        error: function () {
            alert('Failed to reject the application.');
        }
    });
});