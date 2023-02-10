<?php

namespace App\Controllers;
use App\Models\DetailCapresma;
use App\Moddels\RancanganProgja;

class Capresma extends BaseController
{
    public function index()
    {
        $details = new DetailCapresma;
        $data['detail_capresma'] = $details->getData();
        // $progja = new RancanganProgja();
        // $dataProgja['rancangan_progja'] = $progja->getData();
    
        return view('capresma', $data);
    }

    public function details($id){
        echo $id;
    }
}
