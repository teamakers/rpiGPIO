# rpiGPIO
Raspberry pi GPIO 


На web:
<?php
include("/include/GPIO/gpio_class.php"); //import GPIO class

$myg = new GPIO; //creat object

$myg->setG($pin, $value); //$pin 1-40, $value 1/0
?>

START:
 
 в консоль введите
 python /include/GPIO/task_gpio.py
 
 или
 - sudo crontab -e
 - @reboot python /include/GPIO/task_gpio.py




TODO:
-доделать обмен данными
-оброботка ошибок


