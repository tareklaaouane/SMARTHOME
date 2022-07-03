import Adafruit_DHT
import mysql.connector
import datetime
DHT_SENSOR = Adafruit_DHT.DHT22
DHT_PIN = 4
mydb= mysql.connector.connect(
        host="localhost",
        user="root",
        password="mypassword",
        database="SMARTHOME"
)
mycursor = mydb.cursor()
sql="insert into DATACAP(VALCAP,DCAP,ID_CAPT) values(%s,%s,%s)"
while True:
    hum, temp = Adafruit_DHT.read_retry(DHT_SENSOR, DHT_PIN)
    x=datetime.datetime.now()
    today=str(x.day)+"-"+str(x.month)+"-"+str(x.year)
    val=(hum,today,3)
    val1=(temp,today,2)
    mycursor.execute(sql,val)
    mycursor.execute(sql,val1)
    mydb.commit()
