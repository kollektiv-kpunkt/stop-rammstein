<?php
$supporterCount = supporterCount();
if ($supporterCount < 20) {
    $supporterCount = 20;
}

/**
 * @param $supporterCount
 * @param int $goal
 * @return int
 */
function setGoal($supporterCount, $goal = 500 ) {
    if ($goal >= 5000) {
        return 10000;
    }
    if ($supporterCount >= $goal * 0.75) {
        return setGoal($supporterCount, $goal + 500);
    } else {
        return $goal;
    }
}

/**
 * https://stackoverflow.com/a/14903479
 * @param $number
 * @param int $denominator
 * @return float|int
 */
function floorToFraction($number, $denominator = 1)
{
    $x = $number * $denominator;
    $x = floor($x);
    $x = $x / $denominator;
    return $x;
}

$goal = setGoal($supporterCount);
$progress = floorToFraction($supporterCount / $goal * 100, 20);
$progress = $progress > 100 ? 100 : $progress;
?>

<div class="sr-progress-bar relative pt-4" data-progress="{{$progress}}" data-goal={{$supporterCount}}>
    <div class="sr-progress-bar__icon mt-2 mb-1 opacity-0">
        <i class="icofont-duotone icofont-last block w-fit" style="transform: translateX(calc(-100% + 0.5em))"></i>
    </div>
    <div class="sr-progress-bar__wrapper h-6 rounded-full w-full bg-white flex p-1">
        <div class="sr-progress-bar__inner w-0 h-full bg-primary rounded-full flex justify-center items-center">
            <span class="text-2xs text-white opacity-0 whitespace-nowrap">0%</span>
        </div>
    </div>
    <div class="sr-progressbar__count text-end">
        <span class="text-2xs"><span class="sr-progress-bar__number-of-people">0</span> / {{number_format($goal, 0, ".", "'");}}</span>
    </div>
</div>
