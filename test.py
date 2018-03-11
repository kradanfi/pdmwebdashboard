#!/usr/bin/env python

# string1 = '{"Time":"2018-02-22 17:40:49.027245","RPM":"1","Temperature":"24.0","Xaxis":"2497","Yaxis":"2039","Zaxis":"2086","Volt":"8.94","Amp":"0.0"}'
# string2 = '{"Time":"2018-02-22 17:40:49.027245","RPM":"2","Temperature":"24.0","Xaxis":"2497","Yaxis":"2039","Zaxis":"2086","Volt":"8.94","Amp":"0.0"}'
# string3 = '{"Time":"2018-02-22 17:40:49.027245","RPM":"3","Temperature":"24.0","Xaxis":"2497","Yaxis":"2039","Zaxis":"2086","Volt":"8.94","Amp":"0.0"}'

# string = '[' + string1 + ',' + string2 + ',' + string3 +']'
# print(string)


from pykafka import KafkaClient
host = "161.246.6.140:9092"
topicName = "test"
timeout = 500
lastMsg = ""

client = KafkaClient(hosts=host)
topic = client.topics[str.encode(topicName)]
consumer = topic.get_simple_consumer(consumer_timeout_ms=timeout)

data = []
for msg in consumer:
    data.append(msg.value.decode("utf-8"))
    # print(msg.value.decode("utf-8"))

lastMsg = data[len(data)-1]

temp = "Host : " + host + '\n' + \
       "Topic : " + topicName + '\n' + \
       "Last message : " + lastMsg 

print('[' + lastMsg + ']')