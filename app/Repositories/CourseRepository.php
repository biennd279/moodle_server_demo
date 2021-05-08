<?php


namespace App\Repositories;


use App\Models\Course;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{

    public function getModel(): string
    {
        return Course::class;
    }

    function getTeacher()
    {
        // TODO: Implement getTeacher() method.
    }
}