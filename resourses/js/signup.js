$(document).ready(function () {

    /*var baseUrl = location.href.replace("Login", "");
    var loginUrl = baseUrl + "Login";
    var writeUrl = baseUrl + "StoreEntry";
    var readUrl = baseUrl + "GetEntries";
    var deleteUrl = baseUrl + "DeleteEntry";*/

    function LoginFunct(){
        var self = this;
        self.password = ko.observable("");
        self.username = ko.observable("");

        self.login = function(){

            regex = /^[a-z0-9]+$/i;
            if(self.password().match(regex) && self.username().match(regex)){

                p = ko.toJS(self.password);
                u = ko.toJS(self.username);

                $.post("../../classes/TastyRecipe/SignupPage.php",
                    {
                        'password': p,
                        'username': u,
                    }


                );
            }else{
                console.log('Failure');
                alert("Wrong username or password")

            }
        };




    };

    var log = new LoginFunct();
    ko.applyBindings(log,document.getElementById('login'));
});