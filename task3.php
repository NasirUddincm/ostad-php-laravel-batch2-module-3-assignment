<?php

$grades = [85, 92, 78, 88, 95];
function sortedGradeDescending($grades) {
    rsort($grades);
    print_r($grades);
}
sortedGradeDescending($grades);