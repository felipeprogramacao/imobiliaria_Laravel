
@extends('templates.main')

@section('title','Imóveis / Clientes')


@section('content')

<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>Cadastro de Imóveis</u></h2>
<br><br>
</form>

<div>
	
  <div class="row">
    
    <div class="col-sm  mt-4">
	<form action="/enviar" method="post" enctype="multipart/form-data">
	@csrf
      <table>
			<tr>
				<td colspan="2">Tipo de Imóvel</td>
				<td><input type="text" name="imovel"></td>
			</tr>
			<tr>
				<td colspan="2">Proprietário</td>
				<td><input type="text" name="proprietario"></td>
			</tr>
			<tr>
				<td colspan="2">Área / Diferencial</td>
				<td><input type="text" name="tipo"></td>
			</tr>
			<tr>
				<td colspan="2">Vagas na Garagem</td>
				<td><input type="text" name="garagem"></td>
			</tr>
			<tr>
				<td colspan="2">Caracteristicas</td>
				<td><input type="text" name="descricao"></td>
			</tr>
			<tr>
				<td>Valor</td>
				<td align="right">R$</td>
				<td><input type="text" name="valor"></td>
			</tr>
			<hr>
			<tr>
				<td><input type="file"  name="image"></td>
				<td align="right" colspan="2"><input type="submit" value="CADASTRAR"></td>
			</tr>
			
	  </table>
	  </form>
	 </div>
    </div>
  </div>
  
</div>
@endsection