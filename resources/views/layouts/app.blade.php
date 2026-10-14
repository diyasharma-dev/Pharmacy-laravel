<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'R & S Pioneer Pharmacy | Bronx, NY — Celebrating 20 Years of Trusted Care')</title>
    <meta name="description" content="@yield('meta_description', 'R & S Pioneer Pharmacy — Your trusted neighborhood pharmacy in Highbridge, South Bronx since 2006. Walk-in vaccines, multi-dose blister packaging, prescription transfers, and free local delivery.')">
    <meta name="theme-color" content="#0B2F5C">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@600;700;800;900&display=swap" rel="stylesheet">

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
<body class="bg-slate-50 text-slate-800 antialiased font-sans selection:bg-royal selection:text-white flex flex-col min-h-screen">

    <!-- Top Announcement Ticker (Walk-in Vaccines & 20-Year Milestone) -->
    <div class="bg-navy-dark text-white border-b border-navy py-2 overflow-hidden relative z-50">
        <a href="{{ route('vaccinations') }}" class="block group">
            <div class="animate-marquee whitespace-nowrap text-xs font-medium tracking-wide flex items-center gap-10">
                <span class="inline-flex items-center gap-2 text-ice">
                    <span class="w-2 h-2 rounded-full bg-crimson animate-ping"></span>
                    <strong class="text-white uppercase tracking-wider font-bold">Walk-In Vaccines Available:</strong> No Appointment Needed • Mon–Fri 10:00 AM – 6:00 PM
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-amber-300 font-semibold">
                    ⭐ CELEBRATING 20 YEARS (2006–2026) IN THE SOUTH BRONX
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-ice">
                    🚚 <strong>Free Local Delivery:</strong> Highbridge, Concourse &amp; Yankee Stadium Area
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-white">
                    📞 Call Our Pharmacy Team: <span class="text-amber-300 font-bold">(718) 538-8183</span>
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-2 text-ice">
                    <span class="w-2 h-2 rounded-full bg-crimson animate-ping"></span>
                    <strong class="text-white uppercase tracking-wider font-bold">Walk-In Vaccines Available:</strong> No Appointment Needed • Mon–Fri 10:00 AM – 6:00 PM
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-amber-300 font-semibold">
                    ⭐ CELEBRATING 20 YEARS (2006–2026) IN THE SOUTH BRONX
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-ice">
                    🚚 <strong>Free Local Delivery:</strong> Highbridge, Concourse &amp; Yankee Stadium Area
                </span>
                <span class="text-slate-400">•</span>
                <span class="inline-flex items-center gap-1.5 text-white">
                    📞 Call Our Pharmacy Team: <span class="text-amber-300 font-bold">(718) 538-8183</span>
                </span>
            </div>
        </a>
    </div>

    <!-- Quick Utility Bar -->
    <div class="bg-navy text-slate-200 text-xs py-2 px-4 sm:px-8 border-b border-white/10 hidden md:block">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    1018 Ogden Ave, Bronx, NY 10452 (Highbridge)
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-royal-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Mon–Fri 9am–7pm • Sat 10am–6pm • Sun 10am–3pm
                </span>
            </div>
            <div class="flex items-center gap-5">
                <span class="bg-white/10 px-2 py-0.5 rounded text-[11px] font-semibold text-ice tracking-wider">
                    🇺🇸 English &bull; 🇪🇸 Se Habla Español
                </span>
                <a href="tel:7185388183" class="text-white hover:text-amber-300 font-bold flex items-center gap-1 transition">
                    <svg class="w-3.5 h-3.5 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    (718) 538-8183
                </a>
            </div>
        </div>
    </div>

    <!-- Main Sticky Navigation -->
    <header class="bg-white sticky top-0 z-40 shadow-sm border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand Logo (Enhanced SVG) -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 py-1 group">
                    <img src="{{ asset('images/logo.svg') }}" alt="R & S Pioneer Pharmacy" class="h-14 sm:h-16 w-auto object-contain transition group-hover:scale-[1.01]">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-2 text-sm font-semibold text-slate-700">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg transition {{ request()->routeIs('home') ? 'text-royal bg-ice font-bold' : 'hover:text-royal hover:bg-slate-100' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg transition {{ request()->routeIs('about') ? 'text-royal bg-ice font-bold' : 'hover:text-royal hover:bg-slate-100' }}">
                        About Us
                    </a>
                    <a href="{{ route('vaccinations') }}" class="px-3 py-2 rounded-lg transition flex items-center gap-1.5 {{ request()->routeIs('vaccinations') ? 'text-royal bg-ice font-bold' : 'hover:text-royal hover:bg-slate-100' }}">
                        <span>Vaccinations</span>
                        <span class="text-[10px] font-extrabold uppercase px-1.5 py-0.5 rounded bg-crimson text-white tracking-wider">Walk-In</span>
                    </a>
                    <a href="{{ route('services') }}" class="px-3 py-2 rounded-lg transition {{ request()->routeIs('services') ? 'text-royal bg-ice font-bold' : 'hover:text-royal hover:bg-slate-100' }}">
                        Services
                    </a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg transition {{ request()->routeIs('contact') ? 'text-royal bg-ice font-bold' : 'hover:text-royal hover:bg-slate-100' }}">
                        Contact &amp; Hours
                    </a>
                </nav>

                <!-- Action Buttons -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="tel:7185388183" class="hidden xl:inline-flex items-center gap-2 text-navy hover:text-royal font-bold text-sm px-3 py-2 rounded-lg border border-slate-200 hover:border-royal/30 transition">
                        <svg class="w-4 h-4 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        (718) 538-8183
                    </a>
                    <a href="{{ route('transfer') }}" class="inline-flex items-center justify-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-bold text-sm px-5 py-2.5 rounded-lg shadow-sm hover:shadow transition transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        Transfer Rx
                    </a>
                </div>

                <!-- Mobile Hamburger Menu Button -->
                <div class="flex items-center lg:hidden gap-2">
                    <a href="{{ route('transfer') }}" class="sm:hidden text-xs bg-crimson text-white font-bold px-3 py-1.5 rounded">
                        Transfer Rx
                    </a>
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-lg text-slate-700 hover:text-navy hover:bg-slate-100 focus:outline-none" aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 space-y-2 shadow-lg">
            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('about') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                About Us
            </a>
            <a href="{{ route('vaccinations') }}" class="flex justify-between items-center px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('vaccinations') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                <span>Vaccinations</span>
                <span class="text-xs font-bold uppercase px-2 py-0.5 rounded bg-crimson text-white">Walk-In</span>
            </a>
            <a href="{{ route('services') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('services') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                Services
            </a>
            <a href="{{ route('transfer') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('transfer') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                Transfer Prescription / New Patient
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('contact') ? 'bg-ice text-royal font-bold' : 'text-slate-700 hover:bg-slate-100' }}">
                Contact Us &amp; Hours
            </a>
            <div class="pt-4 border-t border-slate-100 flex flex-col gap-2">
                <a href="tel:7185388183" class="w-full text-center bg-navy text-white font-bold py-2.5 rounded-lg text-sm flex items-center justify-center gap-2">
                    <svg class="w-4 h-4 text-crimson" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call: (718) 538-8183
                </a>
            </div>
        </div>
    </header>

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Bottom Bronx Pride & Trust Strip -->
    <div class="bg-gradient-to-r from-navy via-royal to-navy text-white py-10 px-4 sm:px-6 border-t-4 border-crimson">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
            <div>
                <span class="inline-block bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-2">
                    ⭐ CELEBRATING 20 YEARS (2006–2026)
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold font-display tracking-tight text-white">
                    "We're the pharmacy that cares."
                </h3>
                <p class="text-ice text-sm max-w-xl mt-1">
                    Proudly serving the Highbridge, South Bronx, and Yankee Stadium neighborhood with compassionate, personalized pharmacy care for two full decades.
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="tel:7185388183" class="inline-flex items-center gap-2 bg-crimson hover:bg-crimson-dark text-white font-bold px-6 py-3 rounded-lg shadow-md transition transform hover:-translate-y-0.5 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call (718) 538-8183
                </a>
                <a href="{{ route('transfer') }}" class="inline-flex items-center gap-2 bg-white text-navy hover:bg-slate-100 font-bold px-6 py-3 rounded-lg shadow-md transition transform hover:-translate-y-0.5 text-sm">
                    Transfer Prescriptions
                </a>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <footer class="bg-navy-dark text-slate-300 pt-14 pb-8 border-t border-navy">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-white/10">
                <!-- Column 1: Pharmacy Identity & 20-Year Legacy -->
                <div class="space-y-4">
                    <img src="{{ asset('images/logo-white.svg') }}" alt="R & S Pioneer Pharmacy" class="h-14 w-auto">
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Your trusted neighborhood pharmacy in Highbridge, South Bronx since 2006. Personalized care, blister packing, walk-in vaccinations, and free local delivery.
                    </p>
                    <div class="pt-2">
                        <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-lg text-xs">
                            <span class="text-amber-400 font-bold">★ 4.5/5.0</span>
                            <span class="text-slate-300">Google Verified Reviews</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Quick Navigation</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Pharmacist Kunal &amp; Our Story</a></li>
                        <li><a href="{{ route('vaccinations') }}" class="hover:text-white transition flex items-center gap-2"><span>Walk-In Vaccinations</span> <span class="text-[10px] bg-crimson px-1.5 py-0.5 rounded text-white font-bold">No Appt</span></a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">All Services &amp; Dis-Pill Packing</a></li>
                        <li><a href="{{ route('transfer') }}" class="hover:text-white transition">Transfer Prescriptions Online</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us &amp; FAQs</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services & Offerings -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Core Services</h4>
                    <ul class="space-y-2 text-sm text-slate-300">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            Multi-Dose &amp; Dis-Pill Blister Packing
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            Walk-in Flu &amp; COVID-19 Vaccines
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            DMV Vision Test &amp; Screening
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            Instant Passport Photos (2x2)
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            Licensed Notary Public &amp; 10¢ Copies
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            Free Local Highbridge Delivery
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-crimson"></span>
                            OTC Medicines, Vitamins &amp; Toy Aisle
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Location & Operating Hours -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-4">Location &amp; Hours</h4>
                    <address class="not-italic text-sm text-slate-300 space-y-2 mb-4">
                        <p class="font-semibold text-white">1018 Ogden Ave<br>Bronx, NY 10452</p>
                        <p class="text-xs text-slate-400">Highbridge &bull; Near Yankee Stadium</p>
                        <p class="font-bold text-white pt-1">
                            Phone: <a href="tel:7185388183" class="text-amber-300 hover:underline">(718) 538-8183</a>
                        </p>
                    </address>
                    
                    <div class="text-xs space-y-1 bg-white/5 p-3 rounded-lg border border-white/5">
                        <div class="flex justify-between">
                            <span class="text-slate-400">Mon &ndash; Fri:</span>
                            <span class="text-white font-medium">9:00 AM &ndash; 7:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-400">Saturday:</span>
                            <span class="text-white font-medium">10:00 AM &ndash; 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-400">Sunday:</span>
                            <span class="text-white font-medium">10:00 AM &ndash; 3:00 PM</span>
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

            <!-- Bottom Disclaimer & Credits -->
            <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-400">
                <p>&copy; {{ date('Y') }} R &amp; S Pioneer Pharmacy. All Rights Reserved. Celebrating 20 Years of Community Care.</p>
                <p class="text-center md:text-right">
                    Licensed by NY State Board of Pharmacy • Medicaid &amp; Medicare Certified Provider
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu JS Toggle -->
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
