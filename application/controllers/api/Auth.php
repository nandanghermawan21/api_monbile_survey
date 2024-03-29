<?php

defined('BASEPATH') or exit('No direct script access allowed');

use \Firebase\JWT\JWT;


class Auth extends BD_Controller
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('Customer_model', 'customer');
        $this->load->model('User_model', 'user');
        $this->load->model('Twilio_model', 'sms');
        $this->load->model('Otp_model', 'otp');
    }

    /**
     * @OA\Post(path="/api/auth/customerLogin",tags={"Auth"},
     *   @OA\RequestBody(
     *     @OA\MediaType(
     *         mediaType="application/json",
     *         @OA\Schema(ref="#/components/schemas/UserModel")
     *     )
     *   ),
     *   @OA\Response(response=200,
     *     description="basic customer info",
     *     @OA\JsonContent(
     *       @OA\Items(ref="#/components/schemas/CustomerModel")
     *     ),
     *   ),
     *   @OA\Response(response=403,
     *     description="validate phone number",
     *     @OA\JsonContent(
     *       @OA\Items(ref="#/components/schemas/OtpModel")
     *     ),
     *   ),
     * )
     */
    public function customerLogin_post()
    {
        try {
          
        } catch (\Exception $e) {
           
        }
    }
}
