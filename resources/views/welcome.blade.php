<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonna Remondavia | Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', sans-serif;
            background: #FFF9E6;
            color: #34332E;
            line-height: 1.7;
        }

        header {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #FFF9E6;
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid #F1E5BF;
        }

        h1,h2,h3,
        .logo {
            font-size: 24px;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
        }

        .logo span {
            color: #D5A928;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: #555248;
            font-size: 14px;
            font-weight: 500;
        }

        nav a:hover {
            color: #B58B1D;
        }

        .hero {
            min-height: 85vh;
            padding: 90px 10%;
            display: flex;
            align-items: center;
            background: #FFEDAD;
        }

        .hero-content {
            max-width: 750px;
        }

        .tag {
            display: inline-block;
            background: #FFF9E6;
            color: #96751D;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-size: clamp(42px, 7vw, 76px);
            line-height: 1.12;
            margin-bottom: 18px;
        }

        .hero h1 span {
            background: #F9DC78;
            padding: 0 10px;
            border-radius: 8px;
        }

        .hero h2 {
            font-size: 21px;
            font-weight: normal;
            color: #98751E;
            margin-bottom: 20px;
        }

        .hero p {
            max-width: 620px;
            color: #625F55;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            padding: 13px 25px;
            background: #EFC957;
            color: #34332E;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #E2B93F;
            transform: translateY(-2px);
        }

        section {
            padding: 85px 10%;
        }

        .section-label {
            color: #B18B27;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        section h2 {
            font-size: 34px;
            margin: 10px 0 25px;
        }

        .about {
            background: #FFF9E6;
        }

        .about p {
            max-width: 750px;
            color: #666258;
        }

        .skills {
            background: #FFF0BD;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 10px
        }

        .skill-card {
            background: #FFF9E6;
            padding: 20px 22px;
            border-radius: 12px;
            text-align: center;
            width: fit-content;
            font-weight: bold;
            border: 1px solid #F1DF9E;
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            background: #F9DC78;
        }

        .projects {
            background: #FFF9E6;
        }

        .project-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            margin-top: 30px;
        }

        .project-card {
            background: #FFEDAD;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #F1DF9E;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-number {
            color: #A27D1D;
            font-size: 13px;
            font-weight: bold;
        }

        .project-card h3 {
            margin: 12px 0;
            font-size: 21px;
        }

        .project-card p {
            color: #625F55;
            font-size: 14px;
        }

        .contact {
            background: #F9DC78;
            text-align: center;
        }

        .contact p {
            max-width: 600px;
            margin: 0 auto 25px;
            color: #62532B;
        }

        .contact .button {
            background: #34332E;
            color: #FFF9E6;
        }

        footer {
            background: #34332E;
            color: #FFF9E6;
            text-align: center;
            padding: 25px;
            font-size: 13px;
        }

       @media (max-width: 768px) {

            /* Skills Section */
        .skills-grid {
            justify-content: center;
            gap: 12px;
        }

        .skill-card {
            padding: 12px 18px;
            min-height: 55px
        }

            /* Navigation Menu */
        header {
            flex-direction: column;
            gap: 15px;
            padding: 18px 5%;
            }

        nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            }

        nav a {
            font-size: 13px;
        }

            /* Home Section */
        .hero {
            min-height: auto;
            padding: 80px 6%;
            text-align: center;
        }

        .hero-content {
            width: 100%;
        }

        .hero h1 {
            font-size: clamp(36px, 9vw, 48px);
        }

        .hero h2 {
            font-size: 18px;
        }

        .hero p {
            font-size: 14px;
            margin-left: auto;
            margin-right: auto;
        }

        .tag {
            font-size: 12px;
        }

            /* About Me Section */
        .about {
            padding: 60px 6%;
            text-align: center;
        }

        .about h2 {
            font-size: 30px;
        }

        .about p {
            max-width: 100%;
            font-size: 14px;
            line-height: 1.8;
            margin-left: auto;
            margin-right: auto;
        }

        .section-label {
            font-size: 11px;
        }

        /* Projects Section */
        .projects {
            padding: 60px 6%;
        }

        .project-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .project-card {
            padding: 22px;
            margin-bottom: 10px;
        }

        .project-card h3 {
            font-size: 18px;
        }

        .project-card p {
            font-size: 13px;
            line-height: 1.7;
        }
        /* Contact Section */
        .contact {
            padding: 60px 6%;
            text-align: center;
        }

        .contact h2 {
            font-size: 30px;
        }

        .contact p {
            max-width: 100%;
            font-size: 14px;
            line-height: 1.8;
            margin: 0 auto 25px;
        }

        .contact .button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 14px;
        }
        }

    
    </style>
