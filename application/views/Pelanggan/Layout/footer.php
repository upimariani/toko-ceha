<!-- /End Footer Area -->

<!-- Jquery -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-migrate-3.0.0.js"></script>
<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/colors.js"></script>
<!-- Slicknav JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/nicesellect.js"></script>
<!-- Flex Slider JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/easing.js"></script>
<!-- Active JS -->
<script src="<?= base_url('asset/eshop/eshop/') ?>js/active.js"></script>
<script>
	console.log = function() {}
	$("#kecamatan").on('change', function() {

		$(".vongkir").html($(this).find(':selected').attr('data-vongkir'));
		$(".vongkir").val($(this).find(':selected').attr('data-vongkir'));

		$(".vtotal").html($(this).find(':selected').attr('data-vtotal'));
		$(".vtotal").val($(this).find(':selected').attr('data-vtotal'));

		$(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
		$(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

		$(".total").html($(this).find(':selected').attr('data-total'));
		$(".total").val($(this).find(':selected').attr('data-total'));
	});
</script>
</body>

</html>