#En base al promedio de 15 calificaciones numéricas ingresadas por el teclado, mostrar en pantalla la calificación final en letra del estudiante, tomando en cuenta la siguiente escala:
#a. 90 a 100 = Aprobado
#b. 80 a 89 = Logrado
#c. 70 a 79 = Deficiente
#d. 60 a 69 = Debe estudiar más
#e. Menor de 59 = Reprobado


nota=int(input("Ingrese la calificación: "))


for nota in range(1,15 + 1):

    if nota=="90" or (nota=="100"):
        print("Aprobado")
    elif nota=="80" or (nota=="89"):
        print("Logrado")
    elif nota=="70" or (nota=="79"):
        print("Deficiente")
    elif nota=="60" or (nota=="69"):
        print("Debe estudiar más")
    elif nota < "59":
        print("Reprobado")

