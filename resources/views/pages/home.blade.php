@extends('layouts.app')

@section('title', "R & S Pioneer Pharmacy | Trusted Pharmacy Services Since 2006")
@section('meta_description', "Established in 2006, R & S Pioneer Pharmacy has served the South Bronx community for 20 years. Walk-in vaccines, Dis-Pill blister packing, passport photos, DMV vision tests, and free delivery.")

@section('content')
<!-- Hero Section (Goldberger Layout Reference: Dark Atmospheric Background with Left Elevated Section) -->
<div class="relative w-full bg-gradient-to-b from-navy-dark via-navy to-navy-dark text-white min-h-[85vh] lg:min-h-[88vh] flex items-center overflow-hidden">
    <!-- Subtle Architectural / Medical Grid Texture -->
    <div class="absolute inset-0 opacity-15 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:28px_28px] pointer-events-none"></div>
    <div class="absolute -right-32 -top-32 w-[550px] h-[550px] bg-royal/30 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-20 bottom-10 w-[400px] h-[400px] bg-crimson/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-20 w-full relative z-10 pb-36 lg:pb-44">
        <!-- Goldberger Style Left-Aligned Hero Box -->
        <div class="max-w-3xl space-y-7">
            
            <!-- 20-Year Anniversary Pill Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold text-amber-300">
                <span class="w-2 h-2 rounded-full bg-crimson animate-ping"></span>
                <span>ESTABLISHED 2006 &bull; CELEBRATING 20 YEARS IN THE SOUTH BRONX</span>
            </div>

            <!-- Big Main Headline (Goldberger Split Style) -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black font-display tracking-tight text-white leading-[1.1]">
                <span class="block">Your Trusted</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-ice to-amber-200">
                    Pharmacy Since 2006
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="text-base sm:text-lg text-slate-200 max-w-2xl leading-relaxed">
                From prescription refills and walk-in vaccinations to expert pharmacist advice and fast free delivery, trust us to manage your health with care and convenience. <b>"We're the pharmacy that cares."</b>
            </p>

            <!-- 4 Circular Icon Badges (Goldberger's Exact Feature Row!) -->
            <div class="pt-2 flex flex-wrap gap-6 sm:gap-10 items-center">
                
                <!-- Badge 1: Dis-Pill Packing -->
                <div class="flex flex-col items-center justify-center gap-2 text-center group">
                    <div class="w-16 h-16 rounded-full bg-white text-navy flex items-center justify-center shadow-lg group-hover:scale-105 transition">
                        <svg class="w-7 h-7 text-royal" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <span class="text-xs sm:text-sm font-bold text-white tracking-wide">Dis-Pill Packing</span>
                </div>

                <!-- Badge 2: Prescription Refills -->
                <div class="flex flex-col items-center justify-center gap-2 text-center group">
                    <div class="w-16 h-16 rounded-full bg-white text-navy flex items-center justify-center shadow-lg group-hover:scale-105 transition">
                        <svg class="w-7 h-7 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="text-xs sm:text-sm font-bold text-white tracking-wide">Prescriptions</span>
                </div>

                <!-- Badge 3: Walk-In Vaccines -->
                <div class="flex flex-col items-center justify-center gap-2 text-center group">
                    <div class="w-16 h-16 rounded-full bg-white text-navy flex items-center justify-center shadow-lg group-hover:scale-105 transition">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <span class="text-xs sm:text-sm font-bold text-white tracking-wide">Walk-In Vaccines</span>
                </div>

                <!-- Badge 4: Fast Free Delivery -->
                <div class="flex flex-col items-center justify-center gap-2 text-center group">
                    <div class="w-16 h-16 rounded-full bg-white text-navy flex items-center justify-center shadow-lg group-hover:scale-105 transition">
                        <svg class="w-7 h-7 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    </div>
                    <span class="text-xs sm:text-sm font-bold text-white tracking-wide">Free Delivery</span>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- 3-Box Floating Feature Strip (Goldberger's Signature Layout Feature!) -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-24 sm:-mt-28 relative z-20 text-white mb-12 sm:mb-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 shadow-2xl rounded-2xl overflow-hidden">
        
        <!-- Box 1: Red Section ("Call Us At") -->
        <div class="bg-crimson px-7 py-10 flex flex-col justify-between gap-5 border-b lg:border-b-0 lg:border-r border-white/10">
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight">Call Us At</h3>
                </div>
                <p class="text-sm text-white/90 leading-relaxed">
                    Have questions about medication or need immediate assistance? Speak directly with Pharmacist Kunal Shah. <b>We care about you!</b>
                </p>
            </div>
            <a href="tel:7185388183" class="inline-flex items-center gap-3 font-semibold group pt-2">
                <div class="w-10 h-10 rounded-full bg-white text-crimson flex items-center justify-center shadow group-hover:scale-110 transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                </div>
                <span class="text-xl font-bold text-white group-hover:underline">(718) 538-8183</span>
            </a>
        </div>

        <!-- Box 2: Dark Slate Section ("Transfer Your ℞ Today") -->
        <div class="bg-[#263238] px-7 py-10 flex flex-col justify-between gap-5 border-b lg:border-b-0 lg:border-r border-white/10">
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight">Transfer Your ℞ Today</h3>
                </div>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Just fill out the simple form, and we'll ensure your medication is ready when you need it, with the option for pickup or free local delivery.
                </p>
            </div>
            <a href="{{ route('transfer') }}" class="inline-flex items-center gap-2 border border-white/30 hover:border-white px-5 py-2.5 rounded-full text-sm font-medium w-fit hover:bg-white hover:text-slate-900 transition">
                <span>Transfer ℞ now</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

        <!-- Box 3: Pure Black Section ("Opening Hours") -->
        <div class="bg-black px-7 py-10 flex flex-col justify-between gap-5">
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold tracking-tight">Opening Hours</h3>
                </div>
                <div class="space-y-1.5 text-xs text-slate-300 pt-1">
                    <div class="flex justify-between py-1 border-b border-white/10">
                        <span class="font-medium">Monday &ndash; Friday</span>
                        <span class="text-white font-bold">09:00 am &ndash; 07:00 pm</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-white/10">
                        <span class="font-medium">Saturday</span>
                        <span class="text-white font-bold">10:00 am &ndash; 06:00 pm</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-white/10">
                        <span class="font-medium">Sunday</span>
                        <span class="text-white font-bold">10:00 am &ndash; 03:00 pm</span>
                    </div>
                    <div class="flex justify-between py-1 text-amber-300 font-semibold">
                        <span>Walk-in Vaccines</span>
                        <span>Mon&ndash;Fri 10:00 am &ndash; 06:00 pm</span>
                    </div>
                </div>
            </div>
            <span class="text-[11px] text-slate-400">Open 7 days a week to serve Highbridge</span>
        </div>

    </div>
</div>

<!-- "Over Two Decades of Trust and Care" (Goldberger Style Layout: Big Headline + Overlapping Gray Box) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 space-y-10">
    <div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display text-navy leading-tight">
            R &amp; S Pioneer Pharmacy <br>
            <span class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-slate-600">
                Over Two Decades of Trust and Care (Est. 2006)
            </span>
        </h2>
    </div>

    <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Side Copy & Button -->
        <div class="lg:col-span-5 space-y-6">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-crimson text-white flex items-center justify-center shrink-0 shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Since 2006, R &amp; S Pioneer Pharmacy has been committed to delivering personalized, high-quality care. Our mission is to provide trusted healthcare solutions tailored to the unique needs of our South Bronx community.
                </p>
            </div>

            <div>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2.5 bg-black hover:bg-slate-800 text-white font-medium text-sm px-7 py-3 rounded-full transition shadow hover:scale-105">
                    <span>Our Services</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <!-- Stylized Pharmacist Badge Card (No personal staff photo per client instructions) -->
            <div class="p-6 rounded-2xl bg-gradient-to-br from-ice to-white border border-slate-200 space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-royal text-white flex items-center justify-center font-bold text-sm">
                        Rx
                    </div>
                    <div>
                        <h4 class="font-bold text-navy text-sm">Kunal Shah, R.Ph.</h4>
                        <p class="text-xs text-slate-500">St. John's University College of Pharmacy Alum</p>
                    </div>
                </div>
                <p class="text-xs text-slate-600 italic">
                    "We take pride in knowing our patients personally, packaging medications into daily blister packs, and helping every family get their medications delivered promptly."
                </p>
            </div>
        </div>

        <!-- Right Side Overlapping Gray Box (Goldberger's Distinctive Content Block!) -->
        <div class="lg:col-span-7 bg-[#F2F2F2] rounded-3xl p-8 sm:p-12 text-slate-700 space-y-6 shadow-sm border border-slate-200">
            <p class="leading-relaxed text-sm sm:text-base">
                For over 20 years, R &amp; S Pioneer Pharmacy has stood as a beacon of health and wellness in our Highbridge community. We pride ourselves on offering not just prescriptions, but a full spectrum of personalized services including medication therapy management, Dis-Pill multi-dose packaging, walk-in vaccinations, DMV vision exams, and expert consultations.
            </p>
            <p class="leading-relaxed text-sm sm:text-base">
                With a commitment to customer care, convenience, and local neighborhood values, we work tirelessly to ensure every customer receives the attention they deserve. Whether it’s delivering your prescriptions to your doorstep or providing critical health advice, our goal is to be a dependable partner in your healthcare journey.
            </p>

            <!-- 3 Checkmark Bullet Points (Goldberger Format) -->
            <div class="space-y-4 pt-2">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-crimson shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Personalized Care:</b> Tailored healthcare solutions that prioritize each patient's unique health and medication needs.</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-crimson shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Fast &amp; Reliable Service:</b> Quick 15-minute prescription refills with seamless free home delivery throughout the South Bronx.</p>
                </div>
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-crimson shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm"><b>Comprehensive Offerings:</b> From Dis-Pill blister packaging to walk-in vaccines, DMV vision exams, notary, and our full toy aisle.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- "Comprehensive Care with A Personal Touch" (Goldberger's 3-Card Carousel/Grid with Bottom Color Bar) -->
<section class="py-16 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-crimson">Comprehensive Care, Tailored for You</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold font-display text-slate-900">
                Comprehensive Care with a Personal Touch
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1: Fast Free Delivery -->
            <div class="bg-white rounded-2xl p-8 shadow-lg flex flex-col justify-between border border-slate-100 hover:-translate-y-1 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-ice flex items-center justify-center text-royal">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Fast Free Delivery</h3>
                    <p class="text-sm text-[#848E9F] leading-relaxed">
                        Experience the convenience of same-day or next-day free delivery across Highbridge, Concourse &amp; Yankee Stadium area, ensuring your medications are always within reach.
                    </p>
                </div>
                <div class="mt-8 pt-4 w-full bg-crimson h-1 rounded-full"></div>
            </div>

            <!-- Card 2: Dis-Pill Blister Packing -->
            <div class="bg-white rounded-2xl p-8 shadow-lg flex flex-col justify-between border border-slate-100 hover:-translate-y-1 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center text-amber-700">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Dis-Pill Multi-Dose Packs</h3>
                    <p class="text-sm text-[#848E9F] leading-relaxed">
                        Custom color-coded blister packaging sorted into Morning, Noon, Evening, and Bedtime slots to guarantee medication adherence and eliminate double-dosing.
                    </p>
                </div>
                <div class="mt-8 pt-4 w-full bg-crimson h-1 rounded-full"></div>
            </div>

            <!-- Card 3: DMV Vision Test -->
            <div class="bg-white rounded-2xl p-8 shadow-lg flex flex-col justify-between border border-slate-100 hover:-translate-y-1 transition duration-300">
                <div class="space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-navy">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Vision Test for NY DMV</h3>
                    <p class="text-sm text-[#848E9F] leading-relaxed">
                        Simplify your DMV license renewal process with quick and easy in-house vision tests. Results electronically submitted to the NY DMV in minutes.
                    </p>
                </div>
                <div class="mt-8 pt-4 w-full bg-crimson h-1 rounded-full"></div>
            </div>

        </div>
    </div>
</section>

<!-- "Refill & Transfer Your ℞ Today — It's Quick and Easy" (Goldberger's Signature Dark Section) -->
<section class="py-16 lg:py-24 bg-black text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-crimson">It's Quick and Easy</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display">
                Transfer Your ℞ Today
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Visual Card -->
            <div class="lg:col-span-5 bg-gradient-to-br from-navy via-navy-light to-navy rounded-3xl p-8 sm:p-10 border border-white/10 shadow-2xl space-y-6">
                <div class="w-16 h-16 rounded-2xl bg-crimson text-white flex items-center justify-center font-bold text-2xl shadow-lg">
                    ℞
                </div>
                <h3 class="text-2xl font-bold font-display text-white">
                    Moving Prescriptions to R &amp; S Pioneer is 100% Free
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    You don't have to visit your former pharmacy or cancel anything. Just provide the pharmacy name and medication list—our licensed pharmacy team takes care of all doctor approvals and insurance paperwork.
                </p>
                <div class="pt-2 border-t border-white/10 space-y-2 text-xs text-amber-300 font-semibold">
                    <div>✓ No waiting in corporate pharmacy lines</div>
                    <div>✓ Free doorstep delivery or fast 15-min pickup</div>
                    <div>✓ Medicaid, Medicare Part D &amp; major insurances accepted</div>
                </div>
            </div>

            <!-- Right Content & Button -->
            <div class="lg:col-span-7 space-y-6">
                <h3 class="text-xl sm:text-2xl font-bold font-display text-white">
                    Fill the form today
                </h3>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Managing your prescriptions has never been more convenient. With our simple online form, you can request transfers in just a few clicks. Whether you're at home, work, or on the go, moving your prescriptions is now seamless and stress-free.
                </p>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Just fill out the form, and we'll ensure your medication is ready when you need it, with the option for pickup or free home delivery.
                </p>
                <div class="pt-2">
                    <p class="text-xl font-bold text-white">
                        Experience hassle-free refills &mdash; Your Health, Made Simple!
                    </p>
                </div>
                <div class="pt-4">
                    <a href="{{ route('transfer') }}" class="inline-flex items-center gap-4 border border-white/30 hover:border-white text-white font-medium text-base px-8 py-3.5 rounded-full hover:bg-white hover:text-black transition shadow">
                        <span>Transfer ℞ now</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- "Walk-In Vaccination Services — No Appointment Needed Just Walk In!" (Goldberger's Deep Shadow Vaccine Card Grid) -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">
        
        <!-- Header Text -->
        <div class="text-center space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-crimson">Walk-In Vaccination Services</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display text-slate-900">
                No Appointment Needed Just Walk In!
            </h2>
            <p class="text-base sm:text-xl text-slate-600 font-medium">
                Welcome 10 AM &ndash; 6 PM on weekdays &bull; $0 Copay with Most Insurances
            </p>
        </div>

        <!-- 8 Vaccine Floating Pill Cards (Goldberger's Exact box-shadow style!) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Flu Vaccine (Seasonal)</span>
                <span class="text-xs text-crimson font-semibold mt-1">Adults &amp; Children</span>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Senior High-Dose Flu</span>
                <span class="text-xs text-amber-600 font-semibold mt-1">Ages 65+</span>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">COVID-19 Booster</span>
                <span class="text-xs text-royal font-semibold mt-1">Updated Formula</span>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Shingrix (Shingles)</span>
                <span class="text-xs text-purple-700 font-semibold mt-1">Ages 50+ &bull; 2-Dose Series</span>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">RSV Vaccine</span>
                <span class="text-xs text-emerald-700 font-semibold mt-1">Seniors &amp; High Risk</span>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Pneumonia (Prevnar 20)</span>
                <span class="text-xs text-blue-700 font-semibold mt-1">Ages 65+ &amp; Chronic</span>
            </div>

            <!-- Card 7 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Tdap Vaccine</span>
                <span class="text-xs text-slate-500 font-semibold mt-1">Tetanus &amp; Whooping Cough</span>
            </div>

            <!-- Card 8 -->
            <div class="bg-white rounded-3xl p-7 border border-slate-100 shadow-[0_15px_35px_rgba(11,47,92,0.08)] hover:-translate-y-1 transition duration-300 flex flex-col justify-center items-center min-h-[140px]">
                <span class="font-bold text-lg text-slate-900">Hepatitis B / MMR</span>
                <span class="text-xs text-slate-500 font-semibold mt-1">Adult Immunity</span>
            </div>

        </div>

        <div class="text-center pt-4">
            <a href="{{ route('vaccinations') }}" class="inline-flex items-center gap-2 text-sm font-bold text-crimson hover:underline">
                View Full Vaccine Guidelines &amp; Insurance Details &rarr;
            </a>
        </div>
    </div>
</section>

<!-- "Your Health, Our Commitment — Why Choose Us?" (Goldberger's Signature Accent Section with 6 White Cards) -->
<section class="py-16 lg:py-24 bg-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">
        
        <!-- Header -->
        <div class="text-center space-y-3">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-300">Your Health, Our Commitment</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display text-white">
                Why Choose Us?
            </h2>
        </div>

        <!-- Intro Description -->
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <p class="text-slate-200 text-sm sm:text-base leading-relaxed">
                At R &amp; S Pioneer Pharmacy, we’ve been serving our community since 2006 with a legacy of trust and reliability. We offer tailored healthcare solutions with fast and friendly service, plus innovative conveniences like same-day free delivery, custom Dis-Pill packaging, and direct pharmacist access. When you choose us, you’re choosing a partner in your health who prioritizes your needs every step of the way.
            </p>
            <div>
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 font-bold text-sm text-amber-300 hover:text-white transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    <span>More About Our 20-Year Story</span>
                </a>
            </div>
        </div>

        <!-- 6 Clean White Cards Grid (Goldberger Format) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-slate-900">
            
            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Trusted Expertise</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Over two decades of clinical experience, offering reliable advice, drug interaction reviews, and care.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Community Focused</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Deeply rooted in the South Bronx and Highbridge with a commitment to local family well-being.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Consistent Reliability</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Always dependable, open 7 days a week, ensuring peace of mind for you and your family.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Genuine Care</h4>
                <p class="text-slate-600 text-sm leading-relaxed">"We're the pharmacy that cares." We prioritize your health and dignity in every interaction.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Bilingual Support</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Clear communication in English and Spanish with no confusing insurance jargon.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg space-y-2 hover:-translate-y-1 transition duration-300">
                <h4 class="font-bold text-xl text-navy">Full Family Convenience</h4>
                <p class="text-slate-600 text-sm leading-relaxed">Prescriptions, blister packs, DMV vision tests, passport photos, notary, and our full toy department.</p>
            </div>

        </div>

    </div>
</section>

<!-- "Welcome to a Better Pharmacy Experience — Effortless Prescription Transfers" (Goldberger's Final Split Action Section) -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center space-y-2">
            <span class="text-xs font-bold uppercase tracking-wider text-crimson">Welcome to a Better Pharmacy Experience</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-display text-slate-900">
                Effortless Prescription Transfers, Personalized Care
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <h3 class="text-xl sm:text-2xl font-bold font-display text-slate-900">
                    Transfer Your Prescriptions Now
                </h3>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Switching to our pharmacy is simple and stress-free. Our easy transfer process ensures you can seamlessly move your prescriptions and start enjoying our personalized care without any hassle.
                </p>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    No long lines, no complicated phone menus—just fill out our transfer form, and we’ll take care of everything, from contacting your old pharmacy to organizing your prescriptions.
                </p>
                <p class="text-lg font-bold text-slate-900">
                    Join us today and experience the difference in a pharmacy that truly puts your needs first.
                </p>
                <div class="pt-2">
                    <a href="{{ route('transfer') }}" class="inline-flex items-center gap-4 border border-black hover:bg-black hover:text-white text-slate-900 font-medium text-base px-8 py-3.5 rounded-full transition shadow-sm">
                        <span>Transfer ℞ Now</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Right Interactive Map Preview & Store Location Card -->
            <div class="lg:col-span-6 bg-slate-50 p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-bold text-navy text-base">Visit R &amp; S Pioneer Pharmacy</h4>
                        <p class="text-xs text-slate-500">1018 Ogden Ave, Bronx NY 10452 &bull; Highbridge</p>
                    </div>
                    <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs text-crimson font-bold hover:underline">
                        Directions &rarr;
                    </a>
                </div>
                <div class="rounded-2xl overflow-hidden h-72 border border-slate-200">
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
    </div>
</section>
@endsection
