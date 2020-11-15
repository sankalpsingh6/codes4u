n = int(input("Enter Number Of Element : "))
a = list()
print("Enter n Elements")
for i in range(0,n):
	a.append(int(input()))
for i in range(0,n):
	for j in range(0,n - i - 1):
		if a[j] > a[j + 1]:
			temp = a[j]
			a[j] = a[j+1]
			a[j+1] = temp
print("Sorted Array")
for i in range(0,n):
        print(str(a[i])+" "),
