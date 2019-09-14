<?php
    function biodata(){
        $data = array(   "name"=>"test",
            "age"=>"28",
            "adress"=>"Karanglo RT08/02",
            "hobbies"=>"Badminton",
            "is_married"=>false,
            "list_school"=>array(
                0=>[
                    "name_primary_school"=>"SD N Karanglo 02",
                    "year"=>"1998-2004",
                    "major"=>null
                ],
                1=>[
                    "name_secondary_school"=>"SMP N 2Jatibarang",
                    "year"=>"2003-2007",
                    "major"=>null
                ],
                2=>[
                    "name_primary_school"=>"SMK Bp Dukuhwaru",
                    "year"=>"2007-2010",
                    "major"=>"Teknik Otomotif"
                ],
                3=>[
                    "name_college"=>"STMIK Atma Luhur Pangkalpinang",
                    "year"=>"2011-2015",
                    "major"=>"Teknik Informatika"
                ]
            ),
            "interest_in_coding"=>true
        );
        return json_encode($data);
    }
    echo (biodata());
?>