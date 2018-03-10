import pydoop.hdfs as hdfs
import os

with open("/tmp/tmp.txt") as f:
    print f.read()
    
hdfs.rmr("test/hello.txt")
os.remove("/tmp/tmp.txt")
