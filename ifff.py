number = int(input("enter number "))

if number == 1:
    print("one")
elif number == 2:
    print("two")
elif number == 3:
    print("three")
elif number >= 4:
    print("4 or greater")
elif number < 0:
    print("negative number")
elif number == 0:
    print("Zero")
else:
    print("Not a valid number")