<?php
function calculatePercentageAndGrade($physics, $chemistry, $biology, $mathematics, $computer)
{
    $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
    $percentage = ($totalMarks / 500) * 100;

    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } elseif ($percentage >= 50) {
        $grade = 'D';
    } else {
        $grade = 'Fail';
    }

    return array('percentage' => $percentage, 'grade' => $grade);
}

$marks = array(
    'Physics' => 85,
    'Chemistry' => 90,
    'Biology' => 75,
    'Mathematics' => 80,
    'Computer' => 95
);

$result = calculatePercentageAndGrade($marks['Physics'], $marks['Chemistry'], $marks['Biology'], $marks['Mathematics'], $marks['Computer']);

echo "Percentage: " . $result['percentage'] . "%\n";
echo "Grade: " . $result['grade'] . "\n";
