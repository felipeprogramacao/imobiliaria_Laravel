<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="../assets/css/style.css">
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/casas.css" type="text/css"/>

<title>@yield('title')</title>

<?php require 'pages/nav.php'; ?>

<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>EDIÇÃO</u></h2>
<br><br>
</form>

<div>
  <div class="row">
    <div class="col-xl">
    <form action="/update/{{$casa->id}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT')
      <table>
			<tr>
				<td colspan="2">Tipo de Imóvel</td>
				<td><input type="text" name="imovel" value="{{$casa->imovel}}"></td>
			</tr>
			<tr>
				<td colspan="2">Proprietário</td>
				<td><input type="text" name="proprietario" value="{{$casa->proprietario}}"></td>
			</tr>
			<tr>
				<td colspan="2">Área / Diferencial</td>
				<td><input type="text" name="tipo" value="{{$casa->pecas_no_imovel}}"></td>
			</tr>
			<tr>
				<td colspan="2">Vagas na Garagem</td>
				<td><input type="text" name="garagem" value="{{$casa->garagem}}"></td>
			</tr>
			<tr>
				<td colspan="2">Caracteristicas</td>
				<td><input type="text" name="descricao" value="{{$casa->descricao}}"></td>
			</tr>
			<tr>
				<td>Valor</td>
				<td align="right">R$</td>
				<td><input type="text" name="valor" value="{{$casa->valor}}"></td>
			</tr>
			<hr>
			<tr>
				<td><input type="file"  name="image"></td>
				<td align="right" colspan="2"><input type="submit" value="CADASTRAR"></td>
			</tr>
			
	  </table>
	  </form>
    </div>
    
    <div class="col-sm  mt-4" align="center">
     <img src="/img/events/{{$casa->image}}" width="300px"  alt="" class="img-preview">
	 </div>
    </div>
  </div>

