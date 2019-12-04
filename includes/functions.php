<?php



const VOLUME_TO_GALLON = array(
  "bucket" => 4,
  "butt" => 108,
  "firkin" => 9,
  "hogshead" => 54,
  "pint" => 0.125,
  "gallons" => 1,
);  



function optionize($string) {
  return str_replace(' ', '_', strtolower($string));
}


function convert_to_gallons($value, $from_unit) {
  if(array_key_exists($from_unit, VOLUME_TO_GALLON)) {
    return $value * VOLUME_TO_GALLON[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_gallons($value, $to_unit) {
  if(array_key_exists($to_unit, VOLUME_TO_GALLON)) {
    return $value / VOLUME_TO_GALLON[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_volume($value, $from_unit, $to_unit) {
  $gallon_value = convert_to_gallons($value, $from_unit);
  $new_value = convert_from_gallons($gallon_value, $to_unit);
  return $new_value;
}

?>
