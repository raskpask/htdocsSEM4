$(document).ready(function () {

    $("button#login").click(function (event) {
        event.preventDefault();
        const username = $("#username").val();
        const password = $("#password").val();


        $.getJSON("login.php", "&username=" + username + "&password=" + password, function (response) {
            switch (response) {

                case "user":
                    $("#error_message").text("User does not exist)");
                    break;
                case "success":
                    alert("You have logged in!")
                    window.location.replace("index.php");
                    break;

                default:
                    break;
            }
        });
    });
});