<?php if ($positive || $negative || $netral) ?>
<div class="row">
				<div class="panel-body">
					<table class="table table-bordered" border="1">
						<thead>
				        	<tr>
				        	  <th>Positif</th>
				        	  <th>Negatif</th>
				        	  <th>Netral</th>
				        	</tr>
				      	</thead>
				      	<tbody>
				      		<?php for($i = 0; $i < $max; $i++) { ?>
				      		  	<tr>
				      		  		<td>
				      		  			<?php if (count($positive) > $i) echo $positive[$i]['comment']; ?>
				      		  		</td>
				      		  		<td>
				      		  			<?php if (count($negative) > $i) echo $negative[$i]['comment']; ?>
				      		  		</td>
				      		  		<td>
				      		  			<?php if (count($netral) > $i) echo $netral[$i]['comment']; ?>
				      		  		</td>
				      		  	</tr>
				      		<?php } ?>
					    </tbody>
				    </table>
				</div>
			</div>