<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Pegawai</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a style="font-size: 12px;" href="<?php echo base_url('pegawai/tambah_data_Pegawai'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Pegawai</a>
                                        
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 10px;">NO</th>
                                                <th style="text-align: center; font-size: 10px;">NO INDUK</th>
                                                <th style="text-align: center; font-size: 10px;">NAMA</th>
                                                <th style="text-align: center; font-size: 10px;">TEMPAT LAHIR</th>
                                                <th style="text-align: center; font-size: 10px;">TGL LAHIR</th>
                                                <th style="text-align: center; font-size: 10px;">JENIS KELAMIN</th>
                                                <th style="text-align: center; font-size: 10px;">ALAMAT</th>
                                                <th style="text-align: center; font-size: 10px;">AGAMA</th>
                                                <th style="text-align: center; font-size: 10px;">TELP</th>
                                                <th style="text-align: center; font-size: 10px;">KD JABATAN</th>
                                                <th style="text-align: center; font-size: 10px;">KD CABANG</th>
                                                <th style="text-align: center; font-size: 10px;">KD DEPART</th>
                                                <th style="text-align: center; font-size: 10px;">GAJI</th>
                                                <th style="text-align: center; font-size: 10px;">TGL MASUK</th>
                                                <th style="text-align: center; font-size: 10px;">TGL KELUAR</th>
            
                                                <th style="text-align: center; font-size: 10px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->nomor_induk; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->nama_pegawai; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->tempat_lahir; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->tanggal_lahir; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->jenis_kelamin; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->alamat; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->agama; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->nomor_telp; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->kode_jabatan; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->kode_cabang; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->kode_departemen; ?></td>
                                                <td style="text-align: center; font-size: 10px;">Rp <?= number_format( $r->gaji_pokok ,0,',','.')?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->tanggal_diangkat; ?></td>
                                                <td style="text-align: center; font-size: 10px;"><?php echo $r->tanggal_keluar; ?></td>
                                                <td   style="text-align: center; font-size: 10px;"><a href="<?php echo base_url('pegawai/edit/'.$r->nomor_induk); ?>"><i class="fa fa-pen" title="Edit Data Pegawai"></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data Pegawai')" href="<?php echo base_url('pegawai/hapus/'.$r->nomor_induk); ?>"><i class="fa fa-trash" title="Hapus Data Pegawai"></i></a>
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
