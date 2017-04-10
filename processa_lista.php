<?php

      $ip = 'http://192.168.10.247/';
      $stringCompleta = $ip;
      $stringCompleta = $ip.'ina';
      $stringCompleta = $ip.'ind';
      #DELETAR
		if(isset($_GET['NO'])):
            $re = (int)$_GET['NO'];
                echo '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Deletado com sucesso!</strong> Redirecionando ...
                    </div>
                    <iframe src="http://192.168.10.247/ON'. $re .'.htm" height="1" width="1"/>';
                header("Refresh: 1, teste.php");
							
	    endif;

      //$url = file_get_contents('http://192.168.10.247');
        $url = '1,1,1,0';

            $array=explode(",",$url);
            $rele1 = $array[0];
            $rele2 = 1;//$array[1];
            $rele3 = 0;//$array[2];
            $rele4 = 0;//$array[3];
            $rele5 = 0;//$array[4];
            $rele6 = 0;//$array[5];
            $anal1 = 0;//$array[6];
            $anal2 = 0;//$array[7];
            $anal3 = 0;//$array[8];
            $anal4 = 0;//$array[9];
            $anal5 = 0;//$array[10];
            $anal6 = 0;//$array[11];
            $digt1 = 0;//$array[12];
            $digi2 = 0;//$array[13];

            
        
							
            
?>

<!--form data-parsley-validate method="get" action="">
   <a type="submit" href="index.php?RE=1" ><i class='fa  fa-plus'></i>1</a>
</form>
<form data-parsley-validate method="get" action="">
   <a type="submit" href="index.php?NO=2" ><i class='fa  fa-plus'></i>2</a>
</form>

<!--   Icon Section   -->
      <div class="row">
          <?php while ($rele = current($array)) { 
                        $id = key($array) + '1';
                        $status = $array[$id]
                        
                    ?>
        <div class="col s12 m2">

          <div class="card-panel">

              <div class="row center">

                    <h5 class="center">Rele <?php echo $id; ?></h5>  
                    
                    
                         
                         
                         
                    <?php if($status == 0){?>
                    <h3 class="center" light-blue-text"light-blue-text"><img src="img/desligado.png" alt="" class="circle"></h3>
                    <?php }?>
                    <?php if($status == 1){?>
                    <h3 class="center" light-blue-text"light-blue-text"><img src="img/ligado.png" alt="" class="circle"></h3>
                    <?php }?>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="status" value="<?php echo $status; ?>">
                        <button type="submit" name="comando"><i class="material-icons">power_settings_new</i></button>
		            </form>
                    
                </div>
                </div>
        </div>
                <?php 
                        next($array);
                    }
                    ?>
          

        <div class="col s12 m2">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Rele 2</h5>
          </div>
        </div>
        

        <div class="col s12 m2">
          <div class="card-panel">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Rele 3</h5>
            <div class="progress">
                <div class="determinate" style="width: 70%"></div>
            </div>
            <p class="light">We .</p>
          </div>
        </div>

<?php
//header('Location: http://192.168.10.247/?='.$_GET['ref']);
//echo $url;
//echo $rele1;
//echo $anal5;
?>