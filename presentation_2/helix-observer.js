const helix1 = document.getElementById('helix-1');
const helix2 = document.getElementById('helix-2');
const button = document.getElementsByTagName('button')[0];
const accepted = ['C', 'A', 'T', 'G'];

function filter() {
    let newVal1 = '';
    const str_val1 = helix1.value;
    for (let character of str_val1) {
        console.log(character);
        if (!accepted.includes(character)) {
            alert('Contains invalid DNA encoding!');
            helix1.value = '';
            return;
        }

        newVal1 += character;
    }

    let newVal2 = '';
    const str_val2 = helix2.value;
    for (character of str_val2) {
        if (!accepted.includes(character)) {
            alert('Contains invalid DNA encoding!');
            helix2.value = '';
            return;
        }

        newVal2 += character;
    }

    helix1.value = newVal1;
    helix2.value = newVal2;
}

function difference(helix1='', helix2='') {
    if (helix1.length != helix2.length) {
        alert('Two strands does not have equal length!');
        return;
    }

    const output1 = document.getElementById('output1');
    const output2 = document.getElementById('output2');

    let count_difference = 0;
    output1.innerHTML = '';
    output2.innerHTML = '';

    for (let index = 0, character = helix1.charAt(index); index < helix1.length; index++) {
        if (character != helix2.charAt(index)) {
            output1.innerHTML += `<b class='bg-red'>${character}</b>`;
            output2.innerHTML += `<b class='bg-red'>${helix2.charAt(index)}</b>`;
            count_difference++;
        } else {
            output1.innerHTML += `<b class='bg-green'>${character}</b>`;
            output2.innerHTML += `<b class='bg-green'>${character}</b>`;

        }
    }

    return count_difference;
}

button.onclick = () => {
    filter();

    const diff = difference(helix1.value, helix2.value);
    document.getElementById('count').innerText = `Difference = ${diff}`;
}
