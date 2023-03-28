#Reloj

from operator import and_
from this import s
import time
from os import system
Rep=5
def alarm(h,mn,s):
  while True:
   if (h == time.strftime('%H')) and (mn == time.strftime('%M')): and_
(s == time.strftime('%S')) 
for x in range(Rep):
  time.sleep(1)
print("Ya es hora de despertar, levantate!!")
pass

print(time.strftime("%H:%M:%S"))
time.sleep(1)
system('cls')
print("Indica el tiempo, en el cual quieres que la alarma se active")
hour=input("Ingrese la hora (HH24): ")
min = input("Ingrese los minutos (MM): ")
sec = input("Ingrese los segundos (SS): ")
alarm(hour,min,sec)
