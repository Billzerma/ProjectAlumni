<?php

namespace App\Controllers;
use App\Models\BeritaModel;



class BeritaController extends BaseController
{
     protected $beritaModel;
     public function __construct()
     {
          $this->beritaModel=new BeritaModel();
     }


    public function halamanBerita()
    {
         $berita = $this-> beritaModel -> findAll();

          $data=[
               'berita'=>$berita
          ];
          
         return view('Alumni/berita',$data);
        
    }

    public function detailBerita($id_berita)
    {

     $data=[

          'berita'=> $this->beritaModel->getBerita($id_berita)
     ];


         return view('Alumni/detailBerita',$data);
        
    }


    public function postingBerita()
    {
     $data=[
               
          'validation'=> \Config\Services::validation()
     ];
         return view('user\postingBerita',$data);
        
    }

    public function save(){

     $rules = [
          'judul_berita' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi'
               ]
               ],

          'isi_berita' => [
               'rules' => 'required|min_length[10]|max_length[2000]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[10]'=>'{field} minimal 10 karakter',
                   'min_length[2000]'=>'{field} maksimal 2000 karakter'
               ]
               ],
          'headline' => [
               'rules' => 'required|min_length[10]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[10]'=>'{field} minimal 10 karakter'
                    
               ]
               ],
               'sampul_profile'=> [
                    'rules' => 'max_size[sampul_profile,1024]|is_image[sampul_profile]|mime_in[sampul_profile,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                          'max_size' => 'Gambarnya terlalu besar bosque',
                          'is_image' => 'filenya harus gambar ya cakep',
                          'mime_in' => 'lo ga pilih gambar bre...'
                    ]
              ]
  

      ];

     if (!$this->validate($rules)) {
          $validation = \Config\Services::validation();
          session()->setFlashdata('err',$validation->listErrors());
          return redirect()->to('posting-berita')->withInput();
      }

     $this->beritaModel->save([
          'judul_berita' => $this->request->getVar('judul_berita'),
        'isi_berita' => $this->request->getVar('isi_berita'),
        'headline'=>$this->request->getVar('headline'),
        'sampul_profile' => $namaSampul

     ]);

     return redirect()->to('posting-berita');
        

    }


}