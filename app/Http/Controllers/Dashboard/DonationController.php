<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DonationController extends Controller
{
    public function index(): View
    {
        $donations = Donation::with('user')->where(['status' => 'settlement', 'donation_type' => 'uang'])->get();
        return \view('dashboard.pages.donation.index', compact('donations'));
    }

    public function printMoneyDonation()
    {
        $donations = Donation::with('user')->where(['status' => 'settlement', 'donation_type' => 'uang'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadview('dashboard.pages.donation.printMoneyDonation', compact('donations'));
        return $pdf->stream();
    }
}
