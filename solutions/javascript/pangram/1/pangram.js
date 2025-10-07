const alphabet = ("abcdefghijklmnopqrstuvwxyz").split("")

export const isPangram = (str) => {    
    return str ? alphabet.every(e => str.toLowerCase().match(/[a-zA-Z]/g).includes(e)) : false
};
