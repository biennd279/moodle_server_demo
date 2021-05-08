<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Course;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::firstOrFail();

        $model = new Content([
            "title" => "Use Case Model",
           "content" => "A use-case model consists of a number of model elements.  The most important model elements are: use cases, actors and the relationships between them.",
           "url_attachment" => "http://www.utm.mx/~caff/doc/OpenUPWeb/openup/guidances/concepts/use_case_model_CD178AF9.html"
        ]);

        $analysis = new Content([
            "title" => "Use Case Analysis",
            "content" => "A use case analysis is the primary form for gathering usage requirements for a new software program or task to be completed.",
            "url_attachment" => "https://www.cusb.ac.in/images/cusb-files/2020/el/cs/L5_use_case_tutorial.pdf"
        ]);

        $design = new Content([
            "title" => "Use-Cases Realizations",
            "content" => "A use-case realization represents how a use case will be implemented in terms of collaborating objects. The realizations reside within the design. By walking through a design exercise of showing how the design elements will perform the use case, the team gets confirmation that the design is robust enough to perform the required behavior.",
            "url_attachment" => "http://www.utm.mx/~caff/doc/OpenUPWeb/openup/guidances/guidelines/uc_realizations_448DDA77.html"
        ]);

        $course->contents()->saveMany([
           $model,
           $analysis,
           $design
        ]);
    }
}
