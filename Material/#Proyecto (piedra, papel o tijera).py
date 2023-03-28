#Proyecto
from os import sep
import random
op=["piedra","papel","tijeras","lagarto","spock"]
sep="-" * 15
while True:
   user=input("elije: piedra, papel, tijeras, lagarto o spock: " 
    ).lower()
   if user not in op:
    print("\nMovimiento no valido")
    continue
   pc=random.choice(op)
   print(f"\nLa pc ha seleccionado {pc}")
   if user ==pc:
    print(f"\nEmpate!, ambos eligieron {user}")
   elif user == "tijera" and pc== "papel":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user=="papel" and pc== "piedra":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user== "piedra" and pc== "lagarto":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user== "lagarto" and pc== "spock":
    print(f"\nHas ganado!, {user} ganas en contra de {pc} ")
   elif user == "spock" and pc== "tijeras":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user=="tijeras" and pc== "lagarto":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user== "lagarto" and pc== "papel":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user== "papel" and pc== "spock":
    print(f"\nHas ganado!, {user} ganas en contra de {pc} ")
   elif user == "spock" and pc== "piedra":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   elif user=="piedra" and pc== "tijera":
    print(f"\nHas ganado!, {user} ganas en contra de {pc}")
   else:
    print(f"Has perdido, {user} pierde contra {pc}")
   print(f"{sep} fin del juego{sep}")