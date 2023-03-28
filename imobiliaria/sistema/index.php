<?php 
require_once("conexao.php");
$senha_crip = md5('123');

//CRIAR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA NENHUM
$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){
	$pdo->query("INSERT INTO usuarios SET nome = 'Administrador', cpf='000.000.000-00', email='contato@hugocursos.com.br', senha_crip='$senha_crip', senha='123', nivel='Administrador', foto = 'sem-perfil.jpg', id_func = '0', ativo = 'Sim' ");
}


//inserir os cargos que geram níveis de usuários
$query = $pdo->query("SELECT * FROM cargos");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){	
	$pdo->query("INSERT INTO cargos SET nome = 'Tesoureiro'");	
	$pdo->query("INSERT INTO cargos SET nome = 'Recepcionista'");
	$pdo->query("INSERT INTO cargos SET nome = 'Corretor'");
  $pdo->query("INSERT INTO cargos SET nome = 'Extrativista'");
}

 ?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Archivo&display=swap" rel="stylesheet">

	<title><?php echo $nome_sistema ?></title>

</head>
<body>

<section class="vh-100" style="background-color: #f6ebdf;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">

              <img src="imagens/login-1.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%;" />
            </div>
            
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">


                <!--login de usuarios-->
                <form action="autenticar.php"  method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>

                    <!--logo formulario-->
                    <span class="h1 fw-bold mb-0"> 
                    <img src=""  alt="" style=" width:35%;" class="foto1"  /></span>
                   
                
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;  color: #3A2212; font-family: 'Archivo', sans-serif; ">Faça login em sua conta</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17" style=" color: #3A2212; font-family: 'Archivo', sans-serif;  ">Email ou CPF</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="senha"  name="senha" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27" style=" color: #3A2212; font-family: 'Archivo', sans-serif; ">Senha</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-outline-success btn-lg btn-block" type="submit" >Login</button>
                  </div>

                  <a class="small text-muted" href="#!" data-bs-toggle="modal" data-bs-target="#modalRecuperar">Esqueceu a senha?</a> <br>


                  <!-- criação de conta 

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem uma conta? <a href="#!"
                      style="color: #393f81;">Criar conta</a></p>

                  -->
                  
                  <a href="#!" class="small text-muted" style=" color: #3A2212;">© 2023 INATU.</a>
                
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







    <!-- JavaScript opcional; escolha um dos dois! -->

    <!-- Opção 1: Pacote Bootstrap com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    
  </body>
</html>


<!-- Modal recuperação de senha-->
<div class="modal fade" id="modalRecuperar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="from-recuperar" method="POST">
      <div class="modal-body">
      
      <input type="email" id="email" name="email" class="form-control form-control-sm"
       required placeholder="Digite seu E-mail de Cadastro"/>
      </div>
      <div class="modal-footer">
     
        <button type="submit" class="btn btn-outline-success">Recuperar</button>
      </div>
      </form>
    </div>
  </div>
</div>