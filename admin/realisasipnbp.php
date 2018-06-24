<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-table'></i>
								<a href='#'>Data Santri</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Data Santri</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<form class="form-horizontal" role="form" action="" method="post">
												<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Kelas </label>
															<div class="col-sm-6">	
															<select name="kelas" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<?php
																$tt=mysql_query("select * from kelas");
																while($dd=mysql_fetch_array($tt))
																{
																echo "<option value=$dd[id_kelas]>$dd[nama_kelas]</option>";
																}
																?>
															</select>
															</div>
														</div>
												<div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-9">
											<input type="submit" class="btn btn" name="lihat" value="Lihat Data Santri">
												
										</div>
									</div>
								</form>		
												<?php 
												if(ISSET($_POST['lihat'])){
												$xx=$_POST['kelas'];
												$bb=mysql_query("select * from kelas where id_kelas='$xx'");
												$mm=mysql_fetch_array($bb);
												$gg=$mm['nama_kelas'];
												
												echo "<strong>Data Kelas $gg</strong>";
												}
												?>				
												
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												if(ISSET($_POST['lihat'])){
												$kl=$_POST['kelas'];
												$sql=mysql_query("select * from data_siswa where id_kelas='$kl'");
												?>
											<thead>
												<tr>
													<th>NIS</th>
													<th>Nama Lengkap</th>
													<th>Alamat</th>
													<th>Tempat Lahir, Tgl Lahir</th>
													<th>Jenis Kelamin</th>
													<th>No Telpon</th>
													<th>Foto</th>
												</tr>
											</thead>
											<?php
											while($data=mysql_fetch_array($sql))
											{
											?>
											<tbody>
												<tr>
													<td><?php echo $data['nis'];?></td>
													<td><?php echo $data['nama_lengkap'];?></td>
													<td><?php echo $data['alamat'];?></td>
													<td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tgl_lahir'];?></td>
													<td><?php echo $data['jenis_kelamin'];?></td>
													<td><?php echo $data['no_telpon'];?></td>
													<td><img src="images/<?php echo $data['foto'];?>" width="50" height="50"></td>
													</tr>
											</tbody>
											<?php
											}
											}
											?>
										</table>

													
												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>