<?php
/**
 * 排序算法实现
 */
class Sort
{
    /**
     * 插入排序
     *
     * @param array $array 未排序数组
     * @return array 已排序数组(从小到大)
     */
    public static function insertSort(array $array)
    {
    	# 数组长度
        $length = count($array);

        # 循环数组
        for ($i = 1; $i < $length; $i++) {
            $ai = $array[$i];

            # 从大到小循环已排序部分
            for ($j = $i - 1; $j > -1; $j--) {
            	# 如果当前要插入的元素小于当前已排序元素
                if ($ai < $array[$j]) {
	            	# 把当前要排序元素向前移动一位，（即交换两个元素位置）
                    $tmp           = $array[$j];
                    $array[$j]     = $array[$j + 1];
                    $array[$j + 1] = $tmp;
                } else {
                	# 结束对已排序部分循环
                    break;
                }
            }
        }

        return $array;
    }
}

// 插入排序
// echo implode(',', Sort::insertSort([6,3,1,8,9]));
