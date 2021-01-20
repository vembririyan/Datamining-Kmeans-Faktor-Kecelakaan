<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataKecelakaan;

class DataKecelakaanController extends Controller{
    public function index(){
        $title['title']="Data Kecelakaan";
        // $model = new DataKecelakaan();
        // $data['datakecelakaan'] = $model->getKecelakaan();
        echo view('partials/header',$title);
        echo view('partials/nav');
        echo view('pages/home');
        echo view('partials/footer');
    }
    public function datakecelakaan(){
        $model = new DataKecelakaan();
        $data = $model->getKecelakaan();
        return $this->response->setJSon($data);
    }
}