console.time("Time taken");

var sum = 0
for (var i = 0; i < 100000000; i++) {
    sum +=i
}
console.log(sum);

console.timeEnd("Time taken");