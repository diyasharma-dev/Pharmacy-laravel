@extends('layouts.app')

@section('title', 'Contact Us, Store Hours & Directions | R & S Pioneer Pharmacy Bronx NY')
@section('meta_description', 'Visit R & S Pioneer Pharmacy at 1018 Ogden Ave, Bronx NY 10452. Open 7 days a week. Call 718-538-8183 for refills, free delivery, or questions.')

@section('content')
<!-- Page Header Banner -->
<section class="bg-gradient-to-r from-navy-dark via-navy to-royal text-white py-14 sm:py-18 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-4">
            <span class="inline-block bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                Open 7 Days a Week &bull; Highbridge, Bronx
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black font-display tracking-tight text-white">
                Contact &amp; Visit R &amp; S Pioneer Pharmacy
            </h1>
            <p class="text-base sm:text-lg text-ice leading-relaxed">
                Whether you have questions about your prescriptions, want to schedule free local delivery, or need walk-in vaccines, we're here to help you 7 days a week.
            </p>
        </div>
    </div>
</section>

<!-- Contact Details, Map & Form Grid -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Flash Message -->
        @if (session('success'))
            <div class="max-w-3xl mx-auto mb-8 bg-emerald-50 border-2 border-emerald-500 text-emerald-900 rounded-2xl p-6 shadow-md flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-xl">
                    ✓
                </div>
                <div>
                    <h3 class="font-extrabold text-base">Message Sent Successfully!</h3>
                    <p class="text-sm text-emerald-800 leading-relaxed">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Contact Cards -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Contact Info Card -->
                <div class="bg-navy text-white rounded-3xl p-8 space-y-6 shadow-md">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-300">Direct Contact</span>
                        <h2 class="text-2xl font-bold font-display text-white mt-1">Get In Touch</h2>
                    </div>

                    <div class="space-y-4 text-sm">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-crimson shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold">Store Address:</strong>
                                <span class="text-slate-300">1018 Ogden Ave, Bronx, NY 10452</span>
                                <span class="text-xs text-slate-400 block mt-0.5">Highbridge &bull; Cross of W 164th / 165th St</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-crimson shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold">Phone:</strong>
                                <a href="tel:7185388183" class="text-amber-300 font-bold hover:underline text-base">(718) 538-8183</a>
                                <span class="text-xs text-slate-400 block mt-0.5">Call to speak directly with Pharmacist Kunal</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-crimson shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                            </div>
                            <div>
                                <strong class="text-white block font-semibold">Bilingual Assistance:</strong>
                                <span class="text-slate-300">English &amp; Español</span>
                                <span class="text-xs text-slate-400 block mt-0.5">"Se habla Español para consultas y recetas"</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Table -->
                    <div class="pt-4 border-t border-white/10 space-y-2 text-xs">
                        <div class="font-bold uppercase tracking-wider text-amber-300 mb-2">Store Operating Hours</div>
                        <div class="flex justify-between py-1 border-b border-white/5">
                            <span class="text-ice">Monday &ndash; Friday</span>
                            <span class="font-bold text-white">9:00 AM &ndash; 7:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1 border-b border-white/5">
                            <span class="text-ice">Saturday</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 6:00 PM</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="text-ice">Sunday</span>
                            <span class="font-bold text-white">10:00 AM &ndash; 3:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Google Verified Reviews Strip -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm flex items-center justify-between">
                    <div>
                        <div class="flex items-center gap-1.5 text-amber-500 font-extrabold text-lg">
                            <span>★ 4.5</span>
                            <span class="text-xs text-slate-500 font-semibold">(Google Reviews)</span>
                        </div>
                        <div class="text-xs text-slate-600 mt-0.5">Read reviews from our Bronx neighbors</div>
                    </div>
                    <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs font-bold text-royal hover:underline">
                        View on Maps &rarr;
                    </a>
                </div>

            </div>

            <!-- Right: Contact Inquiry Form & Map -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- Contact Form Card -->
                <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8 sm:p-10 space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-royal">Ask a Pharmacist</span>
                        <h2 class="text-2xl font-extrabold font-display text-navy mt-1">Send Us a Message</h2>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1">
                            Have a question about medication availability, prior authorizations, delivery, or general wellness? Fill in your details below.
                        </p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-700 mb-1">Your Full Name *</label>
                                <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                    placeholder="Your Name">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
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
                                    placeholder="you@example.com">
                            </div>
                            <div>
                                <label for="subject" class="block text-xs font-bold text-slate-700 mb-1">Inquiry Subject</label>
                                <select name="subject" id="subject"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition bg-white">
                                    <option value="General Question">General Question</option>
                                    <option value="Prescription Refill / Transfer">Prescription Refill / Transfer</option>
                                    <option value="Dis-Pill Blister Packaging">Dis-Pill Blister Packaging</option>
                                    <option value="Walk-In Vaccination Inquiry">Walk-In Vaccination Inquiry</option>
                                    <option value="Free Local Delivery Request">Free Local Delivery Request</option>
                                    <option value="DMV Exam / Passport Photo / Notary">DMV Exam / Passport Photo / Notary</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-700 mb-1">Your Message or Question *</label>
                            <textarea name="message" id="message" rows="4" required
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-royal focus:ring-2 focus:ring-royal/20 outline-none text-sm transition"
                                placeholder="How can our pharmacy team assist you today?">{{ old('message') }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-extrabold text-sm px-8 py-3.5 rounded-xl shadow transition transform hover:-translate-y-0.5">
                                Send Message to Pharmacist &rarr;
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Google Map Preview Card -->
                <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-navy text-sm uppercase tracking-wider">Store Location Map</h3>
                        <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="text-xs text-crimson font-bold hover:underline">
                            Open in Google Maps &rarr;
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
    </div>
</section>
@endsection
