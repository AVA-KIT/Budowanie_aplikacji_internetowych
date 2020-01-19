<?php
$students = [
['Ala' => 'Kowalska', 'Andrzej' => 'Fidor'],
['Ela' => 'Nowak', 'Janusz' => 'Pospolity'],
];

foreach ($students as $student) {
    foreach ($student as $name => $surname) {
        echo "$name ";
    }
}