<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Ali',
                'age' => 20,
                'job' => 'developer',
            ],
            [
                'id' => 2,
                'name' => 'Asel',
                'age' => 25,
                'job' => 'seller',
            ],
            [
                'id' => 3,
                'name' => 'Anel',
                'age' => 30,
                'job' => 'singer',
            ],
        ];
        return $persons;
    }
}
