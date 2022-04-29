
<!DOCTYPE html>
<html lang="en">
<body>
<?php
$resumes=[
    [
        "name"=>"karthik",
        "age"=>22,
        "emailid"=>"karthik@gmail.com ",
        "phone_no"=>638385879,
        "about_me"=>"I am an Aspiring Engineer who loves to code",
        "skills"=>['tableau','machinelearning','mysql'],
        "backup_email_id"=>"karthikcrazy@gmail.com ",
        "job_role"=>"Data analysist ",
        "education"=>"BCA", 
        "college_name"=>"Jain_College",
        "school_name"=>"Alagappa",
        "school_percentage"=>"90%",
        "college_percentage"=>"70%",
        "hobby"=>["Book reading","cycling"],
        "sports"=>['cricket','volleyball','Shuttle'],
        "qualities"=>['Leadership','Determination','Loyalty'],
        "address"=>[
            "current_address"=>[
                "doornumber"=>1,
                "street_name"=>"Purasawalkam",
                "city"=>"Chennai",
                "pincode"=>600023
        
            ],
            "permanent_address"=>[
                "doornumber"=>2,
                "street_name"=>"aynavaram",
                "city"=>"Chennai",
                "pincode"=>600030
            ]         

        ],
        "salary"=>[
            "current_salary"=>[
                "salary_range"=>"3LPA-5LPA"

            ],
            "expected_salary"=>[
                "salary_range"=>"7LPA-10LPA"
            ]


        ]  
    ],
    [
        "name"=>"Cheran",
        "age"=>28,
        "emailid"=>"cheran@gmail.com ",
        "phone_no"=>9840270450,
        "about_me"=>"I am a Senior developer who train developers",
        "skills"=>['php','laravel','mysql'],
        "backup_email_id"=>"cherannaruto@gmail.com ",
        "job_role"=>"Senior Developer ",
        "education"=>"Mechanical Engineer", 
        "college_name"=>"Vaishnava_College",
        "school_name"=>"Anitha",
        "school_percentage"=>"80%",
        "college_percentage"=>"75%",
        "hobby"=>["Book reading","watching series"],
        "sports"=>['basketball','golf','Shuttle'],
        "qualities"=>['Leadership','Determination'],
        "address"=>[
            "current_address"=>[
                "doornumber"=>10,
                "street_name"=>"kodambakam",
                "city"=>"Chennai",
                "pincode"=>600040
        
            ],
            "permanent_address"=>[
                "doornumber"=>20,
                "street_name"=>"Nungabakam",
                "city"=>"Chennai",
                "pincode"=>600045
            ]         

        ],
        "salary"=>[
            "current_salary"=>[
                "salary_range"=>"7LPA-9LPA"

            ],
            "expected_salary"=>[
                "salary_range"=>"11LPA-12LPA"
            ]


        ]


    ],
    [
        "name"=>"Jithesh",
        "age"=>24,
        "emailid"=>"jithesh@gmail.com ",
        "phone_no"=>8438489524,
        "about_me"=>"I am a Junior developer who loves to code",
        "skills"=>['html','java_script','mysql'],
        "backup_email_id"=>"jitheshsasuke@gmail.com ",
        "job_role"=>"Junior Developer ",
        "education"=>"Computer Engineer", 
        "college_name"=>"Veltech_College",
        "school_name"=>"Seventhday",
        "school_percentage"=>"79%",
        "college_percentage"=>"81%",
        "hobby"=>["Trecking","Gymming"],
        "sports"=>['football','throwball','Shuttle'],
        "qualities"=>['Aspiring','Determination'],
        "address"=>[
            "current_address"=>[
                "doornumber"=>21,
                "street_name"=>"tnagar",
                "city"=>"Chennai",
                "pincode"=>600029
        
            ],
            "permanent_address"=>[
                "doornumber"=>69,
                "street_name"=>"pallavaram",
                "city"=>"Chennai",
                "pincode"=>600073
            ]         

        ],
        "salary"=>[
            "current_salary"=>[
                "salary_range"=>"2LPA-4LPA"

            ],
            "expected_salary"=>[
                "salary_range"=>"5LPA-7LPA"
            ]


        ]



    ],

    
    
];
//echo $resume[0][0];
foreach($resumes as $resume){
    echo "Name =>".$resume['name']."\n"."<br>";
    echo "Age =>".$resume['age']."\n"."<br>";
    echo "Email_id =>".$resume['emailid']."\n"."<br>";
    echo "Phone_no =>".$resume['phone_no']."\n"."<br>";
    echo "About_me =>".$resume['about_me']."\n"."<br>";
    echo "Skills =>".$resume['skills']."\n"."<br>";
    echo "Backup_Email_id =>".$resume['backup_email_id']."\n"."<br>";
    echo "Job_role =>".$resume['job_role']."\n.<br>";
    echo "Education =>".$resume['education']."\n"."<br>";
    echo "College_name =>".$resume['college_name']."\n"."<br>";
    echo "School_name =>".$resume['school_name']."\n"."<br>";
    echo "School_percentage =>".$resume['school_percentage']."\n"."<br>";
    echo "College_percentage =>".$resume['college_percentage']."\n.<br>";
    foreach($resume['hobby'] as $hobby){
        echo "Hobby ::"."$hobby"."<br>";
    }
  
    foreach($resume['sports'] as $sports){
        echo "Sports ::"."$sports"."<br>";
    }
    foreach($resume['qualities'] as $qualities){
        echo "Qualities ::"."$qualities"."<br>";
    }

    foreach($resume['address'] as $address){
        echo "Address :: Door_number".$address["doornumber"]."\n"."<br>" ;
        echo "Address :: street_name".$address["street_name"]."\n"."<br>";
        echo "Address :: city".$address["city"]."\n"."<br>";
        echo "Address ::  pincode".$address["pincode"]."\n"."<br>";

    }
    foreach($resume["salary"] as $salary){
        echo "Salary=>".$salary["salary_range"]."\n"."<br>";
      
    }
    echo "<br>";



   

}

    //echo "Personal information is <br>";
    //echo  "<pre>";
    //var_dump ($resume) ;
    //echo $resume[0][0];
    //echo $resume["name"];
    //echo "</pre>";

?>
</body>
</html>

