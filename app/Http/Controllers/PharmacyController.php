<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\PrescriptionTransfer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PharmacyController extends Controller
{
    /**
     * Homepage with hero, 20-year milestone, walk-in vaccine ticker,
     * core services, toy department, reviews, and hours.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * About Us page: 20 years history in South Bronx, Kunal Shah bio (St. John's alum),
     * community commitment, and core pharmacy values.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Vaccinations page: Walk-in policy (No appointment needed),
     * detailed list of vaccines (Flu, Senior Flu, COVID-19, Shingrix, RSV, Pneumonia),
     * insurance coverage, and FAQs.
     */
    public function vaccinations(): View
    {
        return view('pages.vaccinations');
    }

    /**
     * Services page: Dis-Pill / Multi-dose packaging, DMV vision exam,
     * passport photos, notary, fax/copy, free delivery, OTC & toy section.
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Prescription Transfer & New Patient Registration form page.
     */
    public function transfer(): View
    {
        return view('pages.transfer');
    }

    /**
     * Store submitted Prescription Transfer.
     */
    public function storeTransfer(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'dob' => 'nullable|date',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:120',
            'address' => 'nullable|string|max:255',
            'current_pharmacy_name' => 'required|string|max:150',
            'current_pharmacy_phone' => 'nullable|string|max:30',
            'medications_or_rx_numbers' => 'required|string|max:2000',
            'doctor_name' => 'nullable|string|max:150',
            'insurance_name' => 'nullable|string|max:150',
            'special_notes' => 'nullable|string|max:2000',
        ]);

        PrescriptionTransfer::create($validated);

        return redirect()->route('transfer')->with('success', 'Thank you! Your prescription transfer request has been received. Our pharmacy team will contact your previous pharmacy and call you once your medications are ready.');
    }

    /**
     * Contact Us page & FAQ.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Store submitted Contact Inquiry.
     */
    public function storeContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'email' => 'nullable|email|max:120',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        ContactInquiry::create($validated);

        return redirect()->route('contact')->with('success', 'Your message has been sent to our pharmacy team. We will get back to you shortly, or feel free to call us directly at 718-538-8183.');
    }
}
