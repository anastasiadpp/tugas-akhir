		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2018 &copy; <a href="http://www.instagram.com/anastasiadpp" target="_blank">Anastasia Dewanti Pratama Putri</a>
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<![endif]-->
                
		<script src="<?= base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/blockUI/jquery.blockUI.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/iCheck/jquery.icheck.min.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js'?>"></script>
		<script src="<?= base_url().'assets/js/main.js'?>"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		
		<script src="<?= base_url().'assets/plugins/jquery.sparkline/jquery.sparkline.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'?>"></script>
		<script src="<?= base_url().'assets/plugins/fullcalendar/fullcalendar/fullcalendar.js'?>"></script>
		<script src="<?= base_url().'assets/js/index.js' ?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			$('#importantwordsModal').on('show.bs.modal', function(e) {
    			var wordId = $(e.relatedTarget).data('word');
    			document.getElementById("wordId").innerHTML = wordId;
    			console.log(wordId);
			});
			$(".dropdown-menu li a").click(function(){
  				var selText = $(this).text();
  				$(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
  				if($.trim(selText) == 'Title')
    			{
    				jQuery('.query-title').hide();
    			}
			});
			$('.datepicker').datepicker();
			$(document).ready(function() {
			    $("input[name$='radioTime']").click(function() {
			        var test = $(this).val();
			        if(test == 1)
			        {
			        	$("div.byYear").removeClass('hide').addClass('show');
			        	$("div.byMonth").removeClass('show').addClass('hide');
			        }
			        else if(test == 2)
			        {
			        	$("div.byYear").removeClass('show').addClass('hide');
			        	$("div.byMonth").removeClass('hide').addClass('show');
			        }
			        else
			        {
			        	$("div.byYear").removeClass('show').addClass('hide');
			        	$("div.byMonth").removeClass('show').addClass('hide');
			        }
			    });
			});
		</script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>