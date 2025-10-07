//
// This is only a SKELETON file for the 'Resistor Color Duo' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

export const value = colors => {
    let code = '';

    for (var i = 0, len = colors.length; i < len; i++) {
        code += CODES.indexOf(colors[i])

        if(code.length == 2) break;
    }
    
    return parseInt(code);
};

export const CODES = ["black","brown","red","orange","yellow","green","blue","violet","grey","white"];
