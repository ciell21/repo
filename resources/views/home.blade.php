@extends('layouts.app')

@section('title', 'Griecels Portfolio')

@section('content')
<section id="home">
    <div class="card">
        <div class="profile-section">
            <div class="profile-picture">
                <img src="{{ asset('images/788961169_1406805788066662_3766062154701043977_n.jpg') }}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Welcome to My Portfolio</h2>
                <p>Hello! I'm Griecel An Millare, a BSIT student at Data Center College of Bangued. Welcome to my personal portfolio website.</p>
            </div>
        </div>

        <h3 style="color: var(--heading); margin-top: 20px; margin-bottom: 15px;">About Me</h3>
        <p>I am currently pursuing my Bachelor of Science in Information Technology and expect to graduate in 2027. I have a strong foundation in networking basics, office productivity tools, and basic troubleshooting skills.</p>
    </div>
</section>

<section id="education">
    <div class="card">
        <h2>Education</h2>

        <div class="education-item">
            <h3>Primary Education</h3>
            <p><strong>School:</strong> Patucannay Elementary School</p>
            <p><strong>Address:</strong> Patucannay, Bangued, Abra</p>
            <p class="year"><strong>Year Graduated:</strong> 2015</p>
        </div>

        <div class="education-item">
            <h3>Secondary Education</h3>
            <p><strong>School:</strong> Abra High School</p>
            <p><strong>Address:</strong> Zone 3, Bangued, Abra</p>
            <p><strong>Strand:</strong> GAS (General Academic Strand)</p>
            <p class="year"><strong>Year Graduated:</strong> 2022</p>
        </div>

        <div class="education-item">
            <h3>Tertiary Education</h3>
            <p><strong>School:</strong> Data Center College of Bangued</p>
            <p><strong>Address:</strong> Ubbog, Lipcan, Bangued, Abra</p>
            <p><strong>Course:</strong> BSIT (Bachelor of Science in Information Technology)</p>
            <p class="year"><strong>Expected Year Graduated:</strong> 2027</p>
        </div>
    </div>
</section>

