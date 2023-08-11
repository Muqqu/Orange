<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Models\TimeSlots;
class AppointmentController extends Controller
{
    //
    public function index(){
        $date = date('y-d-m');
        $slots = TimeSlots::where('date',$date )->get();
        return view("appointment.index", compact("slots"));
    }
    public function detail(Request $req){
     
        $req->validate([
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_discuss' => 'required',
        ]);
        Appointments::create([
            'appointment_date'=>date("Y/m/d", strtotime($req->appointment_date)),
            'appointment_time'=> $req->appointment_time,
            'appointment_discuss'=> $req->appointment_discuss,
        ]);
        TimeSlots::create([
            'date'=>date("Y-m-d", strtotime($req->appointment_date)),
            'time'=>date("h:i", strtotime($req->appointment_time)),
            'booked'=>1,
        ]);
        return view("registerBussiness");
    }

    public function slots($date,$month,$year){
        
        
        $slots = TimeSlots::where('date',$year.'-'.$date.'-'.$month)->where('booked',0)->get();
        
        //$slots = TimeSlots::where('date',"2023-03-17")->get();
        $art = ""; 
        $n= 1;
       foreach($slots as $slot){
         $slot = $slot->time;
         $art .= '<div class="form-check" ><input class="form-check-input" type="radio" name="appointment_time" id="tag';
         $art .= $n;
         $art .= '" value="9:00 to 8:00">
         <label class="form-check-label" for="tag';
         $art .= $n;
         $art .= '">';
         
          $art .= date('h:i a', strtotime($slot ));
       
         $art .='</label></div>';
         $n = $n+1;
       }
        
        return array('slots' => $art);
    
       
    }
}
