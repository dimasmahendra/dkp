<!-- page content -->
<section class="content">
    <!--//header-->
<?php if($this->session->flashdata('message')){?> 
    <div class="alert bg-green">  
<?php echo $this->session->flashdata('message')?> 
    </div><?php } ?>

<?php if($this->session->flashdata('error')){?> 
    <div class="alert bg-red">
<?php echo $this->session->flashdata('error')?> 
    </div><?php } ?>

<?php 
if (isset($pengisian_pss)) {
    echo $pengisian_pss;
}
?>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Daftar Pedagang Siap Saji</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <table id="tabelReportpss" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>                 
                                    <th>Nama Lengkap</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;            
                                foreach ($report as $row)
                                    { ?>
                                        <tr>
                                            <td><?php echo $no;$no++; ?></td>                                
                                            <td><?php echo $row['namalengkap']; ?></td>
                                            <td><?php echo $row['alamatlengkap']; ?></td>
                                            <td><h4>
                                                    <span class="label <?php echo $retVal = ($row['status'] == 'Tidak Tersertifikasi') ? "label-danger" : "label-success"; ?>
                                                    "><?php echo $row['status']; ?>
                                                    </span>
                                                </h4>
                                            </td>
                                            <td>                               
                                                <a class="input-pss" href="#" data-toggle="modal" data-target="#pengisianPssModal" 
                                                    data-id="<?php echo $row['id']; ?>"
                                                    data-status="<?php echo $row['status']; ?>"
                                                    data-parameter="<?php echo $row['parameter']; ?>"
                                                    data-hasil="<?php echo $row['hasil']; ?>"
                                                >
                                                Lihat Detail</a>
                                            </td>
                                        </tr>
                                    <?php } ?>            
                                </tbody>              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- /page content -->