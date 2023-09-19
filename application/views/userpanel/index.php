<?php $this->load->view('userpanel/header');  ?>



<?php include('navbar.php'); ?>


<?php
unset($_SESSION['app_no']);
unset($_SESSION['edit']);
unset($_SESSION['business_app_no']);
unset($_SESSION['home_app_no']);
unset($_SESSION['insurance_app_no']);
unset($_SESSION['personal_app_no']);
unset($_SESSION['commercial_app_no']);

include('tables/applications_submitted.php');

?>

<?php include('footer.php'); ?>