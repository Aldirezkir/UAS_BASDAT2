



<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $d): ?>
  


 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Data Cabang</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('cabang/sav_Cabang/'.$d->kode_cabang); ?>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Kode Cabang</label>
                  <input type="text" name="kode_cabang" class="form-control" placeholder="Kode Cabang.." value="<?php echo $d->kode_cabang ?>">
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Nama Pegawai</label>
                  <input type="text" name="nama_cabang" class="form-control" placeholder="Nama Cabang.." value="<?php echo $d->nama_cabang ?>">
                </div>
              </div>
            </div>
            
                </div><br><br>
 
              
                <a href="<?php echo base_url('cabang'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                
<?php endforeach ?>


              </div>
            </div>
          </div>
        