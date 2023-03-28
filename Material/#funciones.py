#funciones

op=input("Que operación deseas realizar: 1)Resta, 2)Multiplicación, 3)División: ")

def restar(a,b):
    resultado= a - b
    return resultado
vValor1= int(input("Ingrese un número: "))
vValor2= int(input("Ingrese un segundo número: "))
vResultado= restar(vValor1,vValor2)
if op=="1":
    print(f"el resultado de la operación es :{vResultado}")
    print("Gracias por participar")


def multiplicar(a,b):
    resultado= a * b
    return resultado
vValor1= int(input("Ingrese un número: "))
vValor2= int(input("Ingrese un segundo número: "))
vResultado= multiplicar(vValor1,vValor2)
if op=="2":
   print(f"el resultado de la operación es :{vResultado}")
   print("Gracias por participar")

def dividir(a,b):
    resultado= a / b
    return resultado
vValor1= int(input("Ingrese un número: "))
vValor2= int(input("Ingrese un segundo número: "))
vResultado= dividir(vValor1,vValor2)
if op=="3":
   print(f"el resultado de la operación es :{vResultado}")
   print("Gracias por participar")

