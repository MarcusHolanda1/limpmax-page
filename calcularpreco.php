<?php
$sofa = $_POST["qtde-sofa2"];

$precosofa = 150.00;


if ($sofa > 0 ){
    $preco_total = $sofa * $precosofa;
}
echo $preco_total;
?>


<?php
       $sofa2 = $_POST['qtde-sofa2'];
       $sofa3 = $_POST['qtde-sofa3']
       
       $precosofa2 = 150.00;
       $precosofa3 = 170.00;
       $preco_total = 0;
       
       if ($sofa2 > 0){
           $preco_total = $sofa2 * $precosofa2;
       }
       echo $preco_total;
       ?>
