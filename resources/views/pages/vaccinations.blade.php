@extends('layouts.app')

@section('title', 'Walk-In Vaccinations | No Appointment Needed | R & S Pioneer Pharmacy Bronx')
@section('meta_description', 'Walk-in flu shots, COVID-19 boosters, Shingrix, RSV, and pneumonia vaccines at R & S Pioneer Pharmacy in South Bronx. No appointment needed. Free $0 copay with most insurance.')

@section('content')
<!-- Page Header Banner -->
<section class="bg-gradient-to-r from-navy-dark via-navy to-royal text-white py-14 sm:py-18 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block bg-crimson text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                Walk-In Immunization Center
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black font-display tracking-tight text-white">
                Walk-In Vaccinations. <br>
                <span class="text-amber-300">No Appointment Ever Needed.</span>
            </h1>
            <p class="text-base sm:text-lg text-ice leading-relaxed">
                Protect yourself and your loved ones quickly and comfortably. Just walk into our pharmacy at 1018 Ogden Ave anytime Monday through Friday from 10:00 AM to 6:00 PM.
            </p>
        </div>
    </div>
</section>

<!-- Walk-In Quick Callout Bar -->
<section class="bg-amber-50 border-y border-amber-200 py-4 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-crimson text-white flex items-center justify-center font-bold text-lg shrink-0">
                ✓
            </div>
            <div>
                <h3 class="font-bold text-navy text-sm sm:text-base">Ready for Your Shot Today?</h3>
                <p class="text-xs text-slate-600">No waiting in long clinic lines. Fast, gentle administration by certified Bronx pharmacists.</p>
            </div>
        </div>
        <div class="flex items-center gap-4 text-xs sm:text-sm font-semibold">
            <span class="text-slate-700">🕒 <strong>Walk-In Hours:</strong> Mon–Fri 10am–6pm</span>
            <a href="tel:7185388183" class="bg-navy hover:bg-navy-dark text-white px-4 py-2 rounded-lg font-bold transition">
                Call: (718) 538-8183
            </a>
        </div>
    </div>
</section>

<!-- Vaccine Catalog (All In One Rich Page, Exactly as Kunal Wanted) -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <h2 class="text-3xl font-extrabold font-display text-navy">
                Vaccines Currently Available for Walk-Ins
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                All vaccines administered by licensed, certified immunization pharmacists in a private, sanitized consultation area.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- 1. Seasonal Flu Shot -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center font-bold">
                            Flu
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-royal px-2.5 py-1 rounded-full uppercase">Walk-In</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Seasonal Flu Shot</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Quadrivalent seasonal influenza vaccine formulated annually to protect against the four most prevalent influenza virus strains. Recommended annually for everyone aged 6 months and older.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Recommended For:</strong> Adults, children, &amp; teens</div>
                        <div><strong>Frequency:</strong> Annual (Fall/Winter season)</div>
                        <div><strong>Copay:</strong> $0 with most insurances &amp; Medicaid</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

            <!-- 2. Senior High-Dose Flu Shot -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center font-bold">
                            65+
                        </div>
                        <span class="text-[11px] font-bold bg-amber-100 text-amber-900 px-2.5 py-1 rounded-full uppercase">Seniors</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">High-Dose Senior Flu Shot</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Contains 4 times the antigen of a standard flu shot to give older immune systems robust defense against influenza-related hospitalizations and complications.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Recommended For:</strong> Adults aged 65 and older</div>
                        <div><strong>Protection:</strong> Enhanced immune antibody response</div>
                        <div><strong>Copay:</strong> 100% Covered by Medicare Part B</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

            <!-- 3. COVID-19 Vaccine -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-crimson text-white flex items-center justify-center font-bold">
                            COVID
                        </div>
                        <span class="text-[11px] font-bold bg-red-100 text-crimson-dark px-2.5 py-1 rounded-full uppercase">Updated</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Updated COVID-19 Boosters</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        The latest CDC-approved updated formula designed to safeguard against circulating variant strains. Reduces severe illness, hospitalization, and long COVID symptoms.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Eligibility:</strong> Adults &amp; eligible teens</div>
                        <div><strong>Safety:</strong> Monitored administration</div>
                        <div><strong>Copay:</strong> Covered by Medicaid, Medicare &amp; commercial</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

            <!-- 4. Shingrix (Shingles Vaccine) -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center font-bold">
                            Shingrix
                        </div>
                        <span class="text-[11px] font-bold bg-purple-100 text-purple-900 px-2.5 py-1 rounded-full uppercase">2-Dose</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Shingrix (Shingles Vaccine)</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Over 90% effective at preventing shingles and agonizing post-herpetic nerve neuralgia in adults aged 50 and older. Administered as a 2-dose series spaced 2 to 6 months apart.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Recommended For:</strong> Adults 50+ &amp; immunocompromised</div>
                        <div><strong>Series:</strong> 2 shots (we send reminders for dose 2)</div>
                        <div><strong>Copay:</strong> $0 under Medicare Part D (Inflation Reduction Act)</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

            <!-- 5. RSV Vaccine -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center font-bold">
                            RSV
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-royal px-2.5 py-1 rounded-full uppercase">Protection</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">RSV Vaccine</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Respiratory Syncytial Virus (RSV) can cause severe lung infections in older adults and individuals with chronic heart or lung conditions (asthma, COPD). Protect your lungs with a single dose.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Recommended For:</strong> Adults 60+ and high-risk adults</div>
                        <div><strong>Protection:</strong> Lower respiratory tract disease</div>
                        <div><strong>Copay:</strong> $0 with Medicare Part D</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

            <!-- 6. Pneumonia Vaccines -->
            <div class="bg-slate-50 rounded-2xl p-7 border border-slate-200 hover:border-royal/40 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center font-bold">
                            Pneumo
                        </div>
                        <span class="text-[11px] font-bold bg-ice text-navy px-2.5 py-1 rounded-full uppercase">Lungs</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Pneumonia Vaccines (Prevnar / Pneumovax)</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Protects against pneumococcal bacterial infections that cause pneumonia, meningitis, and bloodstream infections. Especially vital for seniors, smokers, diabetics, and asthmatics.
                    </p>
                    <div class="pt-2 text-xs text-slate-500 space-y-1">
                        <div><strong>Recommended For:</strong> Adults 65+ and adults with chronic conditions</div>
                        <div><strong>Guidance:</strong> Our pharmacist reviews your vaccination history</div>
                        <div><strong>Copay:</strong> Covered by Medicare Part B &amp; commercial</div>
                    </div>
                </div>
                <div class="pt-6 border-t border-slate-200/80 mt-6 flex justify-between items-center text-xs">
                    <span class="text-emerald-700 font-bold">✓ In Stock Now</span>
                    <a href="tel:7185388183" class="text-crimson font-bold hover:underline">Walk In Today &rarr;</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- What to Bring & FAQ Checklist -->
