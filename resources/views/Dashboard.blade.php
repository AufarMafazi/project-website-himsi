<?php
// =========================================================================
// DATA DINAMIS WEBSITE HIMSI TELKOM UNIVERSITY JAKARTA
// =========================================================================
$siteTitle = "HIMSI - Telkom University Jakarta";

// Navigasi Utama
$navItems = [
    ['name' => 'Home', 'link' => '#home', 'active' => true],
    ['name' => 'Organisasi', 'link' => '#organisasi', 'active' => false],
    ['name' => 'Berita', 'link' => '#berita', 'active' => false],
    ['name' => 'Events', 'link' => '#', 'active' => false],
    ['name' => 'Gallery', 'link' => '#misi', 'active' => false],
    ['name' => 'Kontak', 'link' => '#', 'active' => false],
];

// 1. DATA HERO
$heroData = [
    'sub_tag'        => 'HIMPUNAN MAHASISWA SISTEM INFORMASI',
    'title_1'        => 'HIMPUNAN',
    'title_2'        => 'SISTEM',
    'title_3'        => 'INFORMASI',
    'institution'    => 'TELKOM UNIVERSITY JAKARTA',
    'description'    => 'Wadah kolaborasi, inovasi, dan prestasi mahasiswa Sistem Informasi. Membangun ide, koneksi, dan dampak nyata.',
    'image_url'      => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
    'badge_title'    => 'Pengurus 2025/2026',
    'badge_subtitle' => 'Connecting Ideas.',
    'badge_status'   => 'Aktif'
];

// 2. DATA VISI
$visionData = [
    'tagline'        => 'VISI',
    'title'          => 'Arah yang Kami Perjuangkan',
    'main_statement' => [
        'prefix'    => 'Membangun lingkungan organisasi yang ',
        'highlight' => 'inklusif, kolaboratif, inovatif, dan berdampak.'
    ],
    'image_url'      => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
    'pillars'        => [
        [
            'icon'        => 'bi-people',
            'title'       => 'Kolaboratif',
            'description' => 'Membangun lingkungan organisasi yang saling merangkul tanpa membeda-bedakan.'
        ],
        [
            'icon'        => 'bi-lightbulb',
            'title'       => 'Inovatif',
            'description' => 'Mendorong ide-ide baru dan solusi kreatif berbasis teknologi informasi.'
        ],
        [
            'icon'        => 'bi-bullseye',
            'title'       => 'Berdampak',
            'description' => 'Menghasilkan karya dan program yang memberi manfaat nyata bagi mahasiswa.'
        ]
    ]
];

// 3. DATA MISI
$missionData = [
    'tagline' => 'MISI',
    'title'   => 'Langkah Menuju Tujuan',
    'items'   => [
        [
            'icon'        => 'bi-mortarboard',
            'title'       => 'Mengembangkan Keilmuan',
            'description' => 'Menyelenggarakan program akademik dan pelatihan untuk meningkatkan kompetensi mahasiswa Sistem Informasi.'
        ],
        [
            'icon'        => 'bi-handshake',
            'title'       => 'Mempererat Kolaborasi',
            'description' => 'Membangun ekosistem yang saling merangkul tanpa membeda-bedakan antar anggota.'
        ],
        [
            'icon'        => 'bi-rocket-takeoff',
            'title'       => 'Mendorong Inovasi',
            'description' => 'Memfasilitasi ide dan karya mahasiswa agar tumbuh menjadi solusi berbasis teknologi.'
        ],
        [
            'icon'        => 'bi-heart',
            'title'       => 'Memberikan Dampak Nyata',
            'description' => 'Menghadirkan program yang bermanfaat bagi mahasiswa, kampus, dan masyarakat luas.'
        ]
    ],
    'gallery' => [
        'main' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
        'sub1' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'sub2' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80'
    ]
];

// 4. DATA STRUKTUR PIMPINAN
$orgData = [
    'title_1'     => 'Struktur',
    'title_2'     => 'Organisasi',
    'description' => 'HIMSI Telkom University Jakarta berkomitmen untuk menjadi wadah aspirasi dan pengembangan diri bagi mahasiswa Sistem Informasi melalui program-program yang inovatif dan berkelanjutan.',
    'leaders'     => [
        [
            'role'  => 'Ketua',
            'org'   => 'HIMSI 2024',
            'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'role'  => 'Wakil',
            'org'   => 'HIMSI 2024',
            'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80'
        ]
    ]
];

