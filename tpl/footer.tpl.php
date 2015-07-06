				<footer>
					<address class="mb0">
						<p id="contact-email">info@contactopm.com</p>
						<p id="contact-phone">Telf: 01 - 540 2887</p>
						<p id="contact-address">Jr. Ismael Bielich flores 927 Urb. prolongación Benavídes. Santiago de Surco</p>
					</address>
				</footer>
			</div>
		</div>
		<script src="js/vendor/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<?php if (isset($_SESSION['MESSAGE_TOP'])): ?>
			<script>
			alert("<?= $_SESSION['MESSAGE_TOP'] ?>");
			</script>
			<?php unset($_SESSION['MESSAGE_TOP']); ?>
		<?php endif ?>
	</body>
</html>