<section id="skills">
    <div class="card">
        <h2>Skills</h2>

        <div class="skills-grid">
            <div class="skill-item">
                <h3>Networking Basics</h3>
                <p>Fundamental understanding of network concepts, protocols, and configurations.</p>
            </div>

            <div class="skill-item">
                <h3>Office Productivity</h3>
                <p>Proficient in Microsoft Office suite and other productivity tools.</p>
            </div>

            <div class="skill-item">
                <h3>Basic Troubleshooting</h3>
                <p>Ability to diagnose and resolve common hardware and software issues.</p>
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <div class="card">
        <h2>Projects</h2>

        @php
            $flowerShots = [
                1 => 'Account Registration',
                2 => 'Home & Flower Catalogue',
                3 => 'Shop',
                4 => 'Services',
                5 => 'Events & Celebrations Gallery',
                6 => 'Custom Bouquet Designer',
                7 => 'Store Location',
                8 => 'Admin Login',
                9 => 'Admin Product Management',
            ];
            $minimartShots = [
                1 => 'Administrator Login',
                2 => 'Point of Sale',
                3 => 'Receipts & Sales',
                4 => 'Cash Drawer',
                5 => 'Admin Dashboard',
                6 => 'Product Management',
            ];

            $flowerGallery = [];
            foreach ($flowerShots as $n => $label) {
                $flowerGallery[] = [
                    'src' => asset('images/projects/flowershop/'.$n.'.png'),
                    'title' => 'HappyStem — '.$label,
                ];
            }

            $minimartGallery = [];
            foreach ($minimartShots as $n => $label) {
                $minimartGallery[] = [
                    'src' => asset('images/projects/minimart/'.$n.'.png'),
                    'title' => '88 Mini Mart — '.$label,
                ];
            }
        @endphp

        <div class="projects-grid">
            <div class="project-card">
                <button type="button" class="project-cover" data-gallery="{{ json_encode($flowerGallery) }}" data-title="HappyStem by Carmencita — Screenshots" aria-label="Open HappyStem screenshot gallery">
                    <img src="{{ $flowerGallery[0]['src'] }}" alt="HappyStem by Carmencita preview">
                    <span class="project-count">9 Screenshots</span>
                </button>
                <div class="project-body">
                    <span class="project-category">Web Application</span>
                    <h3>HappyStem by Carmencita</h3>
                    <p>An online flower shop for Bangued, Abra offering handcrafted bouquets for every occasion. Customers can browse the catalogue, filter by flower type, build a custom bouquet, and check out with GCash. A full admin panel handles flower pricing, bouquets, services, and orders.</p>
                    <button type="button" class="project-open" data-gallery="{{ json_encode($flowerGallery) }}" data-title="HappyStem by Carmencita — Screenshots">Open Gallery Slider &rarr;</button>
                </div>
            </div>

            <div class="project-card">
                <button type="button" class="project-cover" data-gallery="{{ json_encode($minimartGallery) }}" data-title="88 Mini Mart — Screenshots" aria-label="Open 88 Mini Mart screenshot gallery">
                    <img src="{{ $minimartGallery[0]['src'] }}" alt="88 Mini Mart preview">
                    <span class="project-count">6 Screenshots</span>
                </button>
                <div class="project-body">
                    <span class="project-category">POS Application</span>
                    <h3>88 Mini Mart</h3>
                    <p>A complete point-of-sale and store management system for a convenience store. It covers fast keypad and barcode sales, GCash and SC/PWD discounts, receipts and refunds, cash drawer reconciliation, stock tracking, staff accounts, and a dashboard with sales and profit analytics.</p>
                    <button type="button" class="project-open" data-gallery="{{ json_encode($minimartGallery) }}" data-title="88 Mini Mart — Screenshots">Open Gallery Slider &rarr;</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certificates">
    <div class="card">
        <h2>Certificates</h2>

        @php
            $certificates = [
                [
                    'title' => 'Online Safety Through Netiquette',
                    'issuer' => 'Department of Information and Communications Technology (DICT) Region II',
                    'date' => 'July 23, 2026',
                    'image' => asset('images/cert-online-safety-netiquette.webp'),
                ],
                [
                    'title' => 'Startup Now Cordillera',
                    'issuer' => 'DOST — Cordillera Administrative Region',
                    'date' => 'September 2, 2026',
                    'image' => asset('images/cert-startup-now-cordillera.jpg'),
                ],
                [
                    'title' => 'Philippine Startup Challenge XI Webinar',
                    'issuer' => 'Department of Information and Communications Technology (DICT) — Cordillera Administrative Region',
                    'date' => 'September 7, 2026',
                    'image' => asset('images/cert-startup-challenge-xi.webp'),
                ],
            ];
        @endphp

        <div class="certificates-grid">
            @foreach ($certificates as $certificate)
                <article class="certificate-card">
                    <a class="certificate-preview-link" href="#" data-image="{{ $certificate['image'] }}" data-title="{{ $certificate['title'] }}" aria-label="View {{ $certificate['title'] }} certificate">
                        <img class="certificate-preview" src="{{ $certificate['image'] }}" alt="{{ $certificate['title'] }} certificate">
                    </a>
                    <div class="certificate-meta">
                        <span class="certificate-category">Certificate</span>
                        <span class="certificate-earned">Earned</span>
                    </div>
                    <h3>{{ $certificate['title'] }}</h3>
                    <p class="certificate-issuer">{{ $certificate['issuer'] }}</p>
                    <div class="certificate-footer">
                        <span class="certificate-date">{{ $certificate['date'] }}</span>
                        <a class="certificate-view" href="#" data-image="{{ $certificate['image'] }}" data-title="{{ $certificate['title'] }}">View Certificate</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="contact">
    <div class="card">
        <h2>Contact Details</h2>

        <div class="contact-links">
            <a class="contact-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=griecelanmillare97@gmail.com" target="_blank" rel="noopener noreferrer" aria-label="Email via Gmail" title="Email via Gmail">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
            </a>

            <a class="contact-link" href="tel:09551646910" aria-label="Call 09551646910" title="Call 09551646910">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
            </a>

            <a class="contact-link" href="sms:09551646910" aria-label="Text 09551646910" title="Text 09551646910">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
            </a>

            <a class="contact-link" href="https://www.facebook.com/ciel.xciell" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"></path>
                </svg>
            </a>

            <a class="contact-link" href="https://m.me/ciel.xciell" target="_blank" rel="noopener noreferrer" aria-label="Messenger" title="Messenger">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.36 2 2 6.13 2 11.7c0 2.91 1.19 5.44 3.14 7.17.16.14.26.35.27.57l.05 1.78a1 1 0 0 0 1.43.88l1.99-.88c.17-.07.36-.09.54-.04 1.02.28 2.1.43 3.21.43 5.64 0 10-4.13 10-9.7S17.64 2 12 2zm5.87 7.5-2.94 4.66a1.5 1.5 0 0 1-2.17.4l-2.34-1.75a.6.6 0 0 0-.72 0l-3.16 2.4c-.42.32-.97-.18-.69-.63l2.94-4.66a1.5 1.5 0 0 1 2.17-.4l2.34 1.75a.6.6 0 0 0 .72 0l3.16-2.4c.42-.32.97.18.69.63z"></path>
                </svg>
            </a>

            <a class="contact-link" href="https://www.instagram.com/xcellleee" target="_blank" rel="noopener noreferrer" aria-label="Instagram" title="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const card = document.querySelector('#home .card');
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);

        document.querySelectorAll('.education-item').forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 200);

            item.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 4px 15px rgba(102, 126, 234, 0.2)';
                this.style.transition = 'box-shadow 0.3s ease';
            });

            item.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });

        document.querySelectorAll('.skill-item').forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.9)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'scale(1)';
            }, index * 150);

            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.boxShadow = '0 6px 20px rgba(102, 126, 234, 0.3)';
                this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });

            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = 'none';
            });
        });

        document.querySelectorAll('.certificate-card').forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transition = 'opacity 0.5s ease';

            setTimeout(() => {
                item.style.opacity = '1';
            }, index * 200);
        });
    });
</script>
@endsection
