<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="ui info message">
  <i class="close icon"></i>
  <?= $message ?>
</div>
