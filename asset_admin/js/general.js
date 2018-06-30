    $(document).ready(function() {
        $('#tabelReportpss').DataTable();
    } );

    $(document).ready(function() {
        $('#sakura-table').DataTable();
    } );

    jQuery('.validatedForm').validate({
        rules : {
            password_pengguna : {
                minlength : 5
            },
            password_pengguna_confirm : {
                minlength : 5,
                equalTo : "#password_pengguna"
            }
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        equalTo: "Password yang anda masukkan tidak sama."
    });