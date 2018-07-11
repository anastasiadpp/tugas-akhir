<?php if ($data) ?>
<div class="row">
				<div class="panel-body">
					<h1 style="width: 100%; text-align: center;"><b>SISTEM REKOMENDASI OBJEK WISATA JAWA TIMUR</b></h1>
					<h1 style="width: 100%; text-align: center;"><b>BERBASIS TEMPORAL SENTIMENT ANALYSIS</b></h1>
					<table class="table table-bordered" border="1" align="center">
						<thead>
				        	<tr>
				        	  <th>No.</th>
				        	  <th>Venue</th>
				        	  <th>Positif</th>
				        	  <th>Negatif</th>
				        	  <th>Netral</th>
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
					          	<td><?= $data['positive']; ?></td>
					          	<td><?= $data['negative']; ?></td>
					          	<td><?= $data['netral']; ?></td>
					          	<td><?= $data['score']; ?></td>
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