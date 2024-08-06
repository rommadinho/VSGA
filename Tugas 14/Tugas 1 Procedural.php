<?php
$participants = array();

function addParticipant($name, $age) {
    global $participants;
    $participants[] = array("name" => $name, "age" => $age);
}

function displayParticipants() {
    global $participants;
    foreach ($participants as $participant) {
        echo "Name: {$participant['name']}, Age: {$participant['age']}\n";
    }
}

addParticipant("Alice", 25);
addParticipant("Bob", 30);
displayParticipants();
?>
