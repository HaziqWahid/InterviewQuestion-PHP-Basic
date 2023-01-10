

document.querySelector("#username-form").addEventListener("submit", function(event) {
    // Prevent the form from submitting
    event.preventDefault();
    //read the username
    var username = document.getElementById("username").value;

    // checking if username is null
    if(username === ""||username === null) {
        // Show an error message to indicate that the field is empty
        document.getElementById("form-messages-error").style.display = "block";
    } else {
        // Hide the error message
        document.getElementById("form-messages-error").style.display = "none";
        document.getElementById("form-messages-verified").style.display = "none";

        //Use AJAX to send the data to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "info.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {

            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if(response === "verified") {
                    //show the response
                    document.getElementById("form-messages-error").style.display = "none"
                    document.getElementById("form-messages-verified").style.display = "block";
                } else {
                    //show the response
                    document.getElementById("form-messages-error").style.display = "block";
                    document.getElementById("form-messages-verified").style.display = "none"
                   // document.getElementById("form-messages-error").innerHTML = response;
                }
            }
        };
        xhr.send("username=" + username);
    }
});
