import re
import subprocess
import os
import sys


if os.geteuid() > 0:
	print("You must be root !")
	sys.exit(1)



device_re = re.compile("/dev/sda1", re.I)
df = subprocess.check_output("blkid")
devices = []
count = 0

for i in df.split('\n'):
    if i:
	info = device_re.match(i)
    	if info:
           deneme = re.search("[a-f0-9]{8}-?[a-f0-9]{4}-?4[a-f0-9]{3}-?[89ab][a-f0-9]{3}-?[a-f0-9]{12}",i)
	   if deneme.group(0)=="edba1456-5157-4bda-8694-4038721dec65":
		count = 1

if count == 0:
	print("restart")
