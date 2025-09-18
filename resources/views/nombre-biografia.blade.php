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
                        <p>¡Hola! Naci en Bucaramanga, mis padres y hermanos son de la ciudad de Bogota. Aunque vivieron la mayor parte de sus vidas en Bucaramanga. Vivi hasta mis 10 aos en bogota y luego regrese a Bucaramanga.</p>
                    </div>
                    <div class="bio-text">
                        <p>Naci el 16 de Agosto del 2005, vivi los primeros aos de mi vida en la ciudad de bogota. De pequeña me gustaban muchos los instrumentos y aprendi a tocar varios como el violin y la guitarra, tambien disfrutaba mucho de pintar. Cuando cumpli 9 años nos mudamos a Bucaramanga donde termine la primaria y empece el bachillerato en el colegio reina de la paz.</p>
                    </div>
                    <div class="bio-text">
                        <p>En mi adolescencia me empezaron a gustar muchos lo videojuegos y me empezo a interesar mucho el mundo de la tecnologia, disfruta de talleres de robotica que se hacian en el colegio y en general siempre quise aprender mas sobre programacion. Estudie 2 años en cuarentena lo cual afecto un poco mi experiencia en el colegio pero pude terminar satisfactoriamente en el 2022</p>
                    </div>
                </div>
                
                <div class="section">
                    <h2>Actualidad</h2>
                    <div class="bio-text">
                        <p>Actualmente me encuentro estudiando Ingeniería de Sistemas en la Universidad, donde continúo profundizando mis conocimientos en programación y desarrollo de software. Cada día descubro nuevas tecnologías y herramientas que me permiten crear soluciones más eficientes e innovadoras.</p>
                    </div>
                    <div class="bio-text">
                        <p>En mi tiempo libre, me dedico a desarrollar proyectos personales utilizando diferentes lenguajes de programación como PHP, JavaScript y Python. También participo en talleres y cursos online para mantenerme actualizada con las últimas tendencias tecnológicas. Me apasiona especialmente el desarrollo web y la creación de aplicaciones que puedan impactar positivamente en la vida de las personas.</p>
                    </div>
                    <div class="bio-text">
                        <p>Además de mis estudios, trabajo en una empresa de desarrollo de web donde me encargo de desarrollar funcionalidades para el cliente y arreglar errores en el codigo.</p>
                    </div>
                </div>
                
                <div class="section">
                    <h2>Aspiraciones</h2>
                    <div class="bio-text">
                        <p>Mi mayor aspiración es convertirme en una desarrolladora full-stack senior, especializándome en tecnologías modernas y liderando equipos de desarrollo. Quiero dominar tanto el frontend como el backend, creando aplicaciones web completas que sean escalables, eficientes y que realmente impacten positivamente en la vida de los usuarios.</p>
                    </div>
                    <div class="bio-text">
                        <p>A mediano plazo, me gustaría poder dedicarle mas tiempo a mi pasion por el modelado 3d, ya que quisiera eventualmente poder dedicarme a ello como trabajo.</p>
                    <div class="bio-text">
                        <p>Tambien en un futuro me gustaria poder tener un trabajo que me permita viajar y conocer nuevos lugares y dedicarle tiempo a mis intereses como la musica y el modelado 3d.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
