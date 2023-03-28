#ciclo while

from ast import Continue

contador=0
while contador < 100:
 numero = int(input("Introduzca un número: "))
 contador+=numero
 if contador <= 100:
     Continue
print ("Ha llegado al límite de la suma, por tanto, no puedes ingresar más") 


