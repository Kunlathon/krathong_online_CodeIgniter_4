<?php

    include(APPPATH. "Database_pdo/krathong_pdo.php");
    include(APPPATH. "Database_pdo/krathong_class.php");

    $rk_input=\Config\Services::request();

    $key_kra=$rk_input->getPost("key_kra");

        if(($key_kra=="run")){ ?>


<link rel="stylesheet" href="<?php echo base_url();?>/krathong_js/app.css">

<style type="text/css">
    .bg-province1 {
          background: url("https://f.ptcdn.info/853/012/000/1385990975-asd-o.jpg") no-repeat center;
        background-size: cover;
        background-position: top;
    }
</style>


<body>

<style type="text/css">

    @keyframes swing {
        0% {
            -webkit-transform: rotate(2deg);
                    transform: rotate(2deg);
        }

        50% {
            -webkit-transform: rotate(-2deg);
                    transform: rotate(-2deg);
        }

        100% {
            -webkit-transform: rotate(2deg);
                    transform: rotate(2deg);
        }
    }

    @-webkit-keyframes slide {
        0% {
            left: 0;
        }

        100% {
            left: 0;
        }
    }

    @keyframes slide {
        0% {
            left: 0;
        }

        100% {
            left: 0;
        }
    }

    @-webkit-keyframes slide0 {
        0% {
            left: -100px;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes slide0 {
        0% {
            left: -100px;
        }

        100% {
            left: 100%;
        }
    }

    @-webkit-keyframes slide1 {
        0% {
            left: -200;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes slide1 {
        0% {
            left: -200;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes slide2 {
        0% {
            left: -400;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes slide2 {
        0% {
            left: -400;
        }

        100% {
            left: 100%;
        }
    }

</style>

    <style type="text/css">
            
    <?php
        $countA=45;
        $countB=46;
        $countC=0;
        $call_data_kra=new manage_krathong("row_all","-","-","-","-");
        foreach($call_data_kra->PrintDataKrathong() as $k_key=>$print_krathong){ ?>
         
         <?php
                $KraImg=new manage_img("key",$print_krathong["krathong_kf"],"-","-","-");
                    foreach($KraImg->Print_img() as $k_key=>$KraImgRow){}
            ?>

             .items-slide-<?php echo $countA;?> {
                animation: <?php echo $countB;?>s linear <?php echo $countC;?>s normal none infinite slide<?php echo $KraImgRow["slide"];?>; 
            }       

    <?php  
            $countA=$countA+1;
            $countB=$countB+2;
            $countC=$countC+1.5;

        } ?>



            /*.items-slide-46 {
                animation: 47s linear 1.5s normal none infinite slide1; 
            }
            .items-slide-47 {
                animation: 48s linear 2s normal none infinite slide2; 
            }*/
    </style>

    <div class="bg-main bg-province1">
     
                 <div class="river">

        <?php
            $countA=45;
            $countB=46;
            $countC=0;
            $countD=0;
            $call_data_kra=new manage_krathong("row_all","-","-","-","-");
            foreach($call_data_kra->PrintDataKrathong() as $k_key=>$print_krathong){ ?>

            <?php
                $KraImg=new manage_img("key",$print_krathong["krathong_kf"],"-","-","-");
                    foreach($KraImg->Print_img() as $k_key=>$KraImgRow){}
            ?>
            
                     <div class="item-relative" >
                         <div class="items-slide-<?php echo $countA;?> item-base-slide" style="top: -<?php echo $KraImgRow["top"];?>px;">
                             <div class="items-topdown">
                                 <div class="items-swing item-<?php echo $countD;?> items-thumb">
                                    <img src="<?php echo base_url();?>/img/<?php echo $KraImgRow["kf_img"];?>" alt="กระทง">
                                </div>
                             </div>
                             <div class="item-wish">
                                 <p><?php echo $print_krathong["krathong_wish"];?></p>
                             </div>
                         </div>
                     </div>        

        <?php  
                $countA=$countA+1;
                $countB=$countB+2;
                $countC=$countC+1.5;
                $countD=$countD+1;

            } ?>



                     <!--<div class="item-relative">
                         <div class="items-slide-46 item-base-slide " style="top: -28px;">
                             <div class="items-topdown">
                                 <div class="items-swing item-1 items-thumb">
                                 <img src="<?php echo base_url();?>/img/krathong-3.png" alt="กระทง">
                                                                         </div>
                             </div>
                             <div class="item-wish">
                                 <p>รวยๆ ขอให้ถูกหวย ไม่มีโรคภัย : ปิยะวรรณ กวงขุนทด</p>
                             </div>
                         </div>
                     </div>-->

                     <!--<div class="item-relative">
                         <div class="items-slide-47 item-base-slide " style="top: -39px;">
                             <div class="items-topdown">
                                 <div class="items-swing item-2 items-thumb">
                                 <img src="<?php echo base_url();?>/img/krathong-3.png" alt="กระทง">
                                                                         </div>
                             </div>
                             <div class="item-wish">
                                 <p>sss : dddd</p>
                             </div>
                         </div>
                     </div>	-->
                 </div>
    </div>

<?php   }else{ ?>



    
<?php   } ?>


