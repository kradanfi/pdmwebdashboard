import sys
import pydoop.hdfs as hdfs

#create package

st  ='['
for x in hdfs.ls("data/18-02-21/"): 
	st = st+ hdfs.load(x)

st.replace("\n",",")
st= st[:-1]
st = st+']'



#string4 = '{"input":"'+str(sys.argv[1])+'"}'


print(st)