file = open('day4.txt', 'r')
lines = file.readlines()

def part1():
    total = 0
    for line in lines:
        line = line.strip()
        elf1, elf2 = line.split(',')
        x1, x2 = [int(num) for num in elf1.split("-")]
        y1, y2 = [int(num) for num in elf2.split('-')]
        if x1 <= y1 and y2 <= x2:
            total += 1
        elif y1 <= x1 and x2 <= y2:
            total += 1
    print("part 1: " + str(total))

def part2():
    total = 0
    for line in lines:
        line = line.strip()
        elf1, elf2 = line.split(',')
        x1, x2 = [int(num) for num in elf1.split("-")]
        y1, y2 = [int(num) for num in elf2.split('-')]
        if (x1 >= y1 and x1 <= y2) or (x2 >= y1 and x2 <= y2) or (x1 < y1 and x2 > y2):
            total += 1
    print("part 2: " + str(total))
    
part1()
part2()