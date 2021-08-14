



<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Departemen</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('departemen/sv_Departemen/'); ?>
           
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Kode Departemen</label>
                  <input type="text" name="kode_departemen" class="form-control" maxlength="5" placeholder="kode Departemen..">
                </div>
              </div>
            </div>
             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="kelas" class="">Nama Departemen</label>
                  <input type="text" name="nama_departemen" class="form-control" placeholder="Nama Departemen..">
                </div>
              </div>
            </div>
             
            </div><br><br>
         
                
                <a href="<?php echo base_url('Departemen/index'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        