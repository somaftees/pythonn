number = 250
bill=0

if number <= 100:
    bill=0
elif number <= 200:
    bill=(number-100)*5
elif number > 200:
    bill=500+(number-200)*10
    
print(bill)
print(f"%d"%bill)
