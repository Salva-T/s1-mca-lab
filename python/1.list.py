a = input("Enter list1 elements: ")
list1 = a.split() #splits a string into a list
print(list1)

b = input("Enter list2 elements: ")
list2 = b.split() 
print(list2)

if len(list1) == len(list2):
    print("Lists are of same length")
else:
    print("Lists are not of same length")


sum1 = 0
for i in list1:
    sum1 = sum1 + int(i)

sum2 = 0
for i in list2:
    sum2 = sum2 + int(i)

if sum1 == sum2:
    print("sums are of same value")

for i in list1:
    for j in list2:
        if i == j:
            print(i, "is duplicate")