<?php

namespace App\Models;

use CodeIgniter\Model;

class Misi extends Model {

    protected $table = 'misi_calon';

    public function getMisi($id = false){
        if ($id === false){
            return $this->findAll();
        } else {
            // return $this->getWhere(['Id' => $id]);
            $this->where('id_calon', $id);                // where clause
            $query = $this->get()->getResult();
            return $query;
        }
    }
}


?>