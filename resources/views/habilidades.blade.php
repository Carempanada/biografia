<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades - Danna Carrillo</title>
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
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .skill-category {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #F0E6E6;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .skill-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .category-icon {
            font-size: 2em;
            margin-right: 15px;
            color: #D4A574;
        }
        
        .category-title {
            font-size: 1.4em;
            font-weight: 600;
            color: #2C2C2C;
            margin: 0;
        }
        
        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 12px 0;
            border-bottom: 1px solid #F0E6E6;
        }
        
        .skill-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        
        .skill-name {
            font-weight: 500;
            color: #555;
        }
        
        .skill-level {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 500;
        }
        
        .skill-level.beginner {
            background: #FFE5E5;
            color: #D63031;
        }
        
        .skill-level.intermediate {
            background: #FFF3CD;
            color: #E17055;
        }
        
        .skill-level.advanced {
            background: #D1ECF1;
            color: #0984E3;
        }
        
        .skill-level.expert {
            background: #D4EDDA;
            color: #00B894;
        }
        
        .soft-skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }
        
        .soft-skill {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #F0E6E6;
            transition: transform 0.3s ease;
        }
        
        .soft-skill:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .soft-skill-icon {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #D4A574;
        }
        
        .soft-skill h4 {
            margin: 0 0 15px 0;
            color: #2C2C2C;
            font-size: 1.2em;
            font-weight: 600;
        }
        
        .soft-skill p {
            margin: 0;
            color: #666;
            font-size: 0.95em;
            line-height: 1.6;
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
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .soft-skills {
                grid-template-columns: 1fr;
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
                <h1 class="hero-title">Mis Habilidades</h1>
                <p class="hero-subtitle">Competencias Técnicas y Profesionales</p>
                <p class="hero-description">
                    Una combinación equilibrada de habilidades técnicas sólidas y 
                    competencias blandas que me permiten abordar proyectos complejos 
                    con confianza y creatividad.
                </p>
            </div>
        </section>

        <section class="content">
            <h2 class="section-title">Habilidades Técnicas</h2>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon">💻</div>
                        <h3 class="category-title">Lenguajes de Programación</h3>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">JavaScript</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Python</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">HTML/CSS</span>
                        <span class="skill-level advanced">Avanzado</span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon">⚛️</div>
                        <h3 class="category-title">Frameworks y Librerías</h3>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">React</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon">🗄️</div>
                        <h3 class="category-title">Bases de Datos</h3>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">MySQL</span>
                        <span class="skill-level beginner">Principiante</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">PostgreSQL</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">MongoDB</span>
                        <span class="skill-level beginner">Principiante</span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon">🛠️</div>
                        <h3 class="category-title">Herramientas y Tecnologías</h3>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Git</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Docker</span>
                        <span class="skill-level beginner">Principiante</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Linux</span>
                        <span class="skill-level beginner">Principiante</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">VS Code</span>
                        <span class="skill-level intermediate">Intermedio</span>
                    </div>
                </div>
            </div>
            
            <h2 class="section-title">Habilidades Blandas</h2>
            <div class="soft-skills">
                <div class="soft-skill">
                    <div class="soft-skill-icon">🤝</div>
                    <h4>Trabajo en Equipo</h4>
                    <p>Colaboración efectiva en proyectos grupales y comunicación clara con compañeros de trabajo.</p>
                </div>
                <div class="soft-skill">
                    <div class="soft-skill-icon">🧠</div>
                    <h4>Resolución de Problemas</h4>
                    <p>Análisis crítico y enfoque sistemático para encontrar soluciones eficientes a desafíos técnicos.</p>
                </div>
                <div class="soft-skill">
                    <div class="soft-skill-icon">📚</div>
                    <h4>Aprendizaje Continuo</h4>
                    <p>Curiosidad constante por nuevas tecnologías y mejora continua de habilidades.</p>
                </div>
                <div class="soft-skill">
                    <div class="soft-skill-icon">⏰</div>
                    <h4>Gestión del Tiempo</h4>
                    <p>Organización eficiente de tareas y cumplimiento de plazos en proyectos.</p>
                </div>
                <div class="soft-skill">
                    <div class="soft-skill-icon">💡</div>
                    <h4>Creatividad</h4>
                    <p>Enfoque innovador para el desarrollo de soluciones y diseño de interfaces.</p>
                </div>
                <div class="soft-skill">
                    <div class="soft-skill-icon">🎯</div>
                    <h4>Orientación al Detalle</h4>
                    <p>Atención meticulosa a la calidad del código y experiencia del usuario.</p>
                </div>
            </div>
            
            <div class="navigation">
                <a href="/nombre-biografia" class="nav-link">Ver Biografía</a>
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
