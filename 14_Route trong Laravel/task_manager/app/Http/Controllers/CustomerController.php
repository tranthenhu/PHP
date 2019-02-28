<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   
    public function index(){

        //tao mang khach hang
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],
      
            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],
      
            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];
      
      
        return view('modules.customer.list', compact('customers'));
      }

    
    public function edit()
    {
        return view('modules.customer.update' );
    }
    public function update(Request $request, $key) {
      
        $name = $request->name;
        $email = $request->email;
        $dob = $request->dob;
 
        $customer = $this->customers[$key];
 
       
        $this->customers[$key]['name'] = $name;
        $this->customers[$key]['email'] = $email;
        $this->customers[$key]['bod'] = $dob;
 
 
        return view('modules.customer.list', ['customers' => $this->customers]);
    }
 
    public function create()
    {
       
    }

    public function store(Request $request)
    {
     
    }

   
    public function show($id)
    {
      
    }

  
   

    public function destroy($id)
    {
        
    }
}
