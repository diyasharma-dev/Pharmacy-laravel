<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "R & S Pioneer Pharmacy | Trusted Pharmacy Services Since 2006")</title>
    <meta name="description" content="@yield('meta_description', 'Established in 2006, R & S Pioneer Pharmacy has served the South Bronx community for 20 years. Walk-in vaccines, Dis-Pill blister packing, passport photos, DMV vision tests, and free delivery.')">
    <meta name="theme-color" content="#0B2F5C">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org Pharmacy Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Pharmacy",
      "name": "R & S Pioneer Pharmacy",
      "telephone": "+1-718-538-8183",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "1018 Ogden Ave",
        "addressLocality": "Bronx",
        "addressRegion": "NY",
        "postalCode": "10452",
        "addressCountry": "US"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": 40.832,
        "longitude": -73.925
      },
      "openingHoursSpecification": [
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:00",
          "closes": "19:00"
        },
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "10:00",
          "closes": "18:00"
        },
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "10:00",
          "closes": "15:00"
        }
      ],
      "priceRange": "$$"
    }
    </script>
</head>
<body class="bg-white text-slate-900 antialiased font-sans selection:bg-royal selection:text-white flex flex-col min-h-screen">

    <!-- Top Utility Bar (Demo Site Navy #0B2F5C Style) -->
    <div class="bg-[#0B2F5C] text-white border-b border-white/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-3 px-4 py-2.5 text-xs">
            <!-- Left Contact Info -->
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-4 sm:gap-6">
                <div class="flex items-center gap-1.5 text-white/90">
                    <svg class="w-4 h-4 text-[#E8F0FE] shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <span>1018 Ogden Ave, Bronx, NY 10452</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-[#E8F0FE] shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                    <a href="tel:7185388183" class="font-bold text-white hover:underline">(718) 538-8183</a>
                </div>
                <div class="hidden lg:flex items-center gap-1.5 text-white/80">
                    <svg class="w-4 h-4 text-[#E8F0FE] shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    <span>info@rspioneerpharmacy.com</span>
                </div>
            </div>

            <!-- Right Reviews & Language -->
            <div class="flex items-center gap-3">
                <span class="bg-white/10 px-2.5 py-0.5 rounded text-[11px] font-semibold text-white/95">
                    🇺🇸 English &bull; 🇪🇸 Se Habla Español
                </span>
                <div class="flex items-center gap-1 text-white">
                    <div class="flex text-amber-300">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <span class="text-[11px] text-white/90"><b>4.5★</b> (39 Reviews)</span>
                </div>
                <!-- Google Review Circle Button -->
                <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="w-7 h-7 rounded-full bg-white text-[#0B2F5C] flex items-center justify-center hover:scale-105 transition shadow-sm" title="Google Reviews">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C7.58 0 4 3.58 4 8c0 5.25 7.13 15.34 7.44 15.77.29.41.83.41 1.12 0C12.87 23.34 20 13.25 20 8c0-4.42-3.58-8-8-8zm0 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                </a>
                <!-- Instagram Circle Button -->
                <a href="https://www.instagram.com/rs_pioneerpharmacy/" target="_blank" rel="noopener" class="w-7 h-7 rounded-full bg-white text-[#C1272D] flex items-center justify-center hover:scale-105 transition shadow-sm" title="Instagram">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (Clean White / Demo Site Palette Style) -->
    <nav class="sticky top-0 z-[99] bg-white/95 text-[#0B2F5C] shadow-[0_2px_18px_rgba(11,47,92,0.06)] backdrop-blur-xl border-b border-black/[0.06] h-20 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-between">
            
            <!-- Left: Redesigned Logo & Mobile Toggle -->
            <div class="flex items-center gap-4">
                <button id="mobile-menu-btn" type="button" class="md:hidden text-[#0B2F5C] hover:text-[#C1272D] p-1.5 rounded-lg focus:outline-none" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <a href="{{ route('home') }}" class="flex items-center py-1 group">
                    <img src="{{ asset('images/logo.svg') }}" alt="R & S Pioneer Pharmacy — 1018 Ogden Ave, Bronx" class="h-12 sm:h-14 w-auto object-contain group-hover:scale-[1.02] transition-transform">
                </a>
            </div>

            <!-- Center: Navigation Links in Deep Navy (#0B2F5C) -->
            <div class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-semibold">
                <a href="{{ route('home') }}" class="py-2 transition {{ request()->routeIs('home') ? 'border-b-2 border-[#C1272D] text-[#0B2F5C] font-bold' : 'text-[#0B2F5C]/80 hover:text-[#0B2F5C]' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="py-2 transition {{ request()->routeIs('about') ? 'border-b-2 border-[#C1272D] text-[#0B2F5C] font-bold' : 'text-[#0B2F5C]/80 hover:text-[#0B2F5C]' }}">
                    About Us
                </a>
                <a href="{{ route('services') }}" class="py-2 transition {{ request()->routeIs('services') ? 'border-b-2 border-[#C1272D] text-[#0B2F5C] font-bold' : 'text-[#0B2F5C]/80 hover:text-[#0B2F5C]' }}">
                    Our Services
                </a>
                <a href="{{ route('vaccinations') }}" class="py-2 transition flex items-center gap-1.5 {{ request()->routeIs('vaccinations') ? 'border-b-2 border-[#C1272D] text-[#0B2F5C] font-bold' : 'text-[#0B2F5C]/80 hover:text-[#0B2F5C]' }}">
                    <span>Vaccinations</span>
                    <span class="text-[9px] font-black uppercase px-1.5 py-0.5 rounded bg-[#C1272D] text-white tracking-wider">Walk-In</span>
                </a>
                <a href="{{ route('contact') }}" class="py-2 transition {{ request()->routeIs('contact') ? 'border-b-2 border-[#C1272D] text-[#0B2F5C] font-bold' : 'text-[#0B2F5C]/80 hover:text-[#0B2F5C]' }}">
                    Contact Us
                </a>
            </div>

            <!-- Right: Action Buttons (Demo Navy & Pill Buttons) -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Refill / Call Pill Button -->
                <a href="tel:7185388183" class="inline-flex items-center gap-2 bg-white border border-[#0B2F5C]/20 hover:border-[#0B2F5C] text-[#0B2F5C] text-xs font-bold px-4 py-2.5 rounded-full transition hover:bg-[#E8F0FE]/50">
                    <svg class="w-3.5 h-3.5 text-[#C1272D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Refill Your ℞
                </a>
                <!-- New Patient / Transfer Rx Accent Button (Navy #0B2F5C) -->
                <a href="{{ route('transfer') }}" class="inline-flex items-center gap-2 bg-[#0B2F5C] hover:bg-[#071E3C] text-white text-xs font-bold px-5 py-2.5 rounded-full transition shadow-md hover:scale-105">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    New Patient
                </a>
            </div>

            <!-- Mobile Action Button -->
            <div class="sm:hidden flex items-center gap-2">
                <a href="{{ route('transfer') }}" class="text-xs bg-[#0B2F5C] text-white font-bold px-3 py-1.5 rounded-full">
                    Transfer
                </a>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-200 px-4 py-4 space-y-2 text-sm shadow-xl">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">About Us</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">Our Services</a>
            <a href="{{ route('vaccinations') }}" class="flex justify-between items-center px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">
                <span>Vaccinations</span>
                <span class="text-[10px] bg-[#C1272D] px-1.5 py-0.5 rounded text-white font-bold uppercase">Walk-In</span>
            </a>
            <a href="{{ route('transfer') }}" class="block px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">Transfer Rx / New Patient</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-[#0B2F5C] hover:bg-[#E8F0FE] font-medium">Contact Us &amp; FAQs</a>
            <div class="pt-2 border-t border-slate-200 flex flex-col gap-2">
                <a href="tel:7185388183" class="w-full text-center bg-[#0B2F5C] text-white font-bold py-2 rounded-full text-xs">
                    Call: (718) 538-8183
                </a>
            </div>
        </div>
    </nav>

    <!-- Marquee Banner (Demo Site Ice Blue / Navy Accents) -->
    <div class="w-full bg-[#E8F0FE]/70 border-b border-[#0B2F5C]/10 py-2.5 overflow-hidden shadow-sm">
        <a href="{{ route('vaccinations') }}" class="block group">
            <div class="animate-marquee whitespace-nowrap text-xs font-semibold text-[#0B2F5C] flex items-center gap-12">
                <p class="inline-flex items-center gap-2">
                    <span class="font-extrabold text-[#C1272D]">Walk-In <span class="underline">Vaccination Services</span></span> 
                    <b>&ndash;</b> No Appointment Needed! Stop by anytime <span class="underline font-bold">between 10 AM and 6 PM</span> on weekdays for quick and convenient vaccinations. Walk-ins are always welcome!
                </p>
                <span class="text-[#1A4FA0]/40">•</span>
                <p class="inline-flex items-center gap-2">
                    <span class="font-bold text-[#1A4FA0]">⭐ 20th Anniversary (2006–2026):</span> Two decades of serving the South Bronx &amp; Highbridge community with pride and trust.
                </p>
                <span class="text-[#1A4FA0]/40">•</span>
                <p class="inline-flex items-center gap-2">
                    <span class="font-extrabold text-[#C1272D]">Walk-In <span class="underline">Vaccination Services</span></span> 
                    <b>&ndash;</b> No Appointment Needed! Stop by anytime <span class="underline font-bold">between 10 AM and 6 PM</span> on weekdays for quick and convenient vaccinations. Walk-ins are always welcome!
                </p>
                <span class="text-[#1A4FA0]/40">•</span>
                <p class="inline-flex items-center gap-2">
                    <span class="font-bold text-[#1A4FA0]">⭐ 20th Anniversary (2006–2026):</span> Two decades of serving the South Bronx &amp; Highbridge community with pride and trust.
                </p>
            </div>
        </a>
    </div>

    <!-- Main Page Content Slot -->
    <main class="flex-grow overflow-x-hidden">
        @yield('content')
    </main>

    <!-- Main Footer (Deep Navy #071E3C from web-rspioneer.pages.dev) -->
    <footer class="bg-[#071E3C] text-slate-200 pt-16 pb-8 border-t border-white/10 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-white/10">
                <!-- Column 1: Brand & 20-Year Milestone -->
                <div class="space-y-4">
                    <img src="{{ asset('images/logo-white.svg') }}" alt="R & S Pioneer Pharmacy" class="h-14 w-auto">
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Established in 2006, R &amp; S Pioneer Pharmacy has been serving our patients and community for 20 years, providing exceptional quality of pharmacy care, services, and products.
                    </p>
                    <p class="text-sm font-semibold text-white">We care about you!</p>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Quick Links</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">Our Services</a></li>
                        <li><a href="{{ route('vaccinations') }}" class="hover:text-white transition">Walk-In Vaccinations</a></li>
                        <li><a href="{{ route('transfer') }}" class="hover:text-white transition">Transfer ℞ &amp; New Patient</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us &amp; FAQ</a></li>
                    </ul>
                </div>

                <!-- Column 3: Featured Services -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Our Services</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li>Multi-Dose &amp; Dis-Pill Blister Packing</li>
                        <li>Walk-In Flu &amp; COVID-19 Vaccinations</li>
                        <li>NY DMV Vision Eye Exams</li>
                        <li>Official 2x2 Passport Photos</li>
                        <li>Licensed Notary Public &amp; 10¢ Copies</li>
                        <li>Free Neighborhood Prescription Delivery</li>
                        <li>Full In-Store Toy Department &amp; OTC</li>
                    </ul>
                </div>

                <!-- Column 4: Contact & Operating Hours -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Opening Hours</h4>
                    <address class="not-italic text-sm text-slate-400 space-y-1 mb-4">
                        <p class="text-white font-medium">1018 Ogden Ave, Bronx, NY 10452</p>
                        <p>Phone: <a href="tel:7185388183" class="text-white font-bold hover:underline">(718) 538-8183</a></p>
                    </address>
                    
                    <div class="text-xs space-y-1.5 bg-white/5 p-3.5 rounded-xl border border-white/5">
                        <div class="flex justify-between">
                            <span class="text-slate-400">Monday &ndash; Friday</span>
                            <span class="text-white font-medium">09:00 AM &ndash; 07:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-400">Saturday</span>
                            <span class="text-white font-medium">10:00 AM &ndash; 06:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-400">Sunday</span>
                            <span class="text-white font-medium">10:00 AM &ndash; 03:00 PM</span>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-3 pt-4">
                        <a href="https://www.instagram.com/rs_pioneerpharmacy/" target="_blank" rel="noopener" class="w-8 h-8 rounded-full bg-white/10 hover:bg-crimson flex items-center justify-center text-white transition" title="Instagram">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/RS-Pioneer-Pharmacy-117837138277480" target="_blank" rel="noopener" class="w-8 h-8 rounded-full bg-white/10 hover:bg-royal flex items-center justify-center text-white transition" title="Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.65 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/></svg>
                        </a>
                        <a href="https://www.google.com/maps?q=1018+Ogden+Ave+Bronx+NY+10452" target="_blank" rel="noopener" class="w-8 h-8 rounded-full bg-white/10 hover:bg-emerald-600 flex items-center justify-center text-white transition" title="Google Maps">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C7.58 0 4 3.58 4 8c0 5.25 7.13 15.34 7.44 15.77.29.41.83.41 1.12 0C12.87 23.34 20 13.25 20 8c0-4.42-3.58-8-8-8zm0 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} R &amp; S Pioneer Pharmacy. All Rights Reserved. Celebrating 20 Years of Community Care.</p>
                <p>1018 Ogden Ave, Bronx NY 10452 &bull; Licensed by NY State Board of Pharmacy</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Drawer JS Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', function () {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
