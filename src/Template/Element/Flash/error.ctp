<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="modal-content card-panel red row">
  <div class="col s2 center">
    <i class="fa fa-fire white-text" aria-hidden="true"></i>
    <span class="white-text">ERROR</span>
  </div>
  <div class="col s10">
    <span class="white-text"><?= $message ?></span>
  </div>
</div>
