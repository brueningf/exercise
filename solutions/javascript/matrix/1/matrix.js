export class Matrix {
    constructor(matrix) {
        this.rows = []
        this.columns = []

        matrix = matrix.split("\n");
        
        for(let row of matrix) {
            row = row.split(" ").map(Number)
            this.rows.push(row)

            for(const [index, value] of row.entries()) {
                this.columns[index] instanceof Array ? this.columns[index].push(value) : this.columns[index] = [value]
            }
        }
    }
}
