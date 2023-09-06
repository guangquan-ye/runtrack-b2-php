<?php

function my_str_search(string $haystack, string $needle): int {
    $count = 0;

    if (isset($haystack) && isset($needle)) {
        $haystackLength = 0;
        while (isset($haystack[$haystackLength])) {
            $haystackLength++;
        }

        for ($i = 0; $i < $haystackLength; $i++) {
            if ($haystack[$i] == $needle) {
                $count++;
            }
        }
    }

    return $count;
}

$result = my_str_search("La Plateforme", "e");
echo $result;

?>