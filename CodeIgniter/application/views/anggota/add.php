<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Tambah Anggota</h3>
				</div>
				<!-- box header -->
				<div class="box-body">
					<form action="<?=site_url('anggota/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
							<div class="form-group">
								<label>Nama Anggota</label>
								<input type="text" name="nama anggota" class="form-control" value=""
								placeholder="Masukan Nama Anggota" required="required">
							</div>
							<div class="form-group">
								<label>Gender</label>
								
								<input type="text" name="gender" class="form-control" value="" placeholder="Masukan Gender" required="required">

							</div>
							<div class="form-group">
								<label>No telepon</label>
								<input type="number" name="no_telp" class="form-control" value="" min="0">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="" placeholder="Masukan Alamat" required="required" >
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Email</label>
								<input type="text" name="email" class="form-control" id="exampleinputtext1" placeholder="Masukan Email" value="" required="">
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Password</label>
								<input type="text" name="password" class="form-control" id="exampleinputtext1" placeholder="Masukan Password" value="" required="">
							</div>
							
							</div>
						</div>
						<<!-- box body -->
						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i>Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i>Tambah </button>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>