<!-- page content -->
<section class="content">
    <div class="container-fluid">
        <?php if($this->session->flashdata('message')){?> 
		    <div class="alert bg-green">  
		<?php echo $this->session->flashdata('message')?> 
		    </div><?php } ?>

		<?php if($this->session->flashdata('error')){?> 
		    <div class="alert bg-red">
		<?php echo $this->session->flashdata('error')?> 
		    </div><?php } ?>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Tupoksi DKP</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                    	<div class="row clearfix">
                    	<form id="#" method="POST" action="<?php echo base_url(); ?>TentangKami/simpantupoksidkp">
                    		<div class="col-sm-12">
                            	<label class="form-label">Input Tupoksi DKP *</label>
                            	<textarea class="form-control" rows="20" id="tupoksidkp" name="tupoksidkp"><?php echo $retVal = (isset($tupoksidkp)) ? $tupoksidkp : "" ; ?></textarea>
                        	</div>
                        	<div class="col-sm-12">
                            	<div class="pull-right">
                            		<button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
        							<button class="btn btn-success waves-effect" id="tombolReset" type="reset">RESET</button>
                            	</div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /page content -->