// 2. Buatkah sebuah perulangan dari angka 1 sampai 10 dengan contoh hasil keluaran sebagai
// berikut:
// - 01
// - 002
// - 0003
// - 00004
// - 000005
// - 6000000
// - 70000000
// - 800000000
// - 9000000000
// - 10000000000

var printedLine = "";

for (let i = 1; i < 10; i++) {
  for (let j = 1; j <= i; j++) {
    printedLine += "0";
  }
  console.log(printedLine);
}
