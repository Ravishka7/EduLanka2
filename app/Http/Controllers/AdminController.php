<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sectioon;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Event;


class AdminController extends Controller
{
    public function view_section()
    {
        return view('admin.view_section');
    }

    public function view_class()
    {
        return view('admin.view_class');
    }

    public function view_subject()
    {
        $data=Subject::all();
        return view('admin.view_subject',compact('data'));
    }


    public function add_class(Request $request)
    {
        $data=new Classes;
        $data->class_name=$request->class_name;
        $data->save();
        return redirect()->back();
    }

    public function add_section(Request $request)
    {
        $data=new Sectioon;
        $data->section_name=$request->section_name;
        $data->save();
        return redirect()->back();
    }

    public function add_subject(Request $request)
    {
        $data=new Subject;
        $data->subject_name=$request->subject_name;
        $data->save();
        return redirect()->back();
    }

    public function delete_subject($id)
    {
        $data=Subject::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_student()
    {
        $section=Sectioon::all();
        $class=Classes::all();
        return view('admin.view_student',compact('section','class'));
    }

    public function view_teacher()
    {
        $section=Sectioon::all();
        $subject=Subject::all();
        return view('admin.view_teacher',compact('section','subject'));
    }

    public function add_student(Request $request)
    {
        $data=new Student;
        $data->student_name=$request->name;
        $data->email=$request->email;
        $data->section=$request->section;
        $data->class=$request->class;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->guardian_name=$request->guardian;
        $data->save();
        return redirect()->back();
       
    }

    public function add_teacher(Request $request)
    {
        $data=new Teacher;
        $data->teacher_name=$request->name;
        $data->email=$request->email;
        $data->section=$request->section;
        $data->subject=$request->subject;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->save();
        return redirect()->back();
       
    }

    public function show_student()
    {
        $data=Student::all();
        return view('admin.show_student',compact('data'));
    }

    public function show_teacher()
    {
        $data=Teacher::all();
        return view('admin.show_teacher',compact('data'));
    }

    public function delete_student($id)
    {
        $data=Student::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_teacher($id)
    {
        $data=Teacher::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_student($id)
    {
        $data=Student::find($id);
        $section=Sectioon::all();
        $class=Classes::all();
        return view('admin.edit_student',compact('data','section','class'));
    }

    public function edit_teacher($id)
    {
        $data=Teacher::find($id);
        $section=Sectioon::all();
        $subject=Subject::all();
        return view('admin.edit_teacher',compact('data','section','subject'));
    }

    public function edit_student_confirm(Request $request,$id)
    {
        $data=Student::find($id);
        $data->student_name=$request->name;
        $data->email=$request->email;
        $data->section=$request->section;
        $data->class=$request->class;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->guardian_name=$request->guardian;
        $data->save();
        return redirect()->back();
    }

    public function edit_teacher_confirm(Request $request,$id)
    {
        $data=Teacher::find($id);
        $data->teacher_name=$request->name;
        $data->email=$request->email;
        $data->section=$request->section;
        $data->subject=$request->subject;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->save();
        return redirect()->back();
    }

    

    public function add_event(Request $request)
    {
        $event=new Event;
        $event->title=$request->title;
        $event->description=$request->description;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('event_image',$imagename);
        $event->image=$imagename;

        $event->save();
        return redirect()->back();
        
    }

    public function admin_home()
    {
        $instance=Event::all();
        
        return view('admin.events',compact('instance'));
    }

    public function delete_event($id)
    {
        $instance=Event::find($id);
        $instance->delete();
        return redirect()->back();
    }
    
}
