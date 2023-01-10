// Mohammad Ilham Alfarizqi
// Nomor 1
let nomor_1 = '';
    for (let a = 0; a < 10; a++) {
        for (let b = 0; b <= a; b++) {
            nomor_1 += '*';
        }
        nomor_1 += '\n';
    }

console.log("-. Nomor 1 :");
console.log(nomor_1);

// Nomor 2
let nomor_2 = '';
    for (let a = 0; a < 10; a++) {
        for (let b = 10; b > a; b--) {
            nomor_2 += '*';
        }
        nomor_2 += '\n';
    }

console.log("-. Nomor 2 :");
console.log(nomor_2);

// Nomor 3
let nomor_3 = '';
    for (a = 0; a <= 10; a++) {
        for (let b = 0; b <= 10 - a; b++) {
            nomor_3 += ' ';
        }
        for (let c = 0; c < 2 * a - 1; c++){
            nomor_3 += '*';
        }
        nomor_3 += '\n';
    }

console.log("-. Nomor 3 :");
console.log(nomor_3);

// Nomor 4
let nomor_4 = '';

    for (let a = 0; a <= 10; a++) {
        for (let b = 0; b <= 10 - a; b++) {
            nomor_4 += ' ';
        }
        for (let c = 0; c < 2 * a - 1; c++){
            nomor_4 += '*';
        }
        nomor_4 += '\n';
    }
    for (let a = 0; a <= 10; a++) {
        for (let b = 0; b <= a; b++) {
            nomor_4 += ' ';
        }
        for (let c = 0; c < 2 * (10-a) - 1; c++){
            nomor_4 += '*';
        }
        nomor_4 += '\n';
    }

console.log("-. Nomor 4 :");
console.log(nomor_4);

// node .\tugas-1\tugas-1.js
