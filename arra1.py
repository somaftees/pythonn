mylist = [1,2,3,4,5]
print(mylist[1:4])
print(mylist[2])
print(mylist[-1])
print(mylist[:3])
print(mylist[3:])
print(mylist[-4:-2])
print(mylist[::-1])

mylist[3]=6
print(mylist)
mylist.remove(2)
print(mylist)
mylist.append(0)
print(mylist)


if 6 in mylist:
    print("yes")
else:
    print("No")

a=["ahmed","Hala"]
print(a)

c=["tasnim",1]
print(c)

mytuble =[10,11,12,13]
del mylist[0]
sum= mylist + mytuble
print(sum)
mylist.extend(sum)
print(mylist)
mylist.insert(0,"soma")
print(mylist)



tubble = (22,11,55,88)
print(tubble)
y = list(tubble)
y[2]=1000
print(tubble)
print(y)
tubble = tuple(y)
print(tubble)


seet={100,1000,5000}
print(seet)