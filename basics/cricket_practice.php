
<!DOCTYPE html>
<html lang="en">
<body>
<?php

$crickets=[
    [
        "match_date"=>"21/07/2020",
        "team_no_one"=>"Csk",
        "team_no_two"=>"Mumbai",
        "player_list_1"=>["Dhoni","Raina","Jadeja","Santner","uthappa","bravo","Dube","Jordan","Gaikwad","Chahar","Pretourius"],
        "substitute_list_1"=>["Murali Vijay","Murali","Arun","Hemang","Geogre"],
        "player_list_2"=>["Rohit","Ishan","Suryakumar","Tripathi","Pollard","Hardikpandya","Krunalpandya","Harbajan Singh","Bumrah","Murugan","Dewald"],
        "substitute_list_2"=>["Richard","Davy","Richard","Sushant","Aiden"],
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
       "team_captain_1"=>"Dhoni",
       "team_vicecaptain_1"=>'Raina',
       "bowler_list_1"=>["Chahar","Santner","Jordan","Pretourius"],
       "batsman_list_1"=>["Dhoni","Raina","uthappa","Gaikwad"],
       "allrounder_list_1"=>["Jadeja","bravo","Dube"],
       "team_captain_2"=>"Rohit",
       "team_vicecaptain_2"=>'Pollard',
       "bowler_list_2"=>["Harbajan Singh","Bumrah","Murugan","Dewald"],
       "batsman_list_2"=>["Rohit","Ishan","Suryakumar","Tripathi"],
       "allrounder_list_2"=>["Pollard","Hardikpandya","Krunalpandya"],
       "highest_wicket_taker"=>"Chahar",
       "most_run_scorer"=>"uthappa",
       "lowest_wicket_taker"=>"bravo",
       "lowest_run_scorer"=>"gaikwad",
       "place"=>["stadium_name"=>"Eden Garden","state"=>"Kolkata",'country'=>"India"],
       "sponser_name"=>"Tata",

    ],
    [
        "match_date"=>"12/08/2020",
        "team_no_one"=>"Rcb",
        "team_no_two"=>"Rajastan",
        "player_list_1"=>["Samson","Butler","Yashasvi","Jaiswal","Stuart","Binny","Ajit Chandila","Aditya","Samad","Johan","Kevon Cooper"],
        "substitute_list_1"=>["Manvinder","Debabrata","Sarabjit Ladda","Bisla","Taylor"],
        "player_list_2"=>["Kholi","Divillers","Maxwell","Padikal","Siraj","Chahal","Hazlewood","Kallis","Shahbaz Ahmed","Rajat","Rutherford"],
        "substitute_list_2"=>["Vijay","Morgan","Pietersen","Sriram","Ross"],
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
       "team_captain_1"=>"Kholi",
       "team_vicecaptain_1"=>'Divillers',
       "bowler_list_1"=>["Siraj","Chahal","Hazlewood"],
       "batsman_list_1"=>["Kholi","Divillers","Padikal","Rutherford"],
       "allrounder_list_1"=>["Maxwell","Kallis","Shahbaz Ahmed","Rajat"],
       "team_captain_2"=>"Samson",
       "team_vicecaptain_2"=>'Butler',
       "bowler_list_2"=>["Samad","Johan","Kevon Cooper"],
       "batsman_list_2"=>["Samson","Butler","Yashasvi","Jaiswal"],
       "allrounder_2"=>["Stuart","Binny","Ajit Chandila","Aditya"],
       "highest_wicket_taker"=>"Samad",
       "most_run_scorer"=>"Butler",
       "lowest_wicket_taker"=>"Kevon",
       "lowest_run_scorer"=>"Johan",
       "place"=>["stadium_name"=>"Wank Heda","state"=>"Mumbai",'country'=>"India"],
       "sponser_name"=>"Pepsi",

    ]



];

foreach($crickets as $cricket){
    echo "Match Date=>".$cricket["match_date"]."<br>";
    echo "Team NO One =>".$cricket['team_no_one']."\n"."<br>";
    echo "Team NO Two =>".$cricket['team_no_two']."\n"."<br>";
    foreach($cricket["player_list_1"] as $player_list){
        echo "Player List Team1 :".$player_list."\n"."<br>";
    }
    foreach($cricket["substitute_list_1"] as $substitute_list){
        echo "Substitude List Team1 :".$substitute_list."\n"."<br>";
    }
    foreach($cricket["player_list_2"] as $player_list){
        echo "Player List Team2 :".$player_list."\n"."<br>";
    }
    foreach($cricket["substitute_list_2"] as $substitute_list){
        echo "Substitude List Team2 :".$substitute_list."\n"."<br>";
    }
   
    foreach($cricket["umpire"] as $umpire){
        echo "Umpire Name::".$umpire["name"]."\n"."<br>";
        echo "Umpire Age::".$umpire["age"]."\n"."<br>";
        echo "Umpire Experience::".$umpire["experience"]."\n"."<br>";
    }
    foreach($cricket["commentators"] as $commentators){
        echo "Commentators ::".$commentators."\n"."<br>";}
    echo "Team Captain Team1 :=>".$cricket['team_captain_1']."\n"."<br>";
    echo "Team vicecaptain Team1 :=>".$cricket['team_vicecaptain_1']."\n"."<br>";
    echo "Team Captain Team2 :=>".$cricket['team_captain_2']."\n"."<br>";
    echo "Team vicecaptain Team1 :=>".$cricket['team_vicecaptain_2']."\n"."<br>";
    foreach($cricket["bowler_list_1"] as $bowler_list){
        echo "Bowler List Team1::".$bowler_list."\n"."<br>";
    }
    foreach($cricket["batsman_list_1"] as $batsman_list){
        echo "Batsman List Team1::".$batsman_list."\n"."<br>";
    }
    foreach($cricket["allrounder_list_1"] as $allrounder_list){
        echo "Allrounder List Team1::".$allrounder_list."\n"."<br>";
    }
    foreach($cricket["bowler_list_2"] as $bowler_list){
        echo "Bowler List Team2::".$bowler_list."\n"."<br>";
    }
    foreach($cricket["batsman_list_2"] as $batsman_list){
        echo "Batsman List Team2::".$batsman_list."\n"."<br>";
    }
    foreach($cricket["allrounder_list_2"] as $allrounder_list){
        echo "Allrounder List Team2::".$allrounder_list."\n"."<br>";
    }

    echo "Highest_wicket_taker=>".$cricket['highest_wicket_taker']."\n"."<br>";
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
