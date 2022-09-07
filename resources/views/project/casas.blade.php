@extends('templates.main')

@section('title','Imóveis / Clientes')


@section('content')

				
<br>
<form method="POST" id="form_cadast">
<br>
<h2 id="cab_casas" align="center"  ><u>Imóveis</u></h2>
<br><br>
</form>

@foreach($casas as $casa)



<div>
  <div class="row">
    <div class="col-xl">
    <br>
    <img src="/img/events/{{$casa->image}}" class="img-fluid m-1 width: 30px" alt="Imagem responsiva">
    </div>
    
    <div class="col-sm  mt-4">
      <ul class="list-group">
 
  <li class="list-group-item list-group-item-success">
	  <nav>
			<div class="left">{{$casa->imovel}} </div>
			<div class="right">
				<li><a href="/editar/{{$casa->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks" viewBox="0 0 16 16">
  <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg></a></li>
				<li><a href="/deletar/{{$casa->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></ion-icon></a></li>
			</div>
	  </nav>
	  </li>
  <li class="list-group-item list-group-item-light">Proprietário  <b>{{$casa->proprietario}}</b></li>
  <li class="list-group-item list-group-item-light">Área / Diferencial <b>{{$casa->pecas_no_imovel}}</b></li>
  <li class="list-group-item list-group-item-light">Vagas na Garagem <b>{{$casa->garagem}}</b></li>
  <li class="list-group-item list-group-item-light">Caracteristicas <b>{{$casa->descricao}}</b></li>
  <li class="list-group-item list-group-item-light">Contato: </li>
  
  <li class="list-group-item list-group-item-light "><ul class="nav justify-content-center"><a href="https://wa.me/55519999999"><img src="assets/images/fone/wht.jpg" width="280" height="46"></a></ul></li>
  
  <li class="list-group-item list-group-item-light">Valor<i class="bi-alarm"></i> <b>R$ {{$casa->valor}}</b>             </li>
  
</ul>
	 </div>
    </div>
  </div>

    @endforeach

@endsection