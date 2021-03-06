<!-- Modal -->
<div class="modal fade" id="edit_simpanan_sukarela_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-plus-square"></i> Edit Simpanan Wajib</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
			<form role="form" action="{{ route('update.simpanan_sukarela') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body" id="edit_simpananSukarela">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode</label>
				  		<div class="col-lg-9">
							<input name="kode_member" id="kode_member"  class="form-control" type="text" value="" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
							<input id="nama" name="nama" class="form-control" type="text" value="" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Jenis Simpanan</label>
						<div class="col-lg-9">
							<input id="jenis" name="simpanan" class="form-control" type="text" value="Simpanan Wajib" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Tanggal Update</label>
						<div class="col-lg-9">
							<input id="tanggalUpdate" name="tanggal" class="form-control" type="text" value="" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nominal</label>
						<div class="col-lg-9">
							<input id="nominal" name="nominal" class="form-control" type="text" value="">
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<input type="submit" class="button btn btn-primary" value="Simpan">
				</div>
			</form>
	 	</div>
  	</div>
</div>