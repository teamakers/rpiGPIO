<?php

class GPIO {
  private $file_in = '/include/GPIO/cesh/GPIO_IN.txt'; 
  private $file_out = '/include/GPIO/cesh/GPIO_OUT.txt';
  private $file_req = '/include/GPIO/cesh/GPIO_REQ.txt';
                                               
  
  public function setG($pin, $v) {
    if ($pin == "" || $v == "") return;
    if ($v != "1" && $v != "0") return;
     

    $buffer = $pin."\n".$v;
    $success = file_put_contents($this->file_out, $buffer); // if($success) ВСЁ ok!
    
  }
  public function getG($pin) {
    if ($pin == "") return;
    
    $buffer ="1"."\n".$pin."\n"."-1";
    $success = file_put_contents($this->file_in, $buffer);
    
    $in_b = explode("\n",  file_get_contents($this->file_in));
    while($in_b[0] == "1") {
     $in_b = explode("\n",  file_get_contents($this->file_in));
    }
    return $in_b[2];
  } 
}

    

    /*

$file = '/include/GPIO/GPIO40.txt';
    $buffer = $_POST['userstory'];

    if (file_exists($file)) {
           $buffer = file_get_contents($file) . "\n" . $buffer;
    }
   echo "_$buffer";
   $success = file_put_contents($file, $buffer);


$buffer = $pin."\n".$v;
    $success = file_put_contents($this->file_req, $buffer); // if($success) ВСЁ ok!
    while(!ereg("^".$pin."...X$", $file_get_contents($file_in))) {}//sleep(1);
    
    file_put_contents($file_in, file_get_contents($file_in)."X");
    
    return strchr($file_get_contents($file_in), "/n"); 
   */
?>
