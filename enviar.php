<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $numero = addslashes($_POST['numero']);
    $areadetexto = addslashes($_POST['areadetexto']);
   
    $para = "caiobrenoliveira@gmail.com";
    $assunto ="portfólio";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."numero: ".$numero."\n"."Texto: ".$areadetexto;

    $cabeca = "From caiotrab0w0@gmail.com"."\n"."Reply-To: ".$email."\n"."X=Mainler:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("email enviado com sucesso!");
    }else{
        echo("houve algum erro!");
    }

?>