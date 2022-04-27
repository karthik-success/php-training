
<!DOCTYPE html>
<html lang="en">
<body>
<?php
$resumes=[
    [
        "name"=>"karthik",
        "age"=>22,
        "emailid"=>"karthik@gmail.com ",
        "phoneNo"=>638385879,
        "about_me"=>"I am an Aspiring Engineer who loves to code",
        "skills"=>['php','laravel','mysql'],
        "email_id"=>"cheran@gmail.com ",
        "job_role"=>"Data analysist ",
        "education"=>"BCA", 
        "college_name"=>"Jain_College",
        "school_name"=>"Alagappa",
        "school_percentage"=>"90%",
        "College_percentage"=>"70%",
        "hobby"=>"Book reading",
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

    
    ];

foreach($resumes as $resume){
    //echo "Personal information is <br>";
    var_dump ($resume) ;
    //echo $resume["age"];
    //echo $resume["address"];
}



?>
</body>
</html>

