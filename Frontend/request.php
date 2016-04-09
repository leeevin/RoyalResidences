<?php

if (isset($_POST['submit'])) {
  
        $value = $_POST['value'];
        
        if ($value = "contract") {
            echo "contract";
        }

        else if ($value = "room"){
            echo "room";
        }
}

?>