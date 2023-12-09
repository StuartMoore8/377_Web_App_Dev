file = open('day1.txt','r')
lines = file.readlines()

def part1():
    total = 0
    for line in lines:
        first_digit = ''
        for character in line:
            if character.isdigit():
                first_digit = character
                break

        last_digit = ''
        reversed = line[::-1]
        for character in reversed:
            if character.isdigit():
                last_digit = character
                break
        total += int(first_digit + last_digit)
        # print(first_digit + last_digit)
        print(total)

part1()