<?= $this->Html->script('show_password') ?>
<div class="full-height hull-width yellow darken-3 valign-wrapper">
  <div class="row">
    <div class="center-align">
      <h3 class="white-text">Pandoro</h3>
    </div>
      <?= $this->Form->create($user) ?>
        <?= $this->Form->control('username', ['type' => 'text', 'class' => 'input-field white-text', 'autocomplete' => 'off']); ?>
        <?= $this->Form->control('password', ['type' => 'password', 'class' => 'input-field white-text']); ?>
        <div class="row">
          <input type="checkbox" class="checkbox-yellow filled-in show password" id="filled-in-box" />
            <label for="filled-in-box">show password</label>
        </div>
        <div class="center-align">
          <?= $this->Form->button('Login', ['class' => 'waves-effect waves-light yellow darken-3 white-text btn-flat border-white']) ?>
        </div>
      <?= $this->Form->end() ?>
  </div>
</div>
