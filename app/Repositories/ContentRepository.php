<?php


namespace App\Repositories;


use App\Models\Content;
use App\Models\Course;

class ContentRepository extends BaseRepository implements ContentRepositoryInterface
{

    public function getModel(): string
    {
        return Content::class;
    }

    function getContents(Course $course)
    {
        return $course->contents;
    }
}