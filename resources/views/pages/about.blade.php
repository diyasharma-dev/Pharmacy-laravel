@extends('layouts.app')

@section('title', 'About Us & Our 20-Year Story | R & S Pioneer Pharmacy Bronx NY')
@section('meta_description', 'Meet Pharmacist Kunal Shah and learn about our 20-year commitment to the Highbridge and South Bronx community. We are the pharmacy that cares.')

@section('content')
<!-- Page Header Banner (Elevated Navy Style) -->
<section class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white py-16 lg:py-24 relative overflow-hidden border-b border-white/10">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2 bg-[#C1272D] px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-white shadow-sm">
                Established 2006 &bull; Celebrating 20 Years
            </div>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold font-display tracking-tight text-white leading-tight">
                "We're the Pharmacy <br class="hidden sm:inline"> That Cares."
            </h1>
            <p class="text-base sm:text-lg text-[#E8F0FE] leading-relaxed font-sans">
                For 20 years, R &amp; S Pioneer Pharmacy has been a trusted anchor of health, dignity, and personalized care for the families of Highbridge and the South Bronx.
            </p>
        </div>
    </div>
</section>

<!-- Our Story & Bronx Roots Section -->
<section class="py-16 lg:py-28 bg-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Our Heritage</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-[#0B2F5C] mt-2 leading-tight">
                        Two Decades of Caring for the South Bronx
                    </h2>
                </div>

                <p class="text-slate-600 leading-relaxed text-base">
                    In 2006, <strong>R &amp; S Pioneer Pharmacy</strong> opened its doors at 1018 Ogden Avenue with a straightforward mission: to give our local neighborhood a trustworthy, compassionate pharmacy where patients are treated like family—never just a prescription number.
                </p>

                <p class="text-slate-600 leading-relaxed text-base">
                    Located in historic Highbridge, just three blocks from where hip-hop was born and minutes from Yankee Stadium, our pharmacy has weathered city crises, the COVID-19 pandemic, and changing times side-by-side with our community. While big-box chain pharmacies close their doors and reduce hours across New York City, R &amp; S Pioneer has remained steadfast, open 7 days a week, and fully dedicated to local patient wellness.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">
                    <div class="p-5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="text-3xl font-extrabold text-[#0B2F5C] font-display">20+ Years</div>
                        <div class="text-xs text-slate-600 font-medium mt-1">Continuous neighborhood care since 2006</div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="text-3xl font-extrabold text-[#C1272D] font-display">100% Walk-In</div>
                        <div class="text-xs text-slate-600 font-medium mt-1">Zero wait, no appointments needed for vaccines</div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="text-3xl font-extrabold text-[#1A4FA0] font-display">Bilingual Care</div>
                        <div class="text-xs text-slate-600 font-medium mt-1">Spanish &amp; English speaking pharmacy staff</div>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#F8FAFC] border border-[#0B2F5C]/10">
                        <div class="text-3xl font-extrabold text-emerald-600 font-display">Dis-Pill Packs</div>
                        <div class="text-xs text-slate-600 font-medium mt-1">Custom blister packaging for senior health</div>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap gap-4 items-center">
                    <a href="{{ route('services') }}" class="rounded-full bg-[#0B2F5C] font-semibold text-white px-7 h-12 inline-flex items-center gap-3 text-sm hover:bg-[#071E3C] transition shadow hover:scale-105">
                        <span>Explore Our Services</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="tel:7185388183" class="rounded-full border border-[#0B2F5C] font-semibold text-[#0B2F5C] px-7 h-12 inline-flex items-center gap-3 text-sm hover:bg-[#0B2F5C] hover:text-white transition shadow-sm">
                        <span>Call: (718) 538-8183</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Community Card (Deep Navy Box) -->
            <div class="lg:col-span-5">
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-white/10 space-y-6">
                    <div class="inline-block bg-[#C1272D] px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white">
                        Community Anchor
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold font-display text-white">
                        Rooted in the Bronx. Devoted to You.
                    </h3>

                    <p class="text-sm text-slate-200 leading-relaxed">
                        We know our patients' names, their children, and their health journeys. We actively coordinate with local clinics, nursing facilities, and doctors to ensure seamless medication delivery and maximum insurance coverage.
                    </p>

                    <div class="pt-4 border-t border-white/10 space-y-3.5 text-xs sm:text-sm text-slate-200">
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Medicaid, Medicare Part D &amp; Managed Care Specialists
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Direct Physician &amp; Prior-Authorization Coordination
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C1272D] shrink-0"></span>
                            Free Daily Delivery throughout South Bronx &amp; Highbridge
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-white text-[#0B2F5C] font-bold text-sm h-12 hover:bg-[#E8F0FE] transition shadow">
                            <span>Speak with Our Team: (718) 538-8183</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- Pharmacist Kunal Shah Bio Section -->
<section class="py-16 lg:py-24 bg-[#F8FAFC] border-t border-slate-200">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10">
        <div style="box-shadow: 0 10px 30px rgba(11,47,92,0.08)" class="max-w-4xl mx-auto bg-white rounded-3xl border border-[#0B2F5C]/10 p-8 sm:p-14 space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-slate-100 pb-8">
                <div class="flex items-center gap-5">
                    <div class="w-16 h-16 rounded-2xl bg-[#0B2F5C] text-white flex items-center justify-center font-bold text-2xl shadow">
                        ℞
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#C1272D]">Head Pharmacist &amp; Owner</span>
                        <h2 class="text-3xl font-bold font-display text-[#0B2F5C] mt-1">
                            Kunal Shah, R.Ph.
                        </h2>
                        <p class="text-sm text-slate-500 font-medium">
                            Alumnus, St. John's University College of Pharmacy and Health Sciences
                        </p>
                    </div>
                </div>
                <div class="bg-[#E8F0FE] px-5 py-2.5 rounded-2xl text-center shrink-0">
                    <span class="text-xs font-bold text-[#1A4FA0] uppercase tracking-wider block">Clinical Experience</span>
                    <span class="text-2xl font-black text-[#0B2F5C] font-display">20+ Years</span>
                </div>
            </div>

            <div class="space-y-4 text-slate-700 leading-relaxed text-sm sm:text-base">
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 group my-4">
                    <img src="{{ asset('images/doctor-consultation.jpg') }}" alt="Pharmacist Consultation and Clinical Care" class="w-full h-64 sm:h-72 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <p>
                    Kunal Shah earned his pharmacy degree from <strong>St. John's University College of Pharmacy</strong>, one of New York's premier pharmaceutical institutions. For over two decades, Kunal has dedicated his career to community-based clinical pharmacy in the South Bronx.
                </p>

                <p>
                    Rather than operating within the impersonal confines of large corporate retail chains, Kunal founded R &amp; S Pioneer Pharmacy to practice healthcare the way it was meant to be: personal, patient-centered, and accessible to everyone regardless of economic background.
                </p>

                <blockquote class="p-6 bg-[#F8FAFC] rounded-2xl border-l-4 border-[#C1272D] text-slate-800 italic text-base my-4">
                    "A lot of chain pharmacies are closing because they view patients as transaction numbers. Here in the South Bronx, we know the importance of sitting down with our seniors, translating complex medication schedules into plain English and Spanish, packaging their pills into daily blister cards, and making sure they never have to choose between their medicine and their groceries."
                    <footer class="text-xs text-[#C1272D] font-bold not-italic mt-3 tracking-wider uppercase">&mdash; Kunal Shah, R.Ph. (Owner &amp; Head Pharmacist)</footer>
                </blockquote>

                <p>
                    Kunal specializes in geriatric medication therapy management, pediatric formulations, diabetes care, and immunization administration. Under his direction, R &amp; S Pioneer Pharmacy has administered thousands of critical walk-in vaccines, performed hundreds of DMV vision exams, and delivered life-saving medications to homebound Bronx seniors.
                </p>
            </div>

            <div class="pt-6 border-t border-slate-100 flex flex-wrap gap-4 items-center justify-between">
                <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
                    <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    New York State Licensed Registered Pharmacist
                </div>
                <a href="{{ route('transfer') }}" class="rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white font-semibold text-sm px-8 h-12 inline-flex items-center gap-3 shadow-md hover:scale-105 transition">
                    <span>Transfer to Kunal's Care</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Full Navy CTA Strip (Demo Site Style) -->
<div class="flex w-full bg-[#0B2F5C] py-16 lg:py-24 text-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 text-center space-y-6">
        <h3 class="text-[#E8F0FE] font-bold text-sm tracking-wider uppercase">Join Our Pharmacy Family</h3>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display text-white">
            Experience Personal Pharmacy Care in Highbridge
        </h2>
        <p class="max-w-2xl mx-auto text-slate-200 text-base leading-relaxed">
            Switching is quick and effortless. Visit us at 1018 Ogden Ave or call (718) 538-8183 to speak directly with our team.
        </p>
        <div class="pt-2 flex flex-wrap justify-center gap-4">
            <a href="{{ route('transfer') }}" class="rounded-full bg-white text-[#0B2F5C] font-bold px-8 h-12 inline-flex items-center gap-3 text-sm hover:bg-[#E8F0FE] transition shadow hover:scale-105">
                <span>Transfer ℞ Now</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="tel:7185388183" class="rounded-full border border-white text-white font-bold px-8 h-12 inline-flex items-center gap-3 text-sm hover:bg-white hover:text-[#0B2F5C] transition shadow">
                <span>Call (718) 538-8183</span>
            </a>
        </div>
    </div>
</div>
@endsection
