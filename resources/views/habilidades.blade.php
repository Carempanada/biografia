<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades - Danna Carrillo</title>
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
            max-width: 1200px;
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
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .skill-category {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .skill-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .category-icon {
            font-size: 2em;
            margin-right: 15px;
            color: #667eea;
        }
        
        .category-title {
            font-size: 1.4em;
            font-weight: bold;
            color: #667eea;
            margin: 0;
        }
        
        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.9em;
            font-weight: 500;
        }
        
        .skill-level.beginner {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        }
        
        .skill-level.intermediate {
            background: linear-gradient(135deg, #feca57 0%, #ff9ff3 100%);
            color: #333;
        }
        
        .skill-level.advanced {
            background: linear-gradient(135deg, #48dbfb 0%, #0abde3 100%);
        }
        
        .skill-level.expert {
            background: linear-gradient(135deg, #1dd1a1 0%, #55a3ff 100%);
        }
        
        .progress-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        
        .progress-section h3 {
            margin: 0 0 20px 0;
            font-size: 1.5em;
            text-align: center;
        }
        
        .progress-item {
            margin-bottom: 20px;
        }
        
        .progress-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .progress-bar {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            height: 8px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: white;
            border-radius: 10px;
            transition: width 0.3s ease;
        }
        
        .certifications {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        
        .cert-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }
        
        .cert-item:last-child {
            border-bottom: none;
        }
        
        .cert-icon {
            font-size: 1.5em;
            margin-right: 15px;
            color: #667eea;
        }
        
        .cert-info h4 {
            margin: 0 0 5px 0;
            color: #333;
            font-size: 1.1em;
        }
        
        .cert-info p {
            margin: 0;
            color: #666;
            font-size: 0.9em;
        }
        
        .soft-skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .soft-skill {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .soft-skill:hover {
            transform: translateY(-3px);
        }
        
        .soft-skill-icon {
            font-size: 2.5em;
            margin-bottom: 15px;
            color: #667eea;
        }
        
        .soft-skill h4 {
            margin: 0 0 10px 0;
            color: #333;
            font-size: 1.2em;
        }
        
        .soft-skill p {
            margin: 0;
            color: #666;
            font-size: 0.9em;
            line-height: 1.4;
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
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .soft-skills {
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
                    🚀
                </div>
                <h1 class="name">Danna Carrillo</h1>
                <p class="title">Habilidades y Competencias Técnicas</p>
            </div>
            
            <div class="content">
                <div class="section">
                    <h2>Habilidades Técnicas</h2>
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
                                <span class="skill-level advanced">Principiante</span>
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
            </div>
        </div>
    </div>
</body>
</html>
