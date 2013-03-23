<?php

trait HTML5FormFieldTrait {

  function getAttributes() {
    $attrs = parent::getAttributes();
    return array_merge(array(
      'placeholder' => $this->title(),
      'required'    => $this->Required(),
    ), $attrs);
  }

  function Type() {
    // to keep the default form style
    return strtolower(preg_replace("/^(HTML5)(.+)$/i","$2",parent::Type()));
  }

}

class HTML5TextField     extends TextField     { use HTML5FormFieldTrait; }
class HTML5TextareaField extends TextareaField { use HTML5FormFieldTrait; }
class HTML5PasswordField extends PasswordField { use HTML5FormFieldTrait; }
class HTML5EmailField    extends EmailField    { use HTML5FormFieldTrait; }