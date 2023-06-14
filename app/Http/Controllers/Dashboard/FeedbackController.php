<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = [
            'feedback' => Feedback::all()
        ];
        return view('dashboard.pages.feedback.index', $feedback);
    }


}
