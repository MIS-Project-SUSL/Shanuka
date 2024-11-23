<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $allowedFields = ['course_name', 'course_code', 'credits', 'department', 'instructor', 'course_description'];
 

    protected $primaryKey = 'id'; // Replace with your primary key field name if different

    // Example method to fetch all courses
    public function getAllCourses()
    {
        return $this->findAll(); // Fetch all records from the 'courses' table
    }
}

