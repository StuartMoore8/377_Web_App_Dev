file = open('day4.txt','r')
lines = file.readlines()

def part1():
    def calculate_points(lines):
        cardPoints = 0
        total = 0

        for line in lines:
            _, numbers = line.split(": ")
            rightNumbers, leftNumbers = numbers.split(" | ")
            rightNumbers = list(map(int, rightNumbers.split()))
            leftNumbers = list(map(int, leftNumbers.split()))

            points = 0
            for number in leftNumbers:
                if number in rightNumbers:
                    points += 1
            if points > 0:
                cardPoints = pow(2, points - 1)
                total += cardPoints

        return total

    result = calculate_points(lines)
    print(result)

part1()