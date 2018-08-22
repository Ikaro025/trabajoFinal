<?php
/**
 * Created by PhpStorm.
 * User: Luis A. Zegarra
 * Date: 22-08-18
 * Time: 06:04 PM
 */
?>
<html>
<head>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script src="js/main.js"></script>
</head>
<body>
<div id="zemHead">

</div>
<div id="zemBody">
    <div id="loginContainer"><p><input type="text" placeholder="Alias" id="user"></p>
        <p><input type="password" placeholder="Password" id="pass"></p>
        <p><button id="login">login</button></p>
<<<<<<< HEAD
        <p><a href="#" id="loadRegis">Registrarse</a></p>
        <script>
            $("#loadRegis").click(changeForm);
            $("#login").click(loadMainPannel);
            function changeForm(){
                $("#loginContainer").load('tpl/register.tpl');
            }
            function loadMainPannel(){
                var data=new Object;
                data.user=$("#user").val();
                data.pass=$("#pass").val();

                Zem.Api.rest({
                    type:'POST',
                    method:'login',
                    data:data,
                    module:'main'
                });
                Zem.Api.send();
            }
        </script></div>
=======
        <p><a href="registro.php" id="loadRegis">Registrarse</a></p>
        </div>
>>>>>>> login
</div>
<div id="zemFoot">


</div>

</body>
</html>