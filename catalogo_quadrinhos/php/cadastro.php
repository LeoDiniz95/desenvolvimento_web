<?PHP
	
	$nome=$_POST['nome'];
	
	$cpf=$_POST['cpf'];
	
	$rg=$_POST['rg'];
	
	$Datanasc=$_POST['datanasc'];
	
	$Endereco=$_POST['endereco'];
	
	$Telefone=$_POST['telefone'];
	
	$cel=$_POST['cel'];
	
	$login=$_POST['login_txt'];
	
	$senha_txt=$_POST['senha'];
	
	$host="127.0.0.1";
	
	$usuario="root";
	
	$senha=" ";
	
	$banco="alunos_ascalon1";
	
	$conexao=mysql_connect($host,$usuario,$senha);

	mysql_select_db($banco);
	
	mysql_query("insert into clientes (nomecli,datanascli,rgcli,cpfcli,endcli,telcli,celcli) values ('$nome','$Datasnasc','$rg','$cpf','$Endereco','$Telefone','$cel')");
	
	$last_insert="select LAST_INSERT_id(IDCLI) from clientes order by idcli desc limit 1";
	
	mysql_query("insert into userscli (useridcli,usernamecli,passwordcli) values('$last_insert','$login','$senha_txt')");
	
?>