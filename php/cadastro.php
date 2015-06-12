<?php 

$nome = $_POST['nome'];
$user = $_POST ['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


class Cadastrar{
	function inserir($nome, $user, $email, $password, $confirmpassword){
		try{
			$con = new PDO("mysql:host=localhost:3306;dbname=easy", "root", "root"); 
			$sql = "INSERT INTO usuario (nome, user, email, password, confirmpassword) VALUES ('$nome','$user','$email','$password','$confirmpassword')";
			$stmt = $con->prepare($sql);
			$stmt->execute();

			if ($stmt->rowCount() > 0){
			echo "<script>alert('CADASTRADO COM SUCESSO!');</script>";
			}
			else{
				echo "Não cadastrado";
			}
		}
		catch(PDOException $erro) {
		    echo "ERRO NO BANCO: <br>".$e->getLine();
		}
	}
}

$cadastrar = new Cadastrar();
$cadastrar->inserir($nome, $user, $email, $password, $confirmpassword);


$consulta = mysql_query("SELECT * FROM tables WHERE email='$email'");
$linha = mysql_num_rows($consulta);
 
 
if($linha == 0){
echo "inexistente";
}
else
{
echo "existe";
}

?>