<?php

function countPatternFormString($pattern, $string)
{
    // Measure the length of the sting
    $stringLength = strlen($string);
    // Measure the length of the pattern
    $patternLength = strlen($pattern);
    // Initialize the count
    $count = 0;

    // The loop will run until pattern searching is done inside the full string
    for ($i = 0; $i <= $stringLength - $patternLength; $i++) {
        // Sting will be searched again and again according to the length of the pattern
        for ($index = 0; $index < $patternLength; $index++)
            // If the pattern is not found, then break the loop
            if ($string[$i + $index] != $pattern[$index])
                break;
        // If the pattern is found, then increase the count
        if ($index == $patternLength) {
            // Increase the count
            $count++;
            // Reset the index
            $index = 0;
        }
    }
    // Return the count
    return $count;
}
/**
 * Calling the function
 */
$string = "tadadattaetadadadafa";
$pattern = "dada";
// Call the function and pass the string and pattern
echo countPatternFormString($pattern, $string);
