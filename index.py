import time
start = time.time()

sum = 0
for i in range(100000000):
    sum += i
print(sum)

end = time.time()
print("Time taken: ")
print(str((end - start) * 1000) + "ms")