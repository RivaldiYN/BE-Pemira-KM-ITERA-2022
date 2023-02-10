<?php

namespace App\Models;

use CodeIgniter\Model;

class RancanganProgja extends Model {
    protected $table = 'rancangan_progja';
    public function getProgja($id = false){
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