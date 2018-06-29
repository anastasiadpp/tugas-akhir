<!-- start: PAGE -->
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- start: PAGE TITLE & BREADCRUMB -->
				<div class="page-header">
					<h1><b>Sentiment Analysis</b></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<?= form_open('textmining_comment/result'); ?>
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 form-group">
					<textarea name="text_input" class="textarea-test" placeholder="Input sentence here..." id="form-field-22" class="form-control"></textarea>
					<span class="help-block"><i class="icon-info-sign"></i> Use Indonesian Language!</span>
				</div>
				<div class="col-md-12 form-group">
					<button type="submit" name="submit" value="Test" class="btn btn-bricky btn-md">
						Test
					</button>
				</div>
			</div>
		</div>
		<?= form_close(); ?>

		<?php if($show_result) { ?>
			<div class="row">
				<div class="panel-body">
					<h4><?= 'SENTENCE : '.$string; ?></h4><BR/>
					<table class="table table-bordered">
						<thead>
				        	<tr>
				        	  <th>No.</th>
				        	  <th>String</th>
				        	  <th>Word Type</th>
				        	  <th>Value</th>
				        	</tr>
				      	</thead>
				      	<tbody>
				      		<?php $i = 0; foreach ($array_info as $data) { ?>
					        <tr class="<?php if($valued_index_array[$i] == 's') echo 'single-result'; elseif($valued_index_array[$i] == 'l') echo 'logic-result'; ?>">
					          	<td><?= $i+1; ?></td>
					          	<td><?= $data['word']; ?></td>
					          	<td><?= $data['type']; ?></td>
					          	<td><?= $data['value']; ?></td>
					        </tr>
					        <?php $i++; } ?>
					    </tbody>
				    </table>
				    <div class="well">
					    <h4>Result:</h4>
					    <h4>
					    <?php for($i = 0; $i < count($array_score); $i++) {
					    	if(count($array_score) == 1)
								echo $score;
							elseif($i != count($array_score)-1)
								echo $array_score[$i].' + ';
							else
								echo $array_score[$i].' = '.$score;
						} echo '</h4>'; if($score > 0) echo '<h4 class="text-info">Positive</h4>'; elseif($score < 0) echo '<h4 class="text-danger">Negative</h4>'; else echo '<h4 class="text-success">Objective</h4>'; ?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	
</div>
			<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
</div>