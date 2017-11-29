<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	if(isset($price)) {
		echo "Harga : ".buatrp($price);
	} else {
		echo "Harga : Rp 0,00";
	}
?>