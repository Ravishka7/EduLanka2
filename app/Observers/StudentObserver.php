<?php

namespace App\Observers;
use Illuminate\Support\Str;


use App\Models\Student;

class StudentObserver
{
    /**
     * Handle the Student "created" event.
     */

     public function creating(Student $student)
    {
        if (!$student->studentId) {
            $studentCount = Student::count(); // Count existing students
            $studentId = 'STU' . str_pad($studentCount + 1, 4, '0', STR_PAD_LEFT); // Generate ID

            $student->studentId = $studentId;
        }
    }


    public function created(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "updated" event.
     */
    public function updated(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     */
    public function deleted(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "restored" event.
     */
    public function restored(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     */
    public function forceDeleted(Student $student): void
    {
        //
    }
}
