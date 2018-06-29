<!-- start: PAGE -->
<div class="main-content">
	<div class="container">
		<!-- start: PAGE HEADER -->
		<div class="row">
			<div class="col-sm-12">
				<!-- start: PAGE TITLE & BREADCRUMB -->
				<div class="page-header">
					<h1><b>Text Mining</b></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<!-- end: PAGE HEADER -->
		<?= form_open('textmining_document/test_textmining'); ?>
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<textarea name="text_input" class="textarea-test" placeholder="Input sentence here..." id="form-field-22" class="form-control"></textarea>
					<span class="help-block"><i class="icon-info-sign"></i> Use Indonesian Language!</span>
				</div>
				<div class="col-md-12">
					<label class="checkbox-inline">
						<input name="checkboxComment" type="checkbox" value="1"> This is comment sentence
					</label>
				</div>
				<div class="col-md-12">
					<button type="submit" name="submit" value="Test" class="btn btn-bricky btn-md">
						Test
					</button>
				</div>
			</div>
		</div>
		<?= form_close(); if($get_result == 1) { ?>
		<div class="row" style="margin-bottom: -30px;">
			<div class="panel-body">
				<div class="col-md-12">
					<p class="textmining-text"><?='SENTENCE : '. $text; ?></p>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: -30px; margin-top: -30px;">
			<div class="panel-body">
				<div class="col-md-12">
					<p class="textmining-text" style="text-align: center;">KEYWORDS</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="panel-body">
						<?php foreach($result as $res) { ?>
							<div class="col-xs-2 textmining-table textmining-result"><?= $res; ?></div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: -30px; margin-top: -30px;">
			<div class="panel-body">
				<div class="col-md-12">
					<p class="textmining-text" style="text-align: center;">STOPLIST</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="panel-body">
						<?php if(!is_null($stoplist)) { foreach($stoplist as $res) { ?>
							<div class="col-xs-2 textmining-table textmining-result"><?= $res; ?></div>
						<?php } } else echo 'Empty'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: -30px; margin-top: -30px;">
			<div class="panel-body">
				<div class="col-md-12">
					<p class="textmining-text" style="text-align: center;">STEMMING</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="panel-body">
						<?php if(!is_null($imbuhan)) { foreach($imbuhan as $res) { ?>
							<div class="col-xs-3 textmining-table textmining-result"><?= $res; ?></div>
						<?php } } else echo 'Empty'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if($this->session->userdata('behaviour') == 'comment') { ?>
		<div class="row" style="margin-bottom: -30px; margin-top: -30px;">
			<div class="panel-body">
				<div class="col-md-12">
					<p class="textmining-text" style="text-align: center;">KATA TIDAK BAKU</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="panel-body">
						<?php if(!is_null($tidakBaku)) { foreach($tidakBaku as $res) { ?>
							<div class="col-xs-4 textmining-table textmining-result"><?= $res; ?></div>
						<?php } } else echo 'Empty'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php }} ?>
	</div>
	
</div>
			<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
</div>