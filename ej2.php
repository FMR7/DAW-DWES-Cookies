<?php
    if(isset($_REQUEST["add"])){
        $t = $_REQUEST["time"];
        if($t!=""){
            if(($t>0)&&($t<61)){
                echo "Cookie creada";
                addCookie($t);
            }else{
                echo "El tiempo debe estar comprendido entre 1 y 60";
            }
        }else{
            echo "Especifica tiempo";
        }
    }if(isset($_REQUEST["del"])){
        if(isset($_COOKIE["testName"])){
            echo "Cookie destruida";
            delCookie();
        }else{
            echo "No existe la cookie";
        }
    }if(isset($_REQUEST["check"])){
        if(checkCookie()!=false){
            echo "Valor de la cookie: ".checkCookie();
        }else{
            echo "No existe la cookie";
        }
           
    }
    header( "Refresh:2; url=ej2.html");

    function addCookie($time){
        setcookie("testName", "testValue", time()+$time);
    }

    function delCookie(){
        setcookie("testName", "testValue",  time()-60);
    }

    function checkCookie(){
        if(isset($_COOKIE["testName"])){
            return $_COOKIE["testName"];
        }
        return false;
    }
?>
