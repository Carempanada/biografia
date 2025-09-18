<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formación Académica - Danna Carrillo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            background: #F8F0F0;
            color: #2C2C2C;
            min-height: 100vh;
        }
        
        .header {
            background: #F8F0F0;
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid #E8D5D5;
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        
        .logo {
            font-size: 1.8em;
            font-weight: 600;
            color: #2C2C2C;
            text-decoration: none;
        }
        
        .social-links {
            display: flex;
            gap: 20px;
        }
        
        .social-link {
            color: #2C2C2C;
            font-size: 1.2em;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .social-link:hover {
            color: #D4A574;
        }
        
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }
        
        .hero-image {
            position: relative;
            height: 500px;
            background: linear-gradient(135deg, #D4A574 0%, #C49B6A 100%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .hero-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .hero-content {
            padding: 20px 0;
        }
        
        .hero-title {
            font-size: 3.5em;
            font-weight: 700;
            color: #2C2C2C;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.3em;
            color: #666;
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        .hero-description {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 40px;
            line-height: 1.7;
        }
        
        .content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 40px;
        }
        
        .section {
            margin-bottom: 60px;
        }
        
        .section-title {
            font-size: 2.5em;
            font-weight: 600;
            color: #2C2C2C;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #D4A574;
        }
        
        .education-timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .education-timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #D4A574;
        }
        
        .education-item {
            position: relative;
            margin-bottom: 40px;
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-left: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #F0E6E6;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .education-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .education-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 30px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #D4A574;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #D4A574;
        }
        
        .education-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .education-icon {
            font-size: 2em;
            margin-right: 15px;
            color: #D4A574;
        }
        
        .education-title {
            font-size: 1.4em;
            font-weight: 600;
            color: #2C2C2C;
            margin: 0;
        }
        
        .institution {
            font-size: 1.1em;
            color: #D4A574;
            font-weight: 500;
            margin: 5px 0;
        }
        
        .duration {
            font-size: 0.9em;
            color: #888;
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .education-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .footer {
            background: #2C2C2C;
            color: white;
            padding: 60px 0;
            margin-top: 80px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }
        
        .footer-section h3 {
            font-size: 1.3em;
            font-weight: 600;
            margin-bottom: 20px;
            color: #D4A574;
        }
        
        .footer-section p {
            color: #ccc;
            line-height: 1.6;
        }
        
        .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #D4A574;
        }
        
        .navigation {
            text-align: center;
            margin-top: 40px;
        }
        
        .nav-link {
            display: inline-block;
            background: #D4A574;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            margin: 0 10px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .nav-link:hover {
            background: #C49B6A;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.3);
        }
        
        @media (max-width: 768px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 40px 20px;
            }
            
            .hero-image {
                height: 300px;
            }
            
            .hero-title {
                font-size: 2.5em;
            }
            
            .nav {
                padding: 0 20px;
            }
            
            .content {
                padding: 40px 20px;
            }
            
            .education-timeline {
                padding-left: 20px;
            }
            
            .education-item {
                margin-left: 10px;
            }
            
            .footer-content {
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="/index" class="logo">Danna Carrillo</a>
            <div class="social-links">
                <a href="#" class="social-link">📧</a>
                <a href="#" class="social-link">💼</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-image">
                <!-- Imagen decorativa con elementos naturales -->
            </div>
            <div class="hero-content">
                <h1 class="hero-title">Mi Formación</h1>
                <p class="hero-subtitle">Trayectoria Académica y Desarrollo Profesional</p>
                <p class="hero-description">
                    Un viaje de aprendizaje continuo que combina educación formal 
                    con pasión por la tecnología y el desarrollo de software.
                </p>
            </div>
        </section>

        <section class="content">
            <h2 class="section-title">Formación Académica</h2>
            
            <div class="education-timeline">
                <div class="education-item">
                    <div class="education-header">
                        <div class="education-icon">🎓</div>
                        <div>
                            <h3 class="education-title">Ingeniería de Sistemas</h3>
                            <div class="institution">Universidad Autónoma de Bucaramanga</div>
                            <div class="duration">2023 - Presente</div>
                        </div>
                    </div>
                    <div class="education-description">
                        <p>Estudiante de Ingeniería de Sistemas con enfoque en desarrollo de software y tecnologías de la información. Durante mi formación he adquirido conocimientos sólidos en programación, bases de datos, arquitectura de software y metodologías de desarrollo.</p>
                    </div>
                </div>
                
                <div class="education-item">
                    <div class="education-header">
                        <div class="education-icon">🏫</div>
                        <div>
                            <h3 class="education-title">Bachillerato</h3>
                            <div class="institution">Colegio Reina de la Paz</div>
                            <div class="duration">2017 - 2022</div>
                        </div>
                    </div>
                    <div class="education-description">
                        <p>Graduada del bachillerato con énfasis en valores. Durante esta etapa desarrollé mi interés por la tecnología y la programación, participando activamente en talleres de robótica y proyectos tecnológicos.</p>
                    </div>
                </div>
            </div>
            
            <div class="navigation">
                <a href="/nombre-biografia" class="nav-link">Ver Biografía</a>
                <a href="/habilidades" class="nav-link">Ver Habilidades</a>
                <a href="/vida-laboral" class="nav-link">Experiencia Laboral</a>
                <a href="/index" class="nav-link">Página Principal</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Ubicación</h3>
                <p>Bucaramanga, Santander<br>Colombia</p>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>danna.carrillo@email.com<br>(+57) 300-123-4567</p>
            </div>
        </div>
    </footer>
</body>
</html>
