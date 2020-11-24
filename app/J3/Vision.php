<?php

namespace App\J3;

class Vision {
    public static function hasVision($currentPositionX, $currentPositionY, $fieldI, $fieldJ, $visionRange = 2) {
        // This function returns true when a field (I,J) is in vision of the player (x,y)
        // Given you have the following map 0 with a player X and the vision is 2:
        //     0 1 2 3 4 5
        //
        // 0   0 0 0 0 0 0
        // 1   0 0|1|1 1 0
        // 2   0 0 1 X 1 0
        // 3   0 0 1 1 1 0
        // 4   0 0 0 0 0 0

        // When the following parameters are submitted to this function:
        // $currentPositionX = 3
        // $currentPositionY = 2
        // $fieldI = 2
        // $fieldJ = 1

        // Then the result must be true. (The Player has vision)

        if ($fieldI >= ($currentPositionX + $visionRange) && $fieldJ <= ($currentPositionY + $visionRange)) {
            return false;
        }

        if ($fieldI <= ($currentPositionX + $visionRange) && $fieldJ >= ($currentPositionY + $visionRange)) {
            return false;
        }

        if ($fieldI >= ($currentPositionX - $visionRange) && $fieldJ <= ($currentPositionY - $visionRange)) {
            return false;
        }

        if ($fieldI <= ($currentPositionX - $visionRange) && $fieldJ >= ($currentPositionY - $visionRange)) {
            return false;
        }

        if ($fieldI >= ($currentPositionX + $visionRange) && $fieldJ >= ($currentPositionY + $visionRange)) {
            return false;
        }

        if ($fieldI <= ($currentPositionX - $visionRange) && $fieldJ <= ($currentPositionY - $visionRange)) {
            return false;
        }

        return true;
    }
}