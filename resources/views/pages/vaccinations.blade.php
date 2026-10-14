@extends('layouts.app')

@section('title', 'Walk-In Vaccinations | No Appointment Needed | R & S Pioneer Pharmacy Bronx')
@section('meta_description', 'Walk-in flu shots, COVID-19 boosters, Shingrix, RSV, and pneumonia vaccines at R & S Pioneer Pharmacy in South Bronx. No appointment needed. Free $0 copay with most insurance.')

@section('content')
<!-- Page Header Banner (Goldberger Dark Elevated Style) -->
<section class="bg-gradient-gray text-white py-16 lg:py-24 relative overflow-hidden border-b border-white/10">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2 bg-crimson px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-white shadow-sm">
                Walk-In Immunization Center &bull; Highbridge Bronx
            </div>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold font-display tracking-tight text-white leading-tight">
                Walk-In Vaccinations. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-amber-200">
                    No Appointment Ever Needed.
                </span>
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-sans">
                Protect yourself and your loved ones quickly and comfortably. Just walk into our pharmacy at 1018 Ogden Ave anytime Monday through Friday from 10:00 AM to 6:00 PM.
            </p>
        </div>
    </div>
</section>

<!-- Walk-In Quick Callout Bar (Clean Alert Strip) -->
<section class="bg-[#F2F2F2] border-b border-slate-200 py-5 px-5 sm:px-10">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
        <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-full bg-crimson text-white flex items-center justify-center font-bold text-lg shrink-0 shadow">
                ✓
            </div>
            <div>
                <h3 class="font-bold text-slate-900 text-base">Ready for Your Shot Today?</h3>
                <p class="text-xs sm:text-sm text-slate-600">No waiting in clinic lines. Fast, gentle administration by certified Bronx pharmacists.</p>
            </div>
        </div>
        <div class="flex items-center gap-4 text-xs sm:text-sm font-semibold">
            <span class="text-slate-700">🕒 <strong>Walk-In Hours:</strong> Mon–Fri 10am–6pm</span>
            <a href="tel:7185388183" class="rounded-full bg-black hover:bg-slate-800 text-white px-6 py-2.5 font-bold transition shadow-sm">
                Call: (718) 538-8183
            </a>
        </div>
    </div>
</section>

<!-- Vaccine Catalog (Goldberger Floating Cards with Deep Diffuse Shadow) -->
<section class="py-16 lg:py-28 bg-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 space-y-14">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-crimson">Comprehensive Immunization</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-slate-900">
                Vaccines Currently Available for Walk-Ins
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                All vaccines administered by licensed, certified immunization pharmacists in a private, sanitized consultation area.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- 1. Seasonal Flu Shot -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-royal text-white flex items-center justify-center font-bold text-sm shadow-sm">
                            Flu
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-royal px-3 py-1 rounded-full uppercase tracking-wider">Walk-In</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">Seasonal Flu Shot</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Quadrivalent seasonal influenza vaccine formulated annually to protect against the four most prevalent influenza virus strains. Recommended annually for everyone aged 6 months and older.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults, children, &amp; teens</div>
                        <div><strong>Frequency:</strong> Annual (Fall/Winter season)</div>
                        <div><strong>Copay:</strong> $0 with most insurances &amp; Medicaid</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 2. Senior High-Dose Flu Shot -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold text-sm shadow-sm">
                            65+
                        </div>
                        <span class="text-[11px] font-bold bg-amber-100 text-amber-900 px-3 py-1 rounded-full uppercase tracking-wider">Seniors</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">High-Dose Senior Flu</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Contains 4 times the antigen of a standard flu shot to give older immune systems robust defense against influenza-related hospitalizations and complications.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults aged 65 and older</div>
                        <div><strong>Protection:</strong> Enhanced immune antibody response</div>
                        <div><strong>Copay:</strong> 100% Covered by Medicare Part B</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 3. COVID-19 Boosters -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-crimson text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            COVID
                        </div>
                        <span class="text-[11px] font-bold bg-red-100 text-crimson-dark px-3 py-1 rounded-full uppercase tracking-wider">Updated</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">Updated COVID-19</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        The latest CDC-approved updated formula designed to safeguard against circulating variant strains. Reduces severe illness, hospitalization, and long COVID symptoms.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Eligibility:</strong> Adults &amp; eligible adolescents</div>
                        <div><strong>Safety:</strong> Monitored administration</div>
                        <div><strong>Copay:</strong> Covered by Medicaid, Medicare &amp; commercial</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 4. Shingrix (Shingles Vaccine) -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-purple-700 text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            Shingrix
                        </div>
                        <span class="text-[11px] font-bold bg-purple-100 text-purple-900 px-3 py-1 rounded-full uppercase tracking-wider">2-Dose</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">Shingrix (Shingles)</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Over 90% effective at preventing shingles and agonizing post-herpetic nerve neuralgia in adults aged 50 and older. Administered as a 2-dose series spaced 2 to 6 months apart.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults 50+ &amp; immunocompromised</div>
                        <div><strong>Series:</strong> 2 shots (we send reminders for dose 2)</div>
                        <div><strong>Copay:</strong> $0 under Medicare Part D</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 5. RSV Vaccine -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-royal text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            RSV
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-royal px-3 py-1 rounded-full uppercase tracking-wider">Lungs</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">RSV Vaccine</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Respiratory Syncytial Virus (RSV) can cause severe lung infections in older adults and individuals with chronic heart or lung conditions (asthma, COPD). Protect your lungs with a single dose.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults 60+ and high-risk adults</div>
                        <div><strong>Protection:</strong> Lower respiratory tract disease</div>
                        <div><strong>Copay:</strong> $0 with Medicare Part D</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 6. Pneumonia Vaccines -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.12)" class="bg-white rounded-3xl p-8 border border-slate-100 hover:-translate-y-1.5 transition duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            Pneumo
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-navy px-3 py-1 rounded-full uppercase tracking-wider">Prevnar 20</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 font-display">Pneumonia Vaccine</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Protects against pneumococcal bacterial infections that cause pneumonia, meningitis, and bloodstream infections. Especially vital for seniors, smokers, diabetics, and asthmatics.
                    </p>
                    <div class="pt-3 border-t border-slate-100 text-xs text-slate-500 space-y-1.5">
                        <div><strong>Recommended For:</strong> Adults 65+ and adults with chronic conditions</div>
                        <div><strong>Guidance:</strong> Pharmacist reviews your immunization record</div>
                        <div><strong>Copay:</strong> Covered by Medicare Part B &amp; commercial</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> In Stock Now
                    </span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline flex items-center gap-1">
                        <span>Walk In Today</span> &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- What to Bring & FAQ Checklist (Goldberger Split Checklist) -->
