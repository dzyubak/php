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

include_once 'PropertyContainer.php';

class AddressBook extends PropertyContainer {
    private $lastName;
    private $firstName;
     
    public function getLastName() {
        return $this->lastName;
    }
     
    public function setLastName($value) {
        $this->lastName = $value;
    }
     
    public function getFirstName() {
        return $this->firstName;
    }
     
    public function setFirstName($value) {
        $this->firstName = $value;
    }
}