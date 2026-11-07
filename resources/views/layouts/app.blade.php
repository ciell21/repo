<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Griecels Portfolio')</title>

    <script>
        (function () {
            var theme = localStorage.getItem('theme');
            if (!theme) {
                theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    <!-- Inline Base Styles -->
    <style>
        :root {
            --bg: #dcefff;
            --text: #173a53;
            --card: #ffffff;
            --card-soft: #eef8ff;
            --border: #c7e6fb;
            --heading: #1e8fd8;
            --accent: #3fa9e8;
            --accent-2: #7bc9f5;
            --muted: #5f8299;
            --header-bg: linear-gradient(135deg, #79c6f2 0%, #4da3e0 100%);
            --header-text: #ffffff;
            --nav-hover: #eaf6ff;
            --footer-bg: #2f8fcf;
            --footer-text: #eaf6ff;
            --card-shadow: 0 4px 18px rgba(63, 169, 232, 0.15);
            --profile-glow: 0 4px 15px rgba(63, 169, 232, 0.35);
            --section-glow: none;
            color-scheme: light;
        }

        [data-theme="dark"] {
            --bg: #04080f;
            --text: #cfeaff;
            --card: #081420;
            --card-soft: #0a1c2c;
            --border: #10304a;
            --heading: #00e5ff;
            --accent: #00e5ff;
            --accent-2: #009dff;
            --muted: #5f87a3;
            --header-bg: linear-gradient(135deg, #00101f 0%, #00283f 100%);
            --header-text: #e6faff;
            --nav-hover: #00e5ff;
            --footer-bg: #00101c;
            --footer-text: #7fdfff;
            --card-shadow: 0 0 25px rgba(0, 229, 255, 0.08);
            --profile-glow: 0 0 20px rgba(0, 229, 255, 0.5);
            --section-glow: 0 0 12px rgba(0, 229, 255, 0.08);
            color-scheme: dark;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--bg);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: background-color 0.35s ease, color 0.35s ease;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: var(--header-bg);
            color: var(--header-text);
            padding: 20px 0;
            box-shadow: var(--card-shadow);
            transition: background 0.35s ease;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--header-text);
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 16px;
            letter-spacing: 0.5px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-2) 100%);
            color: #04121f;
            border: 2px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 0 14px rgba(255, 255, 255, 0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .brand:hover .brand-mark {
            transform: scale(1.06);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.55);
        }

        .brand-name {
            font-size: 20px;
            font-weight: 700;
            color: var(--header-text);
        }

        nav ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: var(--header-text);
            text-decoration: none;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--nav-hover);
        }

        .theme-toggle {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.45);
            color: var(--header-text);
            width: 40px;
            height: 40px;
            margin-left: 20px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: scale(1.08);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
        }

        [data-theme="light"] .icon-sun,
        [data-theme="dark"] .icon-moon {
            display: none;
        }

        main {
            margin-top: 30px;
            flex: 1;
            width: 100%;
        }

        section[id] {
            scroll-margin-top: 100px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
            transition: background-color 0.35s ease, border-color 0.35s ease;
        }

        .card h2 {
            color: var(--heading);
            margin-bottom: 20px;
            border-bottom: 2px solid var(--heading);
            padding-bottom: 10px;
            transition: color 0.35s ease, border-color 0.35s ease;
        }

        [data-theme="dark"] .card h2 {
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.5);
        }

        .card p {
            margin-bottom: 15px;
        }

        .card ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .card li {
            margin-bottom: 8px;
        }

        footer {
            background: var(--footer-bg);
            color: var(--footer-text);
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            width: 100%;
            transition: background-color 0.35s ease;
        }

        .section-title {
            font-size: 28px;
            color: var(--heading);
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-item strong {
            min-width: 80px;
            color: var(--accent);
        }

        .contact-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
            margin-top: 10px;
        }

        .contact-link {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--card-soft);
            color: var(--accent);
            border: 2px solid var(--border);
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.35s ease, color 0.25s ease, border-color 0.25s ease;
        }

        .contact-link:hover {
            transform: translateY(-4px) scale(1.06);
            border-color: var(--accent);
            box-shadow: 0 8px 22px rgba(63, 169, 232, 0.35);
        }

        [data-theme="dark"] .contact-link:hover {
            box-shadow: 0 0 20px rgba(0, 229, 255, 0.55);
        }

        .contact-link svg {
            width: 26px;
            height: 26px;
        }

        .education-item {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .education-item:last-child {
            border-bottom: none;
        }

        .education-item h3 {
            color: var(--heading);
            margin-bottom: 10px;
            transition: color 0.35s ease;
        }

        .education-item .year {
            color: var(--muted);
            font-style: italic;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .skill-item {
            background: var(--card-soft);
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid var(--accent);
            box-shadow: var(--section-glow);
            transition: background-color 0.35s ease, border-color 0.35s ease;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .project-card {
            background: var(--card-soft);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: var(--section-glow);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.35s ease, border-color 0.35s ease;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(63, 169, 232, 0.25);
        }

        .project-cover {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            border: none;
            border-bottom: 1px solid var(--border);
            background: #ffffff;
            cursor: pointer;
            overflow: hidden;
            line-height: 0;
        }

        .project-cover img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            object-position: top center;
            display: block;
            transition: transform 0.4s ease;
        }

        .project-cover:hover img {
            transform: scale(1.04);
        }

        .project-count {
            position: absolute;
            right: 12px;
            bottom: 12px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 999px;
            background: rgba(4, 12, 22, 0.75);
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            backdrop-filter: blur(4px);
        }

        .project-body {
            padding: 18px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1;
        }

        .project-category {
            align-self: flex-start;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--accent);
            border: 1px solid var(--accent);
            border-radius: 999px;
            padding: 4px 12px;
        }

        .project-body h3 {
            color: var(--text);
            font-size: 20px;
            margin: 0;
        }

        .project-body p {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
        }

        .project-open {
            margin-top: auto;
            padding: 12px 0 0;
            border: none;
            border-top: 1px solid var(--border);
            background: none;
            color: var(--accent);
            font-weight: 600;
            font-size: 14px;
            font-family: inherit;
            text-align: left;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .project-open:hover {
            text-decoration: underline;
        }

        .certificates-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .certificate-card {
            background: var(--card-soft);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            height: 100%;
            box-shadow: var(--section-glow);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.35s ease, border-color 0.35s ease;
        }

        .certificate-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(63, 169, 232, 0.25);
        }

        .certificate-preview-link {
            display: block;
            line-height: 0;
            border-radius: 8px;
            overflow: hidden;
        }

        .certificate-preview {
            width: 100%;
            height: 170px;
            object-fit: cover;
            object-position: top center;
            display: block;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .certificate-preview-link:hover .certificate-preview {
            transform: scale(1.02);
            box-shadow: 0 6px 18px rgba(63, 169, 232, 0.35);
        }

        .certificate-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .certificate-category {
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--accent);
        }

        .certificate-earned {
            font-size: 12px;
            font-weight: 600;
            color: #128a4e;
            background: rgba(18, 138, 78, 0.12);
            padding: 3px 10px;
            border-radius: 999px;
        }

        [data-theme="dark"] .certificate-earned {
            color: #34d399;
            background: rgba(52, 211, 153, 0.15);
        }

        .certificate-card h3 {
            color: var(--text);
            font-size: 18px;
            margin: 0;
        }

        .certificate-issuer {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
            flex: 1;
        }

        .certificate-footer {
            margin-top: auto;
            padding-top: 12px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            font-size: 13px;
        }

        .certificate-date {
            color: var(--muted);
        }

        .certificate-view {
            color: var(--accent);
            font-weight: 600;
            font-size: 13px;
            font-family: inherit;
            text-decoration: none;
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        .certificate-view:hover {
            text-decoration: underline;
        }

        .modal {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(2, 8, 16, 0.8);
            backdrop-filter: blur(4px);
        }

        .modal.open {
            display: flex;
        }

        .modal-content {
            position: relative;
            width: 100%;
            max-width: 900px;
            max-height: 92vh;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 18px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .modal-content img {
            max-width: 100%;
            max-height: 72vh;
            object-fit: contain;
            display: block;
            margin: 0 auto;
            border-radius: 6px;
        }

        .modal-title {
            margin-top: 12px;
            color: var(--heading);
            font-weight: 600;
        }

        [data-theme="dark"] .modal-content {
            box-shadow: 0 0 40px rgba(0, 229, 255, 0.25);
        }

        .modal-close {
            position: absolute;
            top: -14px;
            right: -14px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            background: var(--accent);
            color: #04121f;
            font-size: 24px;
            line-height: 1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease;
        }

        .modal-close:hover {
            transform: scale(1.1);
        }

        .modal-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: var(--card);
            color: var(--accent);
            font-size: 20px;
            line-height: 1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease;
        }

        .modal-nav:hover {
            background: var(--accent);
            color: #04121f;
            transform: translateY(-50%) scale(1.08);
        }

        .modal-prev {
            left: -12px;
        }

        .modal-next {
            right: -12px;
        }

        .modal.single .modal-nav,
        .modal.single .modal-counter {
            display: none;
        }

        .modal-counter {
            margin-top: 10px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 25px;
        }

        .profile-picture {
            flex-shrink: 0;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid var(--accent);
            box-shadow: var(--profile-glow);
            transition: border-color 0.35s ease, box-shadow 0.35s ease;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h2 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        @media (max-width: 900px) {
            .certificates-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .profile-section {
                flex-direction: column;
                text-align: center;
            }

            .profile-picture {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 600px) {
            .certificates-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    @yield('styles')
</head>
<body id="top">
    <header>
        <div class="container header-content">
            <a class="brand" href="#top" aria-label="Griecel Millare — back to top">
                <span class="brand-mark">GM</span>
                <span class="brand-name">Griecel Millare</span>
            </a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#certificates">Certificates</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <button type="button" id="theme-toggle" class="theme-toggle" aria-label="Toggle dark mode">
                            <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                            <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <div class="modal" id="certificate-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-content">
            <button type="button" class="modal-close" aria-label="Close preview">&times;</button>
            <button type="button" class="modal-nav modal-prev" aria-label="Previous screenshot">&#10094;</button>
            <button type="button" class="modal-nav modal-next" aria-label="Next screenshot">&#10095;</button>
            <img id="modal-image" src="" alt="">
            <p class="modal-title" id="modal-title"></p>
            <p class="modal-counter" id="modal-counter"></p>
        </div>
    </div>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', function () {
            var current = document.documentElement.getAttribute('data-theme');
            var next = current === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
        });

        (function () {
            var modal = document.getElementById('certificate-modal');
            var modalImage = document.getElementById('modal-image');
            var modalTitle = document.getElementById('modal-title');
            var modalCounter = document.getElementById('modal-counter');
            var closeBtn = modal.querySelector('.modal-close');
            var prevBtn = modal.querySelector('.modal-prev');
            var nextBtn = modal.querySelector('.modal-next');
            var slides = [];
            var current = 0;

            function render() {
                var slide = slides[current];
                modalImage.src = slide.src;
                modalImage.alt = slide.title;
                modalTitle.textContent = slide.title;
                modalCounter.textContent = (current + 1) + ' / ' + slides.length;
                modal.classList.toggle('single', slides.length <= 1);
            }

            function openModal(trigger) {
                slides = [];
                var raw = trigger.getAttribute('data-gallery');
                if (raw) {
                    try {
                        slides = JSON.parse(raw);
                    } catch (e) {
                        slides = [];
                    }
                }
                if (!slides.length) {
                    slides = [{
                        src: trigger.getAttribute('data-image'),
                        title: trigger.getAttribute('data-title') || ''
                    }];
                }
                current = 0;
                render();
                modal.classList.add('open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.remove('open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
                modalImage.src = '';
                slides = [];
                current = 0;
            }

            function step(direction) {
                if (slides.length <= 1) {
                    return;
                }
                current = (current + direction + slides.length) % slides.length;
                render();
            }

            document.addEventListener('click', function (event) {
                var trigger = event.target.closest('[data-image], [data-gallery]');
                if (trigger) {
                    event.preventDefault();
                    openModal(trigger);
                }
            });

            closeBtn.addEventListener('click', closeModal);
            prevBtn.addEventListener('click', function (event) {
                event.stopPropagation();
                step(-1);
            });
            nextBtn.addEventListener('click', function (event) {
                event.stopPropagation();
                step(1);
            });

            modal.addEventListener('click', function (event) {
                if (event.target === modal) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function (event) {
                if (!modal.classList.contains('open')) {
                    return;
                }
                if (event.key === 'Escape') {
                    closeModal();
                }
                if (event.key === 'ArrowLeft') {
                    step(-1);
                }
                if (event.key === 'ArrowRight') {
                    step(1);
                }
            });
        })();
    </script>

    @yield('scripts')
</body>
</html>
