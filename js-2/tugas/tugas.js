let fruits = ["Mango", "Strawberry"];

// Nomor 1.
fruits.push("Watermelon");

// Nomor 2.
// pada kondisi kedua, jika menambah item harus 0
fruits.splice(0, 0, "Banana");
// Untuk menambahkan Item Di awal
// fruits.unshift("banana");

// Nomor 3.
console.log(fruits);

// Nomor 4.
let mangoData = fruits.filter(fr => {
    return fr == "Mango";
});

console.log(mangoData);

// node .\pertemuan-5\tugas\tugas.js