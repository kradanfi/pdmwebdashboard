import pydoop.hdfs as hdfs
import os

with open("/tmp/hello.txt") as f:
    print f.read()
    
hdfs.rmr("test/hello.txt")
os.remove("/opt/lampp/htdocs/pdmwebdashboard/tmp.txt")
