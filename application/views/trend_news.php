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
                                                <input name="radioSentiment" type="radio" id="radioSentiment1" value="1" style="text-align: center;"> Alam
                                            </label>
                                            <label class="radio-inline">
                                                <input name="radioSentiment" type="radio" id="radioSentiment2" value="2"> Buatan
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
                                                <div class="col-md-5" style="margin-left: -1%;">  
                                                    <select name="table_data_length" aria-controls="table_data" class=""><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="30">30</option></select> Rekomendasi
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
                                                <p style="margin-left: -77%;">Dari Tanggal</p>
                                            <div class="input-group" style="width: 150px;margin-left: -78%;">
                                                <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                <input name="interval_date_from" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                            </div>
                                            </label>
                                            <label class="radio-inline">
                                                <p style="margin-left: -83%;">Sampai Tanggal</p>
                                                <div class="input-group" style="width: 150px;margin-left: -83%;">
                                                    <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                    <input name="interval_date_until" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group" style="margin-bottom: 0px;">
                                        <label class="col-sm-2 control-label label-form" for="form-field-1" style="width : 75%; margin-right:-24.5%; text-align: center;">
                                            <h4><b>KOMENTAR</b></h4>
                                        </label>
                                            <div style="display: inline-block;">
                                                <div class="col-md-5">  
                                                    Dari Tanggal
                                                </div>
                                                <div class="input-group" style="width: 150px;">
                                                    <input name="interval_date_from" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                    <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                </div>
                                                <label class="control-label" style="padding-top: 3px">
                                                    Sampai Tanggal
                                                </label>
                                                <div class="input-group" style="width: 150px;">
                                                    <input name="interval_date_until" type="text" class="form-control span2 datepicker" value="<?= date('D/M/Y'); ?>">
                                                    <span class="input-group-addon"> <i class="icon-calendar"></i> </span>
                                                </div>
                                            </div>        
                                    </div> -->
                                </div>
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-9">
                                        <div class="panel-body" style="margin-left: 33%;">
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