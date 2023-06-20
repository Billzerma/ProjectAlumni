
<?=$this->extend('Alumni/tamplate/header');?>

<?=$this->section('content');?>
<body>

<div class="iniform">
                <h5>INI AKAN JADI FORM</h5>
    </div>
    <div class="container tabel">
   
        <div class="card mt-3 w-75 ms-10">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>
           
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>phone</th>
                        <th>tanggal lulus</th>
                       
                    </tr>
                    <?php
                    foreach ($cari as $row) : ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td><?php echo $row->phone; ?></td>
                            <td><?php echo $row->tahunlulus; ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </table>
     
            </div>
        </div>
    </div>

    <?=$this->endSection('content');?> 