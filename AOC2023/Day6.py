# import math
def part1():
    time = [55, 99, 97, 93]
    distance = [401, 1485, 2274, 1405]
    total_ways = 1
    current_speed = 0

    for time, distance in zip(time, distance):
        ways = 0
        for wait in range(time):
            speed = current_speed + wait
            traveled = speed * (time - wait)
            if traveled > distance:
                ways += 1

        total_ways *= ways

    print(total_ways)
    

def part2():
    time = 55999793
    distance = 401148522741405

    total_ways = 0

    for wait in range(1, time):
        speed = wait
        traveled_distance = speed * (time - wait)
        if traveled_distance > distance:
            total_ways += 1


    print(total_ways)

part1()
part2()
