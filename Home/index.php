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
        $result = mysqli_query($con, "SELECT * FROM projeto where status = 'aprovado' ORDER by codigo Desc LIMIT 3");

        if(isset($result))
        {
          while($projeto = mysqli_fetch_object($result)){
             $sql = mysqli_query($con, "SELECT sum(valor_doado) AS total FROM financiar WHERE cod_p_fk = '$projeto->codigo'");
            if($sum = mysqli_fetch_array($sql)){
              $soma = $sum['total'];
            }
            $numero = ($soma / $projeto->valor) * 100;
            $porcentagem = number_format($numero, 2);
     ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <!--<img src="../image/242x200.svg" alt="imagem">-->
                <div class="embed-responsive embed-responsive-4by3">
                   <iframe class="embed-responsive-item" src="<?php echo $projeto->video ?>"></iframe>
                </div>
                <div class="caption">
                  <h3><?php echo $projeto->nome_p ?></h3>
                  <p><?php echo $projeto->descricao ?></p>
                  <div class="col-md-12">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $porcentagem ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem ?>%;">
                        <?php echo $porcentagem ?>%
                      </div>
                    </div>
                  </div>
                  <p><a href="../Projeto/mostraProjeto.php?cod=<?php echo $projeto->codigo ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Mais</a></p>
                </div>
              </div>
            </div>
      <?php
          }
        }
       ?>
    </div> 
    <div class="row">
       <h2>Populares</h2> 
    </div>
    <div class="row">
    <?php 
        $result = mysqli_query($con, "SELECT *, sum(valor_doado) AS total FROM financiar GROUP BY cod_p_fk LIMIT 3");     

        if(isset($result))
        {
          while($financiar = mysqli_fetch_object($result)){
            $proj = mysqli_query($con, "SELECT * FROM projeto where codigo = '$financiar->cod_p_fk' ");
            $projeto =  mysqli_fetch_object($proj);
            $sql = mysqli_query($con, "SELECT sum(valor_doado) AS total FROM financiar WHERE cod_p_fk = '$projeto->codigo'");
            if($sum = mysqli_fetch_array($sql)){
              $soma = $sum['total'];
            }
            $numero = ($soma / $projeto->valor) * 100;
            $porcentagem = number_format($numero, 2);
     ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <!--<img src="../image/242x200.svg" alt="imagem">-->
                <div class="embed-responsive embed-responsive-4by3">
                   <iframe class="embed-responsive-item" src="<?php echo $projeto->video ?>"></iframe>
                </div>
                <div class="caption">
                  <h3><?php echo $projeto->nome_p ?></h3>
                  <p><?php echo $projeto->descricao ?></p>
                  <div class="col-md-12">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $porcentagem ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem ?>%;">
                        <?php echo $porcentagem ?>%
                      </div>
                    </div>
                  </div>
                  <p><a href="../Projeto/mostraProjeto.php?cod=<?php echo $projeto->codigo ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Mais</a></p>
                </div>
              </div>
            </div>
      <?php
          }
        }
       ?>
      </div> 
<?php include_once("../footer.php") ?>