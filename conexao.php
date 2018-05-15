<?php 

if (isset($_POST["acao"])) {

	if ($_POST["acao"]=="inserir") {

		inserirPessoa();

		}

	if ($_POST["acao"]=="alterar") {

		alterarPessoa();

		}	

}


function abrirBanco(){

	$conexao = new mysqli("localhost", "root", "root", "novo");

	return $conexao;

}


function inserirPessoa(){
	$banco = abrirBanco();
		
	$sql = "INSERT INTO diario(titulo, descricao, data_inicial, data_final, hora_inicial, hora_final, situacao, tecnico)" ."VALUES ('{$_POST["btnTitulo"]}', '{$_POST["inpTextarea"]}', '{$_POST["btnDataInicial"]}','{$_POST["btnDataFinal"]}','{$_POST["btnHoraInicial"]}','{$_POST["btnHoraFinal"]}','{$_POST["btnStatus"]}','{$_POST["btnTecnico"]}')";

	$banco->query($sql);
	
	$banco->close();
	
	voltarIndex();	

	 }



function alterarPessoa(){

	$banco = abrirBanco();
			
	$sql = "UPDATE diario SET titulo='{$_POST["btnTitulo"]}', descricao='{$_POST["inpTextarea"]}',data_inicial='{$_POST["btnDataInicial"]}',data_final='{$_POST["btnDataFinal"]}',hora_inicial='{$_POST["btnHoraInicial"]}',hora_final='{$_POST["btnHoraFinal"]}',situacao='{$_POST["btnStatus"]}',tecnico='{$_POST["btnTecnico"]}' WHERE  id='{$_POST["id"]}'";

	$banco->query($sql);
	
	$banco->close();
	
	voltarIndex();	

	 }






function selectAllpessoa(){

	$banco = abrirBanco();

	$sql = "SELECT * FROM diario ORDER BY  id DESC";
	$resultado = $banco->query($sql);
	
	while ($row = mysqli_fetch_array($resultado)) {

		$grupo[] = $row;
	}

return $grupo; 

}




function selectIdpessoa($id){

	$banco = abrirBanco();

	$sql = "SELECT * FROM diario WHERE id =".$id;
	$resultado = $banco->query($sql);
	
	$banco->close();

	$pessoa = mysqli_fetch_assoc($resultado);

	return $pessoa; 

}

function voltarIndex(){
		
		header("Location:index.php");
 	

 }
 

 ?>