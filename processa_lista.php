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
        $url2 = file_get_contents('http://192.168.10.247/NO1');

      $url = file_get_contents('http://192.168.10.247');

            $array=explode(",",$url);
            $rele1 = $array[0];
            $rele2 = $array[1];
            $rele3 = $array[2];
            $rele4 = $array[3];
            $rele5 = $array[4];
            $rele6 = $array[5];
            $anal1 = $array[6];
            $anal2 = $array[7];
            $anal3 = $array[8];
            $anal4 = $array[9];
            $anal5 = $array[10];
            $anal6 = $array[11];
            $digt1 = $array[12];
            $digi2 = $array[13];

							
            
?>

<button type="submit" class="btn btn-large btn-block btn-primary" value="NO2">Botões em Rbloco</button>
<button class="btn btn-large btn-block" type="button">Botões em bloco</button>
<form data-parsley-validate method="get" action="http://192.168.10.247/">
    <input type="text" name="NO1" class="form-control col-md-7 col-xs-12">
   <button class="btn btn-large btn-block" value="NO" type="submit">Botões em bloco</button>
</form></h2>
<form data-parsley-validate method="get" action="">
   <a type="submit" href="index.php?NO=1" ><i class='fa  fa-plus'></i>1</a>
</form>
<form data-parsley-validate method="get" action="">
   <a type="submit" href="index.php?NO=2" ><i class='fa  fa-plus'></i>2</a>
</form>

<?php
//header('Location: http://192.168.10.247/?='.$_GET['ref']);
echo $url;
echo $rele1;
echo $anal5;
?>