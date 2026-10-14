@extends('layouts.app')

@section('title', "R & S Pioneer Pharmacy | Trusted Pharmacy Services Since 2006")
@section('meta_description', "Established in 2006, R & S Pioneer Pharmacy has been serving the South Bronx community for 20 years. Walk-in vaccines, Dis-Pill blister packing, DMV eye exams, and free delivery.")

@section('content')
<!-- Hero Section (Goldberger-Inspired Layout: Photographic Background, Left Elevated Navy Card, Desktop Floating Proof, & 4 Circular Badges) -->
<div class="relative flex min-h-[88vh] lg:min-h-[94vh] w-full bg-cover bg-center bg-no-repeat text-white overflow-hidden" 
     style="background-image: linear-gradient(to right, rgba(7, 30, 60, 0.88) 0%, rgba(7, 30, 60, 0.60) 52%, rgba(7, 30, 60, 0.22) 100%), url('{{ asset('images/hero-bg.jpg') }}');">
    
    <div class="max-w-screen-xl mx-auto px-5 md:px-10 py-12 lg:py-20 mt-auto w-full flex items-end justify-between relative z-10 !pb-0">
        
        <!-- Left: Elevated Navy Gradient Card (Goldberger Elevated Format) -->
        <section class="w-full lg:max-w-2xl rounded-t-3xl bg-gradient-to-b from-[#0B2F5C]/95 via-[#071E3C]/95 to-[#071E3C]/98 p-6 sm:p-10 lg:p-12 border-t border-l border-r border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.6)] backdrop-blur-xl relative z-10 pb-36 sm:pb-44 lg:pb-52">
            <div class="flex flex-col gap-5 sm:gap-6">
                
                <!-- 20-Year Milestone Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-[#C1272D] px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-white shadow-md w-fit">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>Established 2006 &bull; Celebrating 20 Years</span>
                </div>

                <!-- Headline (Goldberger Format) -->
                <h1 class="text-3xl sm:text-5xl lg:text-[54px] font-extrabold font-display leading-[1.06] tracking-tight text-white">
                    <span class="block">Your Trusted</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-[#E8F0FE] to-sky-200">
                        Pharmacy Since 2006
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-slate-200 text-sm sm:text-base leading-relaxed font-sans max-w-xl">
                    From prescription refills and walk-in vaccinations to Dis-Pill blister packaging and fast free delivery across Highbridge, trust our family to care for yours. <strong class="text-white font-semibold">We care about you!</strong>
                </p>

                <!-- Dual Action Hero Buttons -->
                <div class="flex flex-wrap items-center gap-3 pt-1">
                    <a href="tel:7185388183" class="inline-flex items-center gap-2 bg-[#C1272D] hover:bg-[#a51d22] text-white px-6 sm:px-7 py-3 rounded-full font-bold text-xs sm:text-sm shadow-xl hover:shadow-2xl hover:scale-105 transition-all cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center gap-2 bg-white hover:bg-slate-100 text-[#0B2F5C] px-5 sm:px-6 py-3 rounded-full font-bold text-xs sm:text-sm shadow-md hover:scale-105 transition-all">
                        <span>Transfer Prescription</span>
                        <svg class="w-3.5 h-3.5 text-[#C1272D] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 4 Circular Badges (Goldberger Row) -->
                <div class="grid grid-cols-4 gap-3 sm:gap-6 font-bold pt-3 border-t border-white/10">
                    
                    <!-- 1. Dis-Pill Packing -->
                    <a href="{{ route('services') }}#dis-pill" class="flex flex-col items-center justify-center gap-2 group text-center">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white shadow-lg flex items-center justify-center text-[#C1272D] group-hover:scale-110 group-hover:bg-[#E8F0FE] transition duration-300">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="text-[11px] sm:text-xs text-white font-semibold leading-tight group-hover:text-amber-200 transition">Dis-Pill Packing</h4>
                    </a>

                    <!-- 2. Prescription -->
                    <a href="{{ route('transfer') }}" class="flex flex-col items-center justify-center gap-2 group text-center">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white shadow-lg flex items-center justify-center text-[#1A4FA0] group-hover:scale-110 group-hover:bg-[#E8F0FE] transition duration-300">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h4 class="text-[11px] sm:text-xs text-white font-semibold leading-tight group-hover:text-amber-200 transition">Prescriptions</h4>
                    </a>

                    <!-- 3. Walk-In Vaccines -->
                    <a href="{{ route('vaccinations') }}" class="flex flex-col items-center justify-center gap-2 group text-center">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white shadow-lg flex items-center justify-center text-emerald-600 group-hover:scale-110 group-hover:bg-[#E8F0FE] transition duration-300">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h4 class="text-[11px] sm:text-xs text-white font-semibold leading-tight group-hover:text-amber-200 transition">Walk-In Vaccines</h4>
                    </a>

                    <!-- 4. Fast Delivery -->
                    <a href="{{ route('services') }}#delivery" class="flex flex-col items-center justify-center gap-2 group text-center">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white shadow-lg flex items-center justify-center text-amber-500 group-hover:scale-110 group-hover:bg-[#E8F0FE] transition duration-300">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                        </div>
                        <h4 class="text-[11px] sm:text-xs text-white font-semibold leading-tight group-hover:text-amber-200 transition">Free Delivery</h4>
                    </a>

                </div>

            </div>
        </section>

        <!-- Right: Desktop Floating Social Proof Badges (High Visibility over Pharmacy Photo) -->
        <div class="hidden xl:flex flex-col gap-4 pb-48 z-10 max-w-sm">
            
            <!-- Google Review Card -->
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/40 text-[#0B2F5C]">
                <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0 font-extrabold text-lg shadow-sm">
                    ★
                </div>
                <div>
                    <div class="flex items-center gap-1.5 font-extrabold text-sm text-[#0B2F5C]">
                        <span>4.5 Google Rating</span>
                        <span class="text-xs text-slate-500 font-normal">(39 Reviews)</span>
                    </div>
                    <p class="text-xs text-slate-600">Highbridge Bronx Community Favorite</p>
                </div>
            </div>

            <!-- Walk-In Vaccines Status Card -->
            <div class="flex items-center gap-3.5 bg-white/95 backdrop-blur-md rounded-2xl p-4 shadow-2xl border border-white/40 text-[#0B2F5C]">
                <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 shadow-sm font-bold text-lg">
                    ✓
                </div>
                <div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                        <span class="font-extrabold text-sm text-[#0B2F5C]">Walk-Ins Welcome Today</span>
                    </div>
                    <p class="text-xs text-slate-600">Flu, COVID-19 &amp; Adult Vaccines &bull; No Appt</p>
                </div>
            </div>

            <!-- Location Badge -->
            <div class="flex items-center gap-3.5 bg-[#071E3C]/90 backdrop-blur-md rounded-2xl p-3.5 shadow-2xl border border-white/10 text-white">
                <div class="w-9 h-9 rounded-xl bg-white/10 text-[#C1272D] flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="text-xs">
                    <strong class="block text-white font-bold">1018 Ogden Ave, Bronx NY</strong>
                    <span class="text-slate-300">Open 7 Days &bull; Highbridge Neighborhood</span>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- 3-Box Floating Feature Strip (Goldberger Exact Overlap: Crimson #C1272D + Primary Navy #0B2F5C + Deep Navy #071E3C) -->
<div class="max-w-screen-xl mx-auto px-5 md:px-10 -mt-24 sm:-mt-32 lg:-mt-40 flex flex-col lg:flex-row text-white mb-12 relative z-30 shadow-2xl rounded-3xl overflow-hidden">
    
    <!-- Section 1: Crimson Red (Call Us At) -->
    <section class="flex-1 flex items-start gap-4 bg-[#C1272D] px-6 sm:px-8 py-9 max-lg:rounded-t-3xl lg:rounded-l-3xl">
        <div class="rounded-full bg-white/20 p-3 text-white shrink-0 shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        </div>
        <div class="flex h-full flex-col justify-between gap-4">
            <div>
                <h3 class="text-xl font-bold tracking-tight">Call Us At</h3>
                <p class="text-xs sm:text-sm text-white/90 leading-relaxed mt-1">
                    Speak directly with Pharmacist Kunal Shah and our caring pharmacy team. English &amp; Español. <b>We care about you!</b>
                </p>
            </div>
            <a href="tel:7185388183" class="flex items-center gap-3 font-semibold group pt-1">
                <div class="rounded-full bg-white p-2.5 text-[#C1272D] group-hover:scale-110 transition shadow">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                </div>
                <span class="text-xl sm:text-2xl font-bold text-white group-hover:underline">(718) 538-8183</span>
            </a>
        </div>
    </section>

    <!-- Section 2: Primary Navy #0B2F5C (Transfer Your ℞ Today) -->
    <section class="flex-1 flex items-start gap-4 bg-[#0B2F5C] px-6 sm:px-8 py-9">
        <div class="rounded-full bg-white/20 p-3 text-white shrink-0 shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
        </div>
        <div class="flex h-full flex-col justify-between gap-4">
            <div>
                <h3 class="text-xl font-bold tracking-tight">Transfer Your ℞ Today</h3>
                <p class="text-xs sm:text-sm text-slate-200 leading-relaxed mt-1">
                    Just fill out the simple form. We coordinate with your doctor and previous pharmacy. Pickup or free local delivery. <b>We care about you!</b>
                </p>
            </div>
            <a href="{{ route('transfer') }}" class="flex w-fit items-center gap-2.5 rounded-full bg-white text-[#0B2F5C] hover:bg-slate-100 px-5 py-2.5 text-xs font-bold shadow transition">
                <span>Transfer ℞ now</span>
                <svg class="w-3.5 h-3.5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </section>

    <!-- Section 3: Deep Navy #071E3C (Opening Hours) -->
    <section class="flex-1 flex items-start gap-4 bg-[#071E3C] px-6 sm:px-8 py-9 max-lg:rounded-b-3xl lg:rounded-r-3xl">
        <div class="rounded-full bg-white/20 p-3 text-white shrink-0 shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div class="flex h-full flex-col justify-between gap-3 w-full">
            <h3 class="text-xl font-bold tracking-tight">Store Hours &amp; Walk-Ins</h3>
            <div class="space-y-1.5 text-xs text-slate-300 w-full">
                <div class="flex justify-between border-b border-white/10 pb-1">
                    <p class="font-medium text-slate-300">Monday &ndash; Friday</p>
                    <p class="text-white font-bold">09:00 am &ndash; 07:00 pm</p>
                </div>
                <div class="flex justify-between border-b border-white/10 pb-1">
                    <p class="font-medium text-slate-300">Saturday</p>
                    <p class="text-white font-bold">10:00 am &ndash; 06:00 pm</p>
                </div>
                <div class="flex justify-between border-b border-white/10 pb-1">
                    <p class="font-medium text-slate-300">Sunday</p>
                    <p class="text-white font-bold">10:00 am &ndash; 03:00 pm</p>
                </div>
                <div class="flex justify-between text-amber-300 font-semibold pt-0.5">
                    <p>Walk-In Vaccines</p>
                    <p>Mon&ndash;Fri 10am &ndash; 6pm</p>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Insurance Accepted Trust Strip (Seamless Bridge into Section 2) -->
<div class="max-w-screen-xl mx-auto px-5 md:px-10 mb-16">
    <div class="bg-[#F8FAFC] border border-[#0B2F5C]/10 rounded-2xl py-4 px-6 text-center flex flex-wrap items-center justify-center gap-4 sm:gap-8 shadow-sm">
        <span class="text-[11px] font-extrabold uppercase tracking-wider text-[#0B2F5C]">We Accept Most Insurance:</span>
        <span class="text-xs font-bold text-slate-700 flex items-center gap-1.5"><span class="w-4 h-4 rounded bg-[#0B2F5C] text-white text-[9px] flex items-center justify-center">+</span> Medicaid</span>
        <span class="text-xs font-bold text-[#C1272D]">♥ Aetna</span>
        <span class="text-xs font-bold text-[#002677]">UnitedHealthcare</span>
        <span class="text-xs font-bold text-[#0056A8] flex items-center gap-1"><span class="w-4 h-4 rounded bg-[#0056A8] text-white text-[9px] flex items-center justify-center">✚</span> BlueCross BlueShield</span>
        <span class="text-xs font-bold text-[#6A4C9A]">EmblemHealth</span>
        <span class="text-xs font-bold text-[#007AC2]">Cigna</span>
        <span class="text-xs font-bold text-slate-500">&amp; Many More</span>
    </div>
</div>

<!-- "Over Two Decades of Trust and Care" (Section 2 Layout with Real Consultation Image) -->
<section class="max-w-screen-xl mx-auto px-5 md:px-10 py-16 lg:py-24 w-full space-y-11 lg:min-h-[85vh]">
    <h2 class="whitespace-break-spaces text-2xl sm:text-4xl font-bold text-[#0B2F5C] leading-tight font-display">
        R &amp; S Pioneer Pharmacy <br>
        <span class="text-xl sm:text-3xl font-medium text-slate-700">Over Two Decades of Trust and Care (Est. 2006)</span>
    </h2>

    <div class="relative flex w-full flex-col lg:flex-row gap-11 items-start">
        
        <!-- Left Side Copy, Image & Button -->
        <div class="flex flex-col gap-6 lg:w-[45%]">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#C1272D] text-white flex items-center justify-center shrink-0 shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    Since 2006, R &amp; S Pioneer Pharmacy has been committed to delivering personalized, high-quality care. Our mission is to provide trusted healthcare solutions tailored to the unique needs of our South Bronx community.
                </p>
            </div>

            <!-- Consultation Photo Placement -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200 group">
                <img src="{{ asset('images/doctor-consultation.jpg') }}" alt="Pharmacy Consultation & Patient Care" class="w-full h-64 sm:h-72 object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-[#071E3C]/80 via-transparent to-transparent flex items-end p-5">
                    <span class="text-xs font-semibold text-white tracking-wide">Pharmacist On Duty &bull; Personalized Consultations</span>
                </div>
            </div>

            <div>
                <a href="{{ route('services') }}" class="rounded-full bg-[#0B2F5C] font-semibold text-white px-7 h-12 inline-flex items-center gap-2.5 text-sm hover:bg-[#071E3C] transition shadow hover:scale-105">
                    <span>Our Services</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Pharmacist Kunal Badge Box (Ice Blue bg #E8F0FE) -->
            <div class="p-6 rounded-2xl bg-[#E8F0FE]/70 border border-[#0B2F5C]/15 shadow-sm space-y-3 mt-1">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-sm shadow">
                        Rx
                    </div>
                    <div>
                        <h4 class="font-bold text-[#0B2F5C] text-sm">Kunal Shah, R.Ph.</h4>
                        <p class="text-xs text-slate-500">St. John's University College of Pharmacy</p>
                    </div>
                </div>
                <p class="text-xs text-slate-700 leading-relaxed italic">
                    "We view our patients as family, not prescription numbers. For 20 years, we've taken pride in packaging daily blister packs, offering walk-in vaccines, and answering every health question."
                </p>
            </div>
        </div>

        <!-- Right Side Container: lg:w-[53%] bg-[#F8FAFC] -->
        <div class="flex w-full flex-col gap-5 rounded-3xl bg-[#F8FAFC] px-8 sm:px-11 py-12 text-slate-700 lg:w-[53%] shadow-sm border border-[#0B2F5C]/10">
            <p class="leading-relaxed text-sm sm:text-base">
                For over 20 years, R &amp; S Pioneer Pharmacy has stood as a beacon of health and wellness in our Highbridge neighborhood. We pride ourselves on offering not just prescriptions, but a full spectrum of personalized services including medication management, Dis-Pill multi-dose packaging, walk-in vaccinations, DMV vision exams, and expert consultations.
            </p>
            <p class="whitespace-break-spaces leading-relaxed text-sm sm:text-base">
                With a commitment to customer care, convenience, and community trust, we work tirelessly to ensure every customer receives the attention they deserve. Whether it’s delivering your prescriptions to your doorstep or providing critical health advice, our goal is to be a dependable partner in your healthcare journey.
            </p>

            <!-- 3 Checkmark Bullet Points (Demo Format) -->
            <div class="space-y-4 pt-3">
                <div class="flex items-start gap-4">
                    <svg class="w-5 h-5 text-[#C1272D] shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Personalized Care:</b> Tailored healthcare solutions that prioritize each patient's unique medication schedule.</p>
                </div>
                <div class="flex items-start gap-4">
                    <svg class="w-5 h-5 text-[#C1272D] shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Fast &amp; Reliable Service:</b> Quick 15-minute prescription refills with seamless free home delivery across Highbridge.</p>
                </div>
                <div class="flex items-start gap-4">
                    <svg class="w-5 h-5 text-[#C1272D] shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Comprehensive Offerings:</b> From Dis-Pill packaging to walk-in vaccines, DMV vision exams, notary, and our full toy aisle.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- "Comprehensive Care, Tailored for You — Comprehensive Care with A Personal Touch" (Demo Site Light Slate Background) -->
<div class="flex w-full bg-[#F8FAFC] border-y border-black/5 py-16 lg:py-28">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 flex w-full flex-col gap-14">
        
        <section class="space-y-3 text-center">
            <h3 class="text-[#C1272D] font-bold text-sm tracking-wider uppercase">Comprehensive Care, Tailored for You</h3>
            <h2 class="whitespace-break-spaces text-2xl sm:text-4xl font-bold text-[#0B2F5C] font-display">
                Comprehensive Care with A Personal Touch
            </h2>
        </section>

        <!-- 3 Cards Grid -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-7 w-full">
            
            <!-- Card 1: Fast Delivery -->
            <div class="flex flex-col justify-between gap-4 rounded-3xl bg-white p-7 sm:p-9 shadow-lg border border-[#0B2F5C]/10 hover:-translate-y-1.5 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#E8F0FE] flex items-center justify-center text-[#1A4FA0] shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <h3 class="font-bold text-xl text-[#0B2F5C]">Fast Free Delivery</h3>
                        <p class="text-[#475569] text-sm leading-relaxed">
                            Experience the convenience of same-day or next-day delivery across Highbridge, Concourse &amp; Yankee Stadium area, ensuring your medications are always within reach.
                        </p>
                    </div>
                </div>
                <!-- Bottom Color Bar (Navy #0B2F5C) -->
                <div class="mx-auto mt-6 w-full bg-[#0B2F5C] h-1 rounded-full"></div>
            </div>

            <!-- Card 2: Dis-Pill Packaging -->
            <div class="flex flex-col justify-between gap-4 rounded-3xl bg-white p-7 sm:p-9 shadow-lg border border-[#0B2F5C]/10 hover:-translate-y-1.5 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#E8F0FE] flex items-center justify-center text-[#1A4FA0] shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <h3 class="font-bold text-xl text-[#0B2F5C]">Dis-Pill Multi-Dose Packs</h3>
                        <p class="text-[#475569] text-sm leading-relaxed">
                            Color-coded sealed blister packaging sorted into Morning, Noon, Evening, and Bedtime pods to eliminate missed or double doses for seniors.
                        </p>
                    </div>
                </div>
                <!-- Bottom Color Bar (Crimson #C1272D) -->
                <div class="mx-auto mt-6 w-full bg-[#C1272D] h-1 rounded-full"></div>
            </div>

            <!-- Card 3: Vision Test for NY DMV -->
            <div class="flex flex-col justify-between gap-4 rounded-3xl bg-white p-7 sm:p-9 shadow-lg border border-[#0B2F5C]/10 hover:-translate-y-1.5 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#E8F0FE] flex items-center justify-center text-[#0B2F5C] shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <h3 class="font-bold text-xl text-[#0B2F5C]">Vision Test for NY DMV</h3>
                        <p class="text-[#475569] text-sm leading-relaxed">
                            Simplify your driver license renewal with quick and easy in-house vision tests. Results electronically submitted to the NY DMV in minutes.
                        </p>
                    </div>
                </div>
                <!-- Bottom Color Bar (Navy #0B2F5C) -->
                <div class="mx-auto mt-6 w-full bg-[#0B2F5C] h-1 rounded-full"></div>
            </div>

        </section>

    </div>
</div>

<!-- "Refill & Transfer Your ℞ Today — It's Quick and Easy" (Demo Site Deep Navy #071E3C Section with Real Photography) -->
<div class="flex w-full bg-[#071E3C] py-16 lg:py-28 text-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 my-auto flex w-full flex-col gap-14">
        
        <section class="space-y-3 text-center">
            <h3 class="text-[#C1272D] font-bold text-sm tracking-wider uppercase">It's Quick and Easy</h3>
            <h2 class="text-2xl sm:text-4xl font-bold font-display text-white">
                Transfer Your ℞ Today
            </h2>
        </section>

        <section class="flex flex-col lg:flex-row items-center gap-14">
            
            <!-- Left Side Real Photography -->
            <div class="w-full lg:w-1/2 rounded-3xl overflow-hidden shadow-2xl border border-white/10 group">
                <img src="{{ asset('images/refill-your-rx.jpg') }}" alt="Prescription Medicine Bottles and Notes" class="w-full h-80 sm:h-96 object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Right Side Copy & Pill Button -->
            <div class="flex flex-col gap-5 lg:w-1/2">
                <p class="text-lg font-bold lg:text-[22px] text-white">Fill the form today</p>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Managing your prescriptions has never been more convenient. With our simple online form, you can request transfers in just a few clicks. Whether you're at home, work, or on the go, moving your prescriptions is now seamless and stress-free.
                </p>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Just fill out the form, and we’ll ensure your medication is ready when you need it, with the option for pickup or delivery.
                </p>
                <p class="whitespace-break-spaces text-lg font-bold lg:text-[22px] text-white pt-1">
                    Experience hassle-free refills &mdash; Your Health, Made Simple!
                </p>
                <a href="{{ route('transfer') }}" class="flex w-fit font-roboto items-center gap-4 rounded-full border border-white/30 px-7 h-12 text-sm font-semibold text-white hover:bg-white hover:text-[#0B2F5C] transition shadow">
                    <span>Transfer ℞ now</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </section>

    </div>
</div>

<!-- "Walk-In Vaccination Services — No Appointment Needed Just Walk In!" (Diffused Shadow Floating Cards) -->
<div class="flex w-full bg-white py-16 lg:py-28 text-slate-900">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 my-auto flex w-full flex-col gap-14">
        
        <section class="space-y-3 text-center">
            <h3 class="text-[#C1272D] font-bold text-sm tracking-wider uppercase">Walk-In Vaccination Services</h3>
            <h2 class="text-2xl sm:text-4xl font-bold font-display text-[#0B2F5C]">No Appointment Needed Just Walk In!</h2>
            <h3 class="text-lg lg:text-2xl text-slate-600 font-medium">Welcome 10 AM &ndash; 6 PM on weekdays</h3>
        </section>

        <!-- Box-shadow style for Vaccine Cards -->
        <section class="flex flex-wrap justify-center gap-6 sm:gap-8">
            
            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Flu Vaccine
                <span class="block text-xs font-normal text-slate-500 mt-1">Seasonal Quadrivalent</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Covid-19 Vaccine
                <span class="block text-xs font-normal text-slate-500 mt-1">Updated Boosters</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                High-Dose Senior Flu
                <span class="block text-xs font-normal text-slate-500 mt-1">Ages 65 and Older</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Shingrix (50+)
                <span class="block text-xs font-normal text-slate-500 mt-1">Shingles 2-Dose Series</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                RSV Vaccine
                <span class="block text-xs font-normal text-slate-500 mt-1">60+, Specific Populations</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Prevnar 20 / Pneumo
                <span class="block text-xs font-normal text-slate-500 mt-1">65+, Specific Populations</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Tdap Vaccine
                <span class="block text-xs font-normal text-slate-500 mt-1">Tetanus &amp; Whooping Cough</span>
            </div>

            <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="w-full sm:w-[45%] lg:w-[30%] content-center rounded-3xl bg-white p-7 text-xl sm:text-2xl font-bold text-center border border-[#0B2F5C]/10 hover:border-[#1A4FA0]/50 hover:-translate-y-1 transition duration-300 text-[#0B2F5C]">
                Hepatitis B / MMR
                <span class="block text-xs font-normal text-slate-500 mt-1">Adult Preventive Immunization</span>
            </div>

        </section>

        <div class="text-center pt-2">
            <a href="{{ route('vaccinations') }}" class="font-bold text-[#C1272D] hover:underline text-sm inline-flex items-center gap-1.5">
                View Full Walk-In Vaccination Guide &amp; Insurance Details &rarr;
            </a>
        </div>

    </div>
</div>

<!-- "Your Health, Our Commitment — Why Choose Us?" (Demo Site Signature Navy #0B2F5C Section with 6 White Cards) -->
<div class="flex w-full bg-[#0B2F5C] py-16 lg:py-28 text-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 my-auto flex w-full flex-col gap-14 text-white">
        
        <section class="space-y-3 text-center">
            <h3 class="text-[#E8F0FE] font-bold text-sm tracking-wider uppercase">Your Health, Our Commitment</h3>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-bold font-display text-white">Why Choose Us?</h2>
        </section>

        <section class="flex flex-col sm:flex-row items-center justify-center gap-6 max-w-4xl mx-auto text-center">
            <p class="text-white/95 text-sm sm:text-base leading-relaxed">
                At R &amp; S Pioneer Pharmacy, we’ve been serving our community since 2006 with a legacy of trust and reliability. We offer tailored healthcare solutions with fast and friendly service, plus conveniences like same-day free delivery, custom Dis-Pill blister packaging, and personal pharmacist access. When you choose us, you’re choosing a partner in your health who prioritizes your needs every step of the way.
            </p>
        </section>

        <div class="text-center -mt-6">
            <a class="inline-flex items-center gap-2 font-bold text-sm text-white hover:underline" href="{{ route('about') }}">
                <span>More About Us</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <!-- 6 White Cards Grid -->
        <section class="grid w-full grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 text-slate-900">
            
            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Trusted Expertise</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Over two decades of clinical pharmacy experience, offering reliable advice and care.</p>
            </div>

            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Community Focused</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Deeply rooted in the South Bronx and Highbridge with a commitment to local well-being.</p>
            </div>

            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Consistent Reliability</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Always dependable, open 7 days a week, ensuring peace of mind for your family.</p>
            </div>

            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Genuine Care</h4>
                <p class="text-slate-600 text-sm leading-relaxed">"We're the pharmacy that cares." We prioritize your health and happiness in every interaction.</p>
            </div>

            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Bilingual Support</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Clear communication in English &amp; Español with honest guidance and no surprises.</p>
            </div>

            <div class="w-full space-y-3 rounded-2xl bg-white p-7 lg:p-9 shadow-xl hover:-translate-y-1 transition duration-300 border border-black/5">
                <h4 class="font-bold text-[#0B2F5C] text-xl lg:text-[22px]">Full Family Convenience</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Prescriptions, blister packs, DMV vision test, passport photos, and our dedicated toy aisle.</p>
            </div>

        </section>

    </div>
</div>

<!-- "Welcome to a Better Pharmacy Experience — Effortless Prescription Transfers" (Delivery Image + Map) -->
<div class="flex w-full bg-white py-16 lg:py-28 text-slate-900">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 my-auto flex w-full flex-col gap-14">
        
        <section class="space-y-3 text-center">
            <h3 class="text-[#C1272D] font-bold text-sm tracking-wider uppercase">Welcome to a Better Pharmacy Experience</h3>
            <h2 class="whitespace-break-spaces text-2xl sm:text-4xl font-bold font-display text-[#0B2F5C]">
                Effortless Prescription Transfers, Personalized Care
            </h2>
        </section>

        <section class="flex flex-col lg:flex-row items-center gap-14">
            
            <div class="flex flex-col gap-5 lg:w-1/2">
                <p class="whitespace-break-spaces text-lg font-bold lg:text-[22px] text-[#0B2F5C]">
                    Transfer Your Prescriptions Now
                </p>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Switching to our pharmacy is simple and stress-free. Our easy transfer process ensures you can seamlessly move your prescriptions and start enjoying our personalized care without any hassle.
                </p>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    No long lines, no complicated forms—just fill out our transfer form, and we’ll take care of everything, from contacting your old pharmacy to organizing your prescriptions.
                </p>
                <p class="whitespace-break-spaces text-lg font-bold lg:text-[22px] text-[#0B2F5C] pt-1">
                    Join us today and experience the difference in a pharmacy that truly puts your needs first.
                </p>
                <a href="{{ route('transfer') }}" class="flex w-fit font-roboto items-center gap-4 rounded-full border border-[#0B2F5C] px-7 h-12 text-sm font-bold text-[#0B2F5C] hover:bg-[#0B2F5C] hover:text-white transition shadow-sm">
                    <span>Transfer ℞ Now</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Right: Delivery Photo & Interactive Map -->
            <div class="lg:w-1/2 w-full space-y-6">
                <!-- Delivery Bag Photo -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 group">
                    <img src="{{ asset('images/rx-delivery.jpg') }}" alt="Free Neighborhood Prescription Delivery" class="w-full h-56 sm:h-64 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <!-- Store Location Map Card -->
                <div class="bg-[#F8FAFC] p-6 rounded-3xl border border-[#0B2F5C]/10 shadow-sm space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="font-bold text-[#0B2F5C] text-base">Visit R &amp; S Pioneer Pharmacy</h4>
                            <p class="text-xs text-slate-500">1018 Ogden Ave, Bronx NY 10452 &bull; Highbridge</p>
                        </div>
                        <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs text-[#C1272D] font-bold hover:underline">
                            Directions &rarr;
                        </a>
                    </div>
                    <div class="rounded-2xl overflow-hidden h-60 border border-slate-200">
                        <iframe 
                            title="R & S Pioneer Pharmacy Location Map"
                            src="https://maps.google.com/maps?q=1018+Ogden+Ave,+Bronx,+NY+10452&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>
@endsection
