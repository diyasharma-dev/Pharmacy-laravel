@extends('layouts.app')

@section('title', 'R & S Pioneer Pharmacy | 1018 Ogden Ave, Bronx NY — Celebrating 20 Years')
@section('meta_description', 'R & S Pioneer Pharmacy — Celebrating 20 years serving South Bronx & Highbridge. Walk-in vaccines, multi-dose blister packing, passport photos, DMV vision test, and free local delivery.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-navy via-navy-light to-navy text-white overflow-hidden pt-8 pb-16 lg:py-20">
    <!-- Decorative Bronx / Medical Background Pattern -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
    <div class="absolute -right-24 -bottom-24 w-96 h-96 bg-royal/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-24 top-12 w-80 h-80 bg-crimson/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Hero Left Copy -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- 20-Year Milestone Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full text-xs sm:text-sm font-semibold text-amber-300 shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-500"></span>
                    </span>
                    <span>CELEBRATING 20 YEARS (2006–2026) IN THE SOUTH BRONX</span>
                </div>

                <!-- Main Catchy Headline -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black font-display tracking-tight text-white leading-tight">
                    Your Trusted Neighborhood Pharmacy. <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-ice via-white to-amber-200">
                        "We're the pharmacy that cares."
                    </span>
                </h1>

                <!-- Subheadline -->
                <p class="text-base sm:text-lg text-slate-200 max-w-2xl leading-relaxed mx-auto lg:mx-0">
                    Two decades of caring for Highbridge and South Bronx families. Walk in for your vaccines with zero wait time, experience personalized Dis-Pill blister packaging, and enjoy fast, free local delivery.
                </p>

                <!-- Quick Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="{{ route('transfer') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-extrabold text-base px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        Transfer Your Prescription
                    </a>
                    <a href="tel:7185388183" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 text-white border border-white/25 font-bold text-base px-7 py-4 rounded-xl backdrop-blur-md transition">
                        <svg class="w-5 h-5 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Call (718) 538-8183
                    </a>
                </div>

                <!-- Trust Points -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 border-t border-white/10 text-left">
                    <div class="p-3 bg-white/5 rounded-lg border border-white/5">
                        <div class="text-amber-300 font-extrabold text-lg sm:text-xl">20 Years</div>
                        <div class="text-xs text-slate-300">Local Bronx Legacy</div>
                    </div>
                    <div class="p-3 bg-white/5 rounded-lg border border-white/5">
                        <div class="text-white font-extrabold text-lg sm:text-xl">Walk-In</div>
                        <div class="text-xs text-slate-300">No Appt Vaccines</div>
                    </div>
                    <div class="p-3 bg-white/5 rounded-lg border border-white/5">
                        <div class="text-emerald-400 font-extrabold text-lg sm:text-xl">FREE</div>
                        <div class="text-xs text-slate-300">Local Delivery</div>
                    </div>
                    <div class="p-3 bg-white/5 rounded-lg border border-white/5">
                        <div class="text-white font-extrabold text-lg sm:text-xl">Bilingual</div>
                        <div class="text-xs text-slate-300">Se Habla Español</div>
                    </div>
                </div>
            </div>

            <!-- Hero Right Card (Featured Services & Bronx Community Badge) -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-100 text-slate-800">
                    <!-- Top Ribbon -->
                    <div class="bg-navy px-6 py-4 flex items-center justify-between text-white border-b-2 border-crimson">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-crimson"></span>
                            <span class="font-extrabold text-sm uppercase tracking-wider">Fast Service Hub</span>
                        </div>
                        <span class="text-xs bg-white/10 px-2 py-0.5 rounded text-amber-300 font-semibold">Open 7 Days</span>
                    </div>

                    <div class="p-6 space-y-4">
                        <!-- Card Item 1: Walk-in Vaccines -->
                        <div class="flex items-start gap-4 p-3.5 rounded-xl bg-ice/60 border border-royal/10 hover:border-royal/30 transition">
                            <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-bold text-navy text-sm">Walk-In Immunizations</h2>
                                    <span class="text-[10px] font-extrabold bg-crimson text-white px-2 py-0.5 rounded uppercase">No Wait</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-0.5">Flu, Senior Flu, COVID-19, Shingrix, RSV &amp; Pneumonia. No appointments needed!</p>
                            </div>
                        </div>

                        <!-- Card Item 2: Dis-Pill & Multi-Dose Packaging -->
                        <div class="flex items-start gap-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 hover:border-royal/30 transition">
                            <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-bold text-navy text-sm">Multi-Dose &amp; Dis-Pill Packs</h2>
                                    <span class="text-[10px] font-bold text-royal bg-ice px-2 py-0.5 rounded">Custom</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-0.5">Medications pre-sorted by date &amp; time. Ideal for seniors, caregivers &amp; nursing homes.</p>
                            </div>
                        </div>

                        <!-- Card Item 3: DMV & Notary & Passport Photos -->
                        <div class="flex items-start gap-4 p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 hover:border-royal/30 transition">
                            <div class="w-12 h-12 rounded-xl bg-crimson text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-bold text-navy text-sm">DMV Eye Exam &amp; Passport Photos</h2>
                                    <span class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">Instant</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-0.5">Instant NY DMV vision tests, official 2x2 passport photos, and licensed notary public.</p>
                            </div>
                        </div>

                        <!-- Card Item 4: Toys & OTC Section Highlight -->
                        <div class="flex items-start gap-4 p-3.5 rounded-xl bg-amber-50/70 border border-amber-200 hover:border-amber-400 transition">
                            <div class="w-12 h-12 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-bold text-amber-900 text-sm">Dedicated Toys &amp; Essentials Section</h2>
                                    <span class="text-[10px] font-extrabold bg-amber-200 text-amber-900 px-2 py-0.5 rounded uppercase">Family Fav</span>
                                </div>
                                <p class="text-xs text-amber-900/80 mt-0.5">Full toy department for neighborhood kids, plus vitamins, baby care &amp; OTC medicines.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer Quick Call -->
                    <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-600 font-medium">Need immediate assistance?</span>
                        <a href="tel:7185388183" class="font-bold text-crimson hover:underline flex items-center gap-1">
                            Call (718) 538-8183 &rarr;
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Walk-In Vaccination Spotlight (Client Liked Section) -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-navy via-navy to-royal rounded-3xl text-white p-8 sm:p-12 shadow-xl overflow-hidden relative">
            <div class="absolute right-0 top-0 -mt-12 -mr-12 w-96 h-96 bg-white/5 rounded-full blur-2xl"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                <!-- Left Details -->
                <div class="lg:col-span-7 space-y-4">
                    <div class="inline-flex items-center gap-2 bg-crimson text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Walk-In Vaccination Hub
                    </div>
                    
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold font-display leading-tight">
                        Vaccines Made Simple in the South Bronx. <br>
                        <span class="text-amber-300">No Appointment Ever Needed.</span>
                    </h2>

                    <p class="text-ice text-sm sm:text-base leading-relaxed">
                        Protect yourself and your family without the hassle of scheduling appointments or waiting in long clinic lines. Just walk in Monday through Friday between 10:00 AM and 6:00 PM.
                    </p>

                    <!-- Vaccine Bullet Points -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-3">
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">Seasonal Flu Shot</span>
                        </div>
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">Senior High-Dose Flu (65+)</span>
                        </div>
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">COVID-19 Updated Boosters</span>
                        </div>
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">Shingrix (Shingles Vaccine)</span>
                        </div>
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">RSV Vaccine for Adults</span>
                        </div>
                        <div class="flex items-center gap-2.5 bg-white/10 p-2.5 rounded-xl border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-crimson"></span>
                            <span class="text-sm font-semibold">Pneumonia Vaccines</span>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap gap-4 items-center">
                        <a href="{{ route('vaccinations') }}" class="inline-flex items-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-bold text-sm px-6 py-3 rounded-xl shadow-md transition">
                            Explore Vaccine Guide &rarr;
                        </a>
                        <span class="text-xs text-ice/80">
                            💰 <strong>$0 Copay:</strong> Covered by Medicaid, Medicare Part D &amp; most major insurances.
                        </span>
                    </div>
                </div>

                <!-- Right Schedule & Hours Box -->
                <div class="lg:col-span-5 bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 text-center lg:text-left space-y-4">
                    <div class="flex items-center justify-between border-b border-white/15 pb-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-300">Walk-In Hours</span>
                        <span class="text-xs bg-emerald-500/20 text-emerald-300 font-bold px-2 py-0.5 rounded">Walk-Ins Welcome</span>
                    </div>

                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between py-1 border-b border-white/10">
                            <span class="text-ice">Monday &ndash; Friday:</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 6:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1 border-b border-white/10">
                            <span class="text-ice">Saturday:</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 5:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="text-ice">Sunday:</span>
                            <span class="font-bold text-white">Call Ahead</span>
                        </div>
                    </div>

                    <div class="pt-2 text-xs text-ice leading-relaxed">
                        📍 <strong>Location:</strong> 1018 Ogden Ave, Bronx NY 10452. Please bring your insurance card and a valid photo ID.
                    </div>

                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 bg-white text-navy font-extrabold text-sm py-3 rounded-xl shadow hover:bg-slate-100 transition">
                        Questions? Call (718) 538-8183
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comprehensive Services Grid (What Kunal Offers) -->
<section class="py-16 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-royal bg-ice px-3 py-1 rounded-full">
                Full-Service Neighborhood Care
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold font-display text-navy">
                Complete Pharmacy &amp; Essential Community Services
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Everything you and your family need under one roof at 1018 Ogden Ave in Highbridge.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Multi-Dose & Dis-Pill Packaging -->
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200/80 hover:shadow-md hover:border-royal/30 transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Multi-Dose &amp; Dis-Pill Packaging</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Never worry about missed doses or medication confusion again. We organize daily medications into sealed, color-coded Dis-Pill blister packaging by morning, noon, evening, and bedtime.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Ideal for chronic conditions &amp; elderly care</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Trusted by local nursing homes &amp; hospitals</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="{{ route('services') }}#packaging" class="text-xs font-bold text-royal hover:text-navy flex items-center gap-1">
                        Learn More About Dis-Pill &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 2: Prescription Refills & Easy Transfers -->
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200/80 hover:shadow-md hover:border-royal/30 transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-crimson text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Prescription Transfers &amp; Refills</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Switching to R &amp; S Pioneer is simple and hassle-free. Give us your current pharmacy name and medication list—our pharmacists handle all calls, prescriber approvals, and insurance verifications.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Most refills ready in 15–20 minutes</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Medicaid, Medicare Part D &amp; private insurance</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="{{ route('transfer') }}" class="text-xs font-bold text-crimson hover:underline flex items-center gap-1">
                        Start Your Prescription Transfer &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 3: Free Local Delivery -->
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200/80 hover:shadow-md hover:border-royal/30 transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Free Neighborhood Delivery</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Can't make it to Ogden Ave? We deliver your prescriptions and over-the-counter necessities straight to your door at zero extra charge across Highbridge, Concourse, and Yankee Stadium area.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Same-day delivery on orders called in by 2 PM</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Discreet, temperature-monitored packaging</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="tel:7185388183" class="text-xs font-bold text-royal hover:text-navy flex items-center gap-1">
                        Request Delivery at (718) 538-8183 &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 4: DMV Eye Exam & Vision Screening -->
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200/80 hover:shadow-md hover:border-royal/30 transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center">
                        <svg class="w-6 h-6 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy">DMV Vision Eye Exam</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Renewing your NY driver license or learner permit? Skip the long lines at the DMV. We conduct official certified eye exams in less than 5 minutes and submit your results electronically to NY DMV immediately.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Instant electronic reporting to NY DMV</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> No appointment required</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="{{ route('services') }}#dmv" class="text-xs font-bold text-royal hover:text-navy flex items-center gap-1">
                        DMV Exam Details &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 5: Passport Photos, Notary & 10¢ Copies -->
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-200/80 hover:shadow-md hover:border-royal/30 transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy">Passport Photos &amp; Notary Public</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Get your official US and international 2x2 passport photos printed in minutes while you wait. We also offer certified Notary Public services, fax transmission, and 10¢ photocopies.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Guaranteed passport &amp; visa compliance</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> In-store Notary Public available daily</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="{{ route('services') }}#documents" class="text-xs font-bold text-royal hover:text-navy flex items-center gap-1">
                        View Rates &amp; Document Info &rarr;
                    </a>
                </div>
            </div>

            <!-- Service 6: OTC Health, Vitamins & Dedicated TOYS Department -->
            <div class="bg-gradient-to-br from-white to-amber-50/50 rounded-2xl p-7 shadow-sm border border-amber-200/80 hover:shadow-md transition flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                    </div>
                    <div class="flex items-center gap-2">
                        <h3 class="text-xl font-bold text-navy">OTC Medicines &amp; Toy Aisle</h3>
                        <span class="text-[10px] font-extrabold bg-amber-300 text-amber-900 px-2 py-0.5 rounded">Special</span>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        A full selection of pain relief, cough/cold remedies, allergy meds, baby care, vitamins, and hygiene essentials. Plus, our beloved neighborhood <strong>toy department</strong> filled with popular games, educational toys, and gifts for kids!
                    </p>
                    <ul class="text-xs text-slate-600 space-y-1.5 pt-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Popular toys, action figures, dolls &amp; games</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Everyday low prices on household staples</li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-slate-100 mt-6">
                    <a href="{{ route('services') }}#retail" class="text-xs font-bold text-amber-800 hover:underline flex items-center gap-1">
                        Explore Retail &amp; Toy Department &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 20-Year Legacy & Meet Kunal Shah Section (Goldberger Inspiration) -->
<section class="py-16 sm:py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Info & Trust Card -->
            <div class="lg:col-span-5">
                <div class="bg-gradient-to-br from-navy via-navy to-royal text-white rounded-3xl p-8 sm:p-10 shadow-xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-60 h-60 bg-crimson/20 rounded-full blur-2xl"></div>

                    <div class="space-y-6 relative z-10">
                        <div class="inline-block bg-white/15 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-amber-300">
                            Our Pharmacist &amp; Founder
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold font-display">
                            Kunal Shah, R.Ph.
                        </h3>
                        <p class="text-xs uppercase tracking-widest text-ice font-semibold">
                            Graduate of St. John's University College of Pharmacy
                        </p>

                        <blockquote class="italic text-slate-200 text-sm leading-relaxed border-l-2 border-crimson pl-4">
                            "When you walk into R &amp; S Pioneer Pharmacy, you aren't just an Rx number in an automated computer queue. You are our neighbor. We take time to counsel you on every medication, answer your questions, and find every possible way to lower your copays."
                        </blockquote>

                        <div class="pt-4 border-t border-white/10 space-y-2 text-xs text-slate-300">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                20 Years Serving South Bronx &amp; Highbridge (Est. 2006)
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                3 Blocks from the Historic Birthplace of Hip-Hop
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Located Minutes from Yankee Stadium
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-xs font-bold text-amber-300 hover:text-white transition">
                                Read Our 20-Year Story &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Reasons / Why Us -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-crimson">Community First</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold font-display text-navy mt-1">
                        Why Bronx Families Have Relied On Us for 20 Years
                    </h2>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200/80">
                        <div class="w-10 h-10 rounded-lg bg-navy text-white flex items-center justify-center shrink-0 font-bold">
                            1
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-base">Direct Access to Your Pharmacist</h4>
                            <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                                No frustrating automated phone trees or 45-minute hold times. When you call (718) 538-8183, you speak directly with our pharmacy team who know your medical history and family by name.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200/80">
                        <div class="w-10 h-10 rounded-lg bg-royal text-white flex items-center justify-center shrink-0 font-bold">
                            2
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-base">Medicaid &amp; Medicare Specialists</h4>
                            <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                                We accept Medicaid, Medicare Part D, EmblemHealth, Fidelis, Healthfirst, MetroPlus, and all major commercial plans. We help you navigate prior authorizations and lower out-of-pocket costs.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200/80">
                        <div class="w-10 h-10 rounded-lg bg-crimson text-white flex items-center justify-center shrink-0 font-bold">
                            3
                        </div>
                        <div>
                            <h4 class="font-bold text-navy text-base">Fast 15-Minute Prescription Turnaround</h4>
                            <p class="text-xs sm:text-sm text-slate-600 mt-1 leading-relaxed">
                                Most prescriptions are ready in 15 to 20 minutes when in stock. If you need it delivered, we bring it to your door in Highbridge or nearby neighborhoods with zero delivery fee.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ route('transfer') }}" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-bold text-sm px-6 py-3 rounded-xl shadow transition">
                        Transfer Your Prescriptions Today &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Google Reviews & Community Feedback Section -->
