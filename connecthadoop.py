import sys
import pydoop.hdfs as hdfs

#create package
date = 'data/'+str(sys.argv[1])[2:]+'/'
st  ='['
for x in hdfs.ls("data/18-02-21/"): 
#for x in hdfs.ls("date"): 
	st = st+ hdfs.load(x)

st = st.replace("\n",",")
st= st[:-1]
st = st+']'



#string4 = '{"input":"'+str(sys.argv[1])+'"}'


print st