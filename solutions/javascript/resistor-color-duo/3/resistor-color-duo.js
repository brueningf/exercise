export const value = ([tens, ones]) => colorCode(tens) * 10 + colorCode(ones)

export const colorCode = color => COLORS.indexOf(color)

export const COLORS = ["black","brown","red","orange","yellow","green","blue","violet","grey","white"]
