<?php
/*PAGE USED WITH AJAX - NO LAYOUT, DB...*/
session_start();
if(isset($_POST['confirmed']) && $_POST['confirmed'] == 'yes') {
    $_SESSION['age_confirm'] = true;
    header("Content-type: application/json");
    echo '{"status":"success"}';
}
else {
    header("Content-type: application/json");
    echo '{"status":"error", message:"no_post"}';
}
