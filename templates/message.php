<?php
\OCP\Util::addStyle('ndcregistration', 'style');
\OCP\Util::addScript('ndcregistration', 'script');
?>
<center><?php print_unescaped($_['msg'])?></center>
<p style="margin-top:24px;"><a id="gologin"><?php p($l->t('Back to login page')); ?></a></p>