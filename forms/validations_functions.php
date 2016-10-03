<?php

  function validates_presence($value) {
    return isset($value) && $value !== "";
  }

  function validates_min_length($value, $min) {
    return strlen($value) >= $min;
  }


  function validates_max_length($value, $max) {
    return strlen($value) <= $max;
  }

  function validates_string($value) {
    return is_string($value);
  }


  function validates_set_inclusion($value, $set) {
    return in_array($value, $set);
  }

  function validates_email($value) {
    return strpos($value, "@") === true;
  }

  function form_errors($errors=array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<div class=\"error\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $key => $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }

?>
