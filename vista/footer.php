<!--====== Scripts -->
	<!-- <script src="js/jquery-3.1.1.min.js"></script> -->
	<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
	<!-- <script src="js/sweetalert2.min.js"></script> -->
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/material.min.js"></script>
	<script src="../../js/ripples.min.js"></script>
	<script type="text/javascript" src="../../js/sweetalert2.all.js"></script>
	<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<script type="text/javascript">
		$('#cerrar_sesion').click(function() {
			swal({
				title: 'Seguro de Cerrar Sesion?',
				text: 'No podrá realizar otra operación',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Cerrar Sesion'
			}).then((result) => {
				if (result.value) {
					swal("Usted es un idiota", 'asd', 'success');
				}
			});
		})
	</script>
</body>
</html>