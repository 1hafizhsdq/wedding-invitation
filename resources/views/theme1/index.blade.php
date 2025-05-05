<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .header-scroll {
            background-color: white !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
        footer {
            transition: all 0.3s ease;
        }
        .hero-text {
            font-family: 'Playfair Display', serif;
        }
        .invitation-btn {
            background-color: #76856A;
            color: white;
            transition: all 0.3s ease;
        }
        .invitation-btn:hover {
            background-color: #5a6a55;
            transform: translateY(-2px);
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-down {
            animation: fadeInDown 0.5s ease-out forwards;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #76856A;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #5a6a55;
        }
        .float {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-[#F9FAF5] text-gray-800">
    {{-- <audio autoplay id="playAudio">
        <source src="/janjisuci.mp3" type="audio/mpeg">
        Browsermu tidak mendukung tag audio, upgrade donk!
    </audio> --}}
    <audio id="playAudio" src="/janjisuci.mp3" autoplay></audio>
    <div class="min-h-screen relative">
        <header id="mainHeader" class="flex justify-between items-center px-6 py-4 bg-[#F9FAF5] fixed top-0 left-0 right-0 z-50">
            {{-- Logo Kiri --}}
            <div class="text-2xl font-serif text-gray-700 font-semibold tracking-wide">
                <span class="text-[#76856A]">#kisahm</span><span class="text-[#C6B264]">ANISH</span><span class="text-[#76856A]">AFIZH</span>
            </div>
        
            {{-- Tiga Titik Kanan --}}
            <div class="flex space-x-2">
                <span class="w-2.5 h-2.5 rounded-full bg-[#C6B264]"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-[#76856A]"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-[#C6B264]"></span>
            </div>
        </header>
        
        <!-- Hero Section -->
        <section class="hero-section h-screen flex flex-col justify-center items-center text-center pt-16 px-4 animate__animated animate__slideInUp animate__delay-1s">
            <div class="mb-8 max-w-2xl">
                <p class="hero-text text-[#76856A] text-lg md:text-xl tracking-widest mb-4">THE WEDDING OF</p>
                <h1 class="hero-text text-4xl md:text-6xl lg:text-7xl font-medium text-[#3A4A3A] mb-6">
                    <span>{{ $wedding->initial_name_groom }}</span>
                    <span class="text-[#C6B264] mx-2 md:mx-4">&amp;</span>
                    <span>{{ $wedding->initial_name_bride }}</span>
                </h1>
                <p class="hero-text text-[#76856A] text-xl md:text-2xl tracking-widest mb-8">{{ \Carbon\Carbon::parse($wedding->Detail[0]->date)->translatedFormat('d F Y') }}</p>
                
                <p class="text-[#3A4A3A] text-lg mb-6">Dear: {{ $to }}</p>
                
                <a href="#brideGroom" id="openInvitation" class="float invitation-btn px-8 py-3 rounded-full text-lg font-medium shadow-md">
                    Open Invitation
                </a>
            </div>
        </section>
        
        <!-- Bride & Groom Section -->
        <section class="py-20 px-6 bg-white" id="brideGroom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="hero-text text-3xl md:text-4xl text-[#3A4A3A] mb-4" data-aos="fade-up" data-aos-duration="1000">Bride & Groom</h2>
                    <div class="max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="3001">
                        <p class="text-[#76856A] italic mb-6">"Dan di antara tanda-tanda kekuasaan-Nya ialah bahwa Dia menciptakan untukmu dari jenismu sendiri pasangan-pasangan hidup, agar kamu merasa tenteram kepadanya, dan Dia jadikan di antara kamu rasa kasih sayang dan belas kasihan. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi orang yang berpikir."</p>
                        <p class="text-[#C6B264]">Surat Ar-Rum ayat 21</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-12 items-center justify-center">
                    @foreach ($wedding->Bride as $couple)
                        <div class="text-center max-w-xs" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                            <div class="rounded-full overflow-hidden w-48 h-48 mx-auto mb-6 border-4 border-[#C6B264]">
                                <img src="{{ url('/storage/') }}/{{ $couple->photo }}" 
                                    alt="Groom" class="w-full h-full object-cover">
                            </div>
                            <h3 class="hero-text text-2xl text-[#3A4A3A] mb-2">{{ $couple->name }}</h3>
                            <p class="text-[#76856A]">{{ $couple->child }} {{ $couple->name_father }} - {{ $couple->name_mother }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Wedding Events Section -->
        <section class="py-20 px-6 bg-[#F9FAF5]">
            <div class="max-w-4xl mx-auto">
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="hero-text text-3xl md:text-4xl text-[#3A4A3A] mb-4" data-aos="fade-up" data-aos-duration="3000">Wedding Events</h2>
                    <p class="text-[#76856A] max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="3000">Kami sangat berharap anda dapat hadir di moment bahagia ini</p>
                </div>

                <!-- Countdown -->
                <div class="bg-white rounded-xl shadow-md p-8 mb-16 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <p class="text-[#76856A] mb-6">Counting down to our special day</p>
                    <div class="flex justify-center space-x-4 mb-6">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-[#C6B264]" id="days">51</div>
                            <div class="text-[#76856A] text-sm">DAYS</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-[#C6B264]" id="hours">10</div>
                            <div class="text-[#76856A] text-sm">HOURS</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-[#C6B264]" id="minutes">20</div>
                            <div class="text-[#76856A] text-sm">MINUTES</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-[#C6B264]" id="seconds">0</div>
                            <div class="text-[#76856A] text-sm">SECONDS</div>
                        </div>
                    </div>
                </div>

                <!-- Events -->
                <div class="space-y-12 text-center">
                    <!-- Akad Nikah -->
                    @foreach ($wedding->Detail as $event)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="flip-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="md:flex">
                                <div class="p-8 md:w-1/3 border-b md:border-b-0 md:border-r border-[#F0F0F0]">
                                    <h3 class="hero-text text-2xl text-[#3A4A3A] mb-2">{{ $event->type }}</h3>
                                    <p class="text-[#C6B264] mb-1">{{ \Carbon\Carbon::parse($wedding->Detail[0]->date)->translatedFormat('l, d F Y') }}</p>
                                    <p class="text-[#76856A]">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('h:i') }} WIB</p>
                                </div>
                                <div class="p-8 md:w-2/3">
                                    <p class="text-[#76856A] mb-4">{{ $event->address }}</p>
                                    <a href="{{ $event->maps }}" class="text-[#C6B264] underline">OPEN MAP</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h2 class="hero-text text-3xl md:text-4xl text-[#3A4A3A] mb-4" data-aos="fade-up" data-aos-duration="3000">Our Gallery</h2>
                    <p class="text-[#76856A] max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="3000">Potret moment kebersamaan mempelai</p>
                </div>

                <!-- Photo Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery1 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery2 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery3 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery4 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery5 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-lg aspect-square">
                        <img src="{{ url('/storage/') }}/{{ $wedding->Galery[0]->gallery6 }}" 
                            alt="Couple photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-aos="zoom-out-down" data-aos-duration="3000">
                        <div class="absolute inset-0 bg-[#3A4A3A] bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wishes Section -->
        <section class="py-16 px-4 bg-[#F9FAF5]">
            <div class="max-w-6xl mx-auto">
                <!-- Section Title -->
                <div class="text-center mb-12">
                    <h2 class="hero-text text-3xl md:text-4xl text-[#3A4A3A] mb-4" data-aos="fade-up" data-aos-duration="3000">Send Your Wishes</h2>
                    <p class="text-[#76856A]" data-aos="fade-up" data-aos-duration="3000">Share your heartfelt wishes and blessings for our new journey together.</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-8" data-aos="flip-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <!-- Form Section -->
                    <div class="lg:w-1/2 bg-white rounded-lg shadow-sm p-6 md:p-8">
                        <h3 class="hero-text text-xl text-[#3A4A3A] mb-6 border-b pb-2">Leave a Message</h3>
                        
                        {{-- <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-[#3A4A3A] font-medium mb-2">Your Name</label>
                                <input type="text" id="name" placeholder="Enter your name" 
                                    class="w-full px-4 py-3 border border-[#E0E0E0] rounded-lg focus:outline-none focus:ring-1 focus:ring-[#C6B264] focus:border-[#C6B264]">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-[#3A4A3A] font-medium mb-2">Your Message</label>
                                <textarea id="message" rows="4" placeholder="Write your wishes here." 
                                        class="w-full px-4 py-3 border border-[#E0E0E0] rounded-lg focus:outline-none focus:ring-1 focus:ring-[#C6B264] focus:border-[#C6B264]"></textarea>
                            </div>
                            
                            <div class="pt-4">
                                <button type="submit" class="w-full bg-[#76856A] text-white py-3 rounded-lg hover:bg-[#5a6a55] transition-colors duration-300">
                                    Send Wishes
                                </button>
                            </div>
                        </form> --}}
                        <livewire:create-wish>
                    </div>

                    <!-- Wishes List Section -->
                    <div class="lg:w-1/2">
                        <h3 class="hero-text text-xl text-[#3A4A3A] mb-6 text-center" data-aos="fade-up" data-aos-duration="3000">Wishes from Loved Ones</h3>
                        
                        <div class="bg-white rounded-lg shadow-sm p-6 h-[500px] overflow-y-auto" data-aos="flip-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                            <div class="space-y-6">
                                {{-- @foreach ($wedding->Wishes as $ucapan)
                                    <div class="pb-6 border-b border-[#F0F0F0]">
                                        <h4 class="font-bold text-[#3A4A3A]">{{ $ucapan->name }}</h4>
                                        <p class="text-[#76856A] mt-2">{{ $ucapan->comment }}</p>
                                    </div>
                                @endforeach --}}
                                <livewire:list-wish>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wedding Gift Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h2 class="hero-text text-3xl md:text-4xl text-[#3A4A3A] mb-4" data-aos="fade-up" data-aos-duration="3000">Wedding Gift</h2>
                    <p class="text-[#76856A] max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="3000">Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk mempelai dapat melalui</p>
                </div>

                <!-- Bank Accounts -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bank Account 1 -->
                    @foreach ($wedding->bride as $couple)
                        <div class="bg-[#F9FAF5] rounded-xl p-6 border border-[#E0E0E0]" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="flex items-center mb-4">
                                <div class="p-3 rounded-lg mr-4">
                                    <img src="{{ url('/storage/') }}/{{ $couple->Bank->logo }}" style="height:30px; widht:auto;">
                                </div>
                                {{-- <h3 class="hero-text text-xl text-[#3A4A3A]">{{ $couple->Bank->name }}</h3> --}}
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-[#76856A] text-sm">Nomor Rekening</p>
                                    <p class="text-[#3A4A3A] font-medium">{{ $couple->acc_number }}</p>
                                </div>
                                <div>
                                    <p class="text-[#76856A] text-sm">Atas Nama</p>
                                    <p class="text-[#3A4A3A] font-medium">{{ $couple->acc_name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <!-- Note -->
                <div class="mt-8 text-center text-[#76856A] text-sm">
                    <p>Thank you for your generosity and blessings.</p>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="py-12 px-4 bg-[#3A4A3A] text-white">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Thank You Message -->
                <p class="hero-text text-xl md:text-2xl mb-6">Thank you for celebrating our special day with us</p>
                
                <!-- Wedding Date -->
                <p class="text-[#C6B264] text-lg md:text-xl mb-8">{{ \Carbon\Carbon::parse($wedding->Detail[0]->date)->translatedFormat('d . m . Y') }}</p>
                
                <!-- Copyright -->
                <p class="text-[#76856A] text-sm">© {{ date('Y') }} {{ $wedding->initial_name_groom }} & {{ $wedding->initial_name_bride }} Wedding. All rights reserved.</p>
                
            </div>
        </footer>
    </div>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 10) {
                header.classList.add('header-scroll');
            } else {
                header.classList.remove('header-scroll');
            }
        });

        // Set the date we're counting down to (June 3, 2025)
            const countDownDate = new Date("{{ \Carbon\Carbon::parse($wedding->Detail[0]->date)->format('F d, Y H:i:s') }}").getTime();

        // Update the countdown every 1 second
        const x = setInterval(function() {
            // Get today's date and time
            const now = new Date().getTime();
            
            // Find the distance between now and the countdown date
            const distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in elements with these IDs
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
            
            // If the countdown is finished, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "THE WEDDING DAY HAS ARRIVED!";
            }
        }, 1000);

        document.querySelector('.invitation-btn').addEventListener("click", function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
            const startPosition = window.pageYOffset;
            const distance = targetPosition - startPosition;
            const duration = 2000;
            let start = null;

            function step(timestamp) {
                if (!start) start = timestamp;
                const progress = timestamp - start;
                const percent = Math.min(progress / duration, 1);
                window.scrollTo(0, startPosition + distance * easeInOutCubic(percent));
                if (progress < duration) {
                    requestAnimationFrame(step);
                }
            }

            // Fungsi easing
            function easeInOutCubic(t) {
                return t < 0.5
                    ? 4 * t * t * t
                    : 1 - Math.pow(-2 * t + 2, 3) / 2;
            }

            requestAnimationFrame(step);
        });

        window.addEventListener('load', () => {
            const audio = document.getElementById('playAudio');

            // Coba paksa play (bisa gagal jika browser memblokir autoplay)
            audio.play().catch((error) => {
                console.log("Autoplay gagal, kemungkinan karena aturan browser.");
            });
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>