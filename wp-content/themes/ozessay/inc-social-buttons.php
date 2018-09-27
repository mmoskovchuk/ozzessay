<div class="social-buttons">
	<div class="socials-buttons__item">
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk')
			);
		</script>
		<div class="fb-like" data-href="<?php echo get_site_url(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
	</div>

	<div class="socials-buttons__item">
		<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
		<script>
			!function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
				if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + '://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js, fjs);
				}
			}(document, 'script', 'twitter-wjs');
		</script>
	</div>

	<div class="socials-buttons__item">
		<div class="g-plusone" data-annotation="none"></div>
		<script>
			window.___gcfg = {lang: 'en'};
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/platform.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
		</script>
	</div>
</div>