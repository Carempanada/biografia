<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Laboral - Danna Carrillo</title>
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
            max-width: 1000px;
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
            margin-bottom: 40px;
        }
        
        .section h2 {
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-left: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 25px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: 3px solid white;
            box-shadow: 0 0 0 3px #667eea;
        }
        
        .job-title {
            font-size: 1.3em;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 5px;
        }
        
        .company {
            font-size: 1.1em;
            color: #666;
            margin-bottom: 5px;
        }
        
        .duration {
            font-size: 0.9em;
            color: #888;
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .job-description {
            color: #555;
            line-height: 1.6;
        }
        
        .skills-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .skill-category {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .skill-category h4 {
            color: #667eea;
            margin: 0 0 10px 0;
            font-size: 1.1em;
        }
        
        .skill-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .skill-list li {
            padding: 5px 0;
            color: #555;
            border-bottom: 1px solid #eee;
        }
        
        .skill-list li:last-child {
            border-bottom: none;
        }
        
        .achievements {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .achievements h3 {
            margin: 0 0 15px 0;
            font-size: 1.3em;
        }
        
        .achievement-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .achievement-list li {
            padding: 8px 0;
            position: relative;
            padding-left: 25px;
        }
        
        .achievement-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4CAF50;
            font-weight: bold;
        }
        
        .navigation {
            text-align: center;
            margin-top: 30px;
        }
        
        .nav-link {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
            
            .timeline {
                padding-left: 20px;
            }
            
            .timeline-item {
                margin-left: 10px;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="profile-img">
                    💼
                </div>
                <h1 class="name">Danna Carrillo</h1>
                <p class="title">Desarrolladora Web | Experiencia Profesional</p>
            </div>
            
            <div class="content">
                <div class="section">
                    <h2>Experiencia Laboral</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="job-title">Desarrolladora Web</div>
                            <div class="company">Empresa de Desarrollo Web</div>
                            <div class="duration">2025</div>
                            <div class="job-description">
                                <p>Desarrollo de funcionalidades para clientes y corrección de errores en código. Trabajo con tecnologías web modernas para crear soluciones eficientes y escalables.</p>
                                <ul>
                                    <li>Desarrollo de nuevas funcionalidades según requerimientos del cliente</li>
                                    <li>Mantenimiento y corrección de bugs en aplicaciones existentes</li>
                                    <li>Colaboración con el equipo de desarrollo en proyectos complejos</li>
                                    <li>Optimización de código para mejorar el rendimiento</li>
                                </ul>
                                <p>Hasta el momento solo tengo experiencia en una empresa de desarrollo pero a futuro me gustaria poder tener mas experiencia en diferentes empresas y poder trabajar en diferentes proyectos.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            
                
                <div class="navigation">
                    <a href="/nombre-biografia" class="nav-link">Ver Biografía</a>
                    <a href="/index" class="nav-link">Página Principal</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
