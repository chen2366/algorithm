<?php

/**
 * 简单选择排序
 */
class SimpleSelectSort
{
    /*
     * 简单选择排序
     */
    public static function sort($array)
    {
        $length = count($array);

        for ($i=0; $i < $length; $i++) {
            $k = $i;
            for ($j=$i+1; $j < $length; $j++) {
                if ($array[$k] > $array[$j]) {
                    $k = $j;
                }
            }

            $tmp = $array[$i];
            $array[$i] = $array[$k];
            $array[$k] = $tmp;
        }

        return $array;
    }
}

echo implode(',', SimpleSelectSort::sort([1, 7, 4, 2, 9, 3, 8]));
