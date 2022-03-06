		<?php $this->load->view('userpanel/common/UserHeader'); ?>
		<div class="container my-4">
			<h5>Welcome! <?= $user_data['name']; ?> <?= $user_data['surname'] ?></h5>

			<div  style="width:100%;padding:10px;margin:auto;text-align:center">
				<a class="btn btn-primary" href="<?= base_url(); ?>Home" style="background-color:#885ead; width:600px;color:white" id="newOffer"><b>Click here for new Offer XYZ!</b></a>
			</div>

			<div id="table_div" style="padding:60px;height:400px">

				<table id="datatable" class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Request No</th>
							<th scope="col">Isurance type</th>
							<th scope="col">Plate Number</th>
							<th scope="col">Status</th>
							<th scope="col">Date updated</th>
							<th scope="col">Actions</th>

						</tr>
					</thead>
					<tbody>
						<?php $count = 0;
						foreach ($request_data as $data) { ?>
							<tr>
								<td scope="row"><?php $count++;
												echo $count; ?></td>
								<td scope="row"><?= $data['request_no'] ?></td>
								<td scope="row"><?= $data['type_of_contract']; ?></td>
								<td scope="row"><?= $data['Plate_no']; ?></td>
								<td scope="row"><?= $data['status']; ?></td>
								<td scope="row"><?= date('M d,Y', strtotime($data['date_request'])); ?></td>
								<td scope="row">
									<a class="btn btn-default" style="background-color:#885ead;color:white;font-weight:600" href="<?= base_url(); ?>User_Login/dashboard/<?= $data['request_no']; ?>" id="contractView<?php echo $count ?>">View Details</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			
			<div class="container" style="text-align:center">For any problem encounter while browsing, kindly send an email to <a href='#'>support@assicura24.it</a></div>
		</div>
		<?php $this->load->view('userpanel/common/footer'); ?>
		<script>
			let btnOffer = document.getElementById('newOffer');
			btnOffer.addEventListener("mouseover", function() {
				btnOffer.style.backgroundColor = `rgb(120, 79, 143)`;
			});
			btnOffer.addEventListener("mouseleave", function() {
				btnOffer.style.backgroundColor = `rgb(136, 94, 173)`;
			});

			let rowsCount = document.getElementById("datatable").rows.length;

			for (let index = 1; index <= rowsCount; index++) {
				let btn = document.getElementById('contractView' + index.toString());
				btn.addEventListener("mouseover", function() {
					btn.style.backgroundColor = `rgb(120, 79, 143)`;
				});
				btn.addEventListener("mouseleave", function() {
					btn.style.backgroundColor = `rgb(136, 94, 173)`;
				});

			}
		</script>