<?php
/** 
 * Sub-vy för bottenraden med text.
*/
defined('BASEPATH') OR exit('No direct script access allowed');

?><footer class="page-footer container border-top mt-4">
	<div class="footer-copyright my-2 text-center text-muted text-small">
		<?php if(!APRIL_FOOLS):?>
			<small>SSG Anmälning &ndash; Version <?=SSG_VERSION?> &ndash; <?=SSG_BUILD_DATE?></small>
		<?php else:?>
			<small>SSG Anmälning &ndash; Version 1.3.3.7</small>
		<?php endif;?>
	</div>
</footer>