<?php
include("../inc/db.php");
try{
    if(isset($_POST)){
            if((isset($_POST["user"])) && isset($_POST["password"]) && isset($_POST["path"])){
                    $user = $_POST["user"];
                    $pass = $_POST["password"];
                    $path = $_POST["path"];
                    $results=$db->prepare(
                            "SELECT name, lastname, user, pass, last_connection
                            FROM USERS
                            WHERE user=?
                            "
                    );
                    $results->bindParam(1,$user,PDO::PARAM_STR);
                    $results->execute();

                    if($results->rowCount() === 1){
                            $usr = $results->fetchAll(PDO::FETCH_ASSOC);
                            $hash = md5($pass);
                            if($hash === $usr[0]["pass"]){
                                    session_start();
                                    $_SESSION["id"] = session_id();
                                    $_SESSION["user_id"] = $usr[0]["user"];
                                    $_SESSION["user_name"] = $usr[0]["name"]. " " . $usr[0]["lastname"];
                                    $_SESSION["last_conn"] = $usr[0]["last_connection"];
                                    header("location: ..".$path);
                            }else{
                                    throw new Exception("Contraseña incorrecta");
                            }
                    }else{
                            throw new Exception("Usuario Incorrecto");
                    }
            }else{
                    throw new Exception("No se ingresaron datos");
            }
    }else{
            throw new Exception("No se accedió mediante POST");
    }
}catch(Exception $e){
	header("location: ../index.php?err=login&usr=".$user);
}
?>