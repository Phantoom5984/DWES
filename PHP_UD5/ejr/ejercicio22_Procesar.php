<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $email=$_POST["email"];
        $confirmarEmail=$_POST["confirmarEmail"];
        $publi=$_POST["publicidad"];
        if($confirmarEmail==$email){
            echo "$email </p>";
            if(isset($publi)=="cheked"){
                echo "deseo recibir publicidad";
            }else{
                echo "NO deseo recibir publicidad";
            }
        }else{
            echo "<p>Error: Las direcciones de correo no coinciden.</p>";
        }
        
    ?>
</body>
</html>