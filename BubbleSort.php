<?php

/**
 * 冒泡排序
 */
class BubbleSort
{
    /*
     * 冒泡排序
     */
    public static function sort($array)
    {
        $length = count($array);

        for ($i = 0; $i < $length; $i++) {
            for ($j = $length - 1; $j > $i + 1; $j--) {
                if ($array[$j] < $array[$j - 1]) {
                    $tmp           = $array[$j];
                    $array[$j]     = $array[$j - 1];
                    $array[$j - 1] = $tmp;
                }
            }
        }
        return $array;
    }
}

echo implode(',', BubbleSort::sort([1, 7, 4, 2, 9, 3, 8]));
