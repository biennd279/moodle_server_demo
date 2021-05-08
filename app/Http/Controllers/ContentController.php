<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use App\Models\Course;
use App\Repositories\ContentRepositoryInterface;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private ContentRepositoryInterface $contentRepository;
    public function __construct(ContentRepositoryInterface $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Course $course)
    {
        return response()->json([
            "data" => ContentResource::collection($this->contentRepository->getContents($course)),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, Course $course)
    {
        return response()->json([
            "message" => ""
        ], 405);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Course $course, Content $content)
    {
        return response()->json(
            ContentResource::make($content)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Course $course, Content $content)
    {
        return response()->json([
            "message" => ""
        ], 405);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Course $course, Content $content)
    {
        return response()->json([
            "message" => ""
        ], 405);
    }
}
