<?php

namespace App\Http\Controllers;

use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $database = Firebase::Database();

        $newPost = $database
            ->getReference('groups')
            ->push([
                'name' => 'Arashi',
                'url' => 'arashi.jpg'
            ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }
}
