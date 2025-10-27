<?php
if(!isset($_GET["u"])){
    include "template data.php";
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of <?=$maleName?> & <?=$femaleName?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/template3.css">
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading">
        <div class="loader"></div>
    </div>

    <!-- Opening Cover -->
    <div id="opening-cover">
        <div class="particles-bg" id="particlesBg"></div>
        <div class="envelope-container">
            <div class="envelope" id="envelope">
                <div class="envelope-flap"></div>
                <i class="fas fa-heart" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: var(--pink);"></i>
            </div>
            <div class="cover-text">You're Invited</div>
            <div class="cover-subtitle">The Wedding of <?=$maleName?> & <?=$femaleName?></div>
            <button class="open-btn" id="openBtn">Buka Undangan</button>
        </div>
    </div>

    <!-- Music Player -->
    <div class="music-player" id="musicPlayer">
        <div class="vinyl" id="vinyl"></div>
        <div class="music-info">
            <div class="music-title">Perfect</div>
            <div class="music-artist">Ed Sheeran</div>
        </div>
        <i class="fas fa-play play-icon" id="playIcon"></i>
    </div>

    <!-- Countdown Sticky -->
    <div class="countdown-sticky" id="countdownSticky">
        <div class="countdown-container">
            <div class="countdown-item">
                <div class="countdown-value" id="days">00</div>
                <div class="countdown-label">Hari</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-value" id="hours">00</div>
                <div class="countdown-label">Jam</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-value" id="minutes">00</div>
                <div class="countdown-label">Menit</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-value" id="seconds">00</div>
                <div class="countdown-label">Detik</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Hero Section -->
        <section class="hero">
            <div class="floating-shapes">
                <div class="shape circle" style="top: 10%; left: 10%;"></div>
                <div class="shape square" style="top: 20%; right: 15%;"></div>
                <div class="shape triangle" style="bottom: 20%; left: 20%;"></div>
                <div class="shape circle" style="bottom: 15%; right: 10%;"></div>
            </div>
            <div class="hero-content">
                <div class="hero-title">The Wedding</div>
                <div class="hero-names"><?=$maleName?> & <?=$femaleName?></div>
                <div class="divider"></div>
                <div class="save-date">15 Desember 2025</div>
            </div>
        </section>

        <!-- Couple Profile -->
        <section id="couple">
            <h2 class="section-title">Mempelai</h2>
            <div class="couple-container">
                <div class="couple-card">
                    <div class="couple-photo">
                        <img src="<?=$malePicture?>" alt="<?=$maleName?>">
                    </div>
                    <h3 class="couple-name"><?=$maleFullName?></h3>
                    <p class="couple-bio">Putra pertama dari Bapak <?=$maleDad?> & Ibu <?=$maleMom?></p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="couple-card">
                    <div class="couple-photo">
                        <img src="<?=$femalePicture?>" alt="<?=$femaleName?>">
                    </div>
                    <h3 class="couple-name"><?=$femaleFullName?></h3>
                    <p class="couple-bio">Putri kedua dari Bapak <?=$femaleDad?> & Ibu <?=$femaleMom?></p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Details -->
        <section id="event">
            <h2 class="section-title">Detail Acara</h2>
            <div class="event-cards">
                <div class="event-card">
                    <div class="event-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <h3 class="event-title">Akad Nikah</h3>
                    <p class="event-detail"><i class="far fa-calendar"></i> Minggu, 15 Desember 2025</p>
                    <p class="event-detail"><i class="far fa-clock"></i> 08:00 - 10:00 WIB</p>
                    <p class="event-detail"><i class="fas fa-map-marker-alt"></i> Grand Ballroom Hotel Santika</p>
                    <button class="event-btn"><i class="far fa-calendar-plus"></i> Add to Calendar</button>
                </div>
                <div class="event-card">
                    <div class="event-icon">
                        <i class="fas fa-glass-cheers"></i>
                    </div>
                    <h3 class="event-title">Resepsi</h3>
                    <p class="event-detail"><i class="far fa-calendar"></i> Minggu, 15 Desember 2025</p>
                    <p class="event-detail"><i class="far fa-clock"></i> 11:00 - 14:00 WIB</p>
                    <p class="event-detail"><i class="fas fa-map-marker-alt"></i> Grand Ballroom Hotel Santika</p>
                    <button class="event-btn"><i class="fas fa-directions"></i> Get Direction</button>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery">
            <h2 class="section-title">Galeri Foto</h2>
            <div class="gallery-grid">
                <?php
                    foreach ($gallery as $g) {
                ?>
                <div class="gallery-item">
                    <img src="<?=$g?>">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <?php }?>
            </div>
        </section>

        <!-- RSVP -->
        <section id="rsvp">
            <h2 class="section-title">Konfirmasi Kehadiran</h2>
            <form class="rsvp-form" id="rsvpForm">
                <div class="form-group">
                    <label for="name">Nama Lengkap *</label>
                    <input type="text" id="name" required placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="nama@email.com">
                </div>
                <div class="form-group">
                    <label>Konfirmasi Kehadiran *</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="attendance" value="hadir" required>
                            <div class="radio-label">
                                <i class="fas fa-check-circle" style="font-size: 2rem; color: var(--chartreuse);"></i>
                                <div>Hadir</div>
                            </div>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="attendance" value="tidak">
                            <div class="radio-label">
                                <i class="fas fa-times-circle" style="font-size: 2rem; color: var(--pink);"></i>
                                <div>Tidak Hadir</div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guests">Jumlah Tamu</label>
                    <input type="number" id="guests" min="1" max="5" value="1">
                </div>
                <div class="form-group">
                    <label for="message">Pesan & Doa</label>
                    <textarea id="message" rows="4" placeholder="Tuliskan ucapan dan doa untuk kami..."></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Kirim Konfirmasi
                </button>
            </form>
        </section>

        <!-- Messages -->
        <section id="messages">
            <h2 class="section-title">Ucapan & Doa</h2>
            <div class="messages-container" id="messagesContainer">
                <div class="message-card">
                    <div class="message-header">
                        <div class="message-name">John Doe</div>
                        <div class="message-time">2 jam lalu</div>
                    </div>
                    <div class="message-text">
                        Selamat menempuh hidup baru! Semoga menjadi keluarga yang sakinah, mawaddah, warahmah. Barakallah!
                    </div>
                    <div class="message-actions">
                        <button class="like-btn"><i class="fas fa-heart"></i> 12</button>
                    </div>
                </div>
                <div class="message-card">
                    <div class="message-header">
                        <div class="message-name">Jane Smith</div>
                        <div class="message-time">5 jam lalu</div>
                    </div>
                    <div class="message-text">
                        Congratulations! Wishing you both a lifetime of love and happiness together! 💕
                    </div>
                    <div class="message-actions">
                        <button class="like-btn"><i class="fas fa-heart"></i> 8</button>
                    </div>
                </div>
                <div class="message-card">
                    <div class="message-header">
                        <div class="message-name">Michael Chen</div>
                        <div class="message-time">1 hari lalu</div>
                    </div>
                    <div class="message-text">
                        Happy wedding day! Semoga lancar acaranya dan dimudahkan segala urusannya! 🎉
                    </div>
                    <div class="message-actions">
                        <button class="like-btn"><i class="fas fa-heart"></i> 15</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-names"><?=$maleName?> & <?=$femaleName?></div>
            <div class="footer-message">
                Terima kasih atas doa dan kehadirannya <span class="footer-heart">❤</span>
            </div>
            <div class="social-icons" style="justify-content: center; margin-bottom: 30px;">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div style="opacity: 0.7; font-size: 0.9rem;">
                Made with <span class="footer-heart">❤</span> for our special day
            </div>
        </footer>
    </div>

    <script>
        // Variables
        let isPlaying = false;
        let rsvpData = [];
        let messages = [];

        // Loading Screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loading').classList.add('hidden');
            }, 1500);
        });

        // Create Particles
        function createParticles() {
            const container = document.getElementById('particlesBg');
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                container.appendChild(particle);
            }
        }
        createParticles();

        // Open Invitation
        document.getElementById('openBtn').addEventListener('click', () => {
            const envelope = document.getElementById('envelope');
            envelope.classList.add('open');
            
            setTimeout(() => {
                document.getElementById('opening-cover').classList.add('hidden');
                document.getElementById('mainContent').classList.add('visible');
                startCountdown();
            }, 1000);
        });

        // Music Player
        document.getElementById('musicPlayer').addEventListener('click', () => {
            isPlaying = !isPlaying;
            const vinyl = document.getElementById('vinyl');
            const playIcon = document.getElementById('playIcon');
            
            if (isPlaying) {
                vinyl.classList.add('playing');
                playIcon.className = 'fas fa-pause play-icon';
            } else {
                vinyl.classList.remove('playing');
                playIcon.className = 'fas fa-play play-icon';
            }
        });

        // Countdown Timer
        function startCountdown() {
            const weddingDate = new Date('2025-12-15T08:00:00').getTime();
            
            const updateCountdown = () => {
                const now = new Date().getTime();
                const distance = weddingDate - now;
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
                
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById('days').textContent = '00';
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    document.getElementById('seconds').textContent = '00';
                }
            };
            
            updateCountdown();
            const countdownInterval = setInterval(updateCountdown, 1000);
        }

        // Sticky Countdown on Scroll
        window.addEventListener('scroll', () => {
            const countdownSticky = document.getElementById('countdownSticky');
            if (window.scrollY > 500) {
                countdownSticky.classList.add('visible');
            } else {
                countdownSticky.classList.remove('visible');
            }
        });

        // RSVP Form
        document.getElementById('rsvpForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                attendance: document.querySelector('input[name="attendance"]:checked').value,
                guests: document.getElementById('guests').value,
                message: document.getElementById('message').value,
                timestamp: new Date().toISOString()
            };
            
            rsvpData.push(formData);
            
            // Add message to board if provided
            if (formData.message) {
                addMessage(formData.name, formData.message);
            }
            
            // Show success message
            alert('✨ Terima kasih! Konfirmasi Anda telah diterima.');
            
            // Reset form
            e.target.reset();
        });

        // Add Message to Board
        function addMessage(name, text) {
            const message = {
                name: name,
                text: text,
                time: 'Baru saja',
                likes: 0
            };
            
            messages.unshift(message);
            
            const container = document.getElementById('messagesContainer');
            const messageCard = document.createElement('div');
            messageCard.className = 'message-card';
            messageCard.style.animation = 'fadeInUp 0.5s';
            messageCard.innerHTML = `
                <div class="message-header">
                    <div class="message-name">${message.name}</div>
                    <div class="message-time">${message.time}</div>
                </div>
                <div class="message-text">${message.text}</div>
                <div class="message-actions">
                    <button class="like-btn" onclick="likeMessage(this)">
                        <i class="fas fa-heart"></i> ${message.likes}
                    </button>
                </div>
            `;
            
            container.insertBefore(messageCard, container.firstChild);
        }

        // Like Message
        function likeMessage(btn) {
            const currentLikes = parseInt(btn.textContent.trim().split(' ')[1]);
            btn.innerHTML = `<i class="fas fa-heart"></i> ${currentLikes + 1}`;
            btn.style.transform = 'scale(1.2)';
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
            }, 200);
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.couple-card, .event-card, .gallery-item, .message-card').forEach(el => {
            observer.observe(el);
        });

        // Gallery Click
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                // Simple alert for demo - in production, use a lightbox library
                alert('Fitur lightbox gallery! Gambar akan tampil fullscreen dengan navigasi swipe.');
            });
        });

        // Radio Button Selection Visual
        document.querySelectorAll('.radio-option').forEach(option => {
            option.addEventListener('click', () => {
                document.querySelectorAll('.radio-option').forEach(opt => {
                    opt.style.borderColor = 'rgba(255,255,255,0.2)';
                    opt.style.background = 'rgba(255,255,255,0.05)';
                });
                option.style.borderColor = 'var(--cyan)';
                option.style.background = 'rgba(0,245,255,0.2)';
            });
        });
    </script>
</body>
</html>