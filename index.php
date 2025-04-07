<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weri Ekananta | BioLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Space Grotesk', sans-serif;
            transition: all 0.3s ease;
            overflow-x: hidden;
            position: relative;
            background-color: #f8f8f8;
            background-image: 
                linear-gradient(#e5e7eb 1px, transparent 1px),
                linear-gradient(90deg, #e5e7eb 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: center center;
            cursor: default;
        }
        
        body.dark {
            background-color: #1a1a1a;
            color: #f3f4f6;
            background-image: 
                linear-gradient(#2d2d2d 1px, transparent 1px),
                linear-gradient(90deg, #2d2d2d 1px, transparent 1px);
            background-size: 40px 40px;
        }
        
        .neu-card {
            border: 3px solid #000;
            box-shadow: 8px 8px 0 #000;
            transition: all 0.2s ease;
        }
        
        .dark .neu-card {
            border-color: #f3f4f6;
            box-shadow: 8px 8px 0 #f3f4f6;
        }
        
        .neu-card:hover {
            transform: translate(2px, 2px);
            box-shadow: 6px 6px 0 #000;
        }
        
        .dark .neu-card:hover {
            box-shadow: 6px 6px 0 #f3f4f6;
        }
        
        .neu-btn {
            border: 3px solid #000;
            box-shadow: 4px 4px 0 #000;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .dark .neu-btn {
            border-color: #f3f4f6;
            box-shadow: 4px 4px 0 #f3f4f6;
            color: #f3f4f6;
        }
        
        .neu-btn:hover {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 #000;
        }
        
        .dark .neu-btn:hover {
            box-shadow: 2px 2px 0 #f3f4f6;
        }
        
        .color-1 { background-color: #00ddff; }
        .color-2 { background-color: #ff3366; }
        .color-3 { background-color: #00c950; }
        .color-4 { background-color: #9933ff; }
        .color-5 { background-color: #ff6900; }
        
        .dark .color-1 { background-color: #0066ff; }
        .dark .color-2 { background-color: #ff0066; }
        .dark .color-3 { background-color: #00aa50; }
        .dark .color-4 { background-color: #7d00ff; }
        .dark .color-5 { background-color: #ff5500; }
        
        .floating-shape {
            position: absolute;
            opacity: 0.1;
            z-index: -1;
            will-change: transform;
            transition: transform 0.1s linear;
        }
        
        .shape-1 {
            top: 10%;
            left: 5%;
            width: 80px;
            height: 80px;
            background-color: #00ddff;
            border-radius: 20px;
        }
        
        .shape-2 {
            top: 70%;
            right: 8%;
            width: 60px;
            height: 60px;
            background-color: #ff3366;
            border-radius: 50%;
        }
        
        .shape-3 {
            top: 30%;
            right: 15%;
            width: 0;
            height: 0;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            border-bottom: 70px solid #00c950;
        }
        
        .shape-4 {
            bottom: 15%;
            left: 10%;
            width: 70px;
            height: 70px;
            background-color: #9933ff;
            border-radius: 15px;
        }
        
        .shape-5 {
            top: 20%;
            right: 5%;
            width: 50px;
            height: 50px;
            background-color: #ff6900;
            border-radius: 50%;
        }
        
        .shape-6 {
            bottom: 25%;
            right: 20%;
            width: 0;
            height: 0;
            border-left: 30px solid transparent;
            border-right: 30px solid transparent;
            border-bottom: 50px solid #00ddff;
        }
        
        .language-switcher {
            display: flex;
            gap: 5px;
            margin-bottom: 1rem;
        }
        
        .language-btn {
            padding: 0.15rem 0.5rem;
            border: 1px solid #000;
            border-radius: 20px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 0.8rem;
        }
        
        .dark .language-btn {
            border-color: #f3f4f6;
            color: #f3f4f6;
        }
        
        .language-btn.active {
            background-color: #000;
            color: white;
        }
        
        .dark .language-btn.active {
            background-color: #f3f4f6;
            color: #1a1a1a;
        }
        
        .dark-mode-container {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 1rem;
        }
        
        .dark-mode-toggle {
            position: relative;
            width: 40px;
            height: 20px;
            border: 2px solid #000;
            border-radius: 20px;
            cursor: pointer;
        }
        
        .dark .dark-mode-toggle {
            border-color: #f3f4f6;
        }
        
        .toggle-circle {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 12px;
            height: 12px;
            background-color: #000;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .dark .toggle-circle {
            background-color: #f3f4f6;
            transform: translateX(20px);
        }
        
        .header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .content-container {
            max-width: 400px;
            margin: 0 auto;
        }
        
        @media (max-width: 640px) {
            .floating-shape {
                display: none;
            }
        }

        .lang-en {
            display: block;
        }
        
        .lang-id {
            display: none;
        }
        
        .active-lang-en .lang-en {
            display: block;
        }
        
        .active-lang-en .lang-id {
            display: none;
        }
        
        .active-lang-id .lang-en {
            display: none;
        }
        
        .active-lang-id .lang-id {
            display: block;
        }
        
        .link-icon {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .btn-content {
            display: flex;
            align-items: center;
        }
        
        .social-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }
    </style>
</head>
<body class="min-h-screen py-8 px-4 sm:px-8 active-lang-en">
    <div class="floating-shape shape-1" data-speed="0.1"></div>
    <div class="floating-shape shape-2" data-speed="0.15"></div>
    <div class="floating-shape shape-3" data-speed="0.2"></div>
    <div class="floating-shape shape-4" data-speed="0.12"></div>
    <div class="floating-shape shape-5" data-speed="0.18"></div>
    <div class="floating-shape shape-6" data-speed="0.14"></div>
    
    <div class="content-container">
        <div class="header-controls">
            <div class="language-switcher">
                <div class="language-btn active" id="en-btn">EN</div>
                <div class="language-btn" id="id-btn">ID</div>
            </div>
            <div class="dark-mode-container">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:block"></i>
                <div class="dark-mode-toggle">
                    <div class="toggle-circle"></div>
                </div>
            </div>
        </div>
        
        <div class="neu-card rounded-lg p-6 mb-6">
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full border-3 border-black dark:border-white mb-4 overflow-hidden">
                    <img src="https://cdn-sdotid.adg.id/images/e7c63d4f-2963-4a49-9d82-997ad290d15c_980x980.webp.jpeg" 
                         alt="Weri Ekananta" 
                         class="w-full h-full object-cover">
                </div>
                <h1 class="text-2xl font-bold mb-1 dark:text-white">Weri Ekananta</h1>
                <p class="text-gray-700 dark:text-gray-300 mb-4 lang-en">Digital Creator & Developer</p>
                <p class="text-gray-700 dark:text-gray-300 mb-4 lang-id">Kreator Digital & Pengembang</p>
                <div class="flex space-x-3">
                    <a href="#" class="neu-btn w-8 h-8 rounded-full color-1">
                        <div class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>
                    <a href="#" class="neu-btn w-8 h-8 rounded-full color-2">
                        <div class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="neu-btn w-8 h-8 rounded-full color-3">
                        <div class="social-icon">
                            <i class="fab fa-github"></i>
                        </div>
                    </a>
                    <a href="#" class="neu-btn w-8 h-8 rounded-full color-4">
                        <div class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </a>
                    <a href="#" class="neu-btn w-8 h-8 rounded-full color-5">
                        <div class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="space-y-4">
            <a href="#" class="neu-btn block rounded-lg font-medium color-1 dark:text-white">
                <div class="btn-content">
                    <i class="fas fa-globe link-icon"></i> 
                    <span class="lang-en">My Personal Website</span>
                    <span class="lang-id">Website Pribadi Saya</span>
                </div>
            </a>
            
            <a href="#" class="neu-btn block rounded-lg font-medium color-2 dark:text-white">
                <div class="btn-content">
                    <i class="fas fa-book link-icon"></i> 
                    <span class="lang-en">Latest Blog Posts</span>
                    <span class="lang-id">Postingan Blog Terbaru</span>
                </div>
            </a>
            
            <a href="#" class="neu-btn block rounded-lg font-medium color-3 dark:text-white">
                <div class="btn-content">
                    <i class="fas fa-code link-icon"></i> 
                    <span class="lang-en">GitHub Projects</span>
                    <span class="lang-id">Proyek GitHub</span>
                </div>
            </a>
            
            <a href="#" class="neu-btn block rounded-lg font-medium color-4 dark:text-white">
                <div class="btn-content">
                    <i class="fas fa-camera link-icon"></i> 
                    <span class="lang-en">Photography Portfolio</span>
                    <span class="lang-id">Portofolio Fotografi</span>
                </div>
            </a>
            
            <a href="#" class="neu-btn block rounded-lg font-medium color-5 dark:text-white">
                <div class="btn-content">
                    <i class="fas fa-envelope link-icon"></i> 
                    <span class="lang-en">Contact Me</span>
                    <span class="lang-id">Hubungi Saya</span>
                </div>
            </a>
            
            <a href="#" class="neu-btn block rounded-lg font-medium">
                <div class="btn-content">
                    <i class="fas fa-coffee link-icon"></i> 
                    <span class="lang-en">Buy Me a Coffee</span>
                    <span class="lang-id">Traktir Kopi</span>
                </div>
            </a>
        </div>
        
        <div class="mt-8 text-center text-sm text-gray-600 dark:text-gray-400">
            <p class="lang-en">© 2025 Weri Ekananta. All rights reserved.</p>
            <p class="lang-id">© 2025 Weri Ekananta. Seluruh hak cipta dilindungi.</p>
            <p class="mt-1 lang-en">Made with ♥ and Neubrutalism</p>
            <p class="mt-1 lang-id">Dibuat dengan ♥ dan Neubrutalism</p>
        </div>
    </div>
    
    <script>
        // Dark mode toggle
        const darkModeToggle = document.querySelector('.dark-mode-toggle');
        const body = document.body;
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark');
            
            if (body.classList.contains('dark')) {
                localStorage.setItem('darkMode', 'enabled');
            } else {
                localStorage.setItem('darkMode', 'disabled');
            }
        });
        
        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark');
        }
        
        // Language switcher
        const enBtn = document.getElementById('en-btn');
        const idBtn = document.getElementById('id-btn');
        
        enBtn.addEventListener('click', () => {
            enBtn.classList.add('active');
            idBtn.classList.remove('active');
            body.classList.remove('active-lang-id');
            body.classList.add('active-lang-en');
            localStorage.setItem('language', 'en');
        });
        
        idBtn.addEventListener('click', () => {
            idBtn.classList.add('active');
            enBtn.classList.remove('active');
            body.classList.remove('active-lang-en');
            body.classList.add('active-lang-id');
            localStorage.setItem('language', 'id');
        });
        
        // Check for saved language preference
        const savedLanguage = localStorage.getItem('language');
        if (savedLanguage === 'id') {
            enBtn.classList.remove('active');
            idBtn.classList.add('active');
            body.classList.remove('active-lang-en');
            body.classList.add('active-lang-id');
        }
        
        // Mouse Parallax Effect
        document.addEventListener('mousemove', (e) => {
            const shapes = document.querySelectorAll('.floating-shape');
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            
            // Calculate center of screen
            const centerX = windowWidth / 2;
            const centerY = windowHeight / 2;
            
            shapes.forEach(shape => {
                const speed = parseFloat(shape.getAttribute('data-speed'));
                const shapeX = parseFloat(getComputedStyle(shape).left) || 0;
                const shapeY = parseFloat(getComputedStyle(shape).top) || 0;
                
                // Calculate distance from center
                const distanceX = mouseX - centerX;
                const distanceY = mouseY - centerY;
                
                // Apply movement based on speed
                const moveX = distanceX * speed * 0.05;
                const moveY = distanceY * speed * 0.05;
                
                // Apply the transformation
                shape.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });
        });
    </script>
</body>
</html>
