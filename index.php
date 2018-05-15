
<?php  

 // incluir conexao

include('conexao.php');

// usar retorno da função para  exibir retorno do banco 

$grupo = selectAllpessoa();


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DIARIO DE BORDO</title>
	<meta charset="utf-8">

	<script src="jquery-2.2.3.js"></script>
	<script src="angular.min.js"></script>
	<script src="muralAjax.js"></script>
	<script src="muralAjaxForm.js"></script>

	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="diario.css">
</head>
<body>

<h1 align="center" >DIARIO DE BORDO</h1>

<a href="inserir.php"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>

<table border="3" class="table table-hover">
<thead>
	

			<tr>	
					<th>TITULO</th>
					<th>DESCRICAO</th>
					<th>DATA INICIAL</th>
					<th>DATA FINAL</th>
					<th>HORA INICIAL</th>
					<th>HORA FINAL</th>
					<th>STATUS</th>
					<th>TECNICO</th>
					<th>EDITAR</th>
			</tr>
</thead>
<tbody>



	<?php


	//   inicio laco de repetição 


	foreach ($grupo as $pessoa) { ?>
		
<tr>
	
<td><?=$pessoa["titulo"]?></td>
<td style="white-space: initial"><?=$pessoa["descricao"]?></td>
<td><?=formatoData($pessoa["data_inicial"])?></td>
<td><?=formatoData($pessoa["data_final"])?></td>
<td><?=$pessoa["hora_inicial"]?></td>
<td><?=$pessoa["hora_final"]?></td>
<td><?=$pessoa["situacao"]?></td>
<td><?=$pessoa["tecnico"]?></td>
<td>
	<form name="alterar" action="alterar.php" method="POST">
		<input type="hidden" name="id" value=<?=$pessoa["id"]?> />
		<button  type="submit" name="editar" value="Editar"  class="btn btn-primary form-control"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></button>

	</form>

</td>


</tr>


<?php 
// fim do foreach

}?>


</tbody>
</table>

<?php 

//corrigir a data 

function formatoData($data){
$array = explode("-", $data);
//$data = 2018-04-14
//$array[0] = 2018, $array[1] = 04 e $array[2] = 14, 
$novaData = $array[2]."/".$array["1"]."/".$array["0"];
return $novaData;  

}


 ?>


</body>
</html>