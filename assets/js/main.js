/*
    Авторизация
*/

$('.login-btn').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: '/server/auth/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {
            console.log(data);
            if (data.status) {
                document.location.href = '/profile.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }
        },
        error(data) {
            console.log(data);

        }
    });

});

/*
    Получение аватарки с поля
 */

let avatar = false;

$('.form-reg input[name="avatar"]').change(function (e) {
    avatar = e.target.files[0];
});

/*
    Регистрация
*/

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('.form-reg input[name="login"]').val(),
        password = $('.form-reg input[name="password"]').val(),
        full_name = $('.form-reg input[name="full_name"]').val(),
        email = $('.form-reg input[name="email"]').val(),
        password_confirm = $('.form-reg input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('full_name', full_name);
    formData.append('email', email);
    formData.append('avatar', avatar);
    formData.append('status', 'client');

    $.ajax({
        url: '/server/auth/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                
                $('.msg').removeClass('none').text(data.message);
            }
        },
        error(data) {
            console.log(data);
        }

    });

});
