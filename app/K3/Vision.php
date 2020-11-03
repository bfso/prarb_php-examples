<?php
namespace App\K3;

class Vision {
    /**
     * @var int
     */
    protected $vision = 2;

    public function __construct($vision = 2) {
        $this->vision = $vision;
    }

    public function hasVision($currentPositionX,$currentPositionY,$fieldI,$fieldJ) {
        if($fieldI >= ($currentPositionX+$this->vision) && $fieldJ <= ($currentPositionY+$this->vision)){
            return false;
        }

        if($fieldI <= ($currentPositionX+$this->vision) && $fieldJ >= ($currentPositionY+$this->vision)){
            return false;
        }

        if($fieldI >= ($currentPositionX-$this->vision) && $fieldJ <= ($currentPositionY-$this->vision)){
            return false;
        }

        if($fieldI <= ($currentPositionX-$this->vision) && $fieldJ >= ($currentPositionY-$this->vision)){
            return false;
        }

        if($fieldI >= ($currentPositionX+$this->vision) && $fieldJ >= ($currentPositionY+$this->vision)){
            return false;
        }

        if($fieldI <= ($currentPositionX-$this->vision) && $fieldJ <= ($currentPositionY-$this->vision)){
            return false;
        }

        return true;
    }

    public function increase() {
        $this->vision ++;
    }
}