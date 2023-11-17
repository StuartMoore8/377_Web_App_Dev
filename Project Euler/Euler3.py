divisor = 2
number = 600851475143
while number > 1 :
    if (number % divisor == 0): 
        number /= divisor
    else:
        divisor += 1

print(divisor)
