<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Controllers\MailController;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $employee = Employee::create([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'age' => $request->age,
            'title' => $request->title,
            'address' => $request->address
        ]);

        if ($employee) {
            (new MailController)->sendMail($request->mail);
            return view('mail-template');
        } else {
            return view('welcome');
        }
    }

    public function index()
    {
        $employees = Employee::all();
        return view('dashboard', compact('employees'));
    }
}
