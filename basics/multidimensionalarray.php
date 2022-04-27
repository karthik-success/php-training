
<?php
$resume=[
    [
        "name"=>"karthik ",
        "age"=>'22 ',
        "skill"=>['python','machinelearning','tableau'],
        "emailid"=>"karthik@gmail.com ",
        "job role"=>"Data analysist ",
        "phone no"=>6383858698
    ],
    [
        "name"=>"cheran ",
        "age"=>'28 ' ,
        "skill"=>['php','laravel','mysql'],
        "emailid"=>"cheran@gmail.com ",
        "job role"=>"fullstack developer ",
        "phone no"=>6383855671

    ],
    [
        "name"=>"jithesh ",
        "age"=>'24 ' ,
        "skill"=>['javascript','css','html'],
        "emailid"=>"cheran@gmail.com ",
        "job role"=>"backend developer ",
        "phone no"=>6383855645 

    ]

];
//echo $resume[0]["skill"][1];
foreach($resume as $res){
     //var_dump ($resume);
    echo $res['age'];
}

?>