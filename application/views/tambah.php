



<div class="app-main__outer">
    <div class="app-main__inner">
 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Pegawai</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('pegawai/sv_Pegawai/'); ?>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Kode Pegawai</label>
                  <input type="text" name="nomor_induk" class="form-control" placeholder="Nomor induk..." >
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Nama Pegawai</label>
                  <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama pegawai..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir..">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Tanggal Lahir</label>
                  <input type="text" name="tanggal_lahir" class="form-control" placeholder="YY/MM/DD.." >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" class="form-control" placeholder="L / P.." >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="alamat" >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Agama</label>
                  <input type="text" name="agama" class="form-control" placeholder="Agama.." >
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Nomor Telp</label>
                  <input type="text" name="nomor_telp" class="form-control" placeholder="Nomor Telp.." >
                </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="jabatan" class="">Jabatan</label>
                  <select name="kode_jabatan" class="form-control">
                    <option>-- PILIH JABATAN --</option>
                    <?php $datas =  $this->db->get('jabatan')->result(); ?>
                    <?php foreach ($datas as $rg): ?>
                      <option ><?php echo $rg->kode_jabatan;?> (<?= $rg->nama_jabatan; ?>)</option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="cabang" class="">Cabang</label>
                  <select name="kode_cabang" class="form-control">
                    <option>-- PILIH Cabang --</option>
                    <?php $datas =  $this->db->get('cabang')->result(); ?>
                    <?php foreach ($datas as $rg): ?>
                      <option ><?php echo $rg->kode_cabang;?> (<?= $rg->nama_cabang; ?>)</option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              
              <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="departemen" class="">Departemen</label>
                  <select name="kode_departemen" class="form-control">
                    <option>-- PILIH Departemen --</option>
                    <?php $datas =  $this->db->get('departemen')->result(); ?>
                    <?php foreach ($datas as $rg): ?>
                      <option ><?php echo $rg->kode_departemen;?> (<?= $rg->nama_departemen; ?>)</option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Gaji</label>
                  <input type="text" name="gaji_pokok" class="form-control" placeholder="Gaji.." >
                </div>
              </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Tanggal Masuk</label>
                  <input type="text" name="tanggal_diangkat" class="form-control" placeholder="YY-MM-DD.." >
                </div>
              </div>
            
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Tanggal Keluar</label>
                  <input type="text" name="tanggal_keluar" class="form-control" placeholder="YY-MM-DD.." >
                    </div>
                </div><br><br>
 
                  
                
                <a href="<?php echo base_url('Pegawai/index'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        