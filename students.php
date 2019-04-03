<?php

class Students {

    public function getStudentFirstName(){
        $studentFN = array("Taavi", "Harri", "Helli", "Bobby",
			"Jonna", "Audrey", "James", "Lucy", "Tommy",
			"Andy", "Jonni");                        
    return $studentFN;
    }

    public function getStudentLastName(){
        $studentLN = array("Cooper", "Truman", "Johnson", "Briggs",
			"Heinälä", "Horne", "Hurley", "Moran", "Hill",
			"Brennan", "Smith");                        
        return $studentLN;
    }

    public function getStudentNames(){	
	$studentNames = "Taavi Cooper, Harri Truman, Helli Johnson, " .
			"Bobby Briggs, Jonna Heinälä, Audrey Horne, " .
			"James Hurley, Lucy Moran, Tommy Hill, " .
			"Andy Brennan, Jonni Smith";			
	return $studentNames;	
    }
}

?>