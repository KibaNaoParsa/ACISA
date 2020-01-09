<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Unimed/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Rotas para a classe Inicio */
$route['acessar/moderador'] = 'Inicio/login';


/* Rotas para a classe adm/Agenda  */
$route['gerenciar/agenda/(:num)'] = 'adm/Agenda/gerir_agenda/$1';
$route['gerenciar/agenda/adicionar'] = 'adm/Agenda/adicionar_agenda';
$route['gerenciar/agenda/editar/(:num)'] = 'adm/Agenda/editar_agenda/$1';
$route['gerenciar/agenda/excluir/(:num)'] = 'adm/Agenda/excluir_agenda/$1';

/* Rotas para a classe adm/Reuniao */
$route['gerenciar/reuniao/(:num)'] = 'adm/Reuniao/gerir_reuniao/$1';
$route['gerenciar/reuniao/adicionar'] = 'adm/Reuniao/adicionar_reuniao';
$route['gerenciar/reuniao/excluir/(:num)'] = 'adm/Reuniao/excluir_reuniao/$1';
$route['gerenciar/reuniao/editar/(:num)'] = 'adm/Reuniao/editar_reuniao/$1';

$route['gerenciar/reuniaopr/(:num)'] = 'adm/Reuniao/gerir_reuniaopr/$1';
$route['gerenciar/reuniaopr/adicionar'] = 'adm/Reuniao/adicionar_reuniaopr';
$route['gerenciar/reuniaopr/excluir/(:num)'] = 'adm/Reuniao/excluir_reuniaopr/$1';
$route['gerenciar/reuniaopr/editar/(:num)'] = 'adm/Reuniao/editar_reuniaopr/$1';


/* Rotas para a classe adm/Evento  */
$route['gerenciar/evento'] = 'adm/Evento/form_evento';
$route['listar/eventos'] = 'adm/Evento/listar_eventos';
$route['upar/imagens'] = 'adm/Evento/form_imagens';
$route['upar/imagens/evento/(:num)/(:num)'] = 'adm/Evento/tabela_imagens_eventos/$1/$2';
$route['adicionar/imagens/(:num)'] = 'adm/Evento/abrir_upload_imagens/$1';

/* Rotas para a classe do blog  */
$route['blog/noticias/(:num)'] = 'Blog/ultimos_eventos/$1';
$route['blog/evento/(:num)'] = 'Blog/ver_evento/$1';
$route['blog/galeria/(:num)'] = 'Blog/ver_galeria/$1';

$route['blog/reunioes/(:num)'] = 'Blog/proximas_reunioes/$1';
$route['blog/reunioespr/(:num)'] = 'Blog/proximas_reunioespr/$1';
$route['blog/reuniao/(:num)'] = 'Blog/ver_reuniao/$1';
$route['blog/reuniaopr/(:num)'] = 'Blog/ver_reuniaopr/$1';

$route['blog/eventos/(:num)'] = 'Blog/proximos_eventos/$1';
$route['blog/agenda/(:num)'] = 'Blog/ver_prox_evento/$1';

$route['blog/pesquisas'] = 'Blog/ver_pesquisas';
$route['blog/pesquisa/(:num)'] = 'Blog/ver_pesquisa/$1';

$route['blog/revista'] = 'Blog/Revista';

/* Rotas para a classe das pesquisas  */
$route['gerenciar/pesquisas/(:num)'] = 'adm/Pesquisa/listar_pesquisas/$1';
$route['gerenciar/pesquisar/adicionar'] = 'adm/Pesquisa/adicionar_pesquisa';
$route['gerenciar/pesquisar/adicionando'] = 'adm/Pesquisa/adicionando_pesquisa';

$route['gerenciar/pesquisa/excluir/(:num)'] = 'adm/Pesquisa/excluir_pesquisa/$1';
$route['gerenciar/pesquisa/editar/(:num)'] = 'adm/Pesquisa/editar_pesquisa/$1';
$route['gerenciar/pesquisa/editando/(:num)'] = 'adm/Pesquisa/editando_pesquisa/$1';

$route['gerenciar/pesquisador/(:num)'] = 'adm/Pesquisa/listar_pesquisadores/$1';
$route['gerenciar/pesquisadores/adicionar'] = 'adm/Pesquisa/adicionar_pesquisador';
$route['gerenciar/pesquisador/adicionando'] = 'adm/Pesquisa/adicionando_pesquisador';
$route['gerenciar/pesquisador/excluir/(:num)'] = 'adm/Pesquisa/excluir_pesquisador/$1';
$route['gerenciar/pesquisador/editar/(:num)'] = 'adm/Pesquisa/editar_pesquisador/$1';
$route['gerenciar/pesquisador/editando/(:num)'] = 'adm/Pesquisa/editando_pesquisador/$1';

$route['gerenciar/estudante/(:num)'] = 'adm/Pesquisa/listar_estudantes/$1';
$route['gerenciar/estudante/adicionar'] = 'adm/Pesquisa/adicionar_estudante';
$route['gerenciar/estudante/adicionando'] = 'adm/Pesquisa/adicionando_estudante';
$route['gerenciar/estudante/excluir/(:num)'] = 'adm/Pesquisa/excluir_estudante/$1';
$route['gerenciar/estudante/editar/(:num)'] = 'adm/Pesquisa/editar_estudante/$1';
$route['gerenciar/estudante/editando/(:num)'] = 'adm/Pesquisa/editando_estudante/$1';

$route['gerenciar/relacao/pesquisador'] = 'adm/Pesquisa/relacionar_pesquisador';
$route['gerenciar/relacao/pesquisadores/(:num)'] = 'adm/Pesquisa/gerir_pesquisador/$1';
$route['gerenciar/relacao/excluirpesquisador/(:num)/(:num)'] = 'adm/Pesquisa/excluir_relacaopesquisador/$1/$2';
$route['gerenciar/relacionando/pesquisador'] = 'adm/Pesquisa/relacionando_pesquisador';

$route['gerenciar/relacao/estudante'] = 'adm/Pesquisa/relacionar_estudante';
$route['gerenciar/relacao/estudantes/(:num)'] = 'adm/Pesquisa/gerir_estudante/$1';
$route['gerenciar/relacao/excluirestudante/(:num)/(:num)'] = 'adm/Pesquisa/excluir_relacaoestudante/$1/$2';
$route['gerenciar/relacionando/estudante'] = 'adm/Pesquisa/relacionando_estudante';

/* Rotas para a classe Usuarios */
$route['gerenciar/usuarios/(:num)'] = 'adm/Usuario/gerenciar_usuarios/$1';
$route['gerenciar/usuarios/adicionar'] = 'adm/Usuario/adicionar_usuarios';
$route['gerenciar/usuarios/editar/(:num)'] = 'adm/Usuario/editar_usuario/$1';
$route['gerenciar/usuarios/excluir/(:num)'] = 'adm/Usuario/excluir_usuario/$1';
$route['gerenciar/usuarios/perfil'] = 'adm/Usuario/perfil';
