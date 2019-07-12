<?php 
require 'db.php';

 $sql = 'SELECT * FROM people';
 $statement = $pdo->prepare($sql);
 $statement->execute();

 $people = $statement->fetchAll(PDO::FETCH_OBJ);

?> 

<?php require_once('header.php') ?>

	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				<h2>All People</h2>
			</div>
			
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
					

				<?php foreach ($people as $person): ?>

					<tr>
						<td><?php echo $person->id ?></td>
						<td><?php echo $person->name ?></td>
						<td><?php echo $person->email ?></td>
						
						<td>
							
						<a href="edit.php?id= <?php echo $person->id ?>" class="btn btn-info">Edit</a>
						<a onclick="return confirm('Are you sure want to delete this data...?')" href="delete.php?id= <?php echo $person->id ?>" class="btn btn-danger">Delete</a>			

						</td>
					</tr>

				<?php endforeach; ?>
				

				</table>
			</div>

		</div>
	</div>
<?php require_once('footer.php') ?>

