<?php
function encrypt($pass, $shift){
    $final = "";
    $shift = $shift % 26;
    $length = strlen($pass);
    for($index = 0; $index < $length; $index ++) {
    $words[] = substr($pass, $index, 1);
    $each = $words[$index]; 
    if(($each >= "A") && ($each <= 'Z')) {
        if((ord($each) + $shift) > ord("Z")) {
            $final .= chr(ord($each) + $shift - 26);
    } else {
        $final .= chr(ord($each) + $shift);
    }
  }
  if(($each >= "a") && ($each <= 'z')) {
    if((ord($each) + $shift) > ord("z")) {
        $final .= chr(ord($each) + $shift - 26);
} else {
    $final .= chr(ord($each) + $shift);
}
} else {
  $final .= "";
}
}
    echo $final . '<br>';
}

function decrypt($pass, $shift){
    $final = "";
    $shift = $shift % 26;
    $length = strlen($pass);
    for($index = 0; $index < $length; $index ++) {
    $words[] = substr($pass, $index, 1);
    $each = $words[$index]; 
    if(($each >= "A") && ($each <= 'Z')) {
        if((ord($each) - $shift) > ord("Z")) {
            $final .= chr(ord($each) - $shift + 26);
    } else {
        $final .= chr(ord($each) - $shift);
    }
  } 
  if(($each >= "a") && ($each <= 'z')) {
    if((ord($each) - $shift) > ord("z")) {
        $final .= chr(ord($each) - $shift + 26);
} else {
    $final .= chr(ord($each) - $shift);
}
} else {
  $final .= "";
}
}
    echo $final;
}

$name = 'abc';
$caesar = 'def';
encrypt($name, 2);
decrypt($caesar, 3);