<?php
/**
 * @var
 */

$this->loadHelper('Admin.Instagram');
?>
<a href="<?= $this->Instagram->getAuthUrl(); ?>">Authorize with Instagram</a>