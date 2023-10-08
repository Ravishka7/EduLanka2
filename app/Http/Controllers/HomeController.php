<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Section;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Lesson;
use App\Models\UploadStudent;
use App\Models\Calendar;
use App\Models\Event;





class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        $status=Auth::user()->status;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        elseif($usertype=='2' && $status=='activated')
        {
            return view('principal.home');
        }
        elseif($usertype=='3' && $status=='activated')
        {
            return view('teacher.home');
        }
        elseif($usertype=='4' && $status=='activated')
        {
            return view('student.home');
        }
        else
        {
            return view('dashboard');
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function study_materials()
    {
        return view('teacher.study_materials');
    }

    public function upload_lesson(Request $request)
    {
        $lesson=new Lesson();

        $title=$request->input('title');
        $description=$request->input('description');
        $date=$request->input('date');
        $file=$request->file('file');
        $filename=time().'.'.$file->getClientOriginalName();
        $request->file->move('assets',$filename);
        $lesson->file=$filename;

        
        $lesson->title=$title;
        $lesson->description=$description;
        $lesson->date_uploaded=$date;
        
        
        $lesson->save();

        return redirect('/study_materials');
    }

    public function uploaded_materials()
    {
    
        $lessons=Lesson::all();
        return view('teacher.uploaded_materials', compact('lessons'));
    }

    public function download($filename)
    {
        $decodedFilename = urldecode($filename);
        $filePath = public_path('assets/' . $decodedFilename);

        if (file_exists($filePath)) {
            return response()->download($filePath, $decodedFilename);
        } else {
            abort(404, 'File not found');
        }
    }

    public function edit_uploaded_materials($id)
    {
        $lessons=Lesson::find($id);
        return view('teacher.edit_uploaded_materials', compact('lessons'));
    }

    public function delete_uploaded_materials($id)
    {
        $lesson=Lesson::find($id);
        $lesson->delete();

        return redirect('/uploaded_materials');
    }

    public function edit_uploaded_materials_confirm(Request $request, $id)
    {
        $lessons=Lesson::find($id);

        $title=$request->input('title');
        $description=$request->input('description');
        $date=$request->input('date');
        $file=$request->file('file');
        $filename=time().'.'.$file->getClientOriginalName();
        $request->file->move('assets',$filename);
        $lessons->file=$filename;

        
        $lessons->title=$title;
        $lessons->description=$description;
        $lessons->date_uploaded=$date;
        
        
        $lessons->save();

        return redirect('/uploaded_materials');
    }


    public function student_study_materials()
    {
        
        return view('student.study_materials');
    }

    public function student_view_subject()
    {
        return view('student.show_subject');
    }

    public function show_study_materials()
    {
        $lessons=Lesson::all();
        
        return view('student.show_study_materials', compact('lessons'));

    }

    public function student_upload_work()
    {
        return view('student.upload_work');
    }

    public function add_work(Request $request)
    {
        $user=Auth::user();
        $upload = new UploadStudent();
        
        $upload->title=$request->input('title');

        $file=$request->file('file');
        $filename=time().'.'.$file->getClientOriginalName();
        $request->file->move('assets',$filename);
        $upload->file=$filename;

        $upload->save();

        return redirect('/student_upload_work');



    }

    Public function student_work_upload()
    {
        $uploads=UploadStudent::all();
        return view('teacher.student_work_upload', compact('uploads'));
    }

    public function student_home()
    {
        return view('student.home');
    }

    public function teacher_home()
    {
        return view('teacher.home');
    }


    public function view_calendar()
    {
        return view('teacher.event-calendar');
    }

    public function view_news()
    {
        $instance=Event::all();
        return view('student.news',compact('instance'));
    }





    
}
