<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOX ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Favicon -->
        <link rel="icon" href="assets/img/1.jpg"  type="image/jpg">

        <title>AINA FITRIANI</title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav_logo">Aina Fitriani</a>
                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="#home" class="nav_link active-link">
                                <i class='bx bx-home nav_icon'></i>Home
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#profile" class="nav_link">
                                <i class='bx bx-user nav_icon'></i>Profile
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#education" class="nav_link">
                                <i class='bx bx-book nav_icon'></i>Education
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#skills" class="nav_link">
                                <i class='bx bx-receipt nav_icon'></i>Skills
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#experience" class="nav_link">
                                <i class='bx bx-briefcase-alt nav_icon'></i>Experience
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#certificate" class="nav_link">
                                <i class='bx bx-award nav_icon'></i>Certificate
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#references" class="nav_link">
                                <i class='bx bx-link-external nav_icon'></i>References
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav_toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main bd-container">
            <!-- All elements within this div, is generated in PDF -->
            <div class="resume" id="area-cv">
                <div class="resume__left">
                    <!-- HOME -->
                    <section class="home" id="home">
                        <div class="home_containter section bd-grid">
                            <div class="home_data bd-grid">
                                <img src="assets/img/1.jpg" alt="" class="home_img center">
                                <h1 class="home_title">AINA <b>FITRIANI</b></h1>
                                <h3 class="home_profession">Web Developer</h3>
                                <!-- Button to generate and download the pdf. Available for desktop. -->
                                <div>
                                    <a download="" href="assets/pdf/Aina-Fitriani-resume.pdf" class="home_button-movil">Download</a>
                                </div>
                            </div>
                            <div class="home_address bd-grid">
                                <span class="home_information">
                                    <i class="bx bx-map"> &nbsp; </i> Sukabumi, Indonesia 
                                </span>
                                <span class="home_information">
                                    <i class="bx bx-envelope"> &nbsp; </i> ainafitriani31@gmail.com
                                </span>
                                <span class="home_information">
                                    <i class="bx bx-phone"> &nbsp; </i> (+62) 881
                                </span>
                            </div>
                        </div>
                        
                        <!-- Theme change button -->
                        <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>
                        <!-- Button to generate and download the pdf. Available for desktop -->
                        <i class="bx bx-download generate-pdf" title="Generate PDF" id="resume-button"></i>
                    </section>          
                    
                    <!-- SOCIAL -->
                    <section class="social section">
                        <h2 class="section-title">SOCIAL</h2>
                        <div class="social_container bd-grid">
                            <a href="https://www.linkedin.com/in/aina-fitriani/" target="_blank" class="social_link">
                                <i class="bx bxl-linkedin-square social_icon"></i> @AinaFitri
                            </a>
                            <a href="https://github.com/Ainafitriani" target="_blank" class="social_link">
                                <i class="bx bxl-github social_icon"></i> @ainaftrn31
                            </a>
                            <a href="https://www.instagram.com/ainaftrn31/" target="_blank" class="social_link">
                                <i class="bx bxl-instagram social_icon"></i> @ainaftrn31
                            </a>
                        </div>
                    </section>
                    <!-- PROFILE -->
                    <section class="profile section" id="profile">
                        <h2 class="section-title">Profile</h2>
                        <p class="profile_description">
                            Hanya seorang Mahasiswa tanpa Tujuan yang jelas.
                        </p>
                    </section>
                    
                    <!-- EDUCATION -->
                    <section class="education section" id="education">
                        <h2 class="section-title">Education</h2>
                        <div class="education_container bd-grid">
                            <div class="education_content">
                                <div class="education_time">
                                    <span class="education_rounder"></span>
                                    <span class="education_line"></span>
                                </div>
                                <div class="education_data bd-grid">
                                    <h3 class="education_title">Sedang Berkuliah</h3>
                                    <span class="education_studies">Universitas Muhammadiyah Sukabumi</span>
                                    <span class="education_year">2020 - Sekarang</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SKILLS  -->
                    <section class="skills section" id="skills">
                        <h2 class="section-title">Skills</h2>
                        <div class="skills_content bd-grid">
                            <ul class="skills_data">
                                <li class="skills_name">
                                    <span class="skills_circle"></span> HTML
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> CSS
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> BOOTSTRAP
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> JAVASCRIPT
                                </li>
                            </ul>
                            <ul class="skills_data">
                                <li class="skills_name">
                                    <span class="skills_circle"></span>PHP
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>MYSQL
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>CI4
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>GIT
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="resume__right">
                    <!-- EXPERIENCE -->
                    <section class="experience section" id="experience">
                        <h2 class="section-title">Experience</h2>
                        <div class="experience_container bd-grid">

                            <div class="experience_content">
                                <div class="experience_time">
                                    <span class="experience_rounder"></span>
                                    <!-- <span class="experience_line"></span> -->
                                </div>
                                <div class="experience_data bd-grid">
                                    <h3 class="experience_title">Development FrontEnd</h3>
                                    <span class="experience_company">Workshop Pemograman Web FrontEnd dan BackEnd Universitas Muhammadiyah Sukabumi - 2022 | <a href="https://github.com/Ainafitriani/eshop-frontend">Github Repository</a></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- CERTIFICATES -->
                    <section class="certificate section" id="certificate">
                        <h2 class="section-title">Certificates</h2>
                        <div class="certificate_container bd-grid">
                            <div class="certificate_content">
                                <h3 class="certificate_title">Workshop Pemograman Web FrontEnd dan BackEnd Universitas Muhammadiyah Sukabumi - 2022</h3>
                            </div>
                            <div class="certificate_content">
                                <h3 class="certificate_title">Workshop Pemograman Mobile dengan Android Studio Universitas Muhammadiyah Sukabumi - 2022</h3>
                            </div>
                                <div class="certificate_content bd-grid">
                                <li class="certificate_content">
                                    <span class="certificate_content"></span> Still Updating
                                </li>
                            </div>
                        </div>
                    </section>
                    <!-- REFERENCES -->
                    <section class="references section" id="references">
                        <h2 class="section-title">References</h2>
                        <div class="references_container bd-grid">
                            <div class="references_content bd-grid">
                                <span class="references_subtitle">Kampus</span>
                                <h3 class="references_title">UNIVERSITAS MUHAMMADIYAH SUKABUMI</h3>
                                <ul class="references_contact">
                                    <li>Phone:  (0266) 218345</li>
                                </ul>
                            </div>
                            <div class="references_content bd-grid">
                                <span class="references_subtitle">DPA</span>
                                <h3 class="references_title">IWAN RIZAL SETIAWAN, M.T., M.Kom.</h3>
                                <ul class="references_contact">
                                    <li>Phone:  (+62) </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- LANGUAGES -->
                    <section class="languages section">
                        <h2 class="section-title">Languages</h2>
                        <div class="languages_container">
                            <ul class="languages_content bd-grid">
                                <li class="languages_name">
                                    <span class="languages_circle"></span> Indonesia
                                </li>
                                <li class="languages_name">
                                    <span class="languages_circle"></span> Sunda
                                </li>
                                <li class="languages_name">
                                    <span class="languages_circle"></span> English
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                    <!-- INTERESTS -->
                    <section class="interests section">
                        <h2 class="section-title">Interests</h2>
                        <div class="interests_container bd-grid">
                            <div class="interests_content">
                                <i class='bx bx-code-alt interests_icon'></i>
                                <span class="interests_name">Coding</span>
                            </div>
                            <div class="interests_content">
                                <i class='bx bxs-coffee-togo interests_icon' ></i>
                                <span class="interests_name">Coffee</span>
                            </div>
                            
                            <div class="interests_content">
                                <i class="bx bxs-camera interests_icon "></i>
                                <span class="interests_name">Photography</span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>        
        </main> 

        <!-- SCROLL TOP -->
            <a href="#" class="scrolltop" id="scrolltop">
                <i class="bx bx-up-arrow-alt scrolltop_icon"></i>
            </a>

        <!-- HTML2PDF -->
        <script src="assets/js/html2pdf.bundle.min.js"></script>
        
        <!-- MAIN JS -->
        <script src="assets/js/main.js"></script>
    </body> <br>
</html>