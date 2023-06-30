<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\DataAlumni;

class AlumniController extends BaseController
{
    public function index()
    {
         return view('Alumni/landing');
        
    }

      // controller buat login
      public function loginBaru()
    {
      $data = [
            'config' => $this->config
        ];
         return view('auth/login', $data);
        
    }

    public function registerBaru()
    {
         return view('auth/register');
        
    }

    public function user()
    {
         return view('user/index');
        
    }


    public function dash()
    {
         return view('Alumni/tamplate/header');
        
    }
    public function cariAlumni()
    {
     $cari = new DataAlumni;
     $data['cari'] = $cari->orderBy('nama', 'asc')->findAll();
     echo view('Alumni/cari', $data);
        
    }
    public function login()
    {
     
          return view('Alumni/login');
    }
    public function register()
    {
     
          return view('Alumni/register');
    }

    protected $anggotaModel;
    public function __construct()
    {
      $this->anggotaModel = new AnggotaModel();
      $this->session = service('session');
    $this->config = config('Auth');
    $this->auth = service('authentication');
    }
    public function anggota()
    {
      // $anggota = $this->anggotaModel->findAll();
      $data = [
            'title' => 'Daftar',
            'anggota'=> $this->anggotaModel->getAnggota()
      ];
      // $anggotaModel = new \App\Models\AnggotaModel();
      return view('anggota/index', $data);
    }

    public function detail($slug)
    {
      $data = [
            'title' => 'Detail Komik',
            'anggota' => $this->anggotaModel->getAnggota($slug)
      ];

      // Jika anggota tidak ada di tabel
      if(empty($data['anggota'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Anggota ' . $slug . 'tidak ditemukan.');
      }

      return view('anggota/detail', $data);
    }

    public function create()
    {
      // session();
      $data = [
            'title' => 'Form Tambah Data Anggota',
            'validation' => \Config\Services::validation()
      ];
      return view('anggota/create', $data); 
    }

    public function save()
    {
      // validasi input
      if(!$this->validate([
            'nama'=>'required|is_unique[anggota.nama]',
            'no_anggota'=>'required',
            'hp'=>'required',
            'sampul'=> [
                  'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,imag/jpg,image/jpeg,image/png]',
                  'errors' => [
                        'max_size' => 'Gambarnya terlalu besar bosque',
                        'is_image' => 'filenya harus gambar ya cakep',
                        'mime_in' => 'lo ga pilih gambar bre...'
                  ]
            ]
      ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('err',$validation->listErrors());
            return redirect()->to('anggota/create')->withInput();
      }

      // ambil gambar
      $fileSampul = $this->request->getFile('sampul');
      // apakah tidak ada gambar yang diupload
      if($fileSampul->getError() == 4) {
            $namaSampul = 'default.png';
      } else {
            // pindahkan file ke folder gambar di ci
            $fileSampul->move('Asset/alumniCSSJS/gambar/Anggota');
            // ambil nama file
      $namaSampul = $fileSampul->getName();
      }
     

      
      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->anggotaModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'no_anggota' => $this->request->getVar('no_anggota'),
            'hp' => $this->request->getVar('hp'),
            'sampul' => $namaSampul
      ]);

      session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

      return redirect()->to('/anggota');
    }

    public function delete($id)
    {
        // Cari gambar berdasarkan id
        $anggota = $this->anggotaModel->find($id);

      //   cek jika file gambarnya default
      if($anggota['sampul'] != 'default.png') {
            $pathToImage = 'Asset/alumniCSSJS/gambar/Anggota/' . $anggota['sampul'];
            if (file_exists($pathToImage)) {
                unlink($pathToImage);
            }
      }
    
        // Hapus gambar
    
    
        // Hapus data anggota berdasarkan id
        $this->anggotaModel->where('id', $id)->delete();
    
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/anggota');
    }
    

    public function edit($slug)
    {
      $data = [
            'title' => 'Form Ubah Data Anggota',
            'validation' => \Config\Services::validation(),
            'anggota' => $this->anggotaModel->getAnggota($slug)
      ];
      return view('anggota/edit', $data); 
    }

    public function update($id)
    {
      // cek nama
      $anggotaLama = $this->anggotaModel->getAnggota($this->request->getVar('slug'));
      if($anggotaLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
      } else {
            $rule_nama = 'required|is_unique[anggota.nama]'; 
      }
      if(!$this->validate([
            'nama'=> $rule_nama,
            'no_anggota'=>'required',
            'hp'=>'required',
            'sampul'=> [
                  'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,imag/jpg,image/jpeg,image/png]',
                  'errors' => [
                        'max_size' => 'Gambarnya terlalu besar bosque',
                        'is_image' => 'filenya harus gambar ya cakep',
                        'mime_in' => 'lo ga pilih gambar bre...'
                  ]
            ]
      ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('err',$validation->listErrors());
            return redirect()->to('anggota/edit/' . $this->request->getVar('slug'))->withInput();
      }

      $fileSampul = $this->request->getFile('sampul');

      // cek gambar apakah tetap gambar lama
      if ($fileSampul->getError() == UPLOAD_ERR_NO_FILE) {
          $namaSampul = $this->request->getVar('sampulLama');
      } else {
          // generate nama
          $namaSampul = $fileSampul->getName();
          // pindahkan gambar
          $fileSampul->move(ROOTPATH . 'public/Asset/alumniCSSJS/gambar/Anggota/', $namaSampul);
          // hapus file lama
          if (!empty($this->request->getVar('sampulLama'))) {
              unlink(ROOTPATH . 'public/Asset/alumniCSSJS/gambar/Anggota/' . $this->request->getVar('sampulLama'));
          }
      }
      


      $slug = url_title($this->request->getVar('nama'), '-', true);
      $this->anggotaModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'no_anggota' => $this->request->getVar('no_anggota'),
            'hp' => $this->request->getVar('hp'),
            'sampul' => $namaSampul
      ]);

      session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

      return redirect()->to('/anggota');
    }

}
