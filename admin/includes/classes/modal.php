<?php
  class modal {
    var $content, $button_save, $button_delete, $button_cancel;

// class constructor
    function __construct() {
      global $PHP_SELF;
      $path_parts = pathinfo($PHP_SELF);
      $this->name = $path_parts['filename'];
//      $this->button_save = false;
    }
    
    function output () {
      $button_save = $button_delete = $button_cancel = '';

      if ($this->button_save == true) $button_save = '          <button type="submit" class="btn btn-default" id="ModalButtonSave"><i class="fa fa-floppy-o fa-lg"></i> '.  IMAGE_SAVE . '</button>' . PHP_EOL;
      if ($this->button_delete == true)  $button_delete = '          <button type="submit" class="btn btn-default" id="ModalButtonDelete"><i class="fa fa-trash fa-lg"></i> ' . IMAGE_DELETE .'</button>' . PHP_EOL;
      if ($this->button_cancel == true)  $button_cancel = '          <button type="button" class="btn btn-default" id="ModalButtonCancel" data-dismiss="modal"><i class="fa fa-times fa-lg"></i> ' . IMAGE_CANCEL . '</button>' . PHP_EOL;

      $content = <<<EOD
<div class="modal" tabindex="-1" role="dialog" id="{$this->name}Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info" id="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title"></h4></div>
        <div class="modal-body"></div>
        <div class="modal-footer">
{$button_save}{$button_delete}{$button_cancel}        </div>
    </div>
  </div>
</div>
EOD;

      return $content;
    }
  }