$(document).ready(function () {

    $("button#signup").click(function (event) {
        event.preventDefault();
        const username = $("#username").val();
        const password = $("#password").val();


        $.getJSON("STORE_USER.php", "&username=" + username + "&password=" + password, function (response) {
            switch (response) {

                case "user":
                    $("#error_message").text("User does not exist)");
                    break;
                case "success":
                    alert("You successfully created a account!")
                    window.location.replace("login_page.php");
                    break;

                default:
                    break;
            }
        });
    });
});