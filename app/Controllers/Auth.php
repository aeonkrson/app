<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
{
    $session = session();

    // If user is already logged in, redirect to dashboard
    if ($session->get('isLoggedIn')) {
        return redirect()->to('/');
    }

    // Handle the POST request from the form
    if ($this->request->getMethod() === 'post') {
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->getUserByUsername($username);

        // Check if user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            $sessionData = [
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);

            // <<< --- ADD THIS LINE --- >>>
            // Force the session to write to the file *before* redirecting
            session()->close();
            // <<< --- END OF ADDED LINE --- >>>

            // Redirect to the main dashboard
            return redirect()->to('/');
        } else {
            // Set error message
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/login');
            // die("DEBUG: LOGIN FAILED. THE 'ELSE' BLOCK IS RUNNING.");
        }
    }

    // Show the login page (GET request)
    return view('auth/login');
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}