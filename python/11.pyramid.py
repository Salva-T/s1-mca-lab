n = int(input("Enter the limit: "))
for i in range(1,n+1):
    num = i
    for x in range(1,i+1):
        print(i*x,end=" ")
    print("\n")