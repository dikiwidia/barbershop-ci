<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<option value="">Jenis Pangkas ...</option>
<?php
	foreach($pangkas as $pangkass){
		echo '<option value="'.$pangkass['id_pangkas'].'">'.$pangkass['nama_pangkas'].'</option>';
	}
?>