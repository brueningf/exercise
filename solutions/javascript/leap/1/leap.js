export const isLeap = (year) => !(year % 4) && !!(year % 100)  || !(year % 4) && !(year % 400)
