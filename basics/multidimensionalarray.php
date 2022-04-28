
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
        "skills"=>['tableau','machinelearning','mysql'],
        "backup_email_id"=>"karthikcrazy@gmail.com ",
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
    ],
    [
        "name"=>"cheran",
        "age"=>28,
        "emailid"=>"cheran@gmail.com ",
        "phoneNo"=>6383854569,
        "about_me"=>"I am an Aspiring Engineer who loves to code and I am senior developer",
        "skills"=>['php','laravel','mysql','mongodb','css'],
        "backup_email_id"=>"cheransengodiayan@gmail.com ",
        "job_role"=>"Senior developer ",
        "education"=>"mechanical engineer", 
        "college_name"=>"savitha_College",
        "school_name"=>"satya",
        "school_percentage"=>"80%",
        "College_percentage"=>"750%",
        "hobby"=>"Book reading",
        "sports"=>['cricket','volleyball','Shuttle','basketball'],
        "qualities"=>['Leadership','Determination','Loyalty','good performer'],
        "address"=>[
            "current_address"=>[
                "doornumber"=>2,
                "street_name"=>"tnagar",
                "city"=>"Chennai",
                "pincode"=>600027
        
        ],
        "permanent_address"=>[
            "doornumber"=>5,
            "street_name"=>"kodambakam",
            "city"=>"Chennai",
            "pincode"=>600035
    ]         

    ]
           
    ],
    "salary"=>[
        "current_salary"=>[
            "salary_range"=>"5LPA-7LPA"
    ],
    "expected_salary"=>[
        "salary_range"=>"9LPA-11LPA"
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

