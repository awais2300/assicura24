<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div><?= $page_title?></div>
		</div>
		<?php if($param == 'distributor'){ ?>
		<div class="page-title-actions">
			<a class="btn btn-info btn-sm btn-shadow mr-3" href="<?= base_url()?>add_user"><i class="fa fa-plus"></i> Add User</a>
        </div>
    <? } ?>
	</div>
</div>
<div class="main-card mb-3 card">
	<div class="card-body">
		<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th>Sr.</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Email</th>
					<?php if($this->uri->segment(2) == 'customers'){ ?>
					<th>Total Orders</th>
					<?php } ?>
					<th>Status</th>
				
	<?php if($param == 'distributor'){ ?>
						<th>image</th>
				  	<?php } ?>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $key => $user){ ?>
				<tr>
					<td><?= $key+1;?></td>
					<td><?= $user['first_name'].' '.$user['last_name'];?></td>
					<td><?= $user['username'];?></td>
					<td><?= $user['email'];?></td>
					<?php if($this->uri->segment(2) == 'customers'){ ?><td>
					<?= $user['total_orders'];?></td>
					<?php } ?>
					<td><?= ucwords($user['status']);?></td>

					<?php if($user['role'] == 'distributor'){ ?>
					  <td><img src="<?php echo IMGURL?>uploads/user/<?php echo $user['image'];?>" style="height:100px; width:100px;" /></td>
					<? } ?>
					<td>
					<?php if($user['role'] == 'distributor'){ ?>
					<a href="<?= base_url()?>edit_user/<?= $user['id']?>">Edit</a>
					<?php } ?>
						<a href="<?= base_url()?>delete_user/<?= $user['id']?>">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>