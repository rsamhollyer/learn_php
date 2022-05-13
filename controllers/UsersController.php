<?php

/**
 * 
 * @package 
 */
class UsersController {

    public function index() {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users')); //'users' => $users equivalent
    }

    public function store() {

        App::get('database')->insert(
            'users',
            [
                'name' => $_POST['name']
            ]
        );

        redirect('users');
    }
}
