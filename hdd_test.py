import re
import subprocess
import os
import sys


if os.geteuid() > 0:
	print("You must be root !")
	sys.exit(1)



device_re = re.compile("Bus\s+(?P<bus>\d+)\s+Device\s+(?P<device>\d+).+ID\s(?P<id>\w+:\w+)\s(?P<tag>.+)$", re.I)
df = subprocess.check_output("lsusb")
devices = []
for i in df.split('\n'):
    if i:
        info = device_re.match(i)
        if info:
            dinfo = info.groupdict()
            dinfo['device'] = '/dev/bus/usb/%s/%s' % (dinfo.pop('bus'), dinfo.pop('device'))
            devices.append(dinfo)

count = 0
for i in devices:
	if i['id']=="04e8:61b3":
		count = 1


if count == 0:
	os.system("sudo reboot")
	

	