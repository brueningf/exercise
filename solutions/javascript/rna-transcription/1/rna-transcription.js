//
// This is only a SKELETON file for the 'RNA Transcription' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

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
