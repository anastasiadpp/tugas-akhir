<?php if ($data) ?>
<div class="row">
				<div class="panel-body">
					<table class="table table-bordered" border="1">
						<thead>
				        	<tr>
				        	  <th>No.</th>
				        	  <th>Venue</th>
				        	  <th>Score</th>
				        	  <th></th>
				        	  <th></th>
				        	</tr>
				      	</thead>
				      	<tbody>
				      		<?php $i = 0; foreach ($data as $data) {?>
					        <tr>
					          	<td><?= $i+1; ?></td>					          	
					          	<td><?= $data['venue']; ?></td>
					          	<td><?= $data['Score']; ?></td>
					          	<td><a href="komen/<?= $data['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Komentar</button></a></td>
                                <td><a href="gambar/<?= $data['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Gambar</button></a></td>
					        </tr>
					        <?php $i++; } ?>
					    </tbody>
				    </table>
				</div>
			</div>