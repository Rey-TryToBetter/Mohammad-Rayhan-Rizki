<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Rey || Portofolio</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>R</span>ey <span>||</span>Portofolio</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Beranda">Beranda</a></li>
            <li><a href="#projects" data-after="Project">Project</a></li>
            <li><a href="#about" data-after="Tentang Aku">Tentang Aku</a></li>
            <li><a href="#contact" data-after="kontak">Kontak</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hallo, <span></span></h1>
        <h1>Aku<span></span></h1>
        <h1>M Rayhan Rizki <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Project <span>Terakhir</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Course Website</h2>
            <p>Saya membuat sebuah website kursus coding yang dirancang khusus untuk memudahkan pengguna dalam belajar pemrograman. Menggunakan HTML dan CSS sebagai dasar, website ini menawarkan tampilan yang bersih dan responsif, memudahkan akses dan navigasi. Dengan fokus pada pengalaman pengguna yang sederhana namun efektif, saya berusaha menghadirkan platform yang membantu para pembelajar untuk berkembang dalam dunia coding dengan cara yang menyenangkan dan informatif.</p>
          </div>
          <div class="project-img">
            <img src="./img/project-1.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Course Website 2</h2>
            <p>Saya membuat sebuah website kursus coding yang dirancang untuk memberikan pengalaman belajar yang menyenangkan dan efektif. Dengan memanfaatkan HTML, CSS, dan framework Tailwind CSS, website ini menawarkan desain yang responsif dan modern. Tailwind memungkinkan saya untuk dengan mudah membuat layout yang fleksibel dan tampilan yang menarik tanpa menulis banyak kode kustom. Platform ini bertujuan untuk memberikan kemudahan akses dan navigasi bagi pengguna yang ingin belajar coding dengan cara yang lebih praktis.</p>
          </div>
          <div class="project-img">
            <img src="./img/project-2.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- Contact Info Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontak <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png " /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 8786 3118 174</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png " /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>mohammadrayhanrizki@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png " /></div>
          <div class="contact-info">
            <h1>Alamat</h1>
            <h2>Surabaya, Jawa Timur, Indonesia</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Info Section -->

  <!-- Contact Form Section -->
  <section id="contact-form">
    <div class="contact-form container">
      <div>
        <h1 class="section-title">Kirim <span>Pesan</span></h1>
      </div>
      <form action="">
        <div class="form-item">
          <input type="text" placeholder="Nama" required>
          <input type="email" placeholder="Email" required>
        </div>
        <div class="form-item">
          <input type="text" placeholder="Subjek" required>
          <input type="text" placeholder="Nomor Telepon" required>
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Pesan"></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </section>
  <!-- End Contact Form Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>M</span>ohammad <span>R</span>ayhan <span>R</span>izki</h1>
      </div>
      <h2>Terimakasih telah berkunjung</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://github.com/Rey-TryToBetter " target="_blank">
            <img src="https://img.icons8.com/?size=256&id=12599&format=png " />
          </a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/reyzr12?igsh=MXc1aHVuaTE1aXc2cQ== " target="_blank">
            <img src="https://img.icons8.com/?size=256&id=Xy10Jcu1L2Su&format=png " />
          </a>
        </div>
      </div>
      <p>Copyright © Moh Rayhan Rizki. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  <script src="./app.js"></script>
</body>

</html>