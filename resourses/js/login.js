$(document).ready(function () {

    function sendRequest() {
        $.post("../../TastyRecipe/Login.php", $("#username").serialize() + $("#password").serialize());

    }
$("button#loginbutton").click(function(){
    $.post("../../classes/TastyRecipe/Login.php", $("#username").serialize() + "&"+$("#password").serialize());
});
});