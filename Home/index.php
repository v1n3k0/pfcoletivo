<?php include_once("../header.php") ?>
    <div class="row">
        <div class="jumbotron col-md-10 col-md-offset-1 ">
            <div align="center" class="row">
                <div class="col-md-3 col-md-offset-2">
                    <img src="../image/LogoEFEI.png" alt="Logo Unifei" class="img-responsive">
                </div>
                <div class="col-md-5">
                    <h1 class="text-center">UNIFunda <small>Bem-vindo</small></h1>
                </div>
            </div> 
            <div class="row">
                  <p>A instituição Universidade Federal de Itajubá – UNIFEI a qual é uma instituição de ensino que atende a servidores e alunos, e possibilita a criação e a execução de projetos de diversas categorias, visando a expansão educativa e sociocultural de sua população acadêmica.</p>
            </div>  
        </div>
    </div>
    <div class="row">
       <h2> Ultimos Projetos</h2> 
    </div>
    <div class="row">
    <?php 
        $result = mysqli_query($con, "SELECT * FROM projeto ORDER by codigo Desc;");

        if(isset($result))
        {
          for($i = 1; $i <= 3; $i++){
          $projeto = mysqli_fetch_object($result);
     ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <!--<img src="../image/242x200.svg" alt="imagem">-->
          <div class="embed-responsive embed-responsive-4by3">
             <iframe class="embed-responsive-item" src="<?php echo $projeto->video ?>"></iframe>
          </div>
          <div class="caption">
            <h3><?php echo $projeto->nome_p ?></h3>
            <p><?php echo $projeto->descricao ?></p>
            <p><a href="../Projeto/mostraProjeto.php?cod=<?php echo $projeto->codigo ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Mais</a></p>
          </div>
        </div>
      </div>
      <?php
          }
        }
       ?>
    
<?php include_once("../footer.php") ?>