<section class="py-16 lg:py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left: What to Bring -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-crimson">Quick Checklist</span>
                    <h3 class="text-2xl sm:text-3xl font-bold font-display text-slate-900 mt-1">
                        What to Bring When You Walk In
                    </h3>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            1
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Insurance / Medicaid / Medicare Card</h4>
                            <p class="text-xs text-slate-600 mt-1">Bring your physical card or a photo on your phone so we can bill your carrier directly.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            2
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Valid Photo ID</h4>
                            <p class="text-xs text-slate-600 mt-1">NY Driver License, State ID, NYC ID, or Passport for age &amp; identity verification.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            3
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Short-Sleeve Clothing</h4>
                            <p class="text-xs text-slate-600 mt-1">Wear clothing that allows easy access to your upper arm/deltoid muscle.</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-3xl bg-gradient-gray text-white space-y-4 shadow-xl border border-white/10">
                    <h4 class="font-bold text-base">Questions Before You Stop By?</h4>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Give Pharmacist Kunal Shah and our team a quick call to check real-time vaccine stock or ask questions about drug interactions.
                    </p>
                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-crimson hover:bg-crimson-dark text-white font-bold text-sm h-11 transition shadow">
                        <span>Call (718) 538-8183</span>
                    </a>
                </div>
            </div>

            <!-- Right: Common Vaccine FAQs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-royal">Frequently Asked Questions</span>
                    <h3 class="text-2xl sm:text-3xl font-bold font-display text-slate-900 mt-1">
                        Vaccination FAQs
                    </h3>
                </div>

                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-slate-900 text-base">Do I really not need an appointment?</h4>
                        <p class="text-slate-600 leading-relaxed text-sm">
                            Yes! Unlike large hospital clinics or doctors' offices where you have to book weeks in advance, R &amp; S Pioneer is a true walk-in vaccination center. You can walk in anytime Monday through Friday from 10:00 AM to 6:00 PM.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-slate-900 text-base">Will my insurance cover the cost?</h4>
                        <p class="text-slate-600 leading-relaxed text-sm">
                            In nearly all cases, yes! Under the Affordable Care Act and the Inflation Reduction Act, routine advisory vaccines (Flu, COVID-19, Shingles, RSV, Pneumonia) are covered with a <strong>$0 copay</strong> through Medicare Part B/D, New York Medicaid, and most commercial insurance plans.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-slate-900 text-base">Can I get multiple vaccines at the same time?</h4>
                        <p class="text-slate-600 leading-relaxed text-sm">
                            Yes. The CDC confirms it is safe and effective to receive your annual flu shot and COVID-19 booster during the same visit (one in each arm). Our pharmacist will consult with you to determine the ideal schedule for your health profile.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-slate-900 text-base">Do you administer travel vaccines (Yellow Fever, Typhoid)?</h4>
                        <p class="text-slate-600 leading-relaxed text-sm">
                            At this time, we focus on standard adult, senior, and respiratory immunizations (Flu, COVID, Shingles, RSV, Pneumonia). We do not stock specialized international travel vaccines.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bottom Full Red CTA Strip (Goldberger Style) -->
<div class="flex w-full bg-crimson py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 text-center space-y-6">
        <h3 class="text-white/80 font-bold text-sm tracking-wider uppercase">No Appointment Needed</h3>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Walk In Today for Your Immunization
        </h2>
        <p class="max-w-2xl mx-auto text-white/95 text-base leading-relaxed">
            Visit 1018 Ogden Ave, Bronx NY 10452. Open weekdays 10 AM to 6 PM for walk-ins. We accept all major insurances with $0 copay.
        </p>
        <div class="pt-2 flex flex-wrap justify-center gap-4">
            <a href="tel:7185388183" class="rounded-full bg-white text-slate-900 font-semibold px-8 h-12 inline-flex items-center gap-3 text-sm hover:bg-slate-100 transition shadow hover:scale-105">
                <span>Call (718) 538-8183</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('home') }}" class="rounded-full border border-white text-white font-semibold px-8 h-12 inline-flex items-center gap-3 text-sm hover:bg-white hover:text-crimson transition shadow">
                <span>Back to Home</span>
            </a>
        </div>
    </div>
</div>
@endsection
