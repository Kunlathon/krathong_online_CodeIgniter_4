<?php
    class int_krathong{

        public $int_kra;
        function __construct(){
            $krathong_dataID=$_SERVER['REMOTE_ADDR'];
			$connect_data=new count_krathong($krathong_dataID);
			$pdodata_krathong=$connect_data->call_coun_krathong();

            try{
                $count_kra_sql="SELECT COUNT(`krathong_key`) AS `int_kra` FROM `krathong_rc`";
                    if(($count_kra_rs=$pdodata_krathong->query($count_kra_sql))){
                        $count_kra_row=$count_kra_rs->Fetch(PDO::FETCH_ASSOC);
                            if((is_array($count_kra_row) and count($count_kra_row))){
                                $int_kra=$count_kra_row["int_kra"];
                            }else{
                                $int_kra=0;
                            }
                    }else{
                        $int_kra=0;
                    }
            }catch(PDOException $e){
                $int_kra=0;
            }

            $this->int_kra=$int_kra;
            $pdodata_krathong=null;

        }function __destruct(){
            $this->int_kra;
        }
    }
?>


<?php
    class manage_krathong{
        public $mk_type,$mk_kk,$mk_kn,$mk_kw,$mk_kf;
        public $krathong_array,$krathong_error;
        function __construct($mk_type,$mk_kk,$mk_kn,$mk_kw,$mk_kf){

            $this->mk_type=$mk_type;
            $this->mk_kk=$mk_kk;
            $this->mk_kn=$mk_kn;
            $this->mk_kw=$mk_kw;
            $this->mk_kf=$mk_kf;

            $data_time=date("Y-m-d H:i:s");
            $data_key=date("YmdHis");
            $krathong_dataID=$_SERVER['REMOTE_ADDR'];
			$connect_data=new count_krathong($krathong_dataID);
			$pdodata_krathong=$connect_data->call_coun_krathong();

            $krathong_array=array();
            $krathong_error="error";

                if(($this->mk_type=="row_all")){
                    try{
                        $krathong_sql="SELECT * FROM `krathong_rc` ORDER BY `krathong_datetime` DESC LIMIT 0, 10;";
                            if(($krathong_rs=$pdodata_krathong->query($krathong_sql))){
                                while($krathong_row=$krathong_rs->Fetch(PDO::FETCH_ASSOC)){
                                    if((is_array($krathong_row) and count($krathong_row))){
                                        $krathong_array[]=$krathong_row;
                                        $krathong_error="no_error";
                                    }else{
                                        $krathong_array="-";
                                        $krathong_error="error";
                                    }
                                }
                            }else{
                                $krathong_array="-";
                                $krathong_error="error";
                            }
                    }catch(PDOException $e){
                        $krathong_array="-";
                        $krathong_error="error";
                    }
                }elseif(($this->mk_type=="add")){
                    $krathong_key=$this->mk_kk.$data_key;
                    try{
                        $krathong_sql="INSERT INTO `krathong_rc`(`krathong_key`, `krathong_name`, `krathong_wish`, `krathong_kf`, `krathong_datetime`) 
                                       VALUES ('{$krathong_key}','{$this->mk_kn}','{$this->mk_kw}','{$this->mk_kf}','{$data_time}')";
                        $pdodata_krathong->exec($krathong_sql);
                        $krathong_array="-";
                        $krathong_error="no_error";
                    }catch(PDOException $e){
                        $krathong_array="-";
                        $krathong_error="error";
                    }
                }else{
                    $krathong_array="-";
                    $krathong_error="error";
                }

            $this->krathong_array=$krathong_array;
            $this->krathong_error=$krathong_error;
            $pdodata_krathong=null;
        }function PrintDataKrathong(){
            return $this->krathong_array;
        }function TxttDataKrathong(){
            return $this->krathong_error;
        }
    }
?>

<?php
    class manage_img{
        public $mi_type,$mi_kf_key,$mi_kf_img,$mi_slide,$mi_top;
        public $img_array,$img_error;
        function __construct($mi_type,$mi_kf_key,$mi_kf_img,$mi_slide,$mi_top){

            $this->mi_type=$mi_type;
            $this->mi_kf_key=$mi_kf_key;
            $this->mi_kf_img=$mi_kf_img;
            $this->mi_slide=$mi_slide;
            $this->mi_top=$mi_top;

            $krathong_dataID=$_SERVER['REMOTE_ADDR'];
			$connect_data=new count_krathong($krathong_dataID);
			$pdodata_krathong=$connect_data->call_coun_krathong();

            $img_array=array();
            $img_error="error";

                if(($this->mi_type=="key")){
                    try{
                        $img_sql="SELECT * FROM `kf_img` WHERE `kf_key`='{$this->mi_kf_key}'";
                            if(($img_rs=$pdodata_krathong->query($img_sql))){
                                while($img_row=$img_rs->Fetch(PDO::FETCH_ASSOC)){
                                    if((is_array($img_row) and count($img_row))){
                                        $img_array[]=$img_row;
                                        $img_error="no_error";
                                    }else{
                                        $img_array="-";
                                        $img_error="error";
                                    }
                                }
                            }else{
                                $img_array="-";
                                $img_error="error";
                            }
                    }catch(PDOException $e){
                        $img_array="-";
                        $img_error="error";
                    }
                }elseif($this->mi_type=="loop"){
                    try{
                        $img_sql="SELECT * FROM `kf_img` ORDER BY `kf_key` ASC";
                            if(($img_rs=$pdodata_krathong->query($img_sql))){
                                while($img_row=$img_rs->Fetch(PDO::FETCH_ASSOC)){
                                    if((is_array($img_row) and count($img_row))){
                                        $img_array[]=$img_row;
                                        $img_error="no_error";
                                    }else{
                                        $img_array="-";
                                        $img_error="error";
                                    }
                                }
                            }else{
                                $img_array="-";
                                $img_error="error";
                            }
                    }catch(PDOException $e){
                        $img_array="-";
                        $img_error="error";
                    }
                } else{
                    $img_array="-";
                    $img_error="error";
                }

            $this->img_array=$img_array;
            $this->img_error=$img_error;
            $pdodata_krathong=null;

        }function Print_img(){
            return $this->img_array;
        }function Txt_img(){
            return $this->img_error;
        }
    }

?>