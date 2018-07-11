<!-- start: PAGE -->
<div class="main-content">
	<div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h3><b><i>Sistem Rekomendasi Objek Wisata Jawa Timur Berbasis Temporal Sentiment Analysis</i></b></h3>
                </div>
            </div> 
    </div>
        <?= form_open('research/trend_result'); ?>
		<div class="row" style="margin-bottom: -40px;">
            <div class="panel-body">
                <div class="col-md-7">
                    <div class="panel panel-default">                                              
                            <div class="flot-xsmall-container">                                            
                                <div class="form-horizontal">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="margin-top: 5px;">
                                            KATEGORI
                                        </label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline">
                                                <input name="radioSentiment" type="radio" id="radioSentiment1" value="1"> Alam
                                            </label>
                                            <label class="radio-inline">
                                                <input name="radioSentiment" type="radio" id="radioSentiment2" value="2"> Buatan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1">
                                            JUMLAH
                                        </label>                                                                                
                                                <div class="col-md-5">  
                                                    <select name="table_data_length" aria-controls="table_data" class=""><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option></select> Rekomendasi
                                                </div>                                                                      
                                    </div>                            
                                </br>
                                <div class="form-horizontal">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="margin-top: 5px;">
                                            KOMENTAR
                                        </label>
                                        <div class="col-sm-4">
                                                    <label class="control-label" style="padding-top: 3px">
                                                        Dari Tanggal
                                                    </label>
                                                    <div class="input-group" style="width: 150px;">
                                                        <input name="interval_date_from" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                        <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                    </div>
                                                </div>                                                
                                                    <label class="control-label" style="padding-top: 3px">
                                                        Sampai Tanggal
                                                    </label>
                                                    <div class="input-group" style="width: 150px;">
                                                        <input name="interval_date_until" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                        <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                    </div>
                                                    </br>                                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="panel-body">
                                            <button type="submit" name="submit" value="Test" class="btn btn-bricky btn-md">
                                               LIHAT REKOMENDASI
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>                    
                </div>
            </div>            
        </div>
        <?= form_close(); ?>
        
        </div>
	</div>
	
</div>
			
</div>

</div>