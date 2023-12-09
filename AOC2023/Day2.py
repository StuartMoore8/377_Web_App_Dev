def part1():
    total = 0
    game_id = 1

    with open('day2.txt', 'r') as file:
        lines = file.readlines()

    for line in lines:
        valid = True
        rounds = line.split(':')[1].split(';')

        for round_str in rounds:
            color_counts = [entry.strip() for entry in round_str.split(',')]

            for color_count in color_counts:
                count, color = [entry.strip() for entry in color_count.split(' ')]

                if (color == 'red' and int(count) > 12) or \
                   (color == 'green' and int(count) > 13) or \
                   (color == 'blue' and int(count) > 14):
                    valid = False

        if valid:
            total += game_id

        game_id += 1

    print(total)

def part2():
    import math
    import re
    from collections import defaultdict

    with open("day2.txt") as file:
        lines = file.read().strip().split("\n")

    good_ids = 0
    total_power = 0

    for line in lines:
        parts = re.sub("[;,:]", "", line).split()
        colormax = defaultdict(int)

        for count, color in zip(parts[2::2], parts[3::2]):
            colormax[color] = max(colormax[color], int(count))

        if colormax["red"] <= 12 and colormax["green"] <= 13 and colormax["blue"] <= 14:
            good_ids += int(parts[1])

        total_power += math.prod(colormax.values())

    print(total_power)

part1()
part2()
