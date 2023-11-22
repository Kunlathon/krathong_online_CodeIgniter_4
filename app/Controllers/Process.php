<?php

namespace App\Controllers;


class Process extends BaseController{
    public function sql_pdo($compile): string{
        $compile_data=array('compile'=>$compile);
        return view('process/process_code',$compile_data);
    }
}
?>