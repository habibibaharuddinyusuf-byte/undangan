<?php
if(!isset($_GET["u"])){
    include "template data.php";
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Undangan Pernikahan <?=$maleName?> Dan <?=$femaleName?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/template2.css"/>
</head>
<body>
    <!-- Sakura Falling Animation -->
    <div class="sakura-container" id="sakura-container"></div>

    <!-- Floating Balloons -->
    <div class="balloon-container" id="balloon-container"></div>

    <!-- Couple Silhouettes -->
    <svg class="couple-silhouette left" viewBox="0 0 100 150" xmlns="http://www.w3.org/2000/svg">
        <path d="M40,30 C40,20 50,15 55,20 C60,15 70,20 70,30 C70,40 55,50 55,50 C55,50 40,40 40,30 Z M30,50 L35,80 L30,120 L25,145 L35,145 L40,120 L45,145 L55,145 L50,120 L55,80 L60,50 Z" fill="currentColor"/>
    </svg>
    
    <svg class="couple-silhouette right" viewBox="0 0 100 150" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="55" cy="25" rx="15" ry="20" fill="currentColor"/>
        <path d="M35,45 Q45,50 55,50 Q65,50 75,45 L80,80 Q80,90 75,100 L70,145 L60,145 L58,110 L52,110 L50,145 L40,145 L35,100 Q30,90 30,80 Z" fill="currentColor"/>
        <circle cx="45" cy="80" r="12" fill="currentColor" opacity="0.3"/>
        <circle cx="65" cy="80" r="12" fill="currentColor" opacity="0.3"/>
    </svg>

    <div style="text-align:center;">
        <button class="back-btn" onclick="window.close()">🌸 Kembali ke Website Utama</button>
    </div>

    <div class="container">
        <div class="header">
            <div class="ornament">🌸 ❀ 🌸</div>
            <h1 class="couple-names"><?=$maleName?> & <?=$femaleName?></h1>
            <p class="wedding-date">Sabtu, 15 Desember 2025</p>
            <div class="ornament">🌸 ❀ 🌸</div>

            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Hari</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Jam</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Menit</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Detik</div>
                </div>
            </div>
        </div>

        <div class="nav">
            <a href="#" class="nav-link active" data-target="couple">👰🤵 Pasangan</a>
            <a href="#" class="nav-link" data-target="event">📅 Acara</a>
            <a href="#" class="nav-link" data-target="gallery">📷 Galeri</a>
            <a href="#" class="nav-link" data-target="rsvp">✉️ Konfirmasi</a>
            <a href="#" class="nav-link" data-target="wishes">💌 Ucapan</a>
            <a href="#" class="nav-link" data-target="lovestory">💝 Love Story</a>
            <a href="#" class="nav-link" id="wedding-gift-btn">🎁 Wedding Gift</a>
        </div>

        <div class="section active" id="couple">
            <h2 class="section-title">Pasangan Pengantin</h2>
            <div class="couple-container">
                <div class="couple">
                    <img src="<?=$malePicture?>" alt="Mempelai Pria" class="couple-img">
                    <h3 class="couple-name"><?=$maleName?> 🤵</h3>
                    <p class="couple-desc">Putra kedua dari Bapak <?=$maleDad?> & Ibu <?=$maleMom?></p>
                </div>
                <div class="couple">
                    <img src="<?=$femalePicture?>" alt="Mempelai Wanita" class="couple-img">
                    <h3 class="couple-name"><?=$femaleName?> 👰</h3>
                    <p class="couple-desc">Putri pertama dari Bapak <?=$femaleDad?> & Ibu <?=$femaleMom?></p>
                </div>
            </div>
        </div>

        <div class="section" id="event">
            <h2 class="section-title">Detail Acara</h2>

            <div class="event-card">
                <h3 class="event-title">🕌 Akad Nikah</h3>
                <div class="event-detail">
                    <i class="far fa-calendar"></i><span>Sabtu, 15 Desember 2025</span>
                </div>
                <div class="event-detail">
                    <i class="far fa-clock"></i><span>Pukul 08.00 - 10.00 WIB</span>
                </div>
                <div class="event-detail">
                    <i class="fas fa-map-marker-alt"></i><span>Masjid Al-Hikmah, Jl. Merdeka No. 123, Jakarta</span>
                </div>
                <a href="#" class="btn-cal" data-type="akad">Tambah ke Kalender</a>
            </div>

            <div class="event-card">
                <h3 class="event-title">🎊 Resepsi Pernikahan</h3>
                <div class="event-detail">
                    <i class="far fa-calendar"></i><span>Sabtu, 15 Desember 2025</span>
                </div>
                <div class="event-detail">
                    <i class="far fa-clock"></i><span>Pukul 11.00 - 15.00 WIB</span>
                </div>
                <div class="event-detail">
                    <i class="fas fa-map-marker-alt"></i><span>Ballroom Grand Hotel, Jl. Sudirman No. 456, Jakarta</span>
                </div>
                <a href="#" class="btn-cal" data-type="resepsi">Tambah ke Kalender</a>
            </div>

            <div class="event-card">
                <h3 class="event-title">📍 Lokasi Acara</h3>
                <div id="map" style="height:300px; width:100%; border-radius:8px; overflow:hidden;"></div>
            </div>
        </div>

        <div class="section" id="gallery">
            <h2 class="section-title">Galeri Foto</h2>
            <div class="gallery-container">
                <?php
                    foreach ($gallery as $g) {
                ?>
                <div class="gallery-item"><img src="<?=$g?>"></div>
                <?php }?>
            </div>
        </div>

        <div class="section" id="rsvp">
            <h2 class="section-title">Konfirmasi Kehadiran</h2>
            <form class="rsvp-form">
                <div class="form-group"><label for="name">Nama Lengkap</label><input type="text" id="name" class="form-control" required></div>
                <div class="form-group"><label for="email">Email</label><input type="email" id="email" class="form-control"></div>
                <div class="form-group"><label for="phone">Nomor Telepon</label><input type="tel" id="phone" class="form-control"></div>
                <div class="form-group"><label for="attendance">Konfirmasi Kehadiran</label>
                    <select id="attendance" class="form-control" required>
                        <option value="">Pilih Opsi</option>
                        <option value="yes">Ya, saya akan hadir</option>
                        <option value="no">Maaf, tidak bisa hadir</option>
                    </select>
                </div>
                <div class="form-group"><label for="guests">Jumlah Tamu</label><input type="number" id="guests" class="form-control" min="1" value="1"></div>
                <div class="form-group"><label for="message">Pesan/Ucapan</label><textarea id="message" class="form-control" rows="4"></textarea></div>
                <button type="submit" class="btn">Kirim Konfirmasi 💌</button>
            </form>
        </div>

        <div class="section" id="wishes">
            <h2 class="section-title">Ucapan & Doa</h2>
            <div class="wishes-container" id="wishes-list"></div>

            <div class="form-group" style="margin-top:18px;"><label for="new-wish-name">Nama Anda</label><input type="text" id="new-wish-name" class="form-control"></div>
            <div class="form-group"><label for="new-wish-message">Tulis Ucapan</label><textarea id="new-wish-message" class="form-control" rows="3"></textarea></div>
            <button id="add-wish" class="btn" style="max-width:220px; margin:14px auto 30px; display:block;">Kirim Ucapan 💝</button>
        </div>

        <div class="section" id="lovestory">
            <h2 class="section-title">Perjalanan Cinta Kami</h2>
            <div class="story-timeline">
                <div class="story-item">
                    <div class="story-content">
                        <h3 style="color:var(--primary)">💕 Awal Bertemu</h3>
                        <p style="color:var(--muted)"><?=$maleName?> dan <?=$femaleName?> pertama kali bertemu di kampus saat mengikuti organisasi mahasiswa...</p>
                        <img src="https://i.imgur.com/46D5QoK.jpeg" alt="Awal Bertemu" style="width:100%; max-width:300px; border-radius:8px; margin-top:12px; border: 3px solid var(--border);">
                    </div>
                </div>

                <div class="story-item">
                    <div class="story-content">
                        <h3 style="color:var(--primary)">💑 Menjalin Hubungan</h3>
                        <p style="color:var(--muted)">Setelah saling mengenal selama lebih dari setahun...</p>
                        <img src="https://i.imgur.com/opIRzdS.jpeg" alt="Menjalin Hubungan" style="width:100%; max-width:300px; border-radius:8px; margin-top:12px; border: 3px solid var(--border);">
                    </div>
                </div>

                <div class="story-item">
                    <div class="story-content">
                        <h3 style="color:var(--primary)">💍 Melamar</h3>
                        <p style="color:var(--muted)">Kami Memutuskan Untuk Melamar...</p>
                        <img src="c:\Users\USER\Documents\Tugas\Captures\WhatsApp Image 2025-09-25 at 08.47.08_e33efadf.jpg" alt="Melamar" style="width:100%; max-width:300px; border-radius:8px; margin-top:12px; border: 3px solid var(--border);">
                    </div>
                </div>

                <div class="story-item">
                    <div class="story-content">
                        <h3 style="color:var(--primary)">💒 Menuju Hari Bahagia</h3>
                        <p style="color:var(--muted)">Kini, mereka siap melangkah ke jenjang pernikahan...</p>
                        <img src="https://i.imgur.com/rRCC7vg.jpeg" alt="Menuju Hari Bahagia" style="width:100%; max-width:300px; border-radius:8px; margin-top:12px; border: 3px solid var(--border);">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p style="font-size:18px; font-weight:600;">🌸 Terima kasih atas doa dan restunya 🌸</p>
            <p style="margin-top:8px;">Kami berharap dapat berbagi kebahagiaan ini dengan Anda</p>
            <div class="music-control" id="music-toggle"><i class="fas fa-play"></i> Putar Musik 🎵</div>
        </div>
    </div>

    <div class="modal" id="gallery-modal" aria-hidden="true">
        <span class="close-modal" data-target="gallery-modal">&times;</span>
        <img class="modal-content" id="modal-img" alt="Preview">
    </div>

    <div class="modal" id="wedding-gift-modal" aria-hidden="true">
        <span class="close-modal" data-target="wedding-gift-modal">&times;</span>
        <div style="text-align:center; color:white;">
            <h2 style="color:white;">🎁 Wedding Gift 🌸</h2>
            <img class="modal-content" id="gift-img" alt="QR Code" style="max-width:260px; border-radius:8px;">
            <p style="color:white; margin-top:10px;">Scan QR code untuk memberikan hadiah digital</p>
        </div>
    </div>

    <audio id="wedding-music" loop>
        <source src="c:\Users\USER\Documents\Tugas\shane-filan-beautiful-in-white.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung elemen audio.
    </audio>

    <script>
        // Create falling sakura petals
        function createSakura() {
            const container = document.getElementById('sakura-container');
            const sakuraSymbols = ['🌸', '🌺', '🏵️'];
            
            for(let i = 0; i < 20; i++) {
                const sakura = document.createElement('div');
                sakura.className = 'sakura';
                sakura.textContent = sakuraSymbols[Math.floor(Math.random() * sakuraSymbols.length)];
                sakura.style.left = Math.random() * 100 + '%';
                sakura.style.animationDuration = (Math.random() * 10 + 10) + 's';
                sakura.style.animationDelay = Math.random() * 5 + 's';
                sakura.style.fontSize = (Math.random() * 15 + 15) + 'px';
                container.appendChild(sakura);
            }
        }

        // Create floating balloons
        function createBalloons() {
            const container = document.getElementById('balloon-container');
            const balloonSymbols = ['🎈', '🎀', '💝'];
            
            for(let i = 0; i < 8; i++) {
                const balloon = document.createElement('div');
                balloon.className = 'balloon';
                balloon.textContent = balloonSymbols[Math.floor(Math.random() * balloonSymbols.length)];
                balloon.style.left = Math.random() * 90 + '%';
                balloon.style.animationDuration = (Math.random() * 8 + 12) + 's';
                balloon.style.animationDelay = Math.random() * 5 + 's';
                container.appendChild(balloon);
            }
        }

        // Initialize animations
        createSakura();
        createBalloons();

        // Calendar buttons
        document.querySelectorAll('.btn-cal').forEach(button => {
            button.addEventListener('click', function(e){
                e.preventDefault();
                const type = this.getAttribute('data-type');
                let title, details, location, startDate, endDate;

                if (type === 'akad') {
                    title = 'Akad Nikah <?=$maleName?> & <?=$femaleName?>';
                    details = 'Akad Nikah <?=$maleName?> dan <?=$femaleName?>';
                    location = 'Masjid Al-Hikmah, Jl. Merdeka No. 123, Jakarta';
                    startDate = '20251215T080000';
                    endDate = '20251215T100000';
                } else {
                    title = 'Resepsi Pernikahan <?=$maleName?> & <?=$femaleName?>';
                    details = 'Resepsi pernikahan <?=$maleName?> dan <?=$femaleName?>';
                    location = 'Ballroom Grand Hotel, Jl. Sudirman No. 456, Jakarta';
                    startDate = '20251215T110000';
                    endDate = '20251215T150000';
                }

                const googleCalendarUrl = `https://www.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(title)}&details=${encodeURIComponent(details)}&location=${encodeURIComponent(location)}&dates=${startDate}/${endDate}`;
                window.open(googleCalendarUrl, '_blank');
            });
        });

        // Navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e){
                e.preventDefault();
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                const target = this.getAttribute('data-target');
                const el = document.getElementById(target);
                if (el) el.classList.add('active');
            });
        });

        // Countdown
        function updateCountdown(){
            const weddingDate = new Date('December 15, 2025 00:00:00').getTime();
            const now = new Date().getTime();
            const distance = weddingDate - now;
            if (distance < 0){
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                return;
            }
            const days = Math.floor(distance / (1000*60*60*24));
            const hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
            const minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
            const seconds = Math.floor((distance % (1000*60)) / 1000);

            document.getElementById('days').textContent = String(days).padStart(2,'0');
            document.getElementById('hours').textContent = String(hours).padStart(2,'0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2,'0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2,'0');
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // Gallery modal
        const galleryModal = document.getElementById('gallery-modal');
        const modalImg = document.getElementById('modal-img');

        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function(){
                const img = this.querySelector('img');
                if (!img) return;
                modalImg.src = img.src;
                galleryModal.classList.add('open');
            });
        });

        // Close modals
        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', function(){
                const targetId = this.getAttribute('data-target');
                const modal = document.getElementById(targetId);
                if (modal) modal.classList.remove('open');
            });
        });

        document.querySelectorAll('.modal').forEach(modalEl => {
            modalEl.addEventListener('click', function(e){
                if (e.target === modalEl) modalEl.classList.remove('open');
            });
        });

        // RSVP form
        document.querySelector('.rsvp-form').addEventListener('submit', function(e){
            e.preventDefault();
            const guestName = document.getElementById('name').value || 'Tamu';
            const attendance = document.getElementById('attendance').value;
            if (attendance === 'yes') {
                alert(`🌸 Terima kasih banyak ${guestName}! Kami senang Anda bisa hadir. 🌸`);
            } else if (attendance === 'no') {
                alert(`🌸 Terima kasih ${guestName} atas konfirmasinya. Doa terbaik untuk Anda. 🌸`);
            } else {
                alert('Harap isi konfirmasi kehadiran Anda.');
                return;
            }
            this.reset();
        });

        // Wishes
        const wishes = [
            { name: '<?=$maleName?> 🤵', message: 'Selamat menempuh hidup baru! Semoga menjadi keluarga yang sakinah, mawaddah, warahmah. 🌸' },
            { name: 'Ipan 💐', message: 'Semoga pernikahan kalian penuh berkah dan kebahagiaan. Congratulations!' },
            { name: 'Adit 🎊', message: 'Selamat atas pernikahannya! Semoga langgeng hingga akhir hayat.' }
        ];
        
        function displayWishes(){
            const list = document.getElementById('wishes-list');
            list.innerHTML = '';
            wishes.forEach(w => {
                const d = document.createElement('div');
                d.className = 'wish-item';
                d.innerHTML = `<div class="wish-author">${w.name}</div><div>${w.message}</div>`;
                list.appendChild(d);
            });
        }
        
        document.getElementById('add-wish').addEventListener('click', function(){
            const name = document.getElementById('new-wish-name').value.trim();
            const message = document.getElementById('new-wish-message').value.trim();
            if (!name || !message) return alert('Harap isi nama dan pesan ucapan! 🌸');
            wishes.unshift({name: name + ' 💌', message: message + ' 🌸'});
            displayWishes();
            document.getElementById('new-wish-name').value = '';
            document.getElementById('new-wish-message').value = '';
        });
        displayWishes();

        // Music control
        const musicToggle = document.getElementById('music-toggle');
        const audio = document.getElementById('wedding-music');
        let isPlaying = false;
        musicToggle.addEventListener('click', function(){
            if (isPlaying) {
                audio.pause();
                musicToggle.innerHTML = '<i class="fas fa-play"></i> Putar Musik 🎵';
            } else {
                audio.play().catch(()=>{});
                musicToggle.innerHTML = '<i class="fas fa-pause"></i> Jeda Musik 🎵';
            }
            isPlaying = !isPlaying;
        });

        // Map
        const mapContainer = document.getElementById('map');
        mapContainer.innerHTML = `<img src="https://i.imgur.com/JZThF8a.jpeg" alt="Lokasi" style="width:100%; height:100%; object-fit:cover; border-radius:8px;">`;

        // Wedding gift modal
        const giftModal = document.getElementById('wedding-gift-modal');
        const giftImg = document.getElementById('gift-img');
        const openGiftBtn = document.getElementById('wedding-gift-btn');
        const fileURL = 'https://drive.google.com/file/d/1tWAex5-v92VORsfX1hzzieSiISnG_-Br/view?usp=sharing';
        const qrCodeURL = `https://api.qrserver.com/v1/create-qr-code/?data=${encodeURIComponent(fileURL)}&size=300x300`;
        openGiftBtn.addEventListener('click', function(e){
            e.preventDefault();
            giftImg.src = qrCodeURL;
            giftModal.classList.add('open');
        });
    </script>
</body>
</html>