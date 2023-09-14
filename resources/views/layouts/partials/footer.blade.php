
	<!-- Bootstrap JS -->
	<script src="{{asset('/')}}js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('/')}}js/jquery.min.js"></script>
	<script src="{{asset('/')}}plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('/')}}plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('/')}}plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('/')}}plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{asset('/')}}plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('/')}}plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('/')}}plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('/')}}plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{asset('/')}}plugins/jquery-knob/excanvas.js"></script>
	<script src="{{asset('/')}}plugins/jquery-knob/jquery.knob.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{asset('/')}}js/index.js"></script>
	<!--app JS-->
	<script src="{{asset('/')}}js/app.js"></script>

	@stack('scripts')
	
</body>

</html>
