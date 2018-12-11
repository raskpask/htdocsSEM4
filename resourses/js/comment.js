$(document).ready(function () {

    $("button#comment").click(function (event) {
        event.preventDefault();
        const comment = $("#comment").val();

        $.getJSON("STORE_ENTRY.php", "&comment=" + comment, function (response) {
            if (response == "success") {
                alert("You have commented the page!");
            }
        });
    });
    $("button#reload").click(function () {
        reloadConversation();
    });

    function reloadConversation() {
        $.getJSON("viewComments.php", function (entries) {
                alert(entries.message);


            //entries.forEach(addComment);

            }
        )
    }

    function addComment(entry) {
        alert(entry.username);
        //$("<p class='author'>" + entry.username + ":</p>").appendTo($("#commentPlace"));


    }
});
