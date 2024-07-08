$(document).ready(function () {
    $('.viewBtn').on('click', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'fetch_president.php',
            type: 'post',
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                var fullName = response.fname + ' ' + response.lname;
                var birthdate = response.bmonth + ' / ' + response.bday + ' / ' + response.byear;
                var fullAddress = response.street1 + ', ' + response.street2 + ', ' + response.province + ', ' + response.city + ', ' + response.postal + ', ' + response.country;
                $('#modalID').text(response.id);
                $('#modalName').text(fullName);
                $('#modalAge').text(response.age);
                $('#modalBirth').text(birthdate);
                $('#modalAddress').text(fullAddress);

                $('#viewData').modal('show');
            }
        });
    });
});
