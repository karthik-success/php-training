<?php declare(strict_types=1);
function Voting_age(int $age)
{
    if ($age <=17){
        echo "Not Eligibe for voting";
    }
    else{
        echo "Eligible for voting";
    }

}

Voting_age(19)

?>