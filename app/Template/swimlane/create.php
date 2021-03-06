<div class="page-header">
    <h2><?= t('Add a new swimlane') ?></h2>
</div>
<form class="popover-form" method="post" action="<?= $this->url->href('SwimlaneController', 'save', array('project_id' => $project['id'])) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, array('autofocus', 'required', 'maxlength="50"', 'tabindex="1"')) ?>

    <?= $this->form->label(t('Description'), 'description') ?>
    <?= $this->form->textEditor('description', $values, $errors, array('tabindex' => 2)) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue" tabindex="3"><?= t('Save') ?></button>
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'SwimlaneController', 'index', array('project_id' => $project['id']), false, 'close-popover') ?>
    </div>
</form>
