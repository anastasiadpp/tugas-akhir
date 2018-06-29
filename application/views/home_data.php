<div class="modal fade" id="importantwordsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php if($cat == 'sentimental_word') echo 'Important Words'; else echo 'sentimental_word'; ?></h4>
      </div>
      <div class="modal-body">
        <p id="wordId" style="text-align : justify;"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1><b>Database Sentiment</b></h1>
				</div>
			</div>
		</div>
		<?php if($show_score) { ?>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<p style="font-size: 25px;">Result : <?php echo $sum['vsum']; if($sum['vsum'] == 0) echo ', Objective'; elseif($sum['vsum'] > 0) echo ', Positive'; elseif($sum['vsum'] < 0) echo ', Negative'; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-12">
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="table_data">
							<thead>
								<tr>
									<?= $thead; ?>
								</tr>
							</thead>
							<tbody>								
								<?php  
									// Perintah untuk menampilkan data
									$queri="Select * From sentimental_word" ;  //menampikan SEMUA data dari tabel

									$hasil=MySQL_query ($queri);    //fungsi untuk SQL

									// perintah untuk membaca dan mengambil data dalam bentuk array
									while ($data = mysql_fetch_array ($hasil)){
									$word_id = $data['word_id'];
									 echo "    
									        <tr>
									        <td>".$data['word']."</td>
									        <td>".$data['type']."</td>
									        <td>".$data['value']."</td>									
									        </tr> 
									        ";
									}
									?>
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
	
</div>
</div>
</div>