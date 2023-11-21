<?php

namespace App\Controllers;


class Run_kra extends BaseController{
    public function index(): string{
        return view('run_kra_jquery/running_krathong');
    }
}
?>