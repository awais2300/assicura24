<?php $this->load->view('admin/common/header'); ?>
<!-- Datatables -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style>
	.dropbtn {
		background-color: #885ead;
		color: white;
		padding: 10px;
		font-size: 16px;
		border: none;
		cursor: pointer;
		width: 90px;
	}

	.dropbtn:hover,
	.dropbtn:focus {
		background-color: #885ead;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		overflow: auto;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 9999;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown a:hover {
		background-color: #ddd;
	}

	.show {
		display: block;
	}
</style>
<div class="container my-3" style="margin-bottom: 100px;">
    <div class="container">
    	<label style="color:#885ead;font-size:30px;float:left">User Requests</label>
    	<a style="float:right;background-color:#885ead;margin-right:65px" href="<?= base_url() ?>Admin" class="btn btn-primary" id="search" style="background-color:#885ead">Back to Home</a>
    </div>
    <div class="container">
	    <div class="row">
		<div id="table_div" style="padding:20px 80px 150px 80px" class="col-md-12">

			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Request No</th>
						<th>Isurance type</th>
						<th>Plate Number</th>
						<th>Status</th>
						<th>Date updated</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 0;
					foreach ($request_data as $data) { ?>
						<tr>
							<td><?php $count++;
								echo $count; ?></td>
							<td><?= $data['request_no'] ?></td>
							<td><?= $data['type_of_contract']; ?></td>
							<td><?= $data['Plate_no']; ?></td>
							<?php if (strtoupper($data['status']) == 'INACTIVE') { ?>
								<td><a style="width:145px" href="" class="btn btn-secondary"> <?= $data['status']; ?></a></td>
							<?php } else if (strtoupper($data['status']) == 'CONTRACT CLOSED') { ?>
								<td><a style="width:145px" href="" class="btn btn-danger"> <?= $data['status']; ?></a></td>
							<?php } else if (strtoupper($data['status']) == 'ISSUED') { ?>
								<td><a style="width:145px" href="" class="btn btn-success"> <?= $data['status']; ?></a></td>
							<?php } else if (strtoupper($data['status']) == 'QOUTE MANAGED') { ?>
								<td><a style="width:145px" href="" class="btn btn-secondary"> <?= $data['status']; ?></a></td>
							<?php } else if (strtoupper($data['status']) == 'TO BE MANAGED') { ?>
								<td><a style="width:145px" href="" class="btn btn-info"> <?= $data['status']; ?></a></td>
							<?php } else if (strtoupper($data['status']) == 'READY TO BUY') { ?>
								<td><a style="width:145px" href="" class="btn btn-primary"> <?= $data['status']; ?></a></td>
							<?php } else if ($data['status'] == 'Waiting Payment') { ?>
								<td><a style="width:145px;background-color:#ffa500" href="" class="btn btn-secondary"> <?= $data['status']; ?></a></td>
							<?php } else if ($data['status'] == 'Contract replacement') { ?>
								<td><a style="width:178px;background-color:#885ead" href="" class="btn btn-secondary"> <?= $data['status']; ?></a></td>
							<?php } ?>
							<td><?= date('M d,Y', strtotime($data['date_request'])); ?></td>

							<td>
								<div class="dropdown">
									<button onclick="myFunction(<?= $count ?>)" class="dropbtn">Actions</button>
									<div id="myDropdown<?= $count ?>" class="dropdown-content">
										<a href="<?= base_url(); ?>request_detail/<?= $data['request_no']; ?>">Manage Request</a>
										<?php if ($data['status'] != 'inactive') { ?>
											<a href="<?= base_url(); ?>suspend_contract/<?= $data['request_no']; ?>">Suspend</a>
										<?php } ?>
										<?php if ($data['status'] != 'close') { ?>
											<a href="<?= base_url(); ?>close_contract/<?= $data['request_no']; ?>">Closed</a>
										<?php } ?>
										<?php if ($data['status'] != 'Contract replacement') { ?>
											<a href="<?= base_url(); ?>replace_contract/<?= $data['request_no']; ?>">Replaced</a>
										<?php } ?>
									</div>
								</div>
								<!--<a class="btn btn-default" style="background-color:#885ead;color:white;font-weight:600" href="<?= base_url(); ?>request_detail/<?= $data['request_no']; ?>" >View Request </a>-->
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
	</div>
	<?php $this->load->view('userpanel/common/footer'); ?>
	<script>
		/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
		function myFunction(rowNumber) {
		    
		    var current_page = document.getElementsByClassName('paginate_button current');
		    var calculate_page_count = 0;
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			
			calculate_page_count = 10 * ((current_page[0].innerHTML)-1);
		
			
			for (i = 0 ; i < dropdowns.length; i++) {
				if (i != rowNumber - 1 - calculate_page_count) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				} else {
					document.getElementById("myDropdown" + rowNumber).classList.toggle("show");
				}
			}
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
	</script>
	<script>
		$(document).ready(function() {
			$('#datatable').DataTable();
		});
	</script>