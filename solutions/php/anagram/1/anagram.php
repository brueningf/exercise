<?php

function detectAnagrams($words, array $candidates): array
{
    $anagrams = [];

    if (!is_array($words)) {
        $words = [$words];
    }

    foreach ($words as $word) {
        foreach ($candidates as $candidate) {
            if (isAnagram($word, $candidate)) {
                $anagrams[] = $candidate;
            }
        }
    }

    return $anagrams;
}

function isAnagram($wordA, $wordB)
{
    $wordA = mb_strtolower($wordA);
    $wordB = mb_strtolower($wordB);

    if($wordA == $wordB) {
        return false;
    }

    $diff = array_diff(mb_str_split($wordA), mb_str_split($wordB));

    if (empty($diff)) {
        $wordArr = array_count_values(mb_str_split($wordA));
        $candidateArr = array_count_values(mb_str_split($wordB));

        $valueCountDiff = array_diff_assoc($candidateArr, $wordArr);

        if (empty($valueCountDiff)) {
            return true;
        }

        return false;
    }
}