<section class="py-16 bg-ice/40 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12">
            <div>
                <div class="flex items-center gap-2 text-amber-500 mb-1">
                    <span class="font-extrabold text-2xl text-navy">4.5</span>
                    <div class="flex">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current text-amber-400" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <span class="text-xs text-slate-500 font-semibold">(Verified Google Reviews)</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy">
                    Trusted By Generations of Bronx Residents
                </h2>
            </div>
            <div>
                <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-white text-navy font-bold text-xs sm:text-sm px-5 py-2.5 rounded-lg border border-slate-300 hover:border-royal shadow-sm transition">
                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C7.58 0 4 3.58 4 8c0 5.25 7.13 15.34 7.44 15.77.29.41.83.41 1.12 0C12.87 23.34 20 13.25 20 8c0-4.42-3.58-8-8-8zm0 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                    Review Us on Google
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Review 1 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                        "The best pharmacy in Highbridge hands down. Kunal and his staff are always kind, fast, and helpful. They package my mother's medications in blister packs so she never forgets a dose. Truly a pharmacy that cares!"
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-4">
                    <span class="text-xs font-bold text-navy">Maria G.</span>
                    <span class="text-[11px] text-slate-400">Highbridge Resident</span>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                        "Walked in for my flu and COVID booster after work. Zero appointment needed, zero waiting, and no copay with my insurance. The pharmacist was very gentle and explained everything. My kids also love their toy section!"
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-4">
                    <span class="text-xs font-bold text-navy">David R.</span>
                    <span class="text-[11px] text-slate-400">South Bronx Resident</span>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex text-amber-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                        "Transferred all my prescriptions here last year. Delivery is always prompt and on time. They also did my DMV vision renewal in 2 minutes. Best pharmacy in NYC by a mile."
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-4">
                    <span class="text-xs font-bold text-navy">Anthony T.</span>
                    <span class="text-[11px] text-slate-400">Concourse Village</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location & Operating Hours Map Section -->