// 5. DATA OUR DIVISION (BPH)
$bphData = [
    'title'       => 'Our Division',
    'subtitle'    => 'Mengenal lebih dekat unit-unit kerja yang menggerakkan roda organisasi HIMSI untuk mencapai tujuan bersama.',
    'box_title'   => 'Deskripsi BPH',
    'description' => 'Badan Pengurus Harian (BPH) merupakan organ inti organisasi yang bertanggung jawab atas koordinasi strategis, administrasi, dan pengawasan internal seluruh divisi di HIMSI.',
    'tasks_title' => 'TUGAS BPH',
    'tasks'       => [
        'Menyusun rencana strategis tahunan organisasi.',
        'Mengelola administrasi dan keuangan pusat secara transparan.',
        'Memantau dan mengevaluasi kinerja seluruh departemen.'
    ],
    'image'       => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80'
];

// 6. DATA DEPARTEMEN (7 DEPARTEMEN)
$departments = [
    [
        'name'    => 'BENDAHARA',
        'subname' => 'Pengelolaan Keuangan',
        'image'   => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'SEKRETARIS',
        'subname' => 'Administrasi & Arsip',
        'image'   => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'RISTEK',
        'subname' => 'Riset Teknologi',
        'image'   => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'PSDM',
        'subname' => 'Pengembangan Sumber Daya Manusia',
        'image'   => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'HUMAS',
        'subname' => 'Hubungan Masyarakat',
        'image'   => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'Danus',
        'subname' => 'Dana Usaha',
        'image'   => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ],
    [
        'name'    => 'Medkraf',
        'subname' => 'Media Kreatif',
        'image'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80',
        'link'    => '#'
    ]
];

// 7. DATA BERITA
$featuredNews = [
    'badge'       => 'PRESTASI',
    'title'       => 'Mahasiswa SI Raih Juara 1 UI/UX Design Nasional',
    'date'        => '12 Oktober 2023',
    'read_time'   => '5 Menit Baca',
    'description' => 'Tim HIMSI Jakarta berhasil menyabet peringkat pertama dalam kompetisi desain antarmuka tingkat nasional yang diselenggarakan...',
    'image'       => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=80',
    'link'        => '#'
];

