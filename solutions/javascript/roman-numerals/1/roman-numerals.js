const numerals = {
    "M": 1000,
    "CM": 900,
    "D": 500,
    "CD": 400,
    "C": 100,
    "XC": 90,
    "L": 50,
    "XL": 40,
    "X": 10,
    "IX": 9,
    "V": 5,
    "IV": 4,
    "I": 1
};

export const toRoman = (number) => {
    let remainder = number;
    let result = '';

    for (let [roman, value] of Object.entries(numerals)) {
        result += roman.repeat(Math.floor(remainder / value));
        remainder %= value;
    }

    return result;
};


