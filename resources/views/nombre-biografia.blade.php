<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía - Danna Carrillo</title>
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
        
        .cta-button {
            background: #D4A574;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .cta-button:hover {
            background: #C49B6A;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 165, 116, 0.3);
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
        
        .bio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .bio-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #F0E6E6;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .bio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .bio-card h3 {
            font-size: 1.4em;
            font-weight: 600;
            color: #2C2C2C;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .bio-card p {
            color: #666;
            line-height: 1.7;
            font-size: 1em;
        }
        
        .icon {
            font-size: 1.2em;
            color: #D4A574;
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
                <h1 class="hero-title">Mi Historia</h1>
                <p class="hero-subtitle">Desarrolladora Web & Estudiante de Ingeniería</p>
                <p class="hero-description">
                    Una apasionada por la tecnología que combina creatividad con código, 
                    siempre en busca de nuevas oportunidades para crecer y aprender.
                </p>
                <a href="#biografia" class="cta-button">Conoce mi historia</a>
            </div>
        </section>

        <section class="content" id="biografia">
            <h2 class="section-title">Mi Biografía</h2>
            
            <div class="bio-grid">
                <div class="bio-card">
                    <h3><span class="icon">👶</span>Primeros Años</h3>
                    <p>Nací el 16 de Agosto del 2005 en Bucaramanga. Mis padres y hermanos son de la ciudad de Bogotá, aunque vivieron la mayor parte de sus vidas en Bucaramanga. Viví hasta mis 10 años en Bogotá y luego regresé a Bucaramanga.</p>
                </div>
                
                <div class="bio-card">
                    <h3><span class="icon">🎵</span>Infancia Creativa</h3>
                    <p>De pequeña me gustaban mucho los instrumentos y aprendí a tocar varios como el violín y la guitarra, también disfrutaba mucho de pintar. Cuando cumplí 9 años nos mudamos a Bucaramanga donde terminé la primaria y empecé el bachillerato en el Colegio Reina de la Paz.</p>
                </div>
                
                <div class="bio-card">
                    <h3><span class="icon">🎮</span>Descubrimiento Tecnológico</h3>
                    <p>En mi adolescencia me empezaron a gustar mucho los videojuegos y me empezó a interesar mucho el mundo de la tecnología, disfrutaba de talleres de robótica que se hacían en el colegio y en general siempre quise aprender más sobre programación.</p>
                </div>
                
                <div class="bio-card">
                    <h3><span class="icon">🎓</span>Formación Académica</h3>
                    <p>Estudié 2 años en cuarentena lo cual afectó un poco mi experiencia en el colegio pero pude terminar satisfactoriamente en el 2022. Actualmente me encuentro estudiando Ingeniería de Sistemas en la Universidad Autónoma de Bucaramanga.</p>
                </div>
                
                <div class="bio-card">
                    <h3><span class="icon">💻</span>Vida Profesional</h3>
                    <p>Además de mis estudios, trabajo en una empresa de desarrollo web donde me encargo de desarrollar funcionalidades para el cliente y arreglar errores en el código. En mi tiempo libre, me dedico a desarrollar proyectos personales.</p>
                </div>
                
                <div class="bio-card">
                    <h3><span class="icon">🚀</span>Futuro</h3>
                    <p>Mi mayor aspiración es convertirme en una desarrolladora full-stack senior. A mediano plazo, me gustaría dedicarle más tiempo a mi pasión por el modelado 3D y tener un trabajo que me permita viajar y conocer nuevos lugares.</p>
                </div>
            </div>
            
            <div class="navigation">
                <a href="/habilidades" class="nav-link">Ver Habilidades</a>
                <a href="/academia" class="nav-link">Formación Académica</a>
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
