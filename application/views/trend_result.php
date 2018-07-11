<?php if ($data) ?>
<div class="row">
				<div class="panel-body">
					<h1 style="width: 100%; text-align: center;"><b>SISTEM REKOMENDASI OBJEK WISATA JAWA TIMUR</b></h1>
					<h1 style="width: 100%; text-align: center;"><b>BERBASIS <i>TEMPORAL SENTIMENT ANALYSIS</i></b></h1>
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
				      		<?php $i = 0; foreach ($data as $datak) {?>
					        <tr>
					          	<td><?= $i+1; ?></td>					          	
					          	<td><?= $datak['venue']; ?></td>
					          	<td><?= $datak['positive']; ?></td>
					          	<td><?= $datak['negative']; ?></td>
					          	<td><?= $datak['netral']; ?></td>
					          	<td><?= $datak['score']; ?></td>
					          	<td><a href="komen/<?= $datak['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Komentar</button></a></td>
                                <td><a href="gambar/<?= $datak['venue_id']; ?>"><button name="submit" value="Test" class="btn btn-bricky btn-md">
                                    Lihat Gambar</button></a></td>
					        </tr>
					        <?php $i++; } ?>
					    </tbody>
				    </table>
				</br>
				    <div id="chart">
				    	<canvas id="chartku"></canvas>
				    </div>
				</div>
			</div>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
			<script type="text/javascript">
				var label = [<?php for ( $i = 0; $i < sizeof($data); $i++) {?>"<?= $data[$i]['venue'] ?>"<?php if($i != sizeof($data) - 1){ ?>,<?php } ?><?php } ?>]

				var datasets = [
					{
						label:"# of Score",
						data: [<?php for ( $j = 0; $j < sizeof($data); $j++) {?><?= $data[$j]['score'] ?><?php if($j != sizeof($data) - 1){ ?>,<?php } ?><?php } ?>	],
						backgroundColor: "rgba(142,68,173,0.2)",
						borderCOlor: "rgba(142,68,173,0.4)"
					}
				]

				var ctxGraf = document.getElementById("chartku").getContext('2d')
				var grafScore = new Chart(ctxGraf,{
					type: 'bar',
					options: {
						scales: {
				            xAxes: [{
						        ticks: {
						            stepSize: 1,
						            min: 0,
						            autoSkip: false
						        }
						    }]
				        }
				    }
				})

				function addData(chart,label, data){
					label.forEach(element => {
						chart.data.labels.push(element)
					})

					data.forEach(element => {
						chart.data.datasets.push(element)
					})
					chart.update()
				}

				function removeData(chart){
					chart.data.labels = []
					chart.data.datasets = []
					chart.update()
				}

				function createLineChart(label,datasets){
					removeData(grafScore)
					addData(grafScore,label,datasets)
				}

				createLineChart(label,datasets)
			</script>