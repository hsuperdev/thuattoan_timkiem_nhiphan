<?php
    function binarySearch(array $numbers, int $needle): bool
    {
        $start = 0;
        $end = count($numbers) - 1;
        while ($start <= $end) {
            $mid = (int)(($start + $end) / 2);
            if ($numbers[$mid] > $needle) {
                $end = $mid - 1;
            } else if ($numbers[$mid] < $needle) {
                $start = $mid + 1;
            } else {
                return TRUE;
            }
        }
        return FALSE;
    }

    $arr = [1, 2, 3, 4, 5];
    if (binarySearch($arr, 11)) {
        echo "Tim thay chuoi";
    } else {
        echo "Khong tim thay chuoi";
    }
?>