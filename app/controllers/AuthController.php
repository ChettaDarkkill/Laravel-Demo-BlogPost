<?php

class AuthController extends BaseController {


   
    public function showLogin()
    {
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('')->with('success', 'You are already logged in');
        }

        // Show the login page
        return View::make('auth/login');
    }

    public function postLogin()
    {
        // Get all the inputs.
        $userdata = array(
            'id'       => Input::get('username'),   //  get ค่าของ id username มาใส่ใน id
            'username' => Input::get('username'),   //  get ค่าของ id username มาใส่ใน username
            'password' => Input::get('password')    //  get ค่าจาก id password มาใส่ใน pasword
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);  // ตรวจสอบว่าตรงไปตามกฎหรือเปล่า

        // Check if the form validates with success.
        if ($validator->passes())// ถ้าการตรวจสอบผ่าน
        {
            // remove username, because it was just used for validation
            unset($userdata['username']); //ลบชื่อผู้ใช้เพราะมันถูกใช้เพียงการตรวจสอบเท่านั้น

            // Try to log the user in.
            if (Auth::attempt($userdata))
            {
                // Redirect to homepage
                return Redirect::to('')->with('success', 'You have logged in successfully');
            }
            else
            {
                // Redirect to the login page.
                return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
            }
        }

        // Something went wrong.
        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
    }

    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('')->with('success', 'You are logged out');
    }
}