<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Departemen</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a style="font-size: 12px;" href="<?php echo base_url('departemen/tambah_data_Departemen'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Departemen</a>
                                        
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">Kode Departemen</th>
                                                <th style="text-align: center; font-size: 12px;">Nama Departemen</th>
                                                <th style="text-align: center; font-size: 10px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kode_departemen; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nama_departemen; ?></td>
                                                <td   style="text-align: center; font-size: 10px;"><a href="<?php echo base_url('departemen/edit/'.$r->kode_departemen); ?>"><i class="fa fa-pen" title="Edit Data Cabang"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data Cabang')" href="<?php echo base_url('departemen/hapus/'.$r->kode_departemen); ?>"><i class="fa fa-trash" title="Hapus Data Departemen"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>

        </div>
        <!-- ahir row -->
        


                        
</div>

