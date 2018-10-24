<?php
	$link=isset($_REQUEST['link'])?$_REQUEST['link']:'home';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK REL="SHORTCUT ICON" href="img/icone.jpg">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ascalon</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="javascript/banner.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#000000">


	
	
<div id="corpo">
		
		<div id="header">
        
				<div id="login">
                <form action="" method="post">
                
				  <table width="200" border="0">
                  
				    <tr>
				      <td width="50"><label>Login</label></td>
				      <td width="135"><input type="text" name="login" /></td>
			        </tr>
                    
				    <tr>
				      <td><label>Senha</label></td>
				      <td><input type="password" name="senha"/></td>
			        </tr>
                    
				    <tr>
				      <td colspan="2">
                      
                      	<input type="submit" name="OK" value="OK"/>
                        <a href="index.php?link=cadastro"><input type="button" value="Registrar"/></a>
                        
                      </td>
			        </tr>
                    
			      </table>
                	
                 </form>
                    
                    
                </div>
				
				
</div>
	
		<div id="menu" style="text-align:center">
				<ul>
                <center>
                	<li><a href="index.php?link=home" >Home</a></li>
                    <li><a href="index.php?link=produtos">Produtos</a></li>
					<li><a href="index.php?link=contatos">Contato</a></li>
					<li><a href="index.php?link=downloads">Download</a></li>
                   </center>
                <ul>
		</div>
		
                <div id="content">
                

					<script type="text/jscript" src="javascript/banner.js"></script>
                
								<?php
                                	
                                    include("php/switch.php");
                                    
                                ?>
				</div>
</div>
		<div id="footer"></div>
		

</body>
</html>
