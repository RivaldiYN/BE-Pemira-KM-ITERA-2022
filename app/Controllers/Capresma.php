<?php

namespace App\Controllers;
use App\Models\DetailCapresma;

class Capresma extends BaseController
{
    public function index()
    {
        $details = new DetailCapresma;
        $data['detail_capresma'] = $details->getData();
    
        return view('capresma', $data);
    }

    public function details($id){
        echo $id;
    }
}
