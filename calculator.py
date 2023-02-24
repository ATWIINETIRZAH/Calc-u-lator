
def add(x, y):
    return x + y


def subtract(x, y):
    return x - y


def multiply(x, y):
    return x * y


def divide(x, y):
    return x / y


print("Make your choice.")
print("1.Add")
print("2.Subtract")
print("3.Multiply")
print("4.Divide")

while True:
    
    ans= input("Enter choice(1/2/3/4): ")

    if ans in ('1', '2', '3', '4'):
        try:
            number1 = float(input("Enter first number: "))
            number2 = float(input("Enter second number: "))
        except ValueError:
            print("Invalid input. Please enter a number.")
            continue

        if ans == '1':
            print(number1, "+", number2, "=", round(add(number1, number2),2))

        elif ans == '2':
            print(number1, "-", number2, "=", round(subtract(number1, number2),2))

        elif ans == '3':
            print(number1, "*", number2, "=", round(multiply(number1, number2),2))

        elif ans == '4':
            print(number1, "/", number2, "=", round(divide(number1, number2),2))
        
        cont=input("Do you want to continue calculating?: ")
        if cont=="yes" or cont=="YES" or cont=="Yes":
            continue
        else:
            break
        
    else:
        print("Invalid Input")
