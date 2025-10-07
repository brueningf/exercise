export const value = colors => {
    let code = '';

    for (var i = 0, len = colors.length; i < len; i++) {
        code += CODES.indexOf(colors[i])

        if(code.length == 2) break;
    }

    return parseInt(code);
};

export const CODES = ["black","brown","red","orange","yellow","green","blue","violet","grey","white"];
