@extends('layouts.app')

@section('title', 'Pharmacy & Community Services | R & S Pioneer Pharmacy Bronx NY')
@section('meta_description', 'Dis-Pill blister packaging, DMV vision exam, passport photos, notary public, 10¢ copies, free local delivery, and full toy department at R & S Pioneer Pharmacy.')

@section('content')
<!-- Page Header Banner -->
<section class="bg-gradient-to-r from-navy-dark via-navy to-royal text-white py-14 sm:py-18 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                Complete Care &bull; Highbridge, Bronx
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black font-display tracking-tight text-white">
                Comprehensive Pharmacy &amp; Essential Services
            </h1>
            <p class="text-base sm:text-lg text-ice leading-relaxed">
                From specialized Dis-Pill multi-dose packaging to official DMV eye exams and our neighborhood toy department, explore everything we provide to make your life simpler.
            </p>
        </div>
    </div>
</section>

<!-- Detailed Services Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <!-- 1. Multi-Dose & Dis-Pill Packaging -->
        <div id="packaging" class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center p-8 sm:p-12 rounded-3xl bg-slate-50 border border-slate-200">
            <div class="lg:col-span-7 space-y-4">
                <div class="inline-flex items-center gap-2 bg-royal text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    Specialized Medication Care
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy">
                    Dis-Pill &amp; Multi-Dose Blister Packaging
                </h2>
                <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                    Managing multiple prescription bottles, different dosage times, and pill organizers can be overwhelming and dangerous. Our advanced <strong>Dis-Pill packaging system</strong> organizes all of your daily medications into individual, sealed blister compartments categorized by time of day: <strong>Morning, Noon, Evening, and Bedtime</strong>.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs sm:text-sm text-slate-700">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Eliminates missed or double doses
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Detachable pods for travel &amp; work
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Loved by caregivers &amp; home attendants
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Partnered with nursing homes &amp; clinics
                    </div>
                </div>
                <div class="pt-4">
                    <a href="tel:7185388183" class="inline-flex items-center gap-2 bg-navy hover:bg-navy-dark text-white font-bold text-xs sm:text-sm px-5 py-2.5 rounded-lg shadow-sm transition">
                        Ask About Dis-Pill Setup: (718) 538-8183
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm space-y-4">
                <div class="border-b border-slate-100 pb-3 flex justify-between items-center">
                    <span class="font-extrabold text-navy text-sm">Dis-Pill Color-Coded Grid</span>
                    <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded">Cold-Sealed</span>
                </div>
                <div class="grid grid-cols-4 gap-2 text-center text-xs">
                    <div class="p-3 bg-amber-50 rounded-xl border border-amber-200">
                        <div class="font-bold text-amber-900">Morning</div>
                        <div class="text-[10px] text-amber-700 mt-1">Yellow Slot</div>
                    </div>
                    <div class="p-3 bg-blue-50 rounded-xl border border-blue-200">
                        <div class="font-bold text-royal">Noon</div>
                        <div class="text-[10px] text-blue-700 mt-1">Blue Slot</div>
                    </div>
                    <div class="p-3 bg-orange-50 rounded-xl border border-orange-200">
                        <div class="font-bold text-orange-900">Evening</div>
                        <div class="text-[10px] text-orange-700 mt-1">Orange Slot</div>
                    </div>
                    <div class="p-3 bg-indigo-50 rounded-xl border border-indigo-200">
                        <div class="font-bold text-indigo-900">Bedtime</div>
                        <div class="text-[10px] text-indigo-700 mt-1">Purple Slot</div>
                    </div>
                </div>
                <p class="text-xs text-slate-500 italic pt-1 text-center">
                    Prepared under sterile clinical conditions by Pharmacist Kunal Shah and our licensed technicians.
                </p>
            </div>
        </div>

        <!-- 2. DMV Vision Test & Passport Photos -->
        <div id="dmv" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- DMV Eye Exam -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 space-y-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-crimson text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy">DMV Vision Eye Screening</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Need to renew your New York Driver License or Learner Permit? Skip the long DMV lines and hours of waiting. We are officially registered and approved to perform DMV vision screenings.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Takes less than 3 minutes to complete</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Results uploaded electronically to NY DMV within 1 hour</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> No appointment required—just walk in with your ID</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200/80">
                    <span class="text-xs font-bold text-navy">Quick Walk-In Service &bull; Available 7 Days a Week</span>
                </div>
            </div>

            <!-- Passport Photos -->
            <div id="documents" class="p-8 rounded-3xl bg-slate-50 border border-slate-200 space-y-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy">Instant 2x2 Passport Photos</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        High-quality passport and visa photographs printed instantly while you wait. Strictly formatted to meet all US Department of State and international embassy passport regulations.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Ready in under 5 minutes</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Guaranteed acceptance for US Passports &amp; Green Cards</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Suitable for infants, children, and adults</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200/80">
                    <span class="text-xs font-bold text-navy">Only $10 per set of 2 official photos</span>
                </div>
            </div>
        </div>

        <!-- 3. Notary Public, 10¢ Copies & Fax -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Notary Public -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 space-y-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-royal text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy">Licensed Notary Public</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Need an affidavit, power of attorney, lease agreement, medical authorization, or government document officially notarized? Our certified NY Notary Public is on duty during standard pharmacy hours.
                    </p>
                    <div class="p-3 bg-white rounded-xl border border-slate-200 text-xs text-slate-600">
                        <strong>Please Remember:</strong> Bring a valid, non-expired government-issued photo ID (driver license, state ID, or passport) and do NOT sign your documents in advance.
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-200/80">
                    <span class="text-xs font-bold text-navy">Standard New York State Notary Rates</span>
                </div>
            </div>

            <!-- Copies & Fax -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 space-y-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-navy text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy">10¢ Photocopies &amp; Fax Transmission</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Fast, affordable printing and document transmission services right in your neighborhood. Send or receive faxes to doctors, government agencies, housing authorities, and insurance companies.
                    </p>
                    <ul class="text-xs text-slate-600 space-y-2">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Black &amp; white copies for just 10¢ per page</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Domestic &amp; local faxing with official confirmation receipt</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-crimson"></span> Incoming fax reception for patient documents</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200/80">
                    <span class="text-xs font-bold text-navy">Fast walk-in document assistance</span>
                </div>
            </div>
        </div>

        <!-- 4. Dedicated TOYS Section & Over-The-Counter Retail (Client's Special Highlight!) -->
        <div id="retail" class="p-8 sm:p-12 rounded-3xl bg-gradient-to-br from-amber-50 via-white to-orange-50/50 border border-amber-200 space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-amber-200/60 pb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-200 px-3 py-1 rounded-full">
                        Neighborhood Favorite
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-navy mt-2">
                        Dedicated TOY Aisle &amp; Complete Health Essentials
                    </h2>
                </div>
                <span class="text-xs bg-navy text-white font-bold px-3 py-1.5 rounded-lg text-center">
                    Full In-Store Toy Department
                </span>
            </div>

            <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                Unlike sterile corporate pharmacy counters, R &amp; S Pioneer is a true family store! Kunal has built a <strong>massive, dedicated toy section</strong> right inside our pharmacy. Parents, grandparents, and kids love browsing our aisles for birthday gifts, holiday surprises, and educational toys.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">🧸</div>
                    <div class="font-bold text-navy text-xs">Toys &amp; Games</div>
                    <div class="text-[10px] text-slate-500">Board games, dolls &amp; figures</div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">💊</div>
                    <div class="font-bold text-navy text-xs">OTC Medicines</div>
                    <div class="text-[10px] text-slate-500">Pain, fever, cold &amp; allergy</div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">🌿</div>
                    <div class="font-bold text-navy text-xs">Vitamins</div>
                    <div class="text-[10px] text-slate-500">Multivitamins &amp; supplements</div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">👶</div>
                    <div class="font-bold text-navy text-xs">Baby Care</div>
                    <div class="text-[10px] text-slate-500">Diapers, wipes, formula</div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">🧼</div>
                    <div class="font-bold text-navy text-xs">Personal Care</div>
                    <div class="text-[10px] text-slate-500">Hygiene, oral care, shampoo</div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-amber-200/80 shadow-sm space-y-1">
                    <div class="text-2xl">🩹</div>
                    <div class="font-bold text-navy text-xs">First Aid</div>
                    <div class="text-[10px] text-slate-500">Bandages, brace &amp; antiseptic</div>
                </div>
            </div>

            <div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-600 border-t border-amber-200/60">
                <span>Looking for a specific brand or medication? We can special-order almost any health product for next-day in-store pickup!</span>
                <a href="tel:7185388183" class="text-crimson font-bold hover:underline shrink-0">Inquire at (718) 538-8183 &rarr;</a>
            </div>
        </div>

    </div>
</section>
@endsection
