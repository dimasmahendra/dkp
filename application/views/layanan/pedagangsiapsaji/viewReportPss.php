<?php 
	if (isset($report_modal)) {
		echo $report_modal;
	}
?>
<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Report Pedagang Siap Saji</h3>
		<div class="inner-sec">
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
								<td>
	                                <span class="label <?php echo $retVal = ($row['status'] == 'Tidak Tersertifikasi') ? "label-danger" : "label-success"; ?>
	                                    "><?php echo $row['status']; ?>
	                                </span>
	                            </td>
								<td>           
									<?php if(!empty($row['layanan_pss_detail_id'])) { ?>
										<a class="report-pss" href="#" data-toggle="modal" data-target="#reportPssModal" 
											data-id="<?php echo $row['id']; ?>"
											data-namalengkap="<?php echo $row['namalengkap']; ?>"
											data-alamatlengkap="<?php echo $row['alamatlengkap']; ?>"
											data-nomorhp="<?php echo $row['nomorhp']; ?>"
											data-namausaha="<?php echo $row['namausaha']; ?>"
											data-alamatusaha="<?php echo $row['alamatusaha']; ?>"
											data-status="<?php echo $row['status']; ?>"
											data-parameter="<?php echo $row['parameter']; ?>"
											data-hasil="<?php echo $row['hasil']; ?>"
											>
											Lihat Detail
										</a>
									<?php } else {
										echo "<span class='label label-danger'>Data Belum Di Verifikasi Oleh Admin</span>";
									}?>                    
								</td>
							</tr>
					<?php } ?>            
				</tbody>              
			</table>
		</div>
	</div>
</section>