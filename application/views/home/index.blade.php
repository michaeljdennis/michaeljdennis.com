<?php echo $header; ?>
	
<div id="container">

	<div id="status-container">
	
		<div id="status">

			<?php echo HTML::link('https://plus.google.com/105229919707172563396/', 'michaeljdennis'); ?>
			
		</div>
	
		<div id="arrow"></div>
	
	</div>

	<a href="<?php echo URL::to('http://about.me/michaeljdennis'); ?>">
		<?php
		
		echo HTML::image(
			'http://www.gravatar.com/avatar/c2db930ff62d116e3533eadf7c4d5785?s=300&d=mm',
			'Michael Dennis',
			array('id="gravatar"', 'title' => 'about.me/michaeljdennis')
		);

		?>
	</a>

	<div id="badge">
	
		<!-- Place this tag where you want the badge to render. -->
		<div class="g-plus" data-height="69" data-href="//plus.google.com/105229919707172563396?rel=author"></div>
		
		<!-- Place this tag after the last badge tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	
	</div>

	<div id="plusone">

		<!-- Place this tag where you want the +1 button to render. -->
		<div class="g-plusone" data-annotation="inline" data-width="300"></div>
		
		<!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>

		<br><br><br><br>
		
		<div style="color:#ddd;text-align:center;">Powered by PagodaBox</div>

	</div>
	
</div>

<?php echo $footer; ?>