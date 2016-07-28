
	<div class="col-md-10">
	<h3>Users</h3>
		
		<table class="table table-bordered table-striped">
			<tr>
				<th>SN</th>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Is Verified</th>
			</tr>
			<?php for($i = 0; $i < count($users); $i++): ?>
				<tr>
				<?php foreach($users[$i] as $key => $value): ?>
					<?php if($key == "isverified" && $value == 0): ?>
						<td><a href="<?=base_url('admin/verify/'.$users[$i]['id'])?>" class="btn btn-primary">Verify</a></td>
					<?php else:?>
						<td><?=$value?></td>
				<?php endif?>
				<?php endforeach?>
				</tr>
			<?php endfor?>
		</table>
	</div>
</div>
</body>
