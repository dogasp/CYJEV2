<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseDBController extends Controller
{
    private $database;

    public function __construct() {
        $this->database = app('firebase.database');
    }

    /**
     * Insert data.
     */
    public function insert() {
        $data = request()->validate([
            'user'     =>  'required',
            'choice'  =>  'required',
        ]);
        $newPost =  $this->database
            ->getReference('cookies/users')
            ->push([
                'title' => $data['user'],
                'description' => $data['choice']
            ]);

        //return response()->json($newPost->getvalue());
    }

    /*
    Not implemented yet
    */
    public function update() {
        $post_id = "-M56ibO-en8Z9O5ryzjK";

        // new values
        $postData = [
            'title' => 'My awesome post title',
            'description' => 'This text should be longer',
        ];

        $updates = [
            'blog/posts/'.$post_id => $postData,
        ];

        $update = $this->database->getReference()->update($updates);

        return response()->json($update->getvalue());
    }
}
