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

interface iPropertyContainer {
    function addProperty($propertyName, $value); // add Property
    function deleteProperty($propertyName);      // delete Property
    function getProperty($propertyName);         // get Property
    function setProperty($propertyName, $value); // set Property
}

class PropertyContainer implements iPropertyContainer {
    private $propertyContainer = array();        // associative array
     
    public function addProperty($propertyName, $value) {
        $this->propertyContainer[$propertyName] = $value;
    }
     
    public function deleteProperty($propertyName) {
        if(isset($this->propertyContainer[$propertyName])) {
            echo "Key: [".$propertyName."] Value: [".$this->propertyContainer[$propertyName]."]";
            unset($this->propertyContainer[$propertyName]);
            echo " - Property deleted successfully!<br />";
        } else {
            throw new Exception('Key "'.$propertyName.'" was not found...');
        }
    }
     
    public function getProperty($propertyName) {
        if(isset($this->propertyContainer[$propertyName])) {
            return $this->propertyContainer[$propertyName];
        } else {
            throw new Exception('Key "'.$propertyName.'" was not found...');
        }
    }
     
    public function setProperty($propertyName, $value) {
        if(isset($this->propertyContainer[$propertyName])) {
            $this->propertyContainer[$propertyName] = $value;
        } else {
            throw new Exception('Key "'.$propertyName.'" was not found...');
        }
    }
}