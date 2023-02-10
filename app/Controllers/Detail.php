<?php

namespace App\Controllers;
use Codeigniter\Controllers;
use App\Models\DetailCapresma;
use App\Models\Misi;
use App\Models\RancanganProgja;

class Detail extends BaseController
{
    public function show($id)
    {
        $model = new DetailCapresma();
        $model_misi = new Misi();
        $model_progja = new RancanganProgja();
        //rencananya gini bang
        // $data = array(
        //     'detail' => $model_detail->getData($id),
        //     'progja' => $model_progja->getData($id)
        // );
        $data['detail_capresma'] = $model->getData($id);
        $data['misi'] = $model_misi->getMisi($id);
        $data['progja'] = $model_progja->getProgja($id);
        
        // $data['progja'] = []; ini nanti tolong isi get data progja where id
        // var_dump($data);
        // die;
 

        return view('detail-capresma', $data);
    }
    
}
