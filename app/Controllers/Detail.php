<?php

namespace App\Controllers;
use Codeigniter\Controllers;
use App\Models\DetailCapresma;

class Detail extends BaseController
{
    public function show($id)
    {
        $model = new DetailCapresma();
        $data['detail_capresma'] = $model->getData($id);
        // var_dump($data);
        // die;
        return view('detail-capresma', $data);
    }
    
}
