<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
$fundo = "blue";
?>
<style>
body{
    height: 900px;
    flex-direction: column;
    display: flex;
}
.imagem img{
    width: 500px;
    height: auto;
}
#imagem{
    width: 500px;
    margin-bottom: 0px;
}
#section{
    display: flex;
    justify-content: center;
    align-items: center;
}
#section2{
    display: flex;
    justify-content: center;
    margin-top: 10%;
    margin-bottom: 0;
    align-items: center;
    background-color: <?php echo $fundo; ?>;
}


</style>
<body>
    <section id="section">
    <?php

    ini_set('default_charset', 'utf-8');
    $nome =  "Cristhofer";
    $idade = 16;
    $email = "cristhoferchow9@gmail.com";
    
    echo '<h1 id="text">Olá <font color="#000060">'.$nome.'</font>, bem vindo! <br>
    Você tem <font color="#ef6950">'.$idade.'</font> anos, seu email é: "<font color="#6888c9">'.$email.'</font>"</h1>';
    
    ?>
    </section>

    <section id="section2">
        <?php
            $fundo = "blue";
            $name = "Cristhofer Chow";
            $imagem = "https://cdn.motor1.com/images/mgl/WpLQq/s1/lamborghini-sian-roadster.jpg";
            
            echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;"><font color="#fff">'.$name.'</font><br></h1><img src="'.$imagem.'" id="imagem">';
        ?>
    </section>
   

    
</body>
</html>