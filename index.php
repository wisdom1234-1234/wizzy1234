<?php
    $method = $_POST['method'];
    $text = $_POST['text'];  
    if ($_POST["method"] == "1") {

    }else {
        # code...
    }
     if ($method == 'md5') {
            $hash = md5($text);
          } else {
            $hash = sha1($text);
          }
    echo "<div><h2>$method result:</h2><p>$hash</p></div>"
?>