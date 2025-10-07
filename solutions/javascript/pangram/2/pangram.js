const alphabet = ("abcdefghijklmnopqrstuvwxyz").split("")

export const isPangram = (str) => {    
    return str ? alphabet.every(e => str.toLowerCase().includes(e)) : false
};
