$(document).ready(function () {

    $("button#logoutbutton").click(function () {

        $.getJSON("logout.php", "&logout=" + true , function (response) {
            if (response === "success") {
                alert("You have logged out!");
                window.location.replace("index.php");
            }
        });
    });
    $("button#loginbutton").click(function () {
        window.location.replace("login_page.php");
    });
    $("button#signupbutton").click(function () {
        window.location.replace("signup_page.php");
    });
});