</head>

<body>

    <header>
        <div class="logo">JONNA</div>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <section class="hero" id="home">
            <div class="hero-content">

                <span class="tag">WELCOME TO MY PORTFOLIO</span>

                <h1>
                    Hi, I'm <span>Jonna</span><br>
                    Remondavia.
                </h1>

                <h2>IT Student | Aspiring Web Developer</h2>

                <p>
                    Hello! I'm a Bachelor of Science in Information
                    Technology student with an interest in web development.
                    I enjoy learning new technologies, creating websites,
                    and improving my programming skills. I'm continuously
                    working to develop my knowledge and become a skilled
                    web developer.
                </p>

                <a href="#about" class="button">Explore My Portfolio</a>

            </div>
        </section>

        <section class="about" id="about">
            <span class="section-label">GET TO KNOW ME</span>
            <h2>About Me</h2>

            <p>
                I am an Information Technology student who enjoys
                exploring technology, learning programming, and
                developing creative solutions through web development.
                I am passionate about improving my skills, gaining
                experience, and discovering new opportunities in
                the field of Information Technology.
            </p>
        </section>

        <section class="skills" id="skills">
            <span class="section-label">WHAT I KNOW</span>
            <h2>My Skills</h2>

            <div class="skills-list">
                <div class="skill-card">HTML</div>
                <div class="skill-card">CSS</div>
                <div class="skill-card">JavaScript</div>
                <div class="skill-card">PHP</div>
                <div class="skill-card">Laravel</div>
                <div class="skill-card">MySQL</div>
                <div class="skill-card">XML</div>
                <div class="skill-card">XSLT</div>
                <div class="skill-card">Cisco Packet Tracer</div>
            </div>
        </section>

        <section class="projects" id="projects">
            <span class="section-label">MY WORK</span>
            <h2>Featured Projects</h2>

            <div class="project-container">

    <div class="project-card">
        <h3>School VLAN Network</h3>
        <p>
            A networking project developed using Cisco Packet Tracer.
            It focuses on VLAN configuration, DHCP, and network
            connectivity for different school departments.
        </p>
        <span>Networking | Cisco Packet Tracer</span>
    </div>

    <div class="project-card">
        <h3>Barangay Document Request System</h3>
        <p>
            A proposed web-based system that aims to make requesting
            barangay documents and managing identification records
            more convenient for residents and barangay personnel.
        </p>
        <span>Web Development | Capstone Project</span>
    </div>

    <div class="project-card">
        <h3>XML Cake Catalog</h3>
        <p>
            A simple web project that uses XML and XSLT to organize
            and display cake products, sizes, and prices.
        </p>
        <span>XML | XSLT | Web Development</span>
    </div>

</div>
        </section>

        <section class="contact" id="contact">
            <span class="section-label">LET'S CONNECT</span>
            <h2>Contact Me</h2>

            <p>
                Thank you for visiting my portfolio!
                Feel free to reach out for questions,
                opportunities, or collaboration.
            </p>

            <a href="mailto:remondaviajonna@gmail.com" class="button">
                Send Me an Email
            </a>
        </section>

    </main>

    <footer>
        © 2026 Jonna Remondavia. All Rights Reserved.
    </footer>

</body>
</html>
