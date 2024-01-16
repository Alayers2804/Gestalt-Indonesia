// 1. Buatlah sebuah array menggunakan script dengan contoh array "Volvo", "BMW",
// "Toyota","Kijang". Lalu buatlah sebuah perulangan dengan keluaran sebagai berikut :

var arrayOfCar = ["Volvo", "BMW", "Toyota", "Kijang"];

// a. "Volvo","BMW","Toyota","Kijang"
var outputA = arrayOfCar.join(",");

// b. "BMW","Volvo","Toyota","Kijang"
var outputB = [arrayOfCar[1], arrayOfCar[0], arrayOfCar[2], arrayOfCar[3]].join(
  ","
);

// c. "Toyota","Volvo","BMW","Kijang"
var outputC = [arrayOfCar[2], arrayOfCar[0], arrayOfCar[1], arrayOfCar[3]].join(
  ","
);

// d. "Kijang","Toyota","Volvo","BMW"
var outputD = [arrayOfCar[3], arrayOfCar[2], arrayOfCar[0], arrayOfCar[1]].join(
  ","
);

console.log(outputA);
console.log(outputB);
console.log(outputC);
console.log(outputD);
