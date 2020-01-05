$('#user-form').submit(function(e) {
    e.preventDefault();
    var emptyMessage = 'Por favor llena este campo';
    var firstname = document.getElementById('firstname');
    var lastname = document.getElementById('lastname');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var email = document.getElementById('email');

    if (firstname.value == '' || lastname.value == '' || username.value == '' || password.value == '' || email.value == '') {
        if (firstname.value == '') {
            document.getElementById('firstname-error').innerHTML = emptyMessage;
        } else {
            document.getElementById('firstname-error').innerHTML = '';
        }
        
        if (lastname.value == '') {
            document.getElementById('lastname-error').innerHTML = emptyMessage;
        } else {
            document.getElementById('lastname-error').innerHTML = '';
        }
        
        if (username.value == '') {
            document.getElementById('username-error').innerHTML = emptyMessage;
        } else {
            document.getElementById('username-error').innerHTML = '';
        }
        
        if (password.value == '') {
            document.getElementById('password-error').innerHTML = emptyMessage;
        } else {
            document.getElementById('password-error').innerHTML = '';
        }
        
        if (email.value == '') {
            document.getElementById('email-error').innerHTML = emptyMessage;
        } else {
            document.getElementById('email-error').innerHTML = '';
        }
    } else {
        var form_data = $('#user-form').serialize();
        $.ajax({
            url: base_url + 'Session/signIn',
            type: 'post',
            data: form_data,
            dataType: 'html',
            success: function(result){
                if (result == '1') {
                    swal({
                        icon: 'success',
                        title: 'Registrado con exito',
                        text: 'El usuario se ah registrado con exito',
                    }) .then((ok) => {
                        if (ok) {
                            window.location.href = base_url + 'Home/admin';
                        }
                    });
                } else {
                    swal({
                        icon: 'error',
                        title: 'Usuario Existente',
                        text: 'El nombre de usuario o el correo electronico que intentas registrar ya esta en uso',
                    });
                }
            },
            error: function() {
                swal('Se produjo un error');
            }
        });
    }
});

$('#login-form').submit(function(e) {
    e.preventDefault();

    var username = $('#username').val();
    var password = $('#password').val();
    var emptyMessage = 'Por favor llena este campo';

    if (username == '' || password == '' ) {
        if (username == '') {
            $('#username-error').html(emptyMessage);
        } else {
            $('#username-error').html('');
        }
        
        if (password == '') {
            $('#password-error').html(emptyMessage);
        } else {
            $('#password-error').html('');
        }
    } else {
        var form_data = $(this).serialize();
        $.ajax({
            url: base_url + 'Session/logIn',
            type: 'post',
            data: form_data,
            dataType: 'html',
            success: function(result) {
                if (result == '1') {
                    window.location.href = base_url + 'Home/admin';
                } else {
                    swal({
                        icon: 'warning',
                        title: 'Datos incorrectos',
                        text: 'Revisa los datos e intentalo de nuevo',
                    });
                }
            }, 
            error: function() {
                swal({
                    icon: 'error',
                    title: 'Algo salio mal',
                    text: 'Se produjo un error al intentar acceder a la base de datos, por favor intentalo mas tarde.'
                });
            }
        });
    }
});