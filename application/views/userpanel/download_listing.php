		<?php $this->load->view('userpanel/common/UserHeader'); ?>
		<div class="container my-4">
			<h5>Welcome! <?= $user_data['name']; ?> <?= $user_data['surname'] ?></h5>

			Select the offer/contract from below table, you want to downlaod. Thanks.

			<div id="table_div" style="padding:60px">

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

								<?php if (strtoupper($data['status']) == 'TO BE MANAGED') {
									$buyStatus = 'disabled';
								} else {
									$buyStatus = 'enabled';
								}
								?>

								<td scope="row">
									<button class="btn btn-default" type="submit" style="background-color:#885ead;color:white;font-weight:600" onClick="window.location.href='<?= base_url(); ?>download/<?= $data['request_no']; ?>';return false;" id="showPDF<?php echo $count ?>" <?php echo $buyStatus ?> >Show PDF</button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php $this->load->view('userpanel/common/footer'); ?>
		<script>
			let rowsCount = document.getElementById("datatable").rows.length;

			for (let index = 1; index <= rowsCount; index++) {
				let btn = document.getElementById('showPDF' + index.toString());
				btn.addEventListener("mouseover", function() {
					btn.style.backgroundColor = `rgb(120, 79, 143)`;
				});
				btn.addEventListener("mouseleave", function() {
					btn.style.backgroundColor = `rgb(136, 94, 173)`;
				});

			}
		</script>