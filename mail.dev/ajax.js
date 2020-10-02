
document.getElementById('btn').addEventListener('click', () => {
    $.ajax({
        url:     "sendmail.php", //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        data:   {name: document.getElementById('name').value, email: document.getElementById('email').value, phone: document.getElementById('phone').value},
        success: (data) => {
            console.log(data)
        }
    })
})
