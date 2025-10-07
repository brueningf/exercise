
export const colorCode = (color) => {
    return COLORS.findIndex(code => {
        return code == color;
    })
};

export const COLORS = ["black","brown","red","orange","yellow","green","blue","violet","grey","white"];
