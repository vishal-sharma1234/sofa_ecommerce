<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;


class AboutUsController extends Controller
{
    public function store(Request $request)
    {

        if ($request->isMethod('get')) {

            $aboutUs = AboutUs::firstOrCreate(
                ['id' => 1],
                [
                    'content' => [
                        'about' => '',
                        'mission' => '',
                        'goals' => [],
                    ],
                    'history' => [
                        'title' => '',
                        'description' => '',
                        'timeline' => [],
                    ],
                ]
            );

            return view('admin.about_us', compact('aboutUs'));
        }

        // dd($request->all());

        $timeline = [];

        if ($request->timeline) {
            foreach ($request->timeline['year'] as $key => $year) {
                $timeline[] = [
                    'year' => $year,
                    'title' => $request->timeline['title'][$key] ?? '',
                    'description' => $request->timeline['description'][$key] ?? '',
                ];
            }
        }

        AboutUs::updateOrCreate(
            ['id' => 1],
            [
                'content' => [
                    'about' => $request->about,
                    'mission' => $request->mission,
                    'goals' => $request->goals,
                ],
                'history' => [
                    'title' => $request->history_title,
                    'description' => $request->history_description,
                    'timeline' => $timeline,
                ]
            ]
        );

        return back()->with('success', 'History updated successfully');
    }
}
