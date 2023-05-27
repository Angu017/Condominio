<h1>Medicos</h1>
<br>
<div class="cont-total">
		<?php

		$users = MedicData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="responsive-table table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Area</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td><?php if($user->category_id!=null){ echo $user->getCategory()->name; } ?></td>
				<td style="width:200px;">
				<a href="index.php?view=medichistory&id=<?php echo $user->id;?>"class="btn-funct"><span class="az-history"></span>  </a>
				<a href="index.php?view=editmedic&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-mode_edit"></span> </a>
				<a href="index.php?view=delmedic&id=<?php echo $user->id;?>" class="btn-funct"><span class="az-delete"></span></a>

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay medicos</p>";
		}


		?>

<?php 
	include 'new-medic.php'
?>

<!--BOTON RESERVACION-->
<div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red">
		<span class="az-menu6"></span>
	</a>
	<ul>
		<li><button class="btn-floating" data-toggle="modal" data-target=".bd-example-modal-lg" alt="Nuevo Paciente" title="Nuevo Paciente"><span class="az-user-plus"></span></button></li>
	</ul>
</div>

</div>
