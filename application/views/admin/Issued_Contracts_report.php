<?php $this->load->view('admin/common/header'); ?>
<style>
	* {
		font-family: Arial, Helvetica, sans-serif;
	}

	/* Dropdown Button */
	.dropbtn {
		background-color: #885ead;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		position: relative;
		display: inline-block;
	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	/* Links inside the dropdown */
	.dropdown-content a {
		color: black;
		padding: 10px 14px;
		text-decoration: none;
		display: block;
	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {
		background-color: #ddd;
	}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
		display: block;
	}

	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {
		background-color: #885ead;
		;
	}
</style>
<div class="container my-3">

	<label style="color:#885ead;font-size:30px">Issued Contract Monthly Report</label>

	<div id="table_div" style="padding:20px 80px 90px 80px">

	<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Month</th>
							<th>Year</th>
							<th>Total Contrats Issued</th>
						</tr>
					</thead>
					<tbody>
						<?php $count = 0;
						foreach ($report_data as $data) { ?>
							<tr>
								<td><?php $count++;
									echo $count; ?></td>
								<td><?= $data['Month']; ?></td>
								<td><?= $data['Year']; ?></td>
								<td><?= $data['Total_Contracts'] ?></td>
								
							</tr>
						<?php } ?>
					</tbody>
				</table>

				<a href="<?= base_url() ?>Admin" class="btn btn-primary" id="search" style="background-color:#885ead">Back to Home</a>

	</div>



</div>
<?php $this->load->view('userpanel/common/footer'); ?>
