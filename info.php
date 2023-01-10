<?php

//echo to javascript
if (isset($_POST["username"])) {
    if ($_POST["username"] === "abc") {
        echo "verified";
    } else {
        echo "Error";
    }
}
?>