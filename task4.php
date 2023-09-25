<?php
// Create a multidimensional array called $studentGrades
$studentGrades = [
    "Student1" => ["Math" => 90, "English" => 85, "Science" => 92],
    "Student2" => ["Math" => 88, "English" => 76, "Science" => 89],
    "Student3" => ["Math" => 95, "English" => 91, "Science" => 87],
];

function averageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;        
        echo "Average grade for $student: $average\n";
    }
}
averageGrades($studentGrades);