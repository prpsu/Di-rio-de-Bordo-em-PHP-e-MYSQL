



<head>
	
<title>Cadastro</title>
	<meta charset="utf-8">

	<script src="jquery-2.2.3.js"></script>
	<script src="angular.min.js"></script>
	<script src="muralAjax.js"></script>
	<script src="muralAjaxForm.js"></script>

	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="">


</head>

<h1 align="center">CADASTRO</h1>


 <form name="dadosPessoa" action="conexao.php" method="POST">


	 <table border="3" class="table table-hover">
 		<tbody>
			
			<tr>
				<td><label for="btnDataFianl" class="col-2 col-form-label">TITULO</label></td>
				<td><input class="form-control" type="text" name="btnTitulo" value=""></td>	
			</tr>

			<tr>
				<td><label for="btnDataFianl" class="col-2 col-form-label">DESCRICAO</label></td>
				<td><textarea class="form-control" id="inpTextarea" rows="3" name="inpTextarea"></textarea></td>	
			</tr>

			<tr>
				<td  ><label for="btnDataInicial" class="col-2 col-form-label">DATA INICIAL</label></td>
				<td><input  class="form-control" type="date" name="btnDataInicial" id="btnDataInicial" value=""></td>	
			</tr>

			<tr>
				<td><label for="btnDataFianl" class="col-2 col-form-label">DATA FINAL</label></td>
				<td><input class="form-control" type="date" name="btnDataFinal" id="btnDataFinal" value=""></td>	
			</tr>

			<tr>
				<td><label for="btnHoraInicial" class="col-2 col-form-label">HORA INICAL</label></td>
				<td><input  class="form-control" type="time" name="btnHoraInicial" id="btnHoraInicial" value=""></td>	
			</tr> 			

			<tr>
				<td><label for="btnHoraFianl" class="col-2 col-form-label">HORA FINAL</label></td>
				<td><input class="form-control" type="time" name="btnHoraFinal" id="btnHoraFinal" value=""></td>	
			</tr>

			<tr>
				<td><label for="btnStatus" class="col-2 col-form-label">STATUS</label></td>
				<td>  <select class="form-control" name="btnStatus" id="btnStatus">
    	
    					<option value="SOLUCIONADO">SOLUCIONADO</option>
					    <option value="EM TRATAMENTO">EM TRATAMENTO</option>
					    <option value="NÃO SOLUCIONADO">NÃO SOLUCIONADO</option>

    				</select>
    			</td>	
			</tr>

			<tr>
				<td><label for="btnTecnico" class="col-2 col-form-label">TECNICO</label></td>
				<td>  <select  class="form-control" name="btnTecnico" id="btnTecnico">
    	
    					<option value="AYRA">AYRA</option>
    					<option value="PAULO ROBSON">PAULO ROBSON</option>
					    <option value="DANILO CARVALHO">DANILO CARVALHO</option>
					    <option value="DIEGO BARREIROS">DIEGO BARREIROS</option>
					    <option value="DIEGO BARREIROS">ICARO</option>


    				</select>
    			</td>	
			</tr>

			<tr>
				<td><input type="hidden" name="acao"  value="inserir"></td>
				<td><input  class=" btn btn-primary form-control" type="submit" name="Enviar"  value="Enviar"></td>	
			</tr>

 		</tbody>







 	</table>	





 </form>