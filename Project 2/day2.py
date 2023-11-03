file = open("day2.txt", 'r')
lines = file.readlines()
total = 0
for line in lines:
    line = line.strip()
    if(line == "A X"):
        total += 3
    elif(line == "A Y"):
        total += 4
    elif(line == "A Z"):
        total += 8
    elif(line == "B X"):
        total += 2
    elif(line == "B Y"):
        total += 5
    elif(line == "B Z"):
        total += 6
    elif(line == "C X"):
        total += 1
    elif(line == "C Y"):
        total += 6
    elif(line == "C Z"):
        total += 7
print(total)