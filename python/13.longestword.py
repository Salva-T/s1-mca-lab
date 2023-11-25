list = []
l = int(input("Enter no. of words: "))
print("Enter a list of words: ")
for i in range(0,l):
    elem = str(input("Enter word: "))
    list.append(elem)
max=""
for x in list:
    if(len(x) > len(max)):
        max = x
print("longest word is :",max)