	<div class="col-md-10">
	<h3>Manpowers</h3>
	<?=$this->session->flashdata('message') != NULL ?  '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>' : '';?>
		
		<table class="table table-bordered table-striped">
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Website</th>
				<th>Phone</th>
				<th>Description</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
			<?php for($i = 0; $i < count($manpower); $i++): ?>
				<tr>
				<?php foreach($manpower[$i] as $key => $value): ?>
					<?php if($key == 'action'): ?>
						<td><a href="<?=base_url('admin/removemanpower/'.$value);?>" class="btn btn-primary">Remove</a></td>
					<?php else: ?>
						<td><?=$value?></td>
					<?php endif?>
				<?php endforeach?>
					
				</tr>
			<?php endfor?>
		</table>
	</div>
</div>
</body>
