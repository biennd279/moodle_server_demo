<?php


namespace App\Repositories;


use App\Models\Course;

interface ContentRepositoryInterface extends RepositoryInterface
{
    function getContents(Course $course);
}