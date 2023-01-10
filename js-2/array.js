// Nilai array 1
let siswa = ["sss", "aaa", "ccc"];

// Memanggil array ke-2
console.log(siswa);

// Menambah nilai array cara 2
siswa[3] = "ddd";
siswa[4] = "eee";

console.log(siswa);

// Menambah Nilai Array cara 3
siswa.push("fff", "ggg");

console.log(siswa);

// Menampilkan panjang array
console.log(siswa.length);

// Pengecekan Array
console.log(Array.isArray(siswa));

// Menghapus 1 Array (Dari Belakang)
siswa.pop();

// Update isi Index
siswa[1] = "zzz";

console.log(siswa);

// Menghapus array menggunakan kondisi di array berapa, berapa item yang dihapus
siswa.splice(3, 1);

// Menghapus array menggunakan kondisi di array berapa ccc itu, dan berapa item yang dihapus
siswa.splice(siswa.indexOf('ccc'), 1);

for(let a = 0; a<siswa.length; a++){
    console.log(siswa[a]);
}

// Sama seperti For
siswa.map(sw => {
    console.log(sw);
});

// Untuk Memfilter
let dataSiswa = siswa.filter(sw => {
    return sw == "fff";
});

console.log(dataSiswa);

// Object
// Sama Seperti Array, bedanya objek menggunakan kurung kurawal, lalu kita bisa kasih key lalu value
let obj = {
    nama : "aaaaa",
    alamat : "Malang"
}

// Memanggil Objek
console.log(obj["alamat"]);

console.log(obj.nama);

let {nama} = obj;

console.log(nama);

// node .\pertemuan-5\array.js