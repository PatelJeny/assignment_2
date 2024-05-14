<?php
// Function to find if a given day is "Thursday" using switch
function findThursday($day) {
    switch ($day) {
        case 'Monday':
        case 'Tuesday':
        case 'Wednesday':
        case 'Thursday':
        case 'Friday':
        case 'Saturday':
        case 'Sunday':
            echo "$day is not Thursday.<br>";
            break;
        case 'Thursday':
            echo "$day is Thursday!<br>";
            break;
        default:
            echo "Invalid day!<br>";
            break;
    }
}

// Test the function with different days
findThursday('Monday');
findThursday('Thursday');
?>
