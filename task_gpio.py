from time import sleep
import RPi.GPIO as GPIO

import threading

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(40, GPIO.OUT)
GPIO.setup(38, GPIO.OUT)
GPIO.setup(7, GPIO.IN)
def gpio_out():
  # while True:
      f = open('/include/GPIO/cesh/GPIO_OUT.txt', 'r')
      lines = f.readlines()
      f.close()
      #pin = int(lines[0])
       
      if lines[1]=="1":
        GPIO.output(int(lines[0]), True)
      if lines[1]=="0":
        GPIO.output(int(lines[0]), False)
      sleep(1)

def gpio_in():
  # while True:
      f = open('/include/GPIO/cesh/GPIO_IN.txt', 'r')
      lines = f.readlines()
      f.close()
      
       GPIO.input(channel) == GPIO.LOW
      
      if lines[1]=="7":
        f = open('/include/GPIO/cesh/GPIO_IN.txt', 'w')
        lines[0] = "0"
        f.close()

      sleep(1)

#th_gpio_out = threading.Thread(target=gpio_in)
#th_gpio_out.start()

th_gpio_in = threading.Thread(target=gpio_in)
th_gpio_in.start()
