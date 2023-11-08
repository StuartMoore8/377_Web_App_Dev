file = open("day1.txt", 'r')
lines = file.readlines()
total = 0
max = 0
combined = 0
for line in lines:
    line = line.strip()
    if line == '':
        if total >= 66000:
            print("Lest elf was carrying: " + str(total))
        if total > max:
            max = total
        total = 0
    else: 
        total += int(line)