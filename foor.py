i = 0
while i < 11:
    i += 1
    if i % 2 == 0:
        continue
    print(i)
    
def summ(a,b):
        return a + b
     
print(summ(2,19))

def square(x):
    return x * x

for  i in range(1,16):
    print("The square of", i, "is", square(i), ".")
   