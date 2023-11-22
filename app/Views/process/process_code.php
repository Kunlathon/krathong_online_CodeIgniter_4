<?php

    include(APPPATH. "Database_pdo/krathong_pdo.php");
    include(APPPATH. "Database_pdo/krathong_class.php");

    $pc_input=\Config\Services::request();

   
    $krathong_key="kk";
    $krathong_name=$pc_input->getPost("krathong_name");
    $krathong_wish=$pc_input->getPost("krathong_wish");
    $krathong_kf=$pc_input->getPost("krathong_kf");
    $compile=$pc_input->getPost("compile");

        if(($compile=="add")){

            $add_krathong=new manage_krathong("add",$krathong_key,$krathong_name,$krathong_wish,$krathong_kf);

            echo $add_krathong->TxttDataKrathong();

        }else{
            echo "-";
        }

?>

