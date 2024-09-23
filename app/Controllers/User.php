<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use \Firebase\JWT\JWT;
use \Firebase\JWT\KEY;

class User extends BaseController
{
    use ResponseTrait;
    
    // private $users;


     public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $this->users = new UserModel();
        // $this->data['users'] = $this->usersModel->getAllUsers();
        
    }
     public function register()
    {
       
        return view('app/register/register');
    }
    //registration of user
    public function create()
    {
        $session = session();
        $users = new UserModel();
        $is_email = $users->where('email', $this->request->getVar('email'))->first();
        
        if ($is_email) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Email already exists'
            ]);
        } else {
            $otp = mt_rand(100000, 999999);
            $otpCreatedAt = time();
            $teamNames = [
                'Atom', 'Server Savers', 'Backup', 'Iteration', 'Code Red', 'Focus', 'Typers', 'Synergy', 'Logs', 'Believers', 
                'Team Byte', 'Makers', 'BugSquashers', 'Mind Benders', 'Data Pirates', 'Algorithm Avengers', 'Compile Kings', 
                'Byte Me', 'Quantum Quants', 'Infinite Loopers', '404 Not Found', 'Digital Dynamos', 'Kernel Crashers', 'Code Crackers', 
                'Debugger Divas', 'Binary Beast', 'Cache Cow', 'Logic Lords', 'Script Kiddies', 'Bits Please', 'Hacktivators', 
                'Firewalls', 'Recursive Rebels', 'Tech Titans', 'Byte Club', 'Syntax Sultans', 'Trojan Coders', 'Clever Coders', 
                'Ping Pals', 'Firewall Force', 'Null Pointers', 'Dev Dudes', 'Stack Overflow', 'Ctrl+Alt+Elite', 'Compile Time', 
                'RAM Raiders', 'Bit by Bit', 'Code Breakers', 'Source Seekers', 'Bit Masters', 'Hard Drive Heroes', 'Commandos', 
                'CPU Central', 'String Chasers', 'Gateway Gurus', 'Version Control', 'Interface Innovators', 'Tech Ninjas', 
                'Digital Dreamers', 'Code Masters', 'The Debuggers', 'Tech Warriors', 'Static Souls', 'Ping Commanders', 'LAN Lords', 
                'Overclockers', 'Bytes and Pieces', 'HTML Heroes', 'Backbone Battalion', 'Chip Chasers', 'Data Ducks', 'Hard Disk Hustlers', 
                'Null Terminators', 'Virtual Avengers', 'Compile Success', 'Encryption Experts', 'Pixel Pushers', 'Tech Wizards', 
                'Beta Testers', 'Hacknocrats', 'Cyberspace Cadets', 'UI Gurus', 'Daemon Divas', 'App Ninjas', 'Hash Slingers', 
                'Function Founders', 'Cursor Crusaders', 'Socket Squad', 'Code Wizards', 'Logic Legends', 'Hexadecimal Heroes', 
                'Server Surge', 'Queue Masters', 'Kernel Kings', 'Backend Bandits', 'Packet Sniffers', 'Algorithm Alchemists', 
                'Array Rangers', 'Assembly Assassins', 'Gigabyte Gladiators', 'Pixel Pirates', 'Data Processors', 'Web Wizards', 
                'Node Ninjas', 'Byte Blasters', 'Command Line Legends', 'Cyber Knights', 'Code Ninjas', 'Database Dynamos', 'Pixel Pros', 'Cloud Controllers', 'Byte Raiders', 
                'Ethernet Engineers', 'Algorithm Architects', 'Script Soldiers', 'Server Squad', 'Debugging Demons', 
                'Runtime Rebels', 'IP Innovators', 'Cyber Commandos', 'Data Defenders', 'Source Code Sorcerers', 
                'The Nullifiers', 'Bit Busters', 'Hardcore Coders', 'IP Masters', 'Server Gurus', 'Syntax Surge', 
                'Compile Crushers', 'Bug Bashers', 'Binary Breakers', 'Cloud Chasers', 'Tech Surge', 'Digital Innovators', 
                'Static Shock', 'Bit Battalion', 'Data Surge', 'Crash Override', 'Java Jugglers', 'Tech Savvy', 'SQL Sorcerers', 
                'Byte Knights', 'Cloud Raiders', 'Circuit Breakers', 'Memory Leakers', 'Stack Smashers', 'Pixel Prophets', 
                'Tech Terminators', 'Program Prophets', 'Data Surgeons', 'Shell Shock', 'Infinite Loopers', 'Object Overload', 
                'CPU Coders', 'Hex Hackers', 'FrontEnd Fanatics', 'Port Pioneers', 'Backbone Warriors', 'Malware Militia', 
                'Socket Sages', 'Bandwidth Brigade', 'System Overload', 'Data Dragons', 'Microchip Mavericks', 'Protocol Pirates', 
                'Root Routers', 'Fusion Devs', 'Digital Sultans', 'API Enthusiasts', 'Web Warlords', 'Cache Controllers', 
                'Protocol Pioneers', 'The Grid Guardians', 'Bootstrap Brawlers', 'Data Cyclones', 'Quantum Quizzers', 'Ping Kings', 
                'Code Warriors', 'Kernel Krew', 'Data Cyclers', 'Cybernetic Crew', 'Tech Tacticians', 'Firmware Fixers', 
                'Program Predators', 'Full Stack Fighters', 'SQL Surge', 'Cloud Crusaders', 'Source Code Sentries', 'Keygen Coders', 
                'ByteForce', 'Cipher Sleuths', 'Ping Pongers', 'Tech Pulse', 'Binary Commandos', 'Cross-Platform Coders', 
                'Cloud Hustlers', 'The Firewalls', 'Web Architects', 'Static Ninjas', 'Database Disruptors', 'Hard Drive Hustlers', 
                'Server Soldiers', 'Object-Oriented Overlords', 'Tech Terrors', 'Code Crafters', 'Bitwise Operators', 
                'Function Fanatics', 'Bit Manipulators', 'Cyber Sprinters', 'Algorithm Gurus', 'Syntax Strategists', 
                'Data Miners', 'File Finders', 'Semaphore Soldiers', 'AI Adepts', 'Stack Attackers', 'Tech Whisperers', 
                'Bit Crushers', 'Script Hackers', 'Binary Soldiers', 'Frontend Frenzy', 'Packet Stormers', 'Webstorm Troopers', 
                'Algorithm Enforcers', 'Program Prowess', 'Bug Snipers', 'Data Samurais', 'Gigabyte Gladiators', 'Pixel Pushers', 
                'Malware Mages', 'Techie Titans', 'Version Victors', 'App Attackers', 'Module Masters', 'Socket Surge', 
                'API Wranglers', 'HTML Hackers', 'Script Wizards', 'The Code Collective', 'Systematic Solvers', 'Data Dispatchers', 
                'Quantum Hackers', 'Debug Divas', 'Cache Commandos', 'Machine Masters', 'Cyber Stallions', 'Cloud Mavericks', 
                'Byte Busters', 'Scripted Soldiers', 'Logic Legends', 'Full Stack Squad', 'Source Code Savants', 'Data Decoders', 
                'Code Wizards', 'LAN Crushers', 'Binary Wranglers', 'Malware Avengers', 'RAM Racers', 'Data Doctors', 
                'Program Pulsers', 'Command Chain', 'Logic Legion', 'Dev Dominators', 'Variable Vigilantes', 'Cache Collectors', 
                'Stack Savants', 'Ping Predators', 'Data Gladiators', 'Cyber Squad', 'Tech Savers', 'Bitstorm Warriors', 
                'Cloud Kings', 'Data Demolishers', 'The Kernel Knights', 'Hex Hounds', 'Data Vortex', 'Input Overload', 
                'Digital Warriors', 'Recursive Rebels', 'System Savvy', 'Protocol Pirates', 'Byte Blazers', 'Gateway Gurus', 
                'Code Chefs', 'Processor Pirates', 'IP Avengers', 'Debugging Defenders', 'Firewall Fighters', 'Static Soldiers', 
                'Bug Fixers', 'Circuit Crushers', 'Tech Pioneers', 'Cloud Crusaders', 'Bug Busters', 'Database Dynamos', 
                'Cyber Sentinels', 'Infinite Loaders', 'Syntax Soldiers', 'Queue Quizzers', 'The Digital Dream Team', 'Server Sleuths', 
                'Data Cyclones', 'HTML Heroes', 'Data Detectives', 'The CPU Crew', 'Tech Thunder', 'Packet Pioneers', 
                'Code Crashers', 'Bit Legends', 'IP Masters', 'Web Wizards', 'Java Junkies', 'Tech Geniuses', 'System Savants', 
                'Bit Blasters', 'Cloud Ninjas', 'Source Code Seers', 'Digital Dreamers', 'BackEnd Bosses', 'Server Surge', 
                'Cyber Sultans', 'Command Coders', 'Function Masters', 'AI Avengers', 'Hard Drive Hustlers', 'Tech Phantoms', 
                'Ping Pathfinders', 'UI Unifiers', 'LAN Legends', 'CPU Sorcerers'
            ];

            shuffle($teamNames);

            $uniqueTeamNames = [];
            foreach ($teamNames as $teamName) {
                $isTeamNameExists = $users->where('team_name', $teamName)->first();

                if (!$isTeamNameExists) {
                    $uniqueTeamNames[] = $teamName;
                    break;
                }
            }
            
            $user = [
                'name' => $this->request->getVar('name'),
                'college_name' => $this->request->getVar('college_name'),
                'team_name' => isset($uniqueTeamNames[0]) ? $uniqueTeamNames[0] : 'Default_Team_Name',
                'phone_number' => $this->request->getVar('phone_number'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_type' => 1,
                'otp' => $otp,
                'otp_created_at' => date('Y-m-d H:i:s', $otpCreatedAt),
                'active' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $regemail = $user['email'];
            $session->set('regemail', $user['email']);
            
            $userId = $users->save($user);
            
            if ($userId) {
                //mail integration 
                    $email = \Config\Services::email();
                    $email->setFrom('contact@aavirbhav.tech', 'aavirbhav');
                    $email->setTo($regemail);
                    $email->setSubject('Registration succesfull for AAVIRBHAV-2K24');
                    $viewData['user'] = $user; // Pass data to the view
                    $message = view('app/email/welcome_email_2', $viewData);
                    $email->setMessage($message);
                    $email->send();
                // Send email
                // Redirect to verify-email page
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Registration successfull. Please check your email for Email verification.'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'User not created successfully'
                ]);
            }
        }
    }
    public function regenerateOTP()
    {
        $session = session();
        $regemail = $session->get('regemail');

        // Check if the regemail session variable exists and is not empty
        if (!empty($regemail)) {
            $otp = mt_rand(100000, 999999);
            $otpCreatedAt = time();

            // Update the user's OTP and OTP creation time
            $userModel = new UserModel();
            $user = $userModel->where('email', $regemail)->first();
            if ($user) {
                $userModel->update($user['id'], [
                    'otp' => $otp,
                    'otp_created_at' => date('Y-m-d H:i:s', $otpCreatedAt)
                ]);
                $email = \Config\Services::email();
                    $email->setFrom('contact@aavirbhav.tech', 'Aavirbhav');
                    $email->setTo($regemail);
                    $email->setSubject('Registration succesfull for AAVIRBHAV-2K24');
                    $viewData['user'] = $user; // Pass data to the view
                    $message = view('app/email/welcome_email_2', $viewData);
                    $email->setMessage($message);
                    $email->send();
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'OTP regenerated successfully.'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'User not found.'
                ]);
            }
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Email not found.'
            ]);
        }
    }



    //email verification function
    public function verify_email_view(){
        return view('app/register/email_verify');

    }
    public function verifyOTP()
    {
        $session = session();

        // Access the regemail session variable
        $regemail = $session->get('regemail');

        // Check if the regemail session variable exists and is not empty

        $otp = $this->request->getVar('otp');

        $user = (new UserModel())->where('email', $regemail)->first();

        if ($user) {
            if ($user['otp'] === $otp) {
                $otpCreatedAt = strtotime($user['otp_created_at']);
                $currentTime = time();
                $timeDifference = $currentTime - $otpCreatedAt;
                $otpValidityPeriod = 10 * 60; // 10 minutes in seconds

                if ($timeDifference <= $otpValidityPeriod) {
                    $userModel = new UserModel();
                    $userModel->update($user['id'], ['active' => 1]);
                
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'OTP verified successfully. You can now login.'
                    ]);
                } else {
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'OTP has expired. Please generate a new OTP.'
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Invalid OTP. Please try again.'
                ]);
            }
        } else {
            // Handle case where user not found with the email (unlikely scenario)
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User not found'
            ]);
        }
    }
    
   
    public function deleteUser($id = null)
    {
        $userModel = new UserModel();

        // Find the user by ID
        $user = $userModel->find($id);

        // Check if the user exists
        if ($user) {
            // Attempt to delete the user
            if ($userModel->delete($id)) {
                // User deleted successfully
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'User deleted successfully.'
                ]);
            } else {
                // Failed to delete user
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to delete user.'
                ]);
            }
        } else {
            // User not found
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User not found.'
            ]);
        }
    }

    

    // Controller method to fetch all users
    public function getUsers()
    {
        $userModel = new UserModel();
        // Fetch users from the database
        $data['users'] = $userModel->findAll();
        
        // Send the user data as JSON response
        return $this->response->setJSON($data);
    }

    //show data
    // Controller Method to Fetch User Details
    public function getUserDetails()
    {
        // Fetch the user details from the UserModel
        $userModel = new UserModel();
        // Fetch users from the database
        $userId=$this->request->getPost('user-id');
        $data['users'] = $userModel->find($userId);

        // Send the user data as JSON response
        return $this->response->setJSON($data);
    }

        
    



    public function updateUser()
    {
        // Retrieve updated user details from the request
        $userId = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $collegeName = $this->request->getPost('college_name');
        $email = $this->request->getPost('email');
        $userType = $this->request->getPost('user_type');

        // Update the user details in the database
        $userModel = new UserModel();
        $user = $userModel->find($userId);

        if ($user) {
            
                $user['name'] = $name;
                $user['college_name'] = $collegeName;
                $user['email'] = $email;
                $user['user_type'] = $userType;

                

                if ($userModel->update($userId, $user)) {
                    // Return success response
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'User details updated successfully.'
                    ]);
                } else {
                    // Return error response
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Failed to update user details.'
                    ]);
                }
          
        } else {
            // Return error response if user not found
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User not found.'
            ]);
        }
    }


    public function login_view(){
        return view('app/login/login2');
        $data = [];
    }
    
    //authentication
     public function login()
    {
        $userModel = new UserModel();
        
        try {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
        
            // Retrieve user using model's retrieval method
            $user = $userModel->where('email', $email)->first(); 
            
            if ($user) {
                // Verify password using password_verify
                if($user['active']==1){
                    if (password_verify($password, $user['password'])) {
                        // Generate JWT token
                        
                        $key=getenv('JWT_SECRET_KEY');
                        $issuedAtTime = time();
                        $tokenTimeToLive=getenv('JWT_TIME_TO_LIVE');
                        // $tokenTimeToLive = getenv('JWT_TIME_TO_LIVE');
                        $tokenExpiration = $issuedAtTime + $tokenTimeToLive;
                    
                        $payload = [
                            "iss" => "localhost",
                            "aud" => "localhost",
                            'exp' => $tokenExpiration,
                            "data" => [
                                'user_id' => $user['id'],
                                'name' => $user['name'],
                                'email' => $user['email']
                            ]
                        ];
                        $jwt = JWT::encode($payload, $key, 'HS256');
                        
                        // Set user session
                        $this->setUserSession($user);

                        // Successful login
                        return $this->response->setJSON([
                            'success' => true,
                            'message' => 'Login Successful!!'
                        ]);
                    } else {
                        // Incorrect password
                        return $this->response->setJSON([
                            'success' => false,
                            'message' => 'Invalid Email and Password!!'
                        ]);
                    }
                }
                else{
                    // Account not activated
                    return $this->response->setJSON([
                            'success' => false,
                            'message' => 'Activate your account first, try aganin!!'
                        ]);
                }

            } else {
                // User not found
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'The email provided is not exist!!'
                ]);
            }
        } catch (\Exception $e) {
            // Handle potential errors gracefully
            return $this->respondCreated([
                'status' => 0,
                'message' => 'An error occurred during login.',
            ]);
        }
    }



    private function setUserSession($user)
    {
        $users = [
            'id' => $user['id'],
            'name' => $user['name'],
            'college_name' => $user['college_name'],
            'team_name' => $user['team_name'],
            'phone_number' => $user['phone_number'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "user_type" => $user['user_type'],
        ];

        session()->set($users);
        $session = session();
        // $session->setFlashdata('success', 'Login Successful!');

        return true;
    }
    public function fetchAllUsers()
    {
        // Load the UserModel
        $userModel = new UserModel();

        // Fetch all users from the database
        $users = $userModel->findAll();

        // Check if users were found
        if (!empty($users)) {
            // Send users data as JSON response
            return $this->response->setJSON(['success' => true, 'users' => $users]);
        } else {
            // No users found
            return $this->response->setJSON(['success' => false, 'message' => 'No users found.']);
        }
    }
    public function readUser()
    {
        $request = service('request');
        $key = "hilalahmadkhanformpakistan";
        $headers = $request->getHeader('authorization');
        $jwt = $headers->getValue();
        $userData = JWT::decode($jwt, new KEY($key, 'HS256'));
        $users = $userData->data;
        return $this->respond([
            'status' => 1,
            'users' => $users
        ]);
    }

}
