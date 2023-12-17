<?php 

class gwa {

    public $unit1;
    public $unit2;
    public $unit3;
    public $grade1;
    public $grade2;
    public $grade3;

    public function __construct(float $useru1, float $useru2, float $useru3, float $userg1, float $userg2, float $userg3) {

        $this->unit1 = $useru1;
        $this->unit2 = $useru2;
        $this->unit3 = $useru3;
        $this->grade1 = $userg1;
        $this->grade2 = $userg2;
        $this->grade3 = $userg3;

    }

    public function getGWA() {

        $getGrade = ($this->unit1 * $this->grade1) +
                    ($this->unit2 * $this->grade2) +
                    ($this->unit3 * $this->grade3);

        $getUnit = $this->unit1 + $this->unit2 + $this->unit3;

        if($getUnit == 0) {

            return "N/A";
        }

        $result = $getGrade / $getUnit;

        return $result;

    }
}




?>