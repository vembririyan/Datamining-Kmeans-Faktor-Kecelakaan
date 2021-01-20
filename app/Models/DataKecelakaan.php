<?php namespace App\Models;

use CodeIgniter\Model;

class DataKecelakaan extends Model
{
    protected $table      = 'kecelakaan';
    protected $primaryKey = 'Num_Acc';

    public function getKecelakaan()
    {
        return $this->findAll();
    }

}