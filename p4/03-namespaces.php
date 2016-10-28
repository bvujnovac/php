<?php

//namespace needs to go first in file

namespace Ferit;  //grupiranje koda pod odredeno ime. sve sto je ime klase je kao namespace, kao direktorij

class Student
{

}

$student1 = new Student(); //pretpostavlja po namespace-u
var_dump($student1);

$student2 = new \Ferit\Student(); //zajebi namespace (\)
var_dump($student2);


/////////////////////////////////////

namespace Inchoo;

class Developer
{

}

$developer1 = new Developer();
var_dump($developer1);




/**
 * @note:
 *  - how do we call \Ferit\Student here under Inchoo namespace?
 *  - show "use"
 *  - every class should be in separate file !!
 */
