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

	<label style="color:#885ead;font-size:30px">Search User Requests</label>


	<div class="card" style="width:100%">

		<div class="card-body">
			<h5 class="card-title">Search Criteria</h5>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<label style="font-size:14px">Request No:</label>
					<input type="text" class="form-control" value="" id="reqNo" name="reqNo">
				</div>

				<div class="form-group col-md-6">
					<label style="font-size:14px">Plate No:</label>
					<input type="text" class="form-control" id="plateNo" value="" name="plateNo">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<label style="font-size:14px">Status:</label>
					<select class="form-control select2 " name="status" id="status" data-placeholder="Select Status" style="width: 100%;">\
						<option value="">Choose status </option>
						<option value="To be managed"> To be managed </option>
						<option value="Qoute Managed"> Qoute Managed </option>
						<option value="Waiting Payment"> Waiting Payment </option>
						<option value="Issued"> Issued </option>
						<option value="Inactive"> Inactive </option>
						<option value="Contract Closed"> Contract closed </option>
						<option value="Contract Replacement"> Contract replacement</option>

					</select>
				</div>

			</div>
			<a href="#" class="btn btn-primary" id="search" style="background-color:#885ead">Search</a>
			<a href="#" class="btn btn-primary" id="reset" style="background-color:#885ead">Reset</a>
			<a href="<?= base_url() ?>Admin" class="btn btn-primary" id="search" style="background-color:#885ead">Back to Home</a>
		</div>
	</div>



	<div id="table_div" style="padding:20px 80px 90px 80px">

		<Table id="datatable" class="table table-striped table-bordered">
		</Table>

	</div>



</div>
<?php $this->load->view('userpanel/common/footer'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
	$('#reset').on('click', function() {

	$('#reqNo').val('');
	$('#plateNo').val('');
	$('#status').val('');
	$('#datatable').html('');
			
	});


	$('#search').on('click', function() {

		let reqNo = $('#reqNo').val();
		let plateNo = $('#plateNo').val();
		let status = $('#status').val();
		let count = 0;
		let headerHTML = `
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
			</thead>`;

		$.ajax({
			url: '<?= base_url(); ?>Admin/search_requests',
			method: 'POST',
			data: {
				'request_no': reqNo,
				'plate_no': plateNo,
				'status': status
			},
			success: function(data) {

				var result = jQuery.parseJSON(data);
				// alert(toarray.result);
				$('#datatable').html(headerHTML);

				var output;

				$.each(result, function(i, e) {
					// here you structured the code depend on the table of yours
					count++;
					output += '<tbody id="tablerow' + count + '"><tr><td>' + count + '</td><td id="request_no">' + e.request_no + '</td><td>' + e.type_of_contract + '</td><td>' + e.Plate_no + '</td><td>' + e.status + '</td><td>' + e.date_request + '</td><td><div class="dropdown"><button type="submit" class="dropbtn" href="#" onclick="RedirectRequest(' + e.request_no + ')" id="submitbutton' + count + '">Open Request</button></div></td></tr></tbody>';
				});

				// after finish creating html structure, append the output
				// into the table
				$('#datatable').append(output);



			},
			error: function(data) {
				alert('failure');
			}
		});

	});


	function RedirectRequest(number) {
		$(window).attr("location", "<?= base_url(); ?>request_detail/" + number);
	}
</script>