<!--//header-->
<?php if($this->session->flashdata('message')){?> 
    <div class="alert bg-green">  
<?php echo $this->session->flashdata('message')?> 
    </div><?php } ?>

<?php if($this->session->flashdata('error')){?> 
    <div class="alert bg-red">
<?php echo $this->session->flashdata('error')?> 
    </div><?php } ?>
<!-- page content -->
<section class="content">
        <div class="container-fluid">
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>Halaman Ganti Password</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                            <form action="<?php echo base_url(); ?>Setting/gantiPassword" enctype="multipart/form-data" method="post" class="validatedForm">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Password" type="password" id="password_pengguna" name="password_pengguna">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" placeholder="Ulangi Password" type="password" id="password_pengguna_confirm" name="password_pengguna_confirm">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="pull-right">
                                    <button type="submit" class="btn bg-deep-orange waves-effect">
                                        <i class="material-icons">save</i>
                                        <span style="color:#fff;">Simpan</span>
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>
<!-- /page content -->