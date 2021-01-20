<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataKecelakaan;
use Phpml\Clustering\KMeans;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Request;


class AlgoritmaController extends Controller{
    public function index(){
        $dcluster['dcluster0']=NULL;
    // }
    // public function getKmeans(){
        $request = service('request');
        $jumlahcluster=$request->getGet('jumlahcluster');
        //var_dump($jumlahcluster);
        if($jumlahcluster!=""){
        // $title['title']="Prediksi Kecelakaan";
        $db      = \Config\Database::connect();
        // $builder = $db->table('kecelakaan');
        // $builder->select('hrmn,lum,inte,atm,col');
        // $query = $builder->get();
        //$dataquery=$query->getResultArray();
        $arr=[];
        $i=0;
        $query=$db->query('select * from kecelakaan');
        foreach ($query->getResult('array') as $row)
        {
            $arr[$i]=[(int)$row['hrmn'],(int)$row['lum'],(int)$row['inte'],(int)$row['atm'],(int)$row['col'],(int)$row['agg']];
            // array_push($arr,[(int)$row['hrmn'],(int)$row['lum'],(int)$row['inte'],(int)$row['atm'],(int)$row['col']]);
            $i++;
        }
        $samples=$arr;
        $kmeans = new KMeans($jumlahcluster);
        $datakmeans=$kmeans->cluster($samples);
        $data=$datakmeans;
        $dcluster['jumlahdata']=$jumlahcluster;
        for ($i=0; $i <= $jumlahcluster ; $i++) { 
            $dcluster['dcluster'."$i"]=$data[$i];
        }
        //$dcluster['dcluster0']=$data[0];
        // $dataprediksi['prediksi1']=$data[1];
        // $dataprediksi['prediksi2']=$data[2];
        // $dataprediksi['prediksi3']=$data[3];
        // $dataprediksi['prediksi4']=$data[4];
        // //$dataprediksi['prediksi']=$data[5];

        // var_dump($data);die;
        // echo view('partials/header',$title);
        // echo view('partials/nav');
        // echo view('pages/naivebayes',$dataprediksi);
        // echo view('partials/footer');
        // return $this->response->setJSON($data1);
    }
    $title['title']="Prediksi Kecelakaan";
    echo view('partials/header',$title);
    echo view('partials/nav');
    echo view('pages/setcluster',$dcluster);
    echo view('partials/footer');
}
}