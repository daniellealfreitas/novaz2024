<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login - Admin - Belle Vie</title>
    <link href="css/geral.css"  rel="stylesheet" type="text/css">
    <link href="css/resetcss.css"  rel="stylesheet" type="text/css">
    
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<div id="wrap_login">
    	<h1>Bem vindo, acesse sua conta.</h1>
        <p>Digite seu login e senha para acessar seu painel administrativo</p>
        <br>
        <form method="post" action="valida.php">
        	<label>Login:</label><br>
            <input type="text" name="usuario"><br>
            <label>Senha:</label><br>
            <input type="password" name="senha"><br><br>

            <input type="submit" value="Acessar">
        </form>
    </div><!--wrap_login-->
</body>
</html>