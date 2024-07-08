/* $(document).ready(function(){
    $('.viewBtn').on('click', function(){
        var id = $(this).data('id');
        var firstname = $(this).data('firstname');
        var lastname = $(this).data('lastname');

        $('#modalId').text(id);
        $('#modalFirstname').text(firstname);
        $('#modalLastname').text(lastname);

        $('#viewModal').modal('show');
    });
}); */

$(document).ready(function () {
    $('.viewBtn').on('click', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'fetch_director.php',
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