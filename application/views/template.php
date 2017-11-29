<?php
if (isset($this->session->userdata['logged_in'])) {
	$username	= ($this->session->userdata['logged_in']['username']);
	$password	= ($this->session->userdata['logged_in']['password']);
} else {
	redirect('/administrator/');
}
?>
<?php echo $_header; ?>
<?php echo $_sidebar; ?>
<?php echo $_content; ?>
<?php echo $_footer; ?>