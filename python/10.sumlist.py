list = []
n = int(input("Enter no. of elements: "))
for i in range(0,n):
    item = int(input("Enter element: "))
    list.append(item)
print("The sum of list is",sum(list))
