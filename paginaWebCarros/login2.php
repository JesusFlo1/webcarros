<?php 
  
    $users=["admin"=>"adm123", "juan1"=>"123321"];
    $usr = $_POST['Nombre_control'];
    $passwor = $_POST['Contrasena_control'];
    $band_usuario=false;
    $band_cont=false;
    foreach($users as $user=>$user_cont)
    {
        if($user==$usr){
           $band_usuario=true;
        }
    }
    foreach($users as $user=>$user_cont)
    {
        if($user_cont==$passwor){
           $band_cont=true;
        }
    }
    if($band_cont && $band_usuario){
        echo "<script>alert('Bienvenido');</script>";
    }elseif($band_cont==false && $band_usuario){
        echo "<script>alert('Contraseña erronea');</script>";
    }elseif($band_cont && $band_usuario==false){
        echo "<script>alert('Usuario erroneo');</script>";
    }elseif($band_cont==false && $band_usuario==false){
        echo "<script>alert('Usuario y contraseña erroneos');</script>";
    }
    echo "<script> window.location= 'log.html'</script>";
?> 