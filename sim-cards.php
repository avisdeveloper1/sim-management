<!DOCTYPE html>
<html lang="en">
<?php
require_once 'common/head.php';
require 'helpers/simcard.php';
$simInteractions = new simInteractions();
$simCompanies = $simInteractions->getSimCompanies($db);
?>
<!-- Main Wrapper -->
<div class="main-wrapper">

	<!-- Header -->
	<?php include_once('common/header.php'); ?>
	<!-- Header -->

	<!-- Sidebar -->
	<?php include_once('common/sidebar.php'); ?>
	<!-- /Sidebar -->

	<div class="page-wrapper">
		<div class="content">
			<div class="page-header">
				<div class="page-title">
					<h4>SIM Cards</h4>
				</div>
				<div class="page-btn">
					<a href="createexpense.html" class="btn btn-added"><img src="assets/img/icons/plus.svg"
							class="me-2" alt="img">Add New Expense</a>
				</div>
			</div>
			<div class="row">
				<?php
				if (!$simCompanies['error']) {
					foreach ($simCompanies['data'] as $simCompany) {
						?>
						<div class="col-3 col-md-6 col-lg-3 d-flex">
							<div class="card flex-fill bg-white">
								<img alt="<?php echo $simCompany['company']; ?> Image"
									src="<?php echo 'assets/img/company-logos/' . $simCompany['logo']; ?>"
									class="card-img-top justify-content-center" style="width: 200px;">
								<div class="card-header">
									<h5 class="card-title mb-0"><?php echo $simCompany['company']; ?></h5>
								</div>
								<div class="card-body">
									<a class="btn btn-primary" href="javascript:void(0);">Edit</a>
								</div>
							</div>
						</div>
						<?php
					}
				} else {
					echo "Error: " . $simCompanies['message'];
				}
				?>
			</div>
		</div>
	</div>

</div>
<!-- /Main Wrapper -->

<?php include_once('common/footer.php'); ?>

</body>

</html>