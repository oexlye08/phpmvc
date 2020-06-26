<div class="container mt-5">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash();?>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">

        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModel">
                Tambah data
        </button>
    </div>

</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <form action="<?= BASEURL;?>mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" auto-complete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>

</div>
    <div class="row">
        <div class="col-lg-6">
         <h3>Daftar Mahasiswa</h3>

         <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item" aria-disabled="true"><?= $mhs['nama']?>

                <a href="<?= BASEURL;?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-pill badge-danger  float-right ml-1" onclick="return confirm ('yakin?');">Hapus</a>
                
                <a href="<?= BASEURL;?>mahasiswa/ubah/<?= $mhs['id']?>" class="badge badge-pill badge-success  float-right ml-1 tombolUbahData" data-toggle="modal" data-target="#formModel" data-id="<?= $mhs['id'];?>" >Ubah</a>

                <a href="<?= BASEURL;?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-pill badge-primary  float-right ml-1 ">Detail</a>
                </li>
                
            <?php  endforeach;?>  
        
        </ul>
            
               
            
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModel" tabindex="-1" role="dialog" aria-labelledby="judulModel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?= BASEURL;?>mahasiswa/tambah" method="post">
                <input type="hidden" id='id' name='id'>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Taknik Penerbangan">Teknik Penerbangan</option>
                        <option value="Taknik Kelautan">Teknik Kelautan</option>
                        <option value="Taknik Permesinan">Teknik Permesinan</option>
                        <option value="Taknik Informatika">Teknik Informatika</option>
                        <option value="Taknik Pertanahan">Teknik Pertanahan</option>
                    </select>
                </div>
      </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah data</button>
       </form>
      </div>
    </div>
  </div>
</div>