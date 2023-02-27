def is_in_fibonacci(n):
    fibonacci = [0, 1]
    # Gera a sequência de Fibonacci até passar do número n
    while fibonacci[len(fibonacci) - 1] < n:
        fibonacci.append(fibonacci[len(fibonacci) - 1] + fibonacci[len(fibonacci) - 2])

    return n in fibonacci


print('Digite um número inteiro: ')
number = int(input())

if is_in_fibonacci(number):
    print(f'O número {number} é de Fibonacci!')
else:
    print(f'O número {number} não é de Fibonacci!')
