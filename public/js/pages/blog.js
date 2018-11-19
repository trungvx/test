$(function () {
    $('#btnDelete').on('click', function () {
        var action = $('#urlDelete').val();
        var form = $('form');
        form.prop('action', action);
        form.submit();

    });
});