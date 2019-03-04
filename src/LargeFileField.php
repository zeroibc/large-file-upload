<?php

namespace Zero\LargeFileUpload;

use Encore\Admin\Form\Field;

class LargeFileField extends Field
{

    public $view = 'large-file-field::large_file_upload';

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<SRC

        $('#{$name}-file').change(function(){
             uploadWithQiNiuSDK(this,'#{$name}-savedpath');
        });

SRC;

        return parent::render();
    }
}
