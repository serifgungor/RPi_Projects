import picamera
from time import sleep

camera = picamera.PiCamera()

camera.start_preview()
camera.resolution = (480,640)
camera.capture("a.jpg")
sleep(0.02)
camera.capture("b.jpg")
sleep(0.02)
camera.capture("c.jpg")
sleep(0.02)
camera.capture("d.jpg")
sleep(0.02)
camera.capture("e.jpg")
camera.stop_preview()