<?php

namespace App\Controllers;
use Codeigniter\Controllers;
use App\Models\DetailCapresma;

class Detail extends BaseController
{
    public function index()
    {
        $model = new DetailCapresma();
        $data['detail_capresma'] = $model->getData();
        
        return view('detail-capresma', $data);
    }
}