<section class="py-16 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            
            <!-- Left Contact & Schedule Info -->
            <div class="lg:col-span-5 bg-navy text-white rounded-2xl p-8 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-300">Visit Our Store</span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold font-display">
                        We Are Open 7 Days a Week.
                    </h3>
                    <p class="text-xs sm:text-sm text-ice leading-relaxed">
                        Conveniently located at 1018 Ogden Ave in the Highbridge section of the Bronx, just minutes from the Yankee Stadium area.
                    </p>

                    <div class="pt-2 space-y-3 text-sm">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-crimson shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <strong class="text-white">1018 Ogden Ave</strong><br>
                                <span class="text-slate-300">Bronx, NY 10452 (Cross of W 164th / W 165th)</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-crimson shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <span class="text-slate-300">Phone: </span>
                                <a href="tel:7185388183" class="text-white font-bold hover:text-amber-300">(718) 538-8183</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Box -->
                <div class="bg-white/10 rounded-xl p-4 border border-white/10 space-y-2 text-xs">
                    <div class="flex justify-between border-b border-white/10 pb-1.5">
                        <span class="text-ice">Monday &ndash; Friday</span>
                        <span class="font-bold text-white">9:00 AM &ndash; 7:00 PM</span>
                    </div>
                    <div class="flex justify-between border-b border-white/10 pb-1.5">
                        <span class="text-ice">Saturday</span>
                        <span class="font-bold text-white">10:00 AM &ndash; 6:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-ice">Sunday</span>
                        <span class="font-bold text-white">10:00 AM &ndash; 3:00 PM</span>
                    </div>
                </div>

                <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="w-full text-center inline-flex items-center justify-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-bold text-sm py-3 rounded-xl transition">
                    Get Driving &amp; Walking Directions &rarr;
                </a>
            </div>

            <!-- Right Interactive Map Embed -->
            <div class="lg:col-span-7 bg-slate-100 rounded-2xl overflow-hidden shadow-sm border border-slate-200 min-h-[360px]">
                <iframe 
                    title="R & S Pioneer Pharmacy Location Map"
                    src="https://maps.google.com/maps?q=1018+Ogden+Ave,+Bronx,+NY+10452&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    class="w-full h-full min-h-[380px] border-0" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </div>
</section>
@endsection
