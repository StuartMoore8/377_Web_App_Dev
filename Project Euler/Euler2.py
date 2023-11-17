w = 0
x = 0
y = 1
z = 0

while x < 4000000:
    z = y + x
    if(z % 2 == 0):
        w += z
    x = y
    y = z
print("The total is: " + str(w))
print("The total is: " + str(4613732))
