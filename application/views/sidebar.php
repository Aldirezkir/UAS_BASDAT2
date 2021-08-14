

<!-- <?php //echo $this->uri->segment(1) == 'Laporan/Pembayaran' || $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?> -->

  <div class="app-sidebar sidebar-shadow bg-primary sidebar-text-light">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                
                                <li class="app-sidebar__heading ">Menu</li>
                               
                                 
                               
                                <li>
                                    <a style="font-size: 13px;" href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        DATA MASTER
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li >
                                            <a style="font-size: 13px;" href="<?php echo base_url('pegawai/index'); ?>" >
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                Data Pegawai
                                            </a>
                                        </li>
                                        

                                
                                <li  >
                                    <a href="<?php echo base_url('cabang/index'); ?>">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Data Cabang
                                    </a>
                                </li>


                                <li  >
                                    <a href="<?php echo base_url('jabatan/index'); ?>">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Data Jabatan
                                    </a>
                                </li>

                                <li  >
                                    <a href="<?php echo base_url('departemen/index'); ?>">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Data Departemen
                                    </a>
                                </li>
                              
                               
                            </ul>
                        </div>
                    </div>
                </div>