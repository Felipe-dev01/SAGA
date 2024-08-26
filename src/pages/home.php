<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header, .footer {
            background-color: #0A3D91;
            color: white;
        }
        .header a, .footer a {
            color: white;
        }
        .profile-info {
            background-color: #F2F2F2;
            padding: 15px;
            border-radius: 5px;
        }
        .comunicados {
            border: 1px solid #000;
            padding: 15px;
        }
        .profile-picture {
            background-color: #ccc;
            width: 150px;
            height: 200px;
        }
        .change-photo-btn {
            display: block;
            margin: 10px 0;
        }
        .office365-package img {
            width: 30px;
            margin: 0 5px;
        }
        .office365-package {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header p-3 d-flex justify-content-between align-items-center">
        <div>
            <img src="../imagens/SagaLogo.png" alt="Logo" style="width: 50px;">
        </div>
        <nav class="nav">
            <a class="nav-link" href="#">Curso</a>
            <a class="nav-link" href="#">Professores</a>
            <a class="nav-link" href="#">Cadastro</a>
            <a class="nav-link" href="#">Solicitações</a>
            <a class="nav-link" href="#">Arquivos</a>
        </nav>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="48" viewBox="0 0 62 48" fill="none">
                <path d="M30.178 12.4525L10.3342 28.7239V46.2855C10.3342 46.7402 10.5156 47.1763 10.8385 47.4978C11.1615 47.8194 11.5995 48 12.0562 48L24.1173 47.9689C24.5726 47.9667 25.0084 47.785 25.3295 47.4637C25.6506 47.1425 25.8308 46.7077 25.8308 46.2544V35.9987C25.8308 35.544 26.0122 35.1079 26.3352 34.7863C26.6581 34.4648 27.0962 34.2842 27.5529 34.2842H34.4413C34.898 34.2842 35.336 34.4648 35.659 34.7863C35.9819 35.1079 36.1633 35.544 36.1633 35.9987V46.2469C36.1626 46.4725 36.2066 46.6961 36.2929 46.9047C36.3791 47.1133 36.5058 47.303 36.6658 47.4627C36.8258 47.6225 37.0159 47.7493 37.2252 47.8358C37.4345 47.9223 37.6588 47.9668 37.8854 47.9668L49.9422 48C50.3989 48 50.837 47.8194 51.1599 47.4978C51.4829 47.1763 51.6643 46.7402 51.6643 46.2855V28.7121L31.8248 12.4525C31.5915 12.2653 31.301 12.1632 31.0014 12.1632C30.7018 12.1632 30.4112 12.2653 30.178 12.4525ZM61.5233 23.5119L52.5253 16.1279V1.28586C52.5253 0.944827 52.3893 0.617764 52.1471 0.376619C51.9048 0.135474 51.5763 0 51.2338 0H45.2065C44.8639 0 44.5354 0.135474 44.2932 0.376619C44.051 0.617764 43.9149 0.944827 43.9149 1.28586V9.06637L34.2787 1.17335C33.354 0.415738 32.1936 0.00151447 30.996 0.00151447C29.7984 0.00151447 28.638 0.415738 27.7133 1.17335L0.46873 23.5119C0.337945 23.6195 0.229742 23.7517 0.150302 23.901C0.0708617 24.0503 0.0217422 24.2137 0.00574979 24.3818C-0.0102426 24.55 0.0072055 24.7197 0.0570972 24.8811C0.106989 25.0426 0.188346 25.1927 0.296521 25.3228L3.0411 28.6446C3.14898 28.7752 3.28167 28.8834 3.43158 28.9628C3.58149 29.0423 3.74567 29.0916 3.91473 29.1078C4.08379 29.124 4.2544 29.1069 4.41679 29.0574C4.57919 29.0079 4.73019 28.927 4.86113 28.8193L30.178 8.05911C30.4112 7.87194 30.7018 7.76987 31.0014 7.76987C31.301 7.76987 31.5915 7.87194 31.8248 8.05911L57.1427 28.8193C57.2734 28.927 57.4242 29.008 57.5863 29.0577C57.7485 29.1073 57.9189 29.1247 58.0879 29.1088C58.2568 29.0929 58.4209 29.0439 58.5708 28.9649C58.7208 28.8858 58.8536 28.778 58.9617 28.6478L61.7062 25.326C61.8143 25.1951 61.8953 25.0443 61.9446 24.8821C61.9939 24.72 62.0105 24.5497 61.9935 24.3811C61.9765 24.2125 61.9262 24.049 61.8455 23.8998C61.7648 23.7506 61.6553 23.6188 61.5233 23.5119Z" fill="white"/>
            </svg>
            <a href="sair.php"><img src="profile-icon.png" alt="Profile" style="width: 30px;"></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-3">
                <div class="profile-info text-center">
                    <div class="profile-picture mb-3"></div>
                    <h5>Aluno</h5>
                    <p>RM 00000</p>
                    <p>RA/SED 00000000-0/SP</p>
                    <button class="btn btn-primary change-photo-btn">Alterar Foto</button>
                    <hr>
                    <h6>Pacote Office 365</h6>
                    <p>E-mail institucional: fulano@etec.sp.gov.br</p>
                    <div class="office365-package d-flex justify-content-center">
                        <img src="word-icon.png" alt="Word">
                        <img src="excel-icon.png" alt="Excel">
                        <img src="powerpoint-icon.png" alt="PowerPoint">
                        <img src="outlook-icon.png" alt="Outlook">
                    </div>
                    <p>Clique aqui para acessar todos os benefícios.</p>
                </div>
            </div>
            
            <!-- Center Column -->
            <div class="col-md-6">
                <div class="profile-info">
                    <h5>Informações</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>E-mail Institucional:</strong> fulano@etec.sp.gov.br</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>E-mail Pessoal:</strong> fulano@gmail.com</p>
                        </div>
                    </div>
                    <hr>
                    <h6>Habilitação</h6>
                    <p>Técnico em Informática para Internet</p>
                    <p>Técnico em Nutrição e Dietética</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Ano de Ingresso:</strong> 2024</p>
                            <p><strong>Semestre de Ingresso:</strong> 1º Semestre</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Situação:</strong> Cursando</p>
                            <p><strong>Módulo Atual:</strong> 2º Módulo/Série</p>
                            <p><strong>Grupo:</strong> Grupo A</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-3">
                <div class="comunicados">
                    <h5>Comunicados</h5>
                    <ul>
                        <li>Questionário sócio-econômico</li>
                        <li>Novo limite de espaço do Microsoft</li>
                        <li>Aviso da secretaria</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer p-3 mt-4 text-center">
        <p>Copyright © 2024. Todos os direitos reservados.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
