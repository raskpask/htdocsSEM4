$(document).ready(function () {
    reloadConversation();
    $("button#comment").click(function (event) {
        event.preventDefault();
        const comment = $("#comment").val();

        $.getJSON("STORE_ENTRY.php", "&comment=" + comment, function (response) {
            if (response === "success") {
                alert("You have commented the page!");
                reloadConversation();
            }
        });
    });

    $("button#reload").click(function () {
        reloadConversation();
    });
    

    function deleteEntry() {
        const timestamp = $("#timestamp").val();
        $.getJSON("delete-entry.php", "&timestamp=" + timestamp,function(response){
            if (response === "success") {
                alert("You have deleted your comment!");
                reloadConversation();
            }
        });
        alert(timestamp);

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
            $("<input type='hidden' id='timestamp' name='timestamp' value='" + entry.timestamp +"'/>").appendTo($("#commentsPlace"));
            $("<button id='delete'>Delete</button>").click(deleteEntry).appendTo($("#commentsPlace"));

        }


    }

});
