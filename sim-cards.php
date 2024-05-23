<!DOCTYPE html>
<html lang="en">
      <?php
      include_once('common/head.php');
      // Example query
      $simQuery = "SELECT * FROM sim_companies";
      $simResult = mysqli_query($db, $simQuery);
      ?>
	<body>
            <?php include_once('common/global-loader.php'); ?>
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
							<a href="createexpense.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" class="me-2" alt="img">Add New Expense</a>
						</div>
					</div>
                              <div class="comp-sec-wrapper">
						<section class="comp-section">
							<div class="row">
								<div class="col-md-12">
									<div class="card bg-white">
										<div class="card-body">
                                                                  <?php
                                                                  if ($simResult) {
                                                                        // Fetching and displaying the data
                                                                        while ($row = mysqli_fetch_assoc($simResult)) {
                                                                              echo '<div class="sim-card">
                                                                              <img class="avatar-img" alt="User Image" src="assets/img/company-logos/'.$row['logo'].'">
                                                                              <h4 class="sim-name">'.$row['company'].'</h4>
                                                                        </div>';
                                                                        }
                                                                        // Free the result set
                                                                        mysqli_free_result($simResult);
                                                                        } else {
                                                                        echo "Error: " . mysqli_error($db);
                                                                        }
                                                                  
                                                                        // Close the connection
                                                                        mysqli_close($db);
                                                                  ?>
										</div>
									</div>
								</div>
                                          </div>
						</section>
                              </div>
				</div>
			</div>

		</div>
		<!-- /Main Wrapper -->
		
		<?php include_once('common/footer.php');?>
		
	</body>
</html>