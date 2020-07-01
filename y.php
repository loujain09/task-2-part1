<!DOCTYPE html>
<html>
<head>
    <title>control</title>
</head>
<body>

 <?php

        if(isset($_POST['Forwards'])) {
            echo "This is Button that is selected";
        }
        if(isset($_POST['Left'])) {
            echo "This is Button1 that is selected";
        }

         if(isset($_POST['STOP'])) {
            echo "This is Button2 that is selected";
        }
        if(isset($_POST['Right'])) {
            echo "This is Button3 that is selected";
        }

        if(isset($_post['Backwards'])) {
            echo "This is Button4 that is selected";
        }
        $connect = new mysqli()
    ?>

</body>
</html>