
// // Nomor 1
// let hasil_1 = '';
//     for (let a = 0; a < 10; a++) {
//         for (let b = 0; b <= a; b++) {
//             hasil_1 += '* ';
//         }
//         hasil_1 += '\n';
//     }
// console.log("-. Nomor 1 :");
// console.log(hasil_1);

// // Nomor 2
// let hasil_2 = '';
//     for (let a = 0; a < 10; a++) {
//         for (let b = 10; b > a; b--) {
//             hasil_2 += '* ';
//         }
//         hasil_2 += '\n';
//     }
// console.log("-. Nomor 2 :");
// console.log(hasil_2);

// // Nomor 3
// let hasil_3 = '';
//     for (let a = 0; a <= 10; a++) {
//         for (let b = a; b < 10; b++) {
//             hasil_3 += ' ';
//         }
//         for (let c = 0; c < a; c++){
//             hasil_3 += '* ';
//         }
//         hasil_3 += '\n';
//     }
// console.log("-. Nomor 3 :");
// console.log(hasil_3);

// Nomor 4
let hasil_4 = '';

    for (a = 0; a <= 10; a++) {
                for (let b = 0; b <= 10 - a; b++) {
                    hasil_4 += ' ';
                }
                for (let c = 0; c < 2 * a - 1; c++){
                    hasil_4 += '*';
                }
                hasil_4 += '\n';
        }
    for (let a = 0; a <= 10; a++) {
                for (let b = 0; b <= a; b++) {
                    hasil_4 += ' ';
                }
                for (let c = 0; c < 2 * (10-a) - 1; c++){
                    hasil_4 += '*';
                }
                hasil_4 += '\n';
        }
console.log("-. Nomor 4 :");
console.log(hasil_4);

// let hasil_4 = '';
// let a;
//     for (a = 0; a <= 9; a++) {
//         for (let b = 9 - 1; b >= a; b--) {
//             hasil_4 += ' ';
//         }
//         for (let c = 0; c <= a; c++){
//             hasil_4 += '* ';
//         }
//         hasil_4 += '\n';
//     }
//     if (a == 9 + 1) {
//         for (let a = 0; a <= 9 - 1; a++) {
//             for (let b = 0; b <= a; b++) {
//                 hasil_4 += ' ';
//             }
//             for (let c = a; c <= 9 - 1; c++) {
//                 hasil_4 += '* ';
//             }
//             hasil_4 += '\n';
//             }
//         }
// console.log("-. Nomor 4 :");
// console.log(hasil_4);

// node .\tugas-1\tugas-1.js