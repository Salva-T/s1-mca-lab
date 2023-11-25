file_name = input("Enter the file name: ")

parts = file_name.split(".")

#print(parts)
extension = parts[-1]

# print the extension
print("The extension of the file is:", extension)