<section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left: What to Bring -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-crimson">Quick Checklist</span>
                    <h3 class="text-2xl font-extrabold font-display text-navy mt-1">
                        What to Bring When You Walk In
                    </h3>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            1
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-sm">Insurance / Medicaid / Medicare Card</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Bring your physical card or a photo on your phone so we can bill your carrier directly.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            2
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-sm">Valid Photo ID</h4>
                            <p class="text-xs text-slate-600 mt-0.5">NY Driver License, State ID, NYC ID, or Passport for age &amp; identity verification.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white border border-slate-200 shadow-sm">
                        <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold shrink-0">
                            3
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-sm">Short-Sleeve Clothing</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Wear clothing that allows easy access to your upper arm/deltoid muscle.</p>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-2xl bg-royal text-white space-y-3">
                    <h4 class="font-bold text-sm">Questions Before You Stop By?</h4>
                    <p class="text-xs text-ice leading-relaxed">
                        Give Pharmacist Kunal Shah and our team a quick call to check real-time stock or ask specific questions about drug interactions.
                    </p>
                    <a href="tel:7185388183" class="inline-flex items-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-bold text-xs px-4 py-2 rounded-lg transition">
                        Call (718) 538-8183
                    </a>
                </div>
            </div>

            <!-- Right: Common Vaccine FAQs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-royal">Frequently Asked Questions</span>
                    <h3 class="text-2xl font-extrabold font-display text-navy mt-1">
                        Vaccination FAQs
                    </h3>
                </div>

                <div class="space-y-4 text-sm">
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-navy">Do I really not need an appointment?</h4>
                        <p class="text-slate-600 leading-relaxed text-xs sm:text-sm">
                            Yes! Unlike large hospital clinics or doctors' offices where you have to book weeks in advance, R &amp; S Pioneer is a true walk-in vaccination center. You can walk in anytime Monday through Friday from 10:00 AM to 6:00 PM.
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-navy">Will my insurance cover the cost?</h4>
                        <p class="text-slate-600 leading-relaxed text-xs sm:text-sm">
                            In nearly all cases, yes! Under the Affordable Care Act and the Inflation Reduction Act, routine advisory vaccines (Flu, COVID-19, Shingles, RSV, Pneumonia) are covered with a <strong>$0 copay</strong> through Medicare Part B/D, New York Medicaid, and most commercial insurance plans.
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-navy">Can I get multiple vaccines at the same time?</h4>
                        <p class="text-slate-600 leading-relaxed text-xs sm:text-sm">
                            Yes. The CDC confirms it is safe and effective to receive your annual flu shot and COVID-19 booster during the same visit (one in each arm). Our pharmacist will consult with you to determine the ideal schedule for your health profile.
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-2">
                        <h4 class="font-bold text-navy">Do you administer travel vaccines (Yellow Fever, Typhoid)?</h4>
                        <p class="text-slate-600 leading-relaxed text-xs sm:text-sm">
                            At this time, we focus on standard adult, senior, and respiratory immunizations (Flu, COVID, Shingles, RSV, Pneumonia). We do not stock specialized international travel vaccines.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
