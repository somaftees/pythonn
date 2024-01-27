gender=input("enter gender ")
age = int(input("enter age "))

if gender == "female":
   if age < 21:
      print("she is young girl")
   else:
       print("she is old girl") 
      
elif gender == "male":
   if age < 21:
      print("he is young boy")  
   else:
       print("he is old boy")     
else:
    print("invalid")
      