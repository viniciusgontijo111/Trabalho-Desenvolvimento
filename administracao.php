

<?php
include 'principal.php';
?>


<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Painel Administrativo</h1>
    </div>

    
    <div class="row">

        
        
        <div class="col-xl-4 col-xs-6 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <a href="classes.php" title="">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Classes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$administracao->total_classes(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
              </a>
            </div>
        </div>

    
        <div class="col-xl-4 col-xs-6 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <a href="professores.php" title="">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Professores</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$professor->total_professores(); ?></div>
                                </div>
                                <div class="col">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x text-gray-300"></i>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>

       
        <div class="col-xl-4 col-xs-6 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <a href="alunos.php" title="">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alunos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$aluno->total_alunos(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap fa-3x text-gray-300"></i>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-4 col-xs-6 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <a href="funcionarios.php" title="">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?=utf8_encode("Funcion�rios")  ?></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$funcionario->total_funcionarios(); ?></div>
                                </div>
                                <div class="col">
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x text-gray-300"></i>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>

        
        <div class="col-xl-4 col-xs-6 col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <a href="usuarios.php" title="">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><?=utf8_encode("Usu�rios")  ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$usuario->total_usuarios(); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-3x text-gray-300"></i>
                        </div>
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>


    

</div>

<?php
include 'rodape.php';
?>