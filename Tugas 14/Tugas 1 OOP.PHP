<?php
class Participant {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: $this->name, Age: $this->age";
    }
}

class ParticipantTable {
    private $participants = array();

    public function addParticipant($participant) {
        $this->participants[] = $participant;
    }

    public function displayParticipants() {
        foreach ($this->participants as $participant) {
            echo $participant . "\n";
        }
    }
}

$table = new ParticipantTable();
$table->addParticipant(new Participant("Alice", 25));
$table->addParticipant(new Participant("Bob", 30));
$table->displayParticipants();
?>
