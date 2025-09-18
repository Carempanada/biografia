<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formación Académica - Danna Carrillo</title>
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
            margin-bottom: 30px;
            font-size: 1.8em;
            text-align: center;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .education-item {
            position: relative;
            margin-bottom: 40px;
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin-left: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .education-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .education-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 30px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: 3px solid white;
            box-shadow: 0 0 0 3px #667eea;
        }
        
        .education-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .education-icon {
            font-size: 2em;
            margin-right: 15px;
            color: #667eea;
        }
        
        .education-title {
            font-size: 1.4em;
            font-weight: bold;
            color: #333;
            margin: 0;
        }
        
        .institution {
            font-size: 1.1em;
            color: #667eea;
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
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .achievements {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }
        
        .achievements h4 {
            color: #667eea;
            margin: 0 0 10px 0;
            font-size: 1.1em;
        }
        
        .achievement-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .achievement-list li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
            color: #555;
        }
        
        .achievement-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4CAF50;
            font-weight: bold;
        }
        
        .courses-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        
        .courses-section h3 {
            margin: 0 0 20px 0;
            font-size: 1.5em;
            text-align: center;
        }
        
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .course-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        
        .course-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 8px;
        }
        
        .course-platform {
            font-size: 0.9em;
            opacity: 0.8;
            margin-bottom: 10px;
        }
        
        .course-status {
            font-size: 0.9em;
            padding: 5px 10px;
            border-radius: 15px;
            display: inline-block;
        }
        
        .status-completed {
            background: #4CAF50;
            color: white;
        }
        
        .status-in-progress {
            background: #FF9800;
            color: white;
        }
        
        .status-planned {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .projects-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .project-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .project-item:hover {
            transform: translateY(-3px);
        }
        
        .project-title {
            font-size: 1.1em;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }
        
        .project-description {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }
        
        .project-tech {
            font-size: 0.8em;
            color: #667eea;
            font-weight: 500;
        }
        
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-item {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1em;
            color: #666;
            font-weight: 500;
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
            
            .education-timeline {
                padding-left: 20px;
            }
            
            .education-item {
                margin-left: 10px;
            }
            
            .courses-grid {
                grid-template-columns: 1fr;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="profile-img">
                    🎓
                </div>
                <h1 class="name">Danna Carrillo</h1>
                <p class="title">Formación Académica y Desarrollo Profesional</p>
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
                </div>
                
                <div class="navigation">
                    <a href="/nombre-biografia" class="nav-link">Ver Biografía</a>
                    <a href="/habilidades" class="nav-link">Ver Habilidades</a>
                    <a href="/vida-laboral" class="nav-link">Vida Laboral</a>
                    <a href="/index" class="nav-link">Página Principal</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
