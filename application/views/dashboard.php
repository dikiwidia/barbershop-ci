<div class="row">
	<div class="col-sm-12">
		<table id="register" class="table table-bordered table-hover">
			<thead>
				<tr class="info">
					<th>Nama Register</th>
					<th>Tanggal Booking</th>
					<th>Waktu Booking</th>
					<th>Pangkas</th>
					<th>Harga (Rp)</th>
					<th>Status Bayar</th>
					<th>Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($register as $data){
						if($data['status'] == "N"){$label = "label-danger";}
						else {$label = "label-success";}
						echo "<tr>";
						echo "<td>".$data['nama_register']."</td>";
						echo "<td>".func_tanggal($data['date_register'])."</td>";
						echo "<td>".$data['time_register']."</td>";
						echo "<td>".get_pangkas($data['id_pangkas'])."</td>";
						echo "<td>".buatrp(get_harga($data['id_pangkas']))."</td>";
						echo "<td><span class='label $label'>".get_status($data['status'])."</span></td>";
						echo "<td><div class='btn-group' role='group' aria-label='...'>";
						if($data['status']=="N"){
							echo "<a href='".base_url()."administrator/payment/".$data['id_register']."' class='btn btn-sm btn-primary'>Bayar</a>";
						} else {
							echo "<a href='".base_url()."administrator/cancel/".$data['id_register']."' class='btn btn-sm btn-info'>Batalkan</a>";
						}
						echo "
						<button type='button' id='edit' data-id='".$data['id_register']."' class='btn btn-sm btn-warning'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Edit</button>
						<button type='button' id='hapus' data-id='".$data['id_register']."' class='btn btn-sm btn-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button></div></td></tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="ModalEd" tabindex="-1" role="dialog" aria-labelledby="ModalEdLabel" aria-hidden="true">
    <div class="modal-dialog">
		<?php echo form_open('administrator/edited') ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="ModalEdLabel">Sunting ... !</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </div>
		<?php echo form_close(); ?>
    </div>
</div>
<!-- Modal Delete-->
<div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="ModalDelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="ModalDelLabel">Pesan ... !</h4>
            </div>
            <div class="modal-body">
				<p align="center">Anda yakin ingin menghapus pendaftar ini ?</p>
				<input type="hidden" class='value' />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="hapus btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('click','#edit',function(e){
	e.preventDefault();
	$('#ModalEd').modal('show');
	$.post('jquery/tampilkan_edit',{
		a:$(this).attr('data-id')
	},function(html){
		$('.modal-body').html(html);
	});
});
$(document).on('click','#hapus',function(e){
	e.preventDefault();
	$('#ModalDel').modal('show');
	$('.value').val($(this).attr('data-id'));
});
$(document).on('click','.hapus',function(e){
	e.preventDefault();
	$('#ModalDel').modal('hide');
	id = $('.value').val();
	$.post('jquery/hapus',{
		a:id
	},function(){location.reload();});
});
$(function (){
	$('#register').DataTable({
	"paging": true,
	"pageLength": 10,
	"lengthChange": false,
	"searching": false,
	"ordering": false,
	"info": false,
	"autoWidth": false
	});
});
</script>