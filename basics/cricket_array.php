
<!DOCTYPE html>
<html lang="en">
<body>
<?php

$crickets=[
    [
        "match_date"=>"21/07/2020",
        "team_name"=>"Csk",
        "player_list"=>["Dhoni","Raina","Jadeja","Santner","uthappa","bravo","Dube","Jordan","Gaikwad","Chahar","Pretourius"],
        "substitute_list"=>["Murali Vijay","Murali","Arun","Hemang","Geogre"],
        "umpire"=>[

            "main_umpire"=>[
                "name"=>"Billy",
                "age"=>"40",
                "experience"=>"15"
        ],
        "third_umpire"=>[

            "name"=>"Aleem",
            "age"=>"45",
            "experience"=>"17"

        ]
        ],

       "commentators"=>["Harsha","Sunil Gavaskar"],
       "team_captain"=>"Dhoni",
       "team_vicecaptain"=>'Raina',
       "bowler_list"=>["Chahar","Santner","Jordan","Pretourius"],
       "batsman_list"=>["Dhoni","Raina","uthappa","Gaikwad"],
       "allrounder_list"=>["Jadeja","bravo","Dube"],
       "win_average"=>"65%",
       "loss_average"=>"35%",
       "toss_win_average"=>"78%",
       "toss_loss_average"=>"22%",
       "highest_wicket_taker"=>"Chahar",
       "most_run_scorer"=>"uthappa",
       "lowest_wicket_taker"=>"bravo",
       "lowest_run_scorer"=>"gaikwad",
       "place"=>["stadium_name"=>"Eden Garden","state"=>"Kolkata",'country'=>"India"],
       "sponser_name"=>"Tata",

    ],
    [
        "match_date"=>"12/08/2020",
        "team_name"=>"Rcb",
        "player_list"=>["Kholi","Divillers","Maxwell","Padikal","Siraj","Chahal","Hazlewood","Kallis","Shahbaz Ahmed","Rajat","Rutherford"],
        "substitute_list"=>["Vijay","Morgan","Pietersen","Sriram","Ross"],
        "umpire"=>[

            "main_umpire"=>[
                "name"=>"Dharmasena",
                "age"=>"50",
                "experience"=>"25"
        ],
        "third_umpire"=>[

            "name"=>"Richard",
            "age"=>"35",
            "experience"=>"7"

        ]
        ],

       "commentators"=>["Isa Gua","Michael Holding"],
       "team_captain"=>"Kholi",
       "team_vicecaptain"=>'Divillers',
       "bowler_list"=>["Siraj","Chahal","Hazlewood"],
       "batsman_list"=>["Kholi","Divillers","Padikal","Rutherford"],
       "allrounder_list"=>["Maxwell","Kallis","Shahbaz Ahmed","Rajat"],
       "win_average"=>"75%",
       "loss_average"=>"25%",
       "toss_win_average"=>"58%",
       "toss_loss_average"=>"42%",
       "highest_wicket_taker"=>"Chahal",
       "most_run_scorer"=>"Kholi",
       "lowest_wicket_taker"=>"Kallis",
       "lowest_run_scorer"=>"Padikal",
       "place"=>["stadium_name"=>"Wank Heda","state"=>"Mumbai",'country'=>"India"],
       "sponser_name"=>"Tata",


    ]



];

foreach($crickets as $cricket){
    echo "Match Date=>".$cricket["match_date"]."<br>";
    echo "Team Name =>".$cricket['team_name']."\n"."<br>";
    foreach($cricket["player_list"] as $player_list){
        echo "Player List:".$player_list."\n"."<br>";
    }
    foreach($cricket["substitute_list"] as $substitute_list){
        echo "Substitute List::".$substitute_list."\n"."<br>";
    }
    foreach($cricket["umpire"] as $umpire){
        echo "Umpire Name::".$umpire["name"]."\n"."<br>";
        echo "Umpire Age::".$umpire["age"]."\n"."<br>";
        echo "Umpire Experience::".$umpire["experience"]."\n"."<br>";
    }
    foreach($cricket["commentators"] as $commentators){
        echo "Commentators ::".$commentators."\n"."<br>";}
    echo "Team_captain =>".$cricket['team_captain']."\n"."<br>";
    echo "Team_vicecaptain =>".$cricket['team_vicecaptain']."\n"."<br>";
    foreach($cricket["bowler_list"] as $bowler_list){
        echo "Bowler List::".$bowler_list."\n"."<br>";
    }
    foreach($cricket["batsman_list"] as $batsman_list){
        echo "Batsman List::".$batsman_list."\n"."<br>";
    }
    foreach($cricket["allrounder_list"] as $allrounder_list){
        echo "Allrounder List::".$allrounder_list."\n"."<br>";
    }

    echo "Win_average =>".$cricket['win_average']."\n"."<br>";
    echo "Loss_average =>".$cricket['loss_average']."\n"."<br>";
    echo "Toss_win_average =>".$cricket['toss_win_average']."\n"."<br>";
    echo "Toss_loss_average =>".$cricket['toss_loss_average']."\n.<br>";
    echo "Highest_wicket_taker =>".$cricket['highest_wicket_taker']."\n"."<br>";
    echo "Most_run_scorer =>".$cricket['most_run_scorer']."\n"."<br>";
    echo "Lowest_wicket_taker =>".$cricket['lowest_wicket_taker']."\n"."<br>";
    echo "Lowest_run_scorer =>".$cricket['lowest_run_scorer']."\n"."<br>";
    echo "Sponser_name =>".$cricket['sponser_name']."\n.<br>";
    foreach($cricket["place"] as $place){
        echo "Place::".$place."\n"."<br>";
    }
 
    echo "<br>";
    

}


?>
</body>
</html>


