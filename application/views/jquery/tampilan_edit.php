<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="box-body">
	<div class="form-group">
		<label for="n">Nama Pendaftar</label>
		<input type="text" value="<?php echo $n; ?>" name="n" maxlength="50" />
	</div>
	<input type="hidden" value="<?php echo $id; ?>" name="id" />
</div>