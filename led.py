import RPi.GPIO as GPIO
import sys
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
#print(sys.argv[2])
GPIO.setup(int(sys.argv[1]),GPIO.OUT)
GPIO.output(int(sys.argv[1]),int(sys.argv[2]))
