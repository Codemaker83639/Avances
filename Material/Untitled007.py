personas = int(input("cuantas personas son: "))
validos = 0
i = 1
partido1='PLD'
partido2='PRM'
partido3='PRD'
while i <= personas:
 n = int(input(print("Introduzca la edad: ")))
 nacionalidad = input("Usted es dominicano?: ")
 if n >= 18 and nacionalidad == "si":
    validos += 1
    voto=input("Por cual partido quieres votar: ")
 if voto=="partido1":
    partido1+=1
