<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader']); ?>
	<div class="well">
		<form class="" method="get" id="download" action="getvideo.php">
			<h1 class="form-download-heading">Youtube Downloader</h1>
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID">
				  <span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="type" id="type" value="Download" />
				  </span>
				</div><!-- /input-group -->
			<div class="video-info">
				<p>Valid inputs are YouTube links or VideoIDs:</p>
					<ul>
						<li>youtube.com/watch?v=...</li>
						<li>youtu.be/...</li>
						<li>youtube.com/embed/...</li>
						<li>youtube-nocookie.com/embed/...</li>
						<li>youtube.com/watch?feature=player_embedded&v=...</li>
					</ul>
			</div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
		}
		?>
		<hr />
		<p class="muted pull-right"><a href="https://github.com/Humilton/YouTube-Downloader" target="_blank">Youtube Downloader <?php echo $this->get('app_version', ''); ?></a> is licensed under GPL 2.<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273607978'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1273607978%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script></p>
		<div class="clearfix"></div>
		</form>
	</div>
<?php echo $this->inc('footer.php'); ?>
