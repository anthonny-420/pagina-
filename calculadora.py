signo = input('¿Que operacion deseas realizar?: ')
signo = signo.lower()
operaciones = ('suma', '+', 'resta', '-', 'multiplicacion', 'multiplicación', '*', 'division', 'división', '/')
if signo not in operaciones:
    print(f'La operacion {signo} no se encontro, ya que la calculadora esta hecha solo para operaciones basicas😥')
else:
    print('operacion existente 😁')

valor1 = int(input('digite el primer valor => '))
valor2 = int(input('digite el segundo valor => '))

if signo == 'suma' or signo == '+':
    suma = valor1 + valor2
    print(f'la suma de {valor1} y {valor2} da como resultado: {suma} ✔️')

elif signo == 'resta' or signo == '-':
    resta = valor1 - valor2
    print(f'la resta de {valor1} y {valor2} da como resultado: {resta}')

elif signo == 'multiplicacion' or signo == 'multiplicación' or signo == '*':
    multiplicar = valor1 * valor2 
    print(f'la multiplicación de {valor1} y {valor2} da como resultado: {multiplicar} ✔️')

elif signo == 'division' or signo == 'división' or signo == '/':
    dividir = valor1 / valor2 
    print(f'la división entre {valor1} y {valor2} da como resultado: {dividir} ✔️')

