import sys
import json

if(len(sys.argv)  > 1 ):
	with open("/home/pi/Robot/data.json", "r+") as datafile:
		data = json.load(datafile)
		data["trackmode"] = sys.argv[1]
		datafile.seek(0)
		datafile.truncate()
		datafile.write(json.dumps(data, datafile))
else:
	with open("/home/pi/Robot/data.json", "r") as datafile:
		data = json.load(datafile)
		print(data["trackmode"])