<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.optgroup.php
 * Type:     function
 * Name:     optgroup
 * Purpose:  Parse Optgroups
 * -------------------------------------------------------------
 */
 function smarty_function_optgroup($params, &$smarty){

    $options = $params['options'];
    $output  = '';

    if(count($options)) $output = parseOptions($options);

    return $output;
}

function parseOptions($options){

  $result = '';

  if(is_array($options) && !is_int(key($options))){
    foreach($options as $key => $value){
      $result .= "<optgroup label='".$key."'>".parseOptions($value)."</optgroup>";
    }
  }
  else{
    foreach($options as $key => $value){
      $result .="<option value='".$value."'>".$value."</option>";
    }
  }

  return $result;

}
?>