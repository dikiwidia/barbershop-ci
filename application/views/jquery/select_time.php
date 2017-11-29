<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<option value="">Pilih Waktu ...</option>
<?php
	foreach($waktu as $waktus){
		echo "<option>".$waktus['nama_waktu']."</option>";
	}
?>