<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use Kreait\Firebase\Auth;
use Firebase\JWT\JWT;

class Login extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('app/login/login2');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Authenticate the user using Firebase Authentication
        try {
            $auth = new Auth();
            $user = $auth->verifyPassword($email, $password);

            // Get the user ID from the Firebase Authentication response
            $firebaseUserId = $user->uid;

            // Assuming successful Firebase Authentication, create a JWT token
            $firebaseSecretKey = 'your_firebase_secret_key';
            $jwtPayload = [
                'uid' => $firebaseUserId,
                'email' => $email,
                // Add any additional claims you need
            ];

            $jwtToken = JWT::encode($jwtPayload, $firebaseSecretKey, 'HS256');

            // Store the JWT token in a secure manner (e.g., database, secure cookie, etc.)
            // Here, we are using a session for simplicity, but it's not recommended in a real-world scenario
            session()->set('firebase_jwt_token', $jwtToken);

            // Redirect to the dashboard or any other page
            return redirect()->to('/landingpage/landing-page');
        } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
            // Handle invalid password exception
            return redirect()->to('/')->withInput()->with('error', 'Invalid email or password');
        } catch (\Exception $e) {
            // Handle other authentication exceptions
            return redirect()->to('/')->withInput()->with('error', 'Authentication error');
        }
    }
}
