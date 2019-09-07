<?php
function get_json($nama,$address,$hobbies,$is_married,$school,$skills){
    $data = array();
    $data["nama"]       = $nama;
    $data["address"]    = $address;
    $data["hobbies"]    = $hobbies;
    $data["is_married"] = $is_married;
    $data["school"]     = $school;
    $data["skills"]     = $skills;
    return json_encode($data);
}

header('Content-Type: application/json');
echo get_json("panji gumilar","jakarta",array('badmiton','basket'),true,array("highSchool"=>"smansa kng","university"=>"poltek"),new ArrayObject(array("php","ci","dll")));
