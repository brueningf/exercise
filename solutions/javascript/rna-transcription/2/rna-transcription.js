export const toRna = dna => dna.replace(
    new RegExp(Object.keys(COMPLEMENTS).join("|"),"gi"),
    matched => COMPLEMENTS[matched]
)

export const COMPLEMENTS = {
    'G': 'C',
    'C': 'G',
    'T': 'A',
    'A': 'U',
}
