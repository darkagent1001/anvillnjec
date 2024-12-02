<?php

Class DbQueries {

    public function unsafe($query, $reqMethod = 'get', $isAssoc = true){

        global $mysqli;

        if($reqMethod == 'get'){

            $stmt = $mysqli -> query($query);

            if($isAssoc == true){

                return $stmt -> fetch_assoc();

            } else {

                return $stmt -> fetch_all(MYSQLI_ASSOC);

            }

        } else {

            return $stmt = $mysqli -> query($query);

        }

    }

    public function safe($query, $reqMethod = 'get', $isAssoc = true, ...$data){

        global $mysqli;

        $typesArray = [];

        // Foreach loop to set the type to types array
        foreach($data as $value){
    
            // Push the value in array
            array_push($typesArray, gettype($value)[0]);
    
        };

        if($reqMethod == 'get'){

            $stmt = $mysqli -> prepare($query);
            $stmt -> bind_param(implode($typesArray), ...$data);
            $stmt -> execute();
            
            if($isAssoc == true){

                return $stmt -> get_result() -> fetch_assoc();

            } else {

                return $stmt -> get_result() -> fetch_all(MYSQLI_ASSOC);

            }

        } else {

            $stmt = $mysqli -> prepare($query);
            $stmt -> bind_param(implode($typesArray), ...$data);
            $stmt -> execute();

        }

    }

}