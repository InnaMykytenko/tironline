jQuery(document).ready(function($) {

    $(".ajax-contact-form").submit(function() {
        var str = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "https://tironline.com.ua/contact.php",
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    result = '<p>Спасибо за отправку сообщения. Мы свяжемся с вами в ближайшее время.</p>';
                    $(".fields").hide();
                } else {
                    result = msg;
                }
                $('.note').html(result);
            }
        });
        return false;
    });
});