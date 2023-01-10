// penulisan Fungsi function nama-fungsi(parameter){}
// Fungsi yang tidak mengembalikan hasil
function text(){
    console.log("Hello World");
}
// Memanggil Fungsi
text();

function text_2(nama, alamat){
    console.log("namaku "+ nama +", alamatku "+ alamat);
}
// Memanggil Fungsi
text_2("ilham", "alfa");


// fungsi yang mengembalikan hasil
function text_3(num1, num2){
    return num1+num2;
}

// Memanggil fungsi yang mengembalikan hasil
console.log("Hasil = "+ text_3(5,2));


// Arrow Function
let kurang = (num1, num2) => num1-num2
// Memanggil Fungsi panah

console.log(kurang(6,2));

// node .\pertemuan-6\fungsi.js