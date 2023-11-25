n = (int(input("Enter a number: ")))
factorial = 1

if n == 0:
    print("factorial of 0 is 1")
else:
    for i in range(1,n+1):
        factorial = i * factorial
    print("factorial of",n,"is",factorial)