<?php

/**
 * Project: Pontoon
 * User: peterwilkins
 * Date: 11/11/2015
 * Time: 15:11
 */
class Connor implements Player
{

    public function stick(Hand $hand)
    {
        $scores = $hand->scoreHand();
        if($scores[0] >= 19 || $hand->count() == 5){
            return true;
        }
//        if(count($scores) > 1){  //todo ace in hand
//            if($scores[0] <= 10){
//                return false;
//            }
//        }

        return false;

    }
}