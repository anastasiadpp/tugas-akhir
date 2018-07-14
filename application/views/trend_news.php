<!-- start: PAGE -->
<div class="main-content">
	<div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2 style="width: 100%; text-align: center;"><b>SISTEM REKOMENDASI OBJEK WISATA JAWA TIMUR</b></h2>
                    <h2 style="width: 100%; text-align: center;"><b>BERBASIS <i>TEMPORAL SENTIMENT ANALYSIS</i></b></h2>
                </div>
            </div> 
    </div>
        <?= form_open('research/trend_result'); ?>
		<div class="row" style="margin-bottom: -40px;">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="panel panel-default" style="margin-left: 15%;margin-right: 15%;">                                              
                            <div class="flot-xsmall-container">           
                                <div class="form-horizontal">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="width : 20%; text-align: center; margin-right: 2%;margin-left: 18.5%;">
                                            <h4><b>KATEGORI</b></h4>
                                        </label>
                                            <label class="radio-inline">
                                                <input name="radioSentiment" type="radio" id="radioSentiment1" value="1" style="text-align: center;"> <b>Alam</b>
                                            </label>
                                            <label class="radio-inline">
                                                <input name="radioSentiment" type="radio" id="radioSentiment2" value="2"> <b>Buatan</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="width : 72%; text-align: center; margin-right: -25%;margin-left: -8.7%;">
                                            <h4 style="margin-top: 1px;">
                                                <b>JUMLAH</b>
                                            </h4>
                                        </label>                                                                                
                                                <div class="col-md-5" style="margin-left: 0%;">  
                                                    <select name="table_data_length" aria-controls="table_data" class=""><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option></select> <b>Rekomendasi</b>
                                                </div>                                                                      
                                    </div>                            
                                </br>
                                <div class="form-horizontal">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="width : 72%; text-align: center; margin-right: -12.5%;margin-left: -46.5%;margin-top: 15px;">
                                            <h4 style="margin-top: -7px;"><b>KOMENTAR</b></h4>
                                        </label>

                                        <div style="margin-left: -10%;">
                                            <label class="radio-inline">
                                                <p style="margin-left: -70%;"><b>Dari Tanggal</b></p>
                                            <div class="input-group" style="width: 150px;margin-left: -70%;">
                                                <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                <input name="interval_date_from" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                            </div>
                                            </label>
                                            <label class="radio-inline">
                                                <p style="margin-left: -83%;"><b>Sampai Tanggal</b></p>
                                                <div class="input-group" style="width: 150px;margin-left: -83%;">
                                                    <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                    <input name="interval_date_until" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                </div>
                                            </label>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-9">
                                        <div class="panel-body" style="margin-left: 40%;">
                                            <button type="submit" name="submit" value="Test" class="btn btn-bricky btn-md">
                                               <b>LIHAT REKOMENDASI</b>
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