$(document).ready(function () {

    $("button#comment").click(function (event) {
        event.preventDefault();
        const comment = $("#comment").val();

        $.getJSON("STORE_ENTRY.php", "&comment=" + comment, function (response) {
            if (response == "success") {
                alert("You have commented the page!");
                reloadConversation();
            }
        });
    });

    $("button#reload").click(function () {
        reloadConversation();
    });
    

    function deleteEntry() {
        alert("hej");
        const timestamp = $("#delete").val();

    }


    function reloadConversation() {
        $.getJSON("viewComments.php", function (entries) {
            $("#commentsPlace").html("");
            entries.forEach(addComment);
            }
        )
    }

    function addComment(entry) {
        $("<p class='author'>" + entry.username + " says:</p>").appendTo($("#commentsPlace"));
        $("<p class='entry'>" + entry.message + "</p>").appendTo($("#commentsPlace"));
        if(entry.deletebutton){
            $("<button id='delete'>Delete</button>").click(deleteEntry).appendTo($("#commentsPlace"));

        }


    }

});
