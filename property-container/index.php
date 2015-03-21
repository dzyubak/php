<?php
/**
 * Copyright (C) 2014, 2015 Dmytro Dzyubak
 * 
 * This file is part of PropertyContainer.
 * 
 * PropertyContainer is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * PropertyContainer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with PropertyContainer. If not, see <http://www.gnu.org/licenses/>.
 */

function __autoload($className) {
    include $className.'.php';
}

try {
    $ab1 = new AddressBook();
    $ab1->setLastName("Williams");
    $ab1->setFirstName("John");
    $ab1->addProperty("g-plus", "https://plus.google.com/000000000000000000000/posts");
    $ab1->addProperty("fb", "https://www.facebook.com/old.example");
    $ab1->setProperty("fb", "https://www.facebook.com/new.example"); // property changed
    echo "Last Name: ".$ab1->getLastName()."<br />".
            "First Name: ".$ab1->getFirstName()."<br />".
            "Facebook: ".$ab1->getProperty("fb")."<br />".
            "Google+: ".$ab1->getProperty("g-plus")."<br /><br />";
} catch (Exception $e) {
    echo 'Caught exception: '.$e->getMessage().'<br />';
}

try {
    $ab2 = new AddressBook();
    $ab2->setLastName("White");
    $ab2->setFirstName("Linda");
    $ab2->addProperty("skype", "example7");
    $ab2->addProperty("linkedin", "https://www.linkedin.com/in/example");
    echo "Last Name: ".$ab2->getLastName()."<br />".
            "First Name: ".$ab2->getFirstName()."<br />".
            "Skype: ".$ab2->getProperty("skype")."<br />".
            "LinkedIn: ".$ab2->getProperty("linkedin")."<br /><br />";
    $ab2->deleteProperty("linkedin");
    echo $ab2->getProperty("linkedin") . "<br />";
} catch (Exception $e) {
    echo 'Caught exception: '.$e->getMessage().'<br />';
}