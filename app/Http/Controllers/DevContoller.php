<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DevsModel;
use App\Models\PostModel;

class DevContoller extends Controller
{

    public function signup(Request $request, DevsModel $devmodel)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $page_title = "Register a New Account";
            $page_desc = "Register a developer Account";

            return view('member.signup', ['page_title' => $page_title, 'page_desc' => $page_desc]);
        } else {

            //validation message
            $message = ['username.required' => 'Please enter the username', 'fname.required' => 'The first name is required', 'lname.required' => 'Your Surname is required', 'dob.required' => 'Your Date of birth is required', 'password.required' => 'Ensure your password is included', 'password2.required' => 'Confirm your password'];
            $validate = $request->validate([
                'username' => 'required',
                'fname' => 'required',
                'lname' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'dob' => 'required',
                'address' => 'required',
                'password' => 'required',
                'password2' => 'required',
                'pix' => 'image|file|max:5024'
            ], $message);

            //retriving message from the form
            $username = $request->input('username');
            $fname = $request->input('fname');
            $lname = $request->input('lname');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $dob = $request->input('dob');
            $address = $request->input('address');
            $password = $request->input('password');
            $gender = $request->input('gender');
            $pwd = md5($password);
            //    $confirmpassword=$request->input('password2');
            //    $conpwd=md5($confirmpassword);

            $newname = '';
            if ($request->file('pix')) {
                $newname = time() . '.' . $request->pix->getClientOriginalExtension();
                $request->pix->move(public_path('uploads'), $newname);
                //$pixfile->move('uploads',$pixfile);
            }
            //sending data to the database
            $to_insert = [
                'Firstname' => $fname,
                'Lastname' => $lname, 'Username' => $username,
                'Gender' => $gender,
                'dob' => $dob,
                'PhoneNumber' => $phone,
                'emailaddress' => $email,
                'member_password' => $pwd,
                'member_address' => $address,
                'picture' => $newname,
            ];
            $id = $devmodel->insertDev($to_insert);
            //save into session
            if ($id > 0) {

                $request->session()->flash('msg', 'Registration Successful. Please Login Here!!!');
                return redirect(url('userlogin')); //header("Location: thankyou.php");

            } else {
                $request->session()->flash('msg', 'Registration Failed. Try Again!!!');
                return redirect(url('signup')); //header("Location: thankyou.php");

            }

            return redirect('/userlogin');
        }
    }
    public function userlogin(Request $request, DevsModel $devmodel)
    {
        // return view('userlogin');
        $method = $request->method();
        if ($method == 'GET') {
            return view('member.userlogin');
        } else {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);
            $username = $request->input('username');
            $password = $request->input('password');
            $pwd = md5($password);
            $id = $devmodel->getprofile($username, $pwd);
            if ($id) {
                //Create session and redirect

                $request->session()->flash('msg', 'Logged in Successfully');
                $d = $request->session()->put('id', $id);

                return redirect('/profile');
            }
            //return redirect('/test');
            else {
                $request->session()->flash('msg', 'Invalid email or password');
                return redirect('/userlogin');
            }
        }
    }


    public function profilepage(Request $request, DevsModel $model, PostModel $postmodel)
    {
        $d = $request->session()->get('id');
        $details = $model->getdetails($d);
        $catgory = $model->getCat();
        $post_details = $postmodel->getPosts();
        // dd($post_details);
        // dd($details);
        return view('member.profile', array('details' => $details, 'post' => $post_details, 'category' => $catgory));
    }
    public function edit($id, DevsModel $dev)
    {

        $memberid = $dev->editmember($id);
        // dd($memberid);
        return view('member.edit', ['member' => $memberid]);
    }
    public function update(Request $request, DevsModel $devmodel, $id)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $page_title = "Register a New Account";
            $page_desc = "Register a developer Account";

            return view('member.edit', ['page_title' => $page_title, 'page_desc' => $page_desc]);
        } else {

            $id = $id;
            $validate = $request->validate([

                'fname' => 'required',
                'lname' => 'required',
                'phone' => 'required',
                'dob' => 'required',
                'address' => 'required',
                'pix' => 'image|file|max:5024'
            ]);

            //retriving message from the form

            $fname = $request->input('fname');
            $lname = $request->input('lname');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $dob = $request->input('dob');
            $address = $request->input('address');
            $gender = $request->input('gender');

            $newname = '';
            if ($request->file('pix')) {
                $newname = time() . '.' . $request->pix->getClientOriginalExtension();
                $request->pix->move(public_path('uploads'), $newname);
                //$pixfile->move('uploads',$pixfile);
            }
            //sending data to the database
            $to_insert = [
                'Firstname' => $fname,
                'Lastname' => $lname,
                'Gender' => $gender,
                'dob' => $dob,
                'PhoneNumber' => $phone,
                'emailaddress' => $email,
                'member_address' => $address,
                'picture' => $newname,
            ];
            $id = $devmodel->updateDev($id, $to_insert);

            //save into session
            if ($id > 0) {
                $details = $devmodel->getdetails($id);
                return redirect('/profile');
            }
        }
    }
    public function MemberLogout(Request $request)
    {
        $logout = $request->session()->flush();
        //    return view('members.logout', ['logout' => $logout]);
        $request->session()->flash('msg', 'You have been logged out successfully!');
        return redirect(url('/userlogin'));
        //    return view('members.login', ['member_details' => $member_details, 'page_title' => $page_title, 'page_desc' => $page_desc]);
    }

    public function landingPage()
    {
        return view('landingpage');
    }
    public function post(Request $request, DevsModel $devmodel)
    {

        $method = $request->method();
        if ($method == 'GET') {
            return view('profile');
        } else {
            $validate = $request->validate([
                'post' => 'required'
            ]);
            $d = session('id');
            $post_id = $d->user_id;
            $post = $request->input('post');
            $des = ['user_id' => $post_id, 'post_desc' => $post];
            $id = $devmodel->insertPosts($des);
            return redirect('/profile',);
        }
    }
}
