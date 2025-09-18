<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Biografía</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }
        
        .name {
            font-size: 2.5em;
            margin: 0;
            font-weight: 300;
        }
        
        .title {
            font-size: 1.2em;
            opacity: 0.9;
            margin: 10px 0 0;
        }
        
        .content {
            padding: 40px;
        }
        
        .section {
            margin-bottom: 30px;
        }
        
        .section h2 {
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .bio-text {
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
        }
        
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        
        .skill {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .contact-item {
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .contact-icon {
            width: 20px;
            text-align: center;
            color: #667eea;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px 10px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .name {
                font-size: 2em;
            }
            
            .content {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="profile-img">
                    👤
                </div>
                <h1 class="name">Danna Carrillo</h1>
                <p class="title">Desarrollador Web | Programador</p>
            </div>
            
            <div class="content">
                <div class="section">
                    <h2>Biografía</h2>
                    <div class="bio-text">
                        <p>¡Hola! Soy un desarrollador apasionado por la tecnología y la creación de soluciones innovadoras. 
                        Con experiencia en desarrollo web y una constante búsqueda de aprendizaje, me dedico a crear 
                        aplicaciones que marquen la diferencia.</p>
                        
                        <p>Mi trayectoria profesional se ha centrado en el desarrollo full-stack, trabajando con tecnologías 
                        modernas como Laravel, JavaScript, y diversas herramientas de desarrollo. Siempre estoy buscando 
                        nuevos desafíos que me permitan crecer profesionalmente y aportar valor a los proyectos en los que participo.</p>
                        
                        <p>Cuando no estoy programando, disfruto explorando nuevas tecnologías, contribuyendo a proyectos 
                        de código abierto y compartiendo conocimientos con la comunidad de desarrolladores.</p>
                    </div>
                </div>
                
                <div class="section">
                    <h2>Habilidades</h2>
                    <div class="skills">
                        <span class="skill">PHP</span>
                        <span class="skill">Laravel</span>
                        <span class="skill">JavaScript</span>
                        <span class="skill">HTML/CSS</span>
                        <span class="skill">MySQL</span>
                        <span class="skill">Git</span>
                        <span class="skill">Docker</span>
                        <span class="skill">Linux</span>
                    </div>
                </div>
                
                <div class="section">
                    <h2>Contacto</h2>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="contact-icon">📧</span>
                            <span>tu-email@ejemplo.com</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">🌐</span>
                            <span>www.tu-sitio-web.com</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">📱</span>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">📍</span>
                            <span>Tu Ciudad, País</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
