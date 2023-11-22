<?php

namespace App\Controllers;
use App\Models\LokerModel;


class LokerController extends BaseController
{
     protected $lokerModel;
     public function __construct()
     {
          $this->lokerModel=new LokerModel();
     }

    public function halamanLoker()
    {
     $loker = $this-> lokerModel -> findAll();

     $data=[
          'loker'=>$loker
     ];
         return view('Alumni/loker',$data);
        
    }

    public function postingLoker()
    {
     $data=[
               
          'validation'=> \Config\Services::validation()
     ];
         return view('user\postingLoker',$data);
        
    }

    public function save(){

     $rules = [
          'judul_loker' => [
               'rules' => 'required|alpha',
               'errors'=>[
                    'required'=>'{field} nama gedung mohon diisi',
                    'alpha'=>'{field} inputkan hanya huruf'
               ]
               ],

          'deskripsi_loker' => [
               'rules' => 'required|min_length[10]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[10]' =>'{field} minimal 10 karakter',
               ]
               ],
          'spesifikasi' => [
               'rules' => 'required|min_length[10]',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    'min_length[10]' =>'{field} masukan alamat lengkap',
                    
               ]
               ],
          'contact_person' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi',
                    
               ]
               ],
          'alamat' => [
               'rules' => 'required',
               'errors'=>[
                    'required'=>'{field} mohon diisi'
               ]
               ]
          
      ];
     if (!$this->validate($rules)) {
          $validation = \Config\Services::validation();
          session()->setFlashdata('err',$validation->listErrors());
          return redirect()->to('posting-loker')->withInput();
      }

     $this->lokerModel->save([
          'judul_loker' => $this->request->getVar('judul_loker'),
        'deskripsi_loker' => $this->request->getVar('deskripsi_loker'),
        'spesifikasi'=>$this->request->getVar('spesifikasi'),
        'contact_person'=>$this->request->getVar('contact_person'),
        'alamat'=>$this->request->getVar('alamat'),
        'sampul_loker'=>$this->request->getVar('sampul_loker')
     ]);

     session()->setFlashData('pesan', 'Data Behasil Ditambahkan');

     return redirect()->to('posting-loker');
        

    }

}