$otherNews = [
    [
        'category' => 'SEMINAR',
        'date'     => '09 OKTOBER 2023',
        'title'    => 'Guest Lecture: Future of AI in Information Systems',
        'author'   => 'Humas HIMSI',
        'image'    => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=800&q=80',
        'link'     => '#'
    ],
    [
        'category' => 'KEGIATAN',
        'date'     => '05 OKTOBER 2023',
        'title'    => 'HIMSI Mengabdi: Literasi Digital Desa Binaan',
        'author'   => 'Dept. Sosmas',
        'image'    => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=800&q=80',
        'link'     => '#'
    ],
    [
        'category' => 'WORKSHOP',
        'date'     => '01 OKTOBER 2023',
        'title'    => 'Intensive Boot Camp: Fullstack Development 2023',
        'author'   => 'Dept. PTI',
        'image'    => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80',
        'link'     => '#'
    ]
];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteTitle); ?></title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkTheme: '#061325',
                        brandYellow: '#f59e0b',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #061325;
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        /* Watermark Background */
        .bg-watermark {
            position: absolute;
            font-size: clamp(7rem, 18vw, 20rem);
            font-weight: 900;
            color: rgba(255, 255, 255, 0.018);
            line-height: 0.8;
            user-select: none;
            pointer-events: none;
            z-index: 0;
            letter-spacing: 0.05em;
        }

        /* Ambient Radial Glows */
        .glow-radial-1 {
            background: radial-gradient(circle at 10% 15%, rgba(20, 50, 95, 0.45) 0%, transparent 60%);
        }
        
        .glow-radial-2 {
            background: radial-gradient(circle at 90% 60%, rgba(15, 38, 75, 0.4) 0%, transparent 60%);
        }

        /* Card Container Styles */
        .custom-card {
            background-color: rgba(14, 28, 48, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }

        .custom-card:hover {
            border-color: rgba(245, 158, 11, 0.4);
            background-color: rgba(18, 35, 60, 0.8);
        }

        /* Glassmorphism Badge inside Hero Card */
        .glass-badge {
            background: rgba(10, 29, 55, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        /* Leader Image Cards */
        .leader-card {
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 1.75rem;
            overflow: hidden;
            position: relative;
        }

        .leader-overlay {
            background: linear-gradient(to top, rgba(6, 19, 37, 0.9) 0%, rgba(6, 19, 37, 0.2) 60%, transparent 100%);
        }

        /* Outer Frame Line around Image */
        .outer-border-box {
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 2.25rem;
        }

        /* Icon Glow Container */
        .icon-circle {
            background: rgba(245, 158, 11, 0.1);
            border: 1px solid rgba(245, 158, 11, 0.25);
        }

        /* Horizontal Carousel / Slider Settings */
        .slider-wrapper {
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .slider-wrapper::-webkit-scrollbar {
            display: none;
        }

        .slider-wrapper {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .slide-item {
            scroll-snap-align: start;
            flex: 0 0 240px;
        }

        /* Search Input */
        .search-pill {
            background: rgba(11, 27, 51, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .search-pill:focus-within {
            border-color: #f59e0b;
            box-shadow: 0 0 0 1px #f59e0b;
        }

        .badge-category {
            background: rgba(11, 27, 51, 0.85);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
</head>
<body class="relative min-h-screen flex flex-col justify-between selection:bg-amber-500 selection:text-slate-950">

    <!-- Atmospheric Glows -->
    <div class="fixed inset-0 glow-radial-1 pointer-events-none"></div>
    <div class="fixed inset-0 glow-radial-2 pointer-events-none"></div>

    <!-- Background Watermarks -->
    <div class="bg-watermark top-10 -left-10">HIMSI</div>
    <div class="bg-watermark top-[22%] right-5">HIMSI</div>
    <div class="bg-watermark top-[45%] left-1/3">HIMSI</div>
    <div class="bg-watermark top-[68%] -left-6">HIMSI</div>
    <div class="bg-watermark top-[88%] right-10">HIMSI</div>

    <!-- Fixed Header -->
    <header class="fixed top-0 left-0 w-full z-50 bg-[#061325]/85 backdrop-blur-lg border-b border-slate-800/50 py-4">
        <div class="container mx-auto px-6 lg:px-12">
            <nav class="flex items-center justify-between">
                <!-- Logo -->
                <a href="#home" class="flex items-center gap-3.5 text-decoration-none group">
                    <div class="w-11 h-11 rounded-full bg-white flex items-center justify-center p-1.5 shadow-md transition-transform duration-300 group-hover:scale-105">
                        <div class="w-full h-full rounded-full bg-gradient-to-tr from-amber-500 to-sky-600 flex items-center justify-center text-white text-xs font-black tracking-tighter">
                            SI
                        </div>
                    </div>
                    <div class="flex flex-col text-start">
                        <span class="text-lg font-extrabold text-white tracking-wide leading-none">HIM<span class="text-amber-400">SI</span></span>
                        <span class="text-[11px] text-slate-400 font-medium tracking-tight mt-0.5">Telkom University Jakarta</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <ul class="hidden md:flex items-center space-x-8 mb-0 ps-0">
                    <?php foreach ($navItems as $item): ?>
                        <li class="list-unstyled">
                            <a href="<?= $item['link']; ?>" class="text-sm font-medium transition duration-200 text-decoration-none relative py-1 <?= $item['active'] ? 'text-amber-400' : 'text-slate-300 hover:text-white'; ?>">
                                <?= $item['name']; ?>
                                <?php if ($item['active']): ?>
                                    <span class="absolute bottom-0 start-0 w-full h-[2px] bg-amber-400 rounded-full"></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Mobile Hamburger Toggle -->
                <button class="md:hidden text-white text-2xl focus:outline-none border-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
                    <i class="bi bi-list"></i>
                </button>
            </nav>

            <!-- Mobile Dropdown -->
            <div class="collapse md:hidden mt-4" id="mobileMenu">
                <div class="bg-slate-900/95 backdrop-blur-md rounded-2xl p-4 border border-slate-800 flex flex-col space-y-3">
                    <?php foreach ($navItems as $item): ?>
                        <a href="<?= $item['link']; ?>" class="text-sm font-medium px-3 py-2 rounded-lg text-decoration-none <?= $item['active'] ? 'text-amber-400 bg-slate-800/60' : 'text-slate-300 hover:text-white hover:bg-slate-800/40'; ?>">
                            <?= $item['name']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <div class="pt-20 space-y-24">
        
        <!-- ==========================================
             SECTION 1: HERO
        =========================================== -->
        <section id="home" class="relative z-10 min-h-[calc(100vh-5rem)] flex flex-col justify-between py-8 lg:py-16">
            <div class="container mx-auto px-6 lg:px-12 my-auto">
                <div class="row align-items-center g-5">
                    
                    <div class="col-lg-6">
                        <div class="max-w-xl text-start">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="text-amber-400 font-bold text-xs tracking-widest uppercase">
                                    # <?= $heroData['sub_tag']; ?>
                                </span>
                            </div>

                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight uppercase leading-[1.08] mb-4">
                                <span class="text-slate-300 block"><?= $heroData['title_1']; ?></span>
                                <span class="text-amber-400 block"><?= $heroData['title_2']; ?></span>
                                <span class="text-slate-200 block"><?= $heroData['title_3']; ?></span>
                            </h1>

                            <h2 class="text-base sm:text-lg font-bold text-slate-200 tracking-wider uppercase mb-3">
                                <?= $heroData['institution']; ?>
                            </h2>

                            <p class="text-slate-400 text-sm sm:text-base leading-relaxed mb-8 max-w-lg font-normal">
                                <?= $heroData['description']; ?>
                            </p>

                            <div class="flex flex-wrap items-center gap-4">
                                <a href="#visi" class="inline-flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold text-xs sm:text-sm px-6 py-3 rounded-full transition duration-300 shadow-lg shadow-amber-500/20 text-decoration-none">
                                    <span>Explore More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="#berita" class="inline-flex items-center justify-center gap-2 bg-transparent hover:bg-slate-800 text-slate-300 hover:text-white font-semibold text-xs sm:text-sm px-6 py-3 rounded-full border border-slate-700 transition duration-300 text-decoration-none">
                                    <span>Contact Us</span>
                                    <i class="bi bi-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="relative max-w-lg mx-auto lg:max-w-none">
                            <div class="p-2 sm:p-3 outer-border-box">
                                <div class="relative overflow-hidden rounded-3xl aspect-[4/3] sm:aspect-[16/11] bg-slate-800 shadow-2xl">
                                    <img 
                                        src="<?= $heroData['image_url']; ?>" 
                                        alt="Pengurus HIMSI" 
                                        class="w-full h-full object-cover object-center"
                                    />
                                    <div class="absolute bottom-4 start-4 end-4 sm:bottom-6 sm:start-6 sm:end-6">
                                        <div class="glass-badge rounded-2xl p-3 sm:p-4 flex items-center justify-between">
                                            <div class="flex flex-col text-start">
                                                <h3 class="text-xs sm:text-sm font-bold text-white mb-0.5 tracking-wide">
                                                    <?= $heroData['badge_title']; ?>
                                                </h3>
                                                <p class="text-[11px] sm:text-xs text-slate-400 mb-0 font-normal">
                                                    <?= $heroData['badge_subtitle']; ?>
                                                </p>
                                            </div>
                                            <span class="bg-amber-400 text-slate-950 text-[11px] sm:text-xs font-bold px-3.5 py-1 rounded-full shadow-sm">
                                                <?= $heroData['badge_status']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full py-4 text-center">
                <a href="#visi" class="inline-block text-slate-500 hover:text-amber-400 transition-colors duration-200 animate-bounce">
                    <i class="bi bi-chevron-down text-lg"></i>
                </a>
            </div>
        </section>


        <!-- ==========================================
             SECTION 2: VISI
        =========================================== -->
        <section id="visi" class="relative z-10 min-h-screen flex flex-col justify-between py-12 lg:py-24 border-t border-slate-800/40">
            <div class="container mx-auto px-6 lg:px-12 my-auto">
                
                <div class="text-center mb-12 sm:mb-16">
                    <span class="text-amber-400 font-bold text-xs sm:text-sm tracking-widest uppercase block mb-2">
                        <?= $visionData['tagline']; ?>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                        <?= $visionData['title']; ?>
                    </h2>
                </div>

                <div class="row align-items-center g-5">
                    
                    <div class="col-lg-6">
                        <div class="relative max-w-lg mx-auto lg:max-w-none">
                            <div class="p-2 sm:p-3 outer-border-box">
                                <div class="relative overflow-hidden rounded-3xl aspect-[4/3] sm:aspect-[16/11] bg-slate-800 shadow-2xl">
                                    <img 
                                        src="<?= $visionData['image_url']; ?>" 
                                        alt="Foto Visi Kepengurusan HIMSI" 
                                        class="w-full h-full object-cover object-center"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="max-w-xl text-start">
                            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold leading-tight text-white mb-8">
                                <?= $visionData['main_statement']['prefix']; ?>
                                <span class="text-amber-400"><?= $visionData['main_statement']['highlight']; ?></span>
                            </h3>

                            <div class="flex flex-col gap-4">
                                <?php foreach ($visionData['pillars'] as $pillar): ?>
                                    <div class="custom-card rounded-2xl p-4 sm:p-5 flex items-start gap-4">
                                        <div class="text-amber-400 text-xl sm:text-2xl pt-0.5 flex-shrink-0">
                                            <i class="bi <?= $pillar['icon']; ?>"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <h4 class="text-base font-bold text-white mb-1">
                                                <?= $pillar['title']; ?>
                                            </h4>
                                            <p class="text-slate-400 text-xs sm:text-sm mb-0 leading-relaxed font-normal">
                                                <?= $pillar['description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full py-4 text-center">
                <a href="#misi" class="inline-block text-slate-500 hover:text-amber-400 transition-colors duration-200 animate-bounce">
                    <i class="bi bi-chevron-down text-lg"></i>
                </a>
            </div>
        </section>


        <!-- ==========================================
             SECTION 3: MISI
        =========================================== -->
        <section id="misi" class="relative z-10 min-h-screen flex flex-col justify-between py-12 lg:py-24 border-t border-slate-800/40">
            <div class="container mx-auto px-6 lg:px-12 my-auto">
                
                <div class="text-center mb-12 sm:mb-16">
                    <span class="text-amber-400 font-bold text-xs sm:text-sm tracking-widest uppercase block mb-2">
                        <?= $missionData['tagline']; ?>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                        <?= $missionData['title']; ?>
                    </h2>
                </div>

                <div class="row align-items-center g-5">
                    
                    <!-- Left: 4 Mission Cards -->
                    <div class="col-lg-6">
                        <div class="flex flex-col gap-4">
                            <?php foreach ($missionData['items'] as $mission): ?>
                                <div class="custom-card rounded-2xl p-4 sm:p-5 flex items-center gap-4">
                                    <div class="icon-circle w-11 h-11 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 text-amber-400 text-lg sm:text-xl">
                                        <i class="bi <?= $mission['icon']; ?>"></i>
                                    </div>
                                    <div class="flex flex-col text-start">
                                        <h4 class="text-base sm:text-lg font-bold text-white mb-1">
                                            <?= $mission['title']; ?>
                                        </h4>
                                        <p class="text-slate-400 text-xs sm:text-sm mb-0 leading-relaxed font-normal">
                                            <?= $mission['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Right: Gallery Grid -->
                    <div class="col-lg-6">
                        <div class="flex flex-col gap-4 max-w-lg mx-auto lg:max-w-none">
                            <div class="p-2 sm:p-2.5 outer-border-box">
                                <div class="relative overflow-hidden rounded-3xl aspect-[16/9] bg-slate-800 shadow-2xl">
                                    <img 
                                        src="<?= $missionData['gallery']['main']; ?>" 
                                        alt="Dokumentasi Kepengurusan Utama" 
                                        class="w-full h-full object-cover object-center"
                                    />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="p-2 outer-border-box">
                                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-slate-800 shadow-xl">
                                        <img 
                                            src="<?= $missionData['gallery']['sub1']; ?>" 
                                            alt="Dokumentasi Divisi 1" 
                                            class="w-full h-full object-cover object-center"
                                        />
                                    </div>
                                </div>
                                <div class="p-2 outer-border-box">
                                    <div class="relative overflow-hidden rounded-2xl aspect-[4/3] bg-slate-800 shadow-xl">
                                        <img 
                                            src="<?= $missionData['gallery']['sub2']; ?>" 
                                            alt="Dokumentasi Divisi 2" 
                                            class="w-full h-full object-cover object-center"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full py-4 text-center">
                <a href="#organisasi" class="inline-block text-slate-500 hover:text-amber-400 transition-colors duration-200 animate-bounce">
                    <i class="bi bi-chevron-down text-lg"></i>
                </a>
            </div>
        </section>


        <!-- ==========================================
             SECTION 4: STRUKTUR ORGANISASI
        =========================================== -->
        <section id="organisasi" class="relative z-10 py-12 lg:py-20 border-t border-slate-800/40">
            <div class="container mx-auto px-6 lg:px-12">
                <div class="row align-items-center g-5">
                    
                    <!-- Left: Ketua & Wakil -->
                    <div class="col-lg-6">
                        <div class="flex items-end justify-center gap-4 sm:gap-6">
                            <div class="leader-card w-1/2 max-w-[240px] aspect-[3/4] shadow-2xl">
                                <img src="<?= $orgData['leaders'][0]['image']; ?>" alt="Ketua" class="w-full h-full object-cover">
                                <div class="leader-overlay absolute inset-0 flex flex-col justify-end p-4 text-start">
                                    <h4 class="text-white text-sm sm:text-base font-bold mb-0.5"><?= $orgData['leaders'][0]['role']; ?></h4>
                                    <p class="text-amber-400 text-xs font-semibold mb-0"><?= $orgData['leaders'][0]['org']; ?></p>
                                </div>
                            </div>
                            <div class="leader-card w-1/2 max-w-[240px] aspect-[3/4] shadow-2xl mb-4 sm:mb-8">
                                <img src="<?= $orgData['leaders'][1]['image']; ?>" alt="Wakil Ketua" class="w-full h-full object-cover">
                                <div class="leader-overlay absolute inset-0 flex flex-col justify-end p-4 text-start">
                                    <h4 class="text-white text-sm sm:text-base font-bold mb-0.5"><?= $orgData['leaders'][1]['role']; ?></h4>
                                    <p class="text-amber-400 text-xs font-semibold mb-0"><?= $orgData['leaders'][1]['org']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Deskripsi -->
                    <div class="col-lg-6">
                        <div class="max-w-xl text-start">
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-2">
                                <?= $orgData['title_1']; ?>
                            </h2>
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-amber-400 tracking-tight mb-6">
                                <?= $orgData['title_2']; ?>
                            </h2>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                <?= $orgData['description']; ?>
                            </p>
                            <div class="flex items-center gap-2">
                                <div class="w-10 h-1 bg-amber-400 rounded-full"></div>
                                <div class="w-3 h-1 bg-slate-600 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ==========================================
             SECTION 5: OUR DIVISION (BPH)
        =========================================== -->
        <section id="division" class="relative z-10 py-12">
            <div class="container mx-auto px-6 lg:px-12">
                
                <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight mb-3">
                        <?= $bphData['title']; ?>
                    </h2>
                    <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
                        <?= $bphData['subtitle']; ?>
                    </p>
                </div>

                <div class="row align-items-center g-4 lg:g-5">
                    
                    <div class="col-lg-6">
                        <div class="custom-card rounded-3xl p-6 sm:p-8 text-start h-full">
                            <span class="text-slate-400 text-xs font-semibold block mb-2">
                                <?= $bphData['box_title']; ?>
                            </span>
                            <p class="text-slate-200 text-xs sm:text-sm leading-relaxed mb-6">
                                <?= $bphData['description']; ?>
                            </p>

                            <div class="flex items-center gap-2 text-amber-400 text-xs font-bold uppercase tracking-wider mb-4">
                                <i class="bi bi-check2-square"></i>
                                <span><?= $bphData['tasks_title']; ?></span>
                            </div>

                            <ul class="space-y-3 ps-0 mb-0">
                                <?php foreach ($bphData['tasks'] as $task): ?>
                                    <li class="flex items-start gap-2.5 text-slate-300 text-xs sm:text-sm list-none">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 mt-2 flex-shrink-0"></span>
                                        <span><?= $task; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="leader-card aspect-[16/10] shadow-2xl">
                            <img src="<?= $bphData['image']; ?>" alt="BPH Team" class="w-full h-full object-cover">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ==========================================
             SECTION 6: DEPARTEMEN TERKAIT (SLIDER)
        =========================================== -->
        <section id="departemen" class="relative z-10 py-12">
            <div class="container-fluid px-4 sm:px-6 lg:px-12 max-w-[1440px] mx-auto">
                
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8 px-2">
                    <div class="text-center sm:text-left">
                        <h3 class="text-2xl font-extrabold text-white tracking-wide mb-1">
                            Departemen Terkait
                        </h3>
                        <div class="w-12 h-1 bg-amber-400 rounded-full mx-auto sm:mx-0"></div>
                    </div>

                    <div class="flex items-center gap-2">
                        <button id="slidePrev" class="w-10 h-10 rounded-full bg-slate-900 border border-slate-700 hover:border-amber-400 text-white hover:text-amber-400 flex items-center justify-center transition-colors focus:outline-none" title="Sebelumnya">
                            <i class="bi bi-chevron-left text-sm"></i>
                        </button>
                        <button id="slideNext" class="w-10 h-10 rounded-full bg-slate-900 border border-slate-700 hover:border-amber-400 text-white hover:text-amber-400 flex items-center justify-center transition-colors focus:outline-none" title="Selanjutnya">
                            <i class="bi bi-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Slider Container -->
                <div id="deptSlider" class="slider-wrapper flex gap-5 overflow-x-auto pb-6 pt-2 px-2">
                    <?php foreach ($departments as $dept): ?>
                        <div class="slide-item custom-card rounded-2xl p-3.5 flex flex-col justify-between group min-h-[340px]">
                            
                            <div>
                                <div class="rounded-xl overflow-hidden aspect-[4/5] mb-3.5 bg-slate-800 shadow-md">
                                    <img 
                                        src="<?= $dept['image']; ?>" 
                                        alt="<?= $dept['name']; ?>" 
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    />
                                </div>

                                <div class="text-start">
                                    <h4 class="text-sm font-extrabold text-amber-400 tracking-wide mb-1 uppercase">
                                        <?= $dept['name']; ?>
                                    </h4>
                                    <?php if (!empty($dept['subname'])): ?>
                                        <p class="text-[11px] text-slate-400 line-clamp-2 leading-tight mb-0">
                                            <?= $dept['subname']; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="text-start pt-2 mt-3 border-t border-slate-800/80">
                                <a href="<?= $dept['link']; ?>" class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-400 group-hover:text-amber-400 transition-colors text-decoration-none">
                                    <span>Detail Departemen</span>
                                    <i class="bi bi-chevron-right text-[8px]"></i>
                                </a>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>


        <!-- ==========================================
             SECTION 7: BERITA HIMSI & BERITA LAINNYA
        =========================================== -->
        <section id="berita" class="relative z-10 py-12 border-t border-slate-800/40">
            <div class="container mx-auto px-6 lg:px-12">
                
                <!-- Main Featured News Row -->
                <div class="row align-items-center g-5 mb-20">
                    
                    <!-- Left: Title, Subtitle, Search -->
                    <div class="col-lg-5">
                        <div class="max-w-lg text-start">
                            <span class="text-slate-400 font-bold text-xs tracking-widest uppercase block mb-3">
                                BERITA HIMSI
                            </span>

                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight mb-2">
                                Update Terbaru <br>Mahasiswa
                            </h2>
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-amber-400 tracking-tight leading-tight mb-4">
                                Sistem Informasi
                            </h2>

                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-8">
                                Berbagai informasi mengenai kegiatan, prestasi, seminar, lomba, dan perkembangan organisasi HIMSI Telkom University Jakarta.
                            </p>

                            <!-- Search Bar -->
                            <form action="" method="GET" class="search-pill rounded-full flex items-center px-4 py-2.5 max-w-md">
                                <i class="bi bi-search text-slate-400 text-sm me-3"></i>
                                <input 
                                    type="text" 
                                    name="q" 
                                    placeholder="Cari berita atau kegiatan..." 
                                    class="bg-transparent border-0 text-xs sm:text-sm text-white placeholder-slate-500 focus:outline-none w-full"
                                >
                            </form>
                        </div>
                    </div>

                    <!-- Right: Large Featured Card -->
                    <div class="col-lg-7">
                        <div class="custom-card rounded-3xl p-4 sm:p-5 text-start group">
                            
                            <div class="relative overflow-hidden rounded-2xl aspect-[16/9] mb-4 bg-slate-800">
                                <img 
                                    src="<?= $featuredNews['image']; ?>" 
                                    alt="<?= $featuredNews['title']; ?>" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                />
                                <span class="absolute top-3.5 left-3.5 bg-amber-400 text-slate-950 font-bold text-[10px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                    <?= $featuredNews['badge']; ?>
                                </span>
                            </div>

                            <div class="flex items-center justify-between text-slate-400 text-[11px] sm:text-xs mb-2">
                                <span><?= $featuredNews['date']; ?></span>
                                <span class="inline-flex items-center gap-1">
                                    <i class="bi bi-clock"></i>
                                    <?= $featuredNews['read_time']; ?>
                                </span>
                            </div>

                            <h3 class="text-lg sm:text-xl lg:text-2xl font-black text-white group-hover:text-amber-400 transition-colors mb-2 leading-snug">
                                <a href="<?= $featuredNews['link']; ?>" class="text-inherit text-decoration-none">
                                    <?= $featuredNews['title']; ?>
                                </a>
                            </h3>

                            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed mb-4 line-clamp-2">
                                <?= $featuredNews['description']; ?>
                            </p>

                            <a href="<?= $featuredNews['link']; ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-300 group-hover:text-amber-400 transition-colors text-decoration-none">
                                <span>Read More</span>
                                <i class="bi bi-chevron-right text-[10px]"></i>
                            </a>

                        </div>
                    </div>

                </div>

                <!-- Sub-Section: Berita Lainnya -->
                <div class="pt-8">
                    <div class="flex items-end justify-between mb-8">
                        <div class="text-start">
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-2">
                                Berita Lainnya
                            </h3>
                            <div class="w-12 h-1 bg-amber-400 rounded-full"></div>
                        </div>
                        <a href="#" class="inline-flex items-center gap-1 text-xs sm:text-sm font-bold text-amber-400 hover:text-amber-300 transition-colors text-decoration-none">
                            <span>Lihat Semua</span>
                            <i class="bi bi-chevron-right text-[10px]"></i>
                        </a>
                    </div>

                    <!-- 3 Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($otherNews as $item): ?>
                            <div class="custom-card rounded-2xl p-4 flex flex-col justify-between group">
                                
                                <div>
                                    <div class="relative overflow-hidden rounded-xl aspect-[16/10] mb-4 bg-slate-800">
                                        <img 
                                            src="<?= $item['image']; ?>" 
                                            alt="<?= $item['title']; ?>" 
                                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                                        />
                                        <span class="badge-category absolute bottom-2.5 left-2.5 text-slate-200 font-bold text-[9px] sm:text-[10px] px-2.5 py-0.5 rounded uppercase tracking-wider">
                                            <?= $item['category']; ?>
                                        </span>
                                    </div>

                                    <span class="text-[10px] sm:text-[11px] font-medium text-slate-500 tracking-wider uppercase block mb-1 text-start">
                                        <?= $item['date']; ?>
                                    </span>

                                    <h4 class="text-sm sm:text-base font-bold text-white group-hover:text-amber-400 transition-colors leading-snug mb-3 text-start">
                                        <a href="<?= $item['link']; ?>" class="text-inherit text-decoration-none line-clamp-2">
                                            <?= $item['title']; ?>
                                        </a>
                                    </h4>
                                </div>

                                <div class="pt-3 border-t border-slate-800/80 text-start">
                                    <span class="text-[11px] text-slate-400">
                                        Oleh: <span class="text-slate-300 font-semibold"><?= $item['author']; ?></span>
                                    </span>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- Footer Simple Copyright & Back to Top -->
    <footer class="relative z-10 w-full py-8 border-t border-slate-800/60 mt-20 text-center">
        <div class="container mx-auto px-6">
            <p class="text-xs text-slate-500 mb-2">
                &copy; <?= date('Y'); ?> HIMSI Telkom University Jakarta. All rights reserved.
            </p>
            <a href="#home" class="inline-block text-slate-500 hover:text-amber-400 transition-colors text-xs font-semibold">
                Kembali ke Atas <i class="bi bi-arrow-up-short"></i>
            </a>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slider Horizontal Scroll Handler -->
    <script>
        const slider = document.getElementById('deptSlider');
        const prevBtn = document.getElementById('slidePrev');
        const nextBtn = document.getElementById('slideNext');

        if (slider && prevBtn && nextBtn) {
            const scrollAmount = 260; // 240px card + 20px gap

            prevBtn.addEventListener('click', () => {
                slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', () => {
                slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }
    </script>
</body>
</html>