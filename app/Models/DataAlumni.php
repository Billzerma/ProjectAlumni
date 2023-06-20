<?php
namespace App\Models;
use CodeIgniter\Model;

class DataAlumni extends Model
{
    protected $table      = 'dataalumni';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama','alamat','phone','tahunlulus'];
    protected $useTimestamps = true;
   
}