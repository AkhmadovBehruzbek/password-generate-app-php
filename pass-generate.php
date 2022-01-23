<?php

    function randomPassword($length = 8) {

        if ($length < 8) {
            $length = 8;
        }

        $sets = array();
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        $sets[] = '23456789';
        $sets[] = '~!@#$%^&*(){}[],./?';

        $password = '';

        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
        }

        while(strlen($password) < $length) {
            $randomSet = $sets[array_rand($sets)];
            $password .= $randomSet[array_rand(str_split($randomSet))];
        }
        return str_shuffle($password);

}