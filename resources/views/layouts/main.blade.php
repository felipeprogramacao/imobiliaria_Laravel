<?php  

?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<title>@yield('title')</title>

</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <a class="btn btn-outline-light mr-sm-1" href="./">Imobiliária</a>
      <div class="navbar-header">
  <a class="btn btn-outline-light mr-sm-1" href="casas">Casas</a>
  <a class="btn btn-outline-light mr-sm-1" href="apartamentos">Apartamentos</a>
  </div>
  </div>
  <div class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])){ ?>
              <li class="nav-item"><a class="nav-link disabled" href="meus_imoveis.php">Meus Imóveis</a></li>
               <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
              <?php  } else { ?>
                  <li class="nav-item"><a class="nav-link disabled" href="cadastro_cliente">Cadastre-se</a></li>
               <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
<?php } ?>
              </div>
  
</nav>

@yield('content')

</body>
</html>