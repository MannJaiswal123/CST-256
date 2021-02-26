<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    //
    
    public function onProductPost(Request $request)
    {
       
        
        $title = request()->get('productname');
        $description = request()->get('description');
        $brand = request()->get('brand');
        $model = request()->get('model');
      
         
        // Create a Job Object to store extracted information from the View Page
        $product = new Product($title, $brand, $model, $description);
       
        // Instantiate the Business Logic Layer
        $serviceLogin = new SecurityService();
        $isValid = $serviceLogin->login($credentials);
        
        // Determine with view to display
        // echo($isValid);
        if ($isValid)
        {
            //
            return view('assessment');
        }
        else
        {
            return view('loginFailed');
        }
        
        return $request->all();
    }
}

