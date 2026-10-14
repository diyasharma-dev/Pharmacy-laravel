@extends('layouts.app')

@section('title', 'Transfer Prescriptions & New Patient Registration | R & S Pioneer Pharmacy')
@section('meta_description', 'Transfer your prescriptions to R & S Pioneer Pharmacy in Highbridge, Bronx. We coordinate with your previous pharmacy and doctor. Free delivery available.')

@section('content')
<!-- Page Header Banner -->
<section class="bg-gradient-to-r from-navy-dark via-navy to-royal text-white py-14 sm:py-18 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block bg-crimson text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                Simple 3-Step Transfer
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black font-display tracking-tight text-white">
                Transfer Your Prescriptions to R &amp; S Pioneer
            </h1>
            <p class="text-base sm:text-lg text-ice leading-relaxed">
                Switching pharmacies is fast and completely effortless. Fill out the brief form below and our pharmacy team handles the rest—including calling your previous pharmacy and prescribers.
            </p>
        </div>
    </div>
</section>

<!-- Main Transfer Form & Process Section -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Flash Success Notification -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-8 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-2xl p-6 shadow-md flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-xl">
                    ✓
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-base">Prescription Transfer Request Received!</h3>
                    <p class="text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                    <p class="text-xs text-emerald-700 font-semibold pt-1">If you have any urgent questions, please feel free to call our pharmacy team at (718) 538-8183.</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left: Transfer Form Card -->
            <div class="lg:col-span-8 bg-white rounded-3xl shadow-sm border border-slate-200 p-8 sm:p-12 space-y-8">
                <div>
                    <h2 class="text-2xl font-extrabold font-display text-navy">
                        Patient &amp; Prescription Transfer Details
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Please provide your details below. Your personal medical information is strictly protected and HIPAA compliant.
                    </p>
                </div>

                <!-- Validation Errors Alert -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 rounded-xl p-4 text-xs space-y-1">
                        <strong class="font-bold block">Please review the form:</strong>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('transfer.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Section 1: Patient Information -->
                    <div class="space-y-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-royal border-b border-slate-100 pb-2">
                            Step 1: Patient Information
                        </h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-xs font-bold text-slate-700 mb-1">First Name *</label>
                                <input type="text" name="first_name" id="first_name" required value="{{ old('first_name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="e.g. Maria">
                            </div>
                            <div>
                                <label for="last_name" class="block text-xs font-bold text-slate-700 mb-1">Last Name *</label>
                                <input type="text" name="last_name" id="last_name" required value="{{ old('last_name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="e.g. Rodriguez">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="dob" class="block text-xs font-bold text-slate-700 mb-1">Date of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-700 mb-1">Primary Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="(718) 555-0123">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-1">Email Address (Optional)</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="maria@example.com">
                            </div>
                            <div>
                                <label for="address" class="block text-xs font-bold text-slate-700 mb-1">Home Delivery Address (Optional)</label>
                                <input type="text" name="address" id="address" value="{{ old('address') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="e.g. 1020 Ogden Ave, Apt 4B">
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Current Pharmacy Details -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-royal border-b border-slate-100 pb-2">
                            Step 2: Current Pharmacy Information
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="current_pharmacy_name" class="block text-xs font-bold text-slate-700 mb-1">Current Pharmacy Name *</label>
                                <input type="text" name="current_pharmacy_name" id="current_pharmacy_name" required value="{{ old('current_pharmacy_name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="e.g. Walgreens, CVS, or Rite Aid">
                            </div>
                            <div>
                                <label for="current_pharmacy_phone" class="block text-xs font-bold text-slate-700 mb-1">Current Pharmacy Phone (If known)</label>
                                <input type="tel" name="current_pharmacy_phone" id="current_pharmacy_phone" value="{{ old('current_pharmacy_phone') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="(718) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Medication / Rx List -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-royal border-b border-slate-100 pb-2">
                            Step 3: Medications to Transfer
                        </h3>

                        <div>
                            <label for="medications_or_rx_numbers" class="block text-xs font-bold text-slate-700 mb-1">
                                Rx Numbers or Medication Names *
                            </label>
                            <textarea name="medications_or_rx_numbers" id="medications_or_rx_numbers" rows="4" required
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                placeholder="Please list the names of your medications or the Rx numbers printed on your prescription bottles. (Or type 'Transfer all active medications')">{{ old('medications_or_rx_numbers') }}</textarea>
                            <span class="text-[11px] text-slate-500">You can also write "Transfer all my active prescriptions".</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="doctor_name" class="block text-xs font-bold text-slate-700 mb-1">Prescribing Doctor's Name (Optional)</label>
                                <input type="text" name="doctor_name" id="doctor_name" value="{{ old('doctor_name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="Dr. Smith">
                            </div>
                            <div>
                                <label for="insurance_name" class="block text-xs font-bold text-slate-700 mb-1">Insurance / Medicaid Plan Name (Optional)</label>
                                <input type="text" name="insurance_name" id="insurance_name" value="{{ old('insurance_name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="e.g. Fidelis, Healthfirst, MetroPlus, Medicare">
                            </div>
                        </div>

                        <div>
                            <label for="special_notes" class="block text-xs font-bold text-slate-700 mb-1">
                                Special Requests or Packaging Needs (Optional)
                            </label>
                            <textarea name="special_notes" id="special_notes" rows="2"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                placeholder="e.g., 'Please package into Dis-Pill blister packs' or 'Deliver to my apartment'">{{ old('special_notes') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-extrabold text-base px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-0.5">
                            Submit Prescription Transfer Request &rarr;
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Why Transfer to Us & Quick Call Box -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Quick Phone Callout Card -->
                <div class="bg-navy text-white rounded-3xl p-8 space-y-4 shadow-md">
                    <span class="inline-block bg-crimson text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded">
                        Prefer Phone?
                    </span>
                    <h3 class="text-xl font-bold font-display text-white">
                        Transfer in 60 Seconds by Phone
                    </h3>
                    <p class="text-xs text-ice leading-relaxed">
                        Don't want to type? Just call us directly. Give our staff your prescription bottle info or previous pharmacy name over the phone.
                    </p>
                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 bg-white text-navy font-black text-sm py-3.5 rounded-xl hover:bg-ice transition">
                        <svg class="w-4 h-4 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Call (718) 538-8183
                    </a>
                </div>

                <!-- What Happens Next Box -->
                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm space-y-4">
                    <h3 class="font-bold text-navy text-sm uppercase tracking-wider">What Happens Next?</h3>
                    
                    <div class="space-y-3 text-xs text-slate-600">
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-ice text-royal font-bold flex items-center justify-center shrink-0">1</span>
                            <p><strong>We Call Your Old Pharmacy:</strong> You don't need to speak with them or cancel anything.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-ice text-royal font-bold flex items-center justify-center shrink-0">2</span>
                            <p><strong>We Verify Your Insurance:</strong> We ensure maximum coverage, apply manufacturer coupons, and verify $0 copays.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-ice text-royal font-bold flex items-center justify-center shrink-0">3</span>
                            <p><strong>Pickup or Free Delivery:</strong> We call or text you as soon as your medications are packaged and ready.</p>
                        </div>
                    </div>
                </div>

                <!-- Insurance Acceptance Note -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 text-xs text-slate-600 space-y-2">
                    <h4 class="font-bold text-navy">All Major Insurances Accepted</h4>
                    <p class="text-slate-500 leading-relaxed">
                        Medicaid, Medicare Part D, EmblemHealth, Fidelis Care, Healthfirst, MetroPlus, UnitedHealthcare, Blue Cross Blue Shield, Aetna, Cigna, and more.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
