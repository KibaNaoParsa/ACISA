<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="pt-br"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema para o grupo de pesquisa GELLDIS">
        <meta name="author" content="elyas" >
        <title>Administração</title>
        <link href="{url}assets/layout_adm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{url}assets/layout_adm/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{url}assets/layout_adm/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="{url}assets/layout_adm/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="{url}assets/DataTables/datatables.css" />
        <script src="{url}assets/tinymce/tinymce.min.js"></script>
    </head>
    <style>
        #linhas_de_pesquisa{
            overflow: auto;
        }
    </style>
    <body class="fixed-nav bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="{url}unimed">INÍCIO</a>
            <strong class="navbar-brand" href="#">{acao}</strong>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{url}unimed/v_cadastro">
                            <i class="fa fa-user"></i>
                            <span class="nav-link-text">Cadastrar cliente</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{url}unimed/v_editar">
                            <i class="fa fa-edit"></i>
                            <span class="nav-link-text">Editar cliente</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{url}unimed/v_atualizar">
                            <i class="fa fa-list"></i>
                            <span class="nav-link-text">Atualizar mensalidade</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{url}unimed/v_pdf">
                            <i class="fa fa-picture-o"></i>
                            <span class="nav-link-text">PDF</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="alert alert-{cor_alert} alert-dismissible fade show" style="display: {display}" role="alert">
                	<!--">"-->
                    <strong>
                        {msg_erro}
                    </strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {conteudo}
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Tem certeza que deseja sair?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{url}Restrita/deslogar">Logout</a>
                    </div>
                </div>
            </div>
        </div>
		<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 		 crossorigin="anonymous"></script>
        <script src="{url}assets/layout_adm/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/chart.js/Chart.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/datatables/jquery.dataTables.js"></script>
        <script src="{url}assets/layout_adm/vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin.min.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin-datatables.min.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin-charts.min.js"></script>
        <script src="{url}assets/DataTables/datatables.js"></script>
        <script src="{url}assets/js/main.js"></script>
    </div>
</body>

</html>
