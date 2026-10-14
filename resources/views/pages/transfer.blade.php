@extends('layouts.app')

@section('title', 'Transfer Prescriptions & New Patient Registration | R & S Pioneer Pharmacy')
@section('meta_description', 'Transfer your prescriptions to R & S Pioneer Pharmacy in Highbridge, Bronx. We coordinate with your previous pharmacy and doctor. Free delivery available.')

@section('content')
<!-- Page Header Banner (Demo Navy Gradient Style) -->
<section class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white py-16 lg:py-24 relative overflow-hidden border-b border-[#0B2F5C]/20">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2 bg-[#C1272D] px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-white shadow-sm">
                Simple 3-Step Transfer &bull; 100% Free
            </div>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold font-display tracking-tight text-white leading-tight">
                Transfer Your Prescriptions to R &amp; S Pioneer
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-sans">
                Switching pharmacies is fast and completely effortless. Fill out the brief form below and our pharmacy team handles the rest—including calling your previous pharmacy and prescribers.
            </p>
        </div>
    </div>
</section>

<!-- Main Transfer Form & Process Section -->
<section class="py-16 lg:py-28 bg-white">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-10">
        
        <!-- Flash Success Notification -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-10 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-3xl p-7 shadow-lg flex items-start gap-4">
                <div class="w-11 h-11 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-xl shadow">
                    ✓
                </div>
                <div class="space-y-1">
                    <h3 class="font-extrabold text-lg text-emerald-900">Prescription Transfer Request Received!</h3>
                    <p class="text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                    <p class="text-xs text-emerald-700 font-semibold pt-1">If you have urgent questions, please feel free to call our pharmacy team at (718) 538-8183.</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-start">
            
            <!-- Left: Transfer Form Card (Goldberger Deep Diffuse Shadow) -->
            <div style="box-shadow: 6px 5px 60px 15px rgba(60,60,60,0.08)" class="lg:col-span-8 bg-white rounded-3xl border border-slate-100 p-8 sm:p-14 space-y-8">
                <div>
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#C1272D]">Quick &amp; Confidential</span>
                    <h2 class="text-2xl sm:text-4xl font-bold font-display text-slate-900 mt-1">
                        Patient &amp; Prescription Transfer Details
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1.5 leading-relaxed">
                        Please provide your details below. Your personal medical information is strictly protected and HIPAA compliant.
                    </p>
                </div>

                <!-- Validation Errors Alert -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 rounded-2xl p-5 text-xs sm:text-sm space-y-1">
                        <strong class="font-bold block">Please review the form:</strong>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('transfer.store') }}" method="POST" class="space-y-7">
                    @csrf

                    <!-- Section 1: Patient Information -->
                    <div class="space-y-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-2.5">
                            Step 1: Patient Information
                        </h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="first_name" class="block text-xs font-bold text-slate-700 mb-1.5">First Name *</label>
                                <input type="text" name="first_name" id="first_name" required value="{{ old('first_name') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Maria">
                            </div>
                            <div>
                                <label for="last_name" class="block text-xs font-bold text-slate-700 mb-1.5">Last Name *</label>
                                <input type="text" name="last_name" id="last_name" required value="{{ old('last_name') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Rodriguez">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="dob" class="block text-xs font-bold text-slate-700 mb-1.5">Date of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-700 mb-1.5">Primary Phone Number *</label>
                                <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="(718) 555-0123">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Email Address (Optional)</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="maria@example.com">
                            </div>
                            <div>
                                <label for="address" class="block text-xs font-bold text-slate-700 mb-1.5">Home Delivery Address (Optional)</label>
                                <input type="text" name="address" id="address" value="{{ old('address') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. 1020 Ogden Ave, Apt 4B">
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Current Pharmacy Details -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-2.5">
                            Step 2: Current Pharmacy Information
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="current_pharmacy_name" class="block text-xs font-bold text-slate-700 mb-1.5">Current Pharmacy Name *</label>
                                <input type="text" name="current_pharmacy_name" id="current_pharmacy_name" required value="{{ old('current_pharmacy_name') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Walgreens, CVS, or Rite Aid">
                            </div>
                            <div>
                                <label for="current_pharmacy_phone" class="block text-xs font-bold text-slate-700 mb-1.5">Current Pharmacy Phone (If known)</label>
                                <input type="tel" name="current_pharmacy_phone" id="current_pharmacy_phone" value="{{ old('current_pharmacy_phone') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="(718) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Medication / Rx List -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900 border-b border-slate-100 pb-2.5">
                            Step 3: Medications to Transfer
                        </h3>

                        <div>
                            <label for="medications_or_rx_numbers" class="block text-xs font-bold text-slate-700 mb-1.5">
                                Rx Numbers or Medication Names *
                            </label>
                            <textarea name="medications_or_rx_numbers" id="medications_or_rx_numbers" rows="4" required
                                class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="Please list the names of your medications or the Rx numbers printed on your prescription bottles. (Or type 'Transfer all active medications')">{{ old('medications_or_rx_numbers') }}</textarea>
                            <span class="text-[11px] text-slate-500 mt-1 block">You can also write "Transfer all my active prescriptions".</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="doctor_name" class="block text-xs font-bold text-slate-700 mb-1.5">Prescribing Doctor's Name (Optional)</label>
                                <input type="text" name="doctor_name" id="doctor_name" value="{{ old('doctor_name') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="Dr. Smith">
                            </div>
                            <div>
                                <label for="insurance_name" class="block text-xs font-bold text-slate-700 mb-1.5">Insurance / Medicaid Plan Name (Optional)</label>
                                <input type="text" name="insurance_name" id="insurance_name" value="{{ old('insurance_name') }}"
                                    class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition"
                                    placeholder="e.g. Fidelis, Healthfirst, MetroPlus, Medicare">
                            </div>
                        </div>

                        <div>
                            <label for="special_notes" class="block text-xs font-bold text-slate-700 mb-1.5">
                                Special Requests or Packaging Needs (Optional)
                            </label>
                            <textarea name="special_notes" id="special_notes" rows="2"
                                class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:border-[#0B2F5C] focus:ring-2 focus:ring-[#0B2F5C]/15 outline-none text-sm transition leading-relaxed"
                                placeholder="e.g., 'Please package into Dis-Pill blister packs' or 'Deliver to my apartment'">{{ old('special_notes') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button (Pill Button) -->
                    <div class="pt-4">
                        <button type="submit" class="rounded-full bg-[#0B2F5C] hover:bg-[#071E3C] text-white font-bold text-sm px-9 h-13 inline-flex items-center gap-3 shadow-md hover:scale-105 transition cursor-pointer">
                            <span>Submit Prescription Transfer Request</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Why Transfer to Us & Quick Call Box -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Medication Image Card -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 group">
                    <img src="{{ asset('images/refill-your-rx.jpg') }}" alt="Prescription Medication Refill" class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <!-- Quick Phone Callout Card (Deep Navy Container) -->
                <div class="bg-gradient-to-b from-[#0B2F5C] to-[#071E3C] text-white rounded-3xl p-8 space-y-5 shadow-2xl border border-white/10">
                    <span class="inline-block bg-[#C1272D] text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                        Prefer Phone?
                    </span>
                    <h3 class="text-2xl font-bold font-display text-white">
                        Transfer in 60 Seconds by Phone
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Don't want to type? Just call us directly. Give our staff your prescription bottle info or previous pharmacy name over the phone.
                    </p>
                    <a href="tel:7185388183" class="w-full text-center inline-flex items-center justify-center gap-2 rounded-full bg-white text-[#0B2F5C] font-bold text-sm h-12 hover:bg-slate-100 transition shadow">
                        <svg class="w-4 h-4 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call (718) 538-8183</span>
                    </a>
                </div>

                <!-- What Happens Next Box (Soft Slate #F8FAFC Card) -->
                <div class="bg-[#F8FAFC] rounded-3xl p-8 border border-[#0B2F5C]/10 shadow-sm space-y-5">
                    <h3 class="font-bold text-[#0B2F5C] text-sm uppercase tracking-wider">What Happens Next?</h3>
                    
                    <div class="space-y-4 text-xs sm:text-sm text-slate-600">
                        <div class="flex items-start gap-3.5">
                            <span class="w-6 h-6 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0">1</span>
                            <p><strong>We Call Your Old Pharmacy:</strong> You don't need to speak with them or cancel anything.</p>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <span class="w-6 h-6 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0">2</span>
                            <p><strong>We Verify Your Insurance:</strong> We ensure maximum coverage, apply coupons, and verify $0 copays.</p>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <span class="w-6 h-6 rounded-full bg-[#0B2F5C] text-white font-bold text-xs flex items-center justify-center shrink-0">3</span>
                            <p><strong>Pickup or Free Delivery:</strong> We call or text you as soon as your medications are packaged and ready.</p>
                        </div>
                    </div>
                </div>

                <!-- Insurance Acceptance Note (Soft Ice Blue Card) -->
                <div class="bg-[#E8F0FE]/60 rounded-3xl p-7 border border-[#1A4FA0]/15 text-xs sm:text-sm text-slate-600 space-y-2 shadow-sm">
                    <h4 class="font-bold text-[#0B2F5C]">All Major Insurances Accepted</h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        Medicaid, Medicare Part D, EmblemHealth, Fidelis Care, Healthfirst, MetroPlus, UnitedHealthcare, Blue Cross Blue Shield, Aetna, Cigna, and more.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
