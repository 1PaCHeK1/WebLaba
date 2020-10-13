$('.number').click(function (e) {
    e.preventDefault();
    let value = e.currentTarget.attributes['data-value'].value;
    let text = $('#InputValue').val();
    $('#InputValue').val(text + value);
});

$('.operator').click(function (e) {
    e.preventDefault();
    let value = e.currentTarget.attributes['data-value'].value;
    let text = $('#InputValue').val();
    $('#InputValue').val(text + ' ' + value + ' ');
});

$('.take_result').click(function (e) {
    e.preventDefault();
    let text = $('#InputValue').val() || 0;
    try
    {
        $('#result span').text(eval(text));
    }
    catch(error)
    {
        $('#result span').text('Некоректная запись!');
    }
});

$('.delete').click(function (e) {
    e.preventDefault();
    let text = $('#InputValue').val();
    $('#InputValue').val(text.slice(0, -1));
});



$('.take_result_php').click(function (e) {
    e.preventDefault();

    let formData = new FormData();
    formData.append('InputValue',  $('#InputValue').val());

    $.ajax({
        url: '/vendor/backend/calc.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            console.log(data);
            if(data.status)
                $('#result span').text(data.result);
            else
                $('#result span').text('Некоректная запись!');
        },
        error(data) {
//            $('#result span').text('Произошел сбой на сервере!');
            $('#result span').text('Некоректная запись!');
        }
    });
});