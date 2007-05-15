<?php
/** Portuguese (Português)
 * This translation was made by:
 *  - Yves Marques Junqueira
 *  - Rodrigo Calanca Nishino
 *  - Nuno Tavares
 *  - Paulo Juntas
 *  - Manuel Menezes de Sequeira
 *  - Sérgio Ribeiro
 *  - Lugusto
 * from the Portuguese Wikipedia
 *
 * @addtogroup Language
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media', # -2
	NS_SPECIAL          => 'Especial', # -1
	NS_MAIN             => '', # 0
	NS_TALK             => 'Discussão', # 1
	NS_USER             => 'Usuário',
	NS_USER_TALK        => 'Usuário_Discussão',

	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => '$1_Discussão', # 5
	NS_IMAGE            => 'Imagem', # 6
	NS_IMAGE_TALK       => 'Imagem_Discussão', # 7
	NS_MEDIAWIKI        => 'MediaWiki', # 8
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussão', # 9
	NS_TEMPLATE         => 'Predefinição', # 10
	NS_TEMPLATE_TALK    => 'Predefinição_Discussão', # 11
	NS_HELP             => 'Ajuda', # 12
	NS_HELP_TALK        => 'Ajuda_Discussão', # 13
	NS_CATEGORY         => 'Categoria', # 14
	NS_CATEGORY_TALK    => 'Categoria_Discussão' # 15
);

$skinNames = array(
	'standard' => 'Clássico',
	'nostalgia' => 'Nostalgia',
	'cologneblue' => 'Azul colonial',
	'davinci' => 'DaVinci',
	'mono' => 'Mono',
	'monobook' => 'MonoBook',
	'myskin' => 'MySkin',
	'chick' => 'Chick'
);

# Note to translators:
#   Please include the English words as synonyms.  This allows people
#   from other wikis to contribute more easily.
#
$magicWords = array(
#   ID                                 CASE  SYNONYMS
	'redirect'               => array( 0,    '#REDIRECT', '#redir'    ),
	'notoc'                  => array( 0,    '__NOTOC__'              ),
	'forcetoc'               => array( 0,    '__FORCETOC__'           ),
	'toc'                    => array( 0,    '__TOC__'                ),
	'noeditsection'          => array( 0,    '__NOEDITSECTION__'      ),
	'start'                  => array( 0,    '__START__'              ),
	'currentmonth'           => array( 1,    'CURRENTMONTH'           ),
	'currentmonthname'       => array( 1,    'CURRENTMONTHNAME'       ),
	'currentmonthnamegen'    => array( 1,    'CURRENTMONTHNAMEGEN'    ),
	'currentmonthabbrev'     => array( 1,    'CURRENTMONTHABBREV'     ),
	'currentday'             => array( 1,    'CURRENTDAY'             ),
	'currentdayname'         => array( 1,    'CURRENTDAYNAME'         ),
	'currentyear'            => array( 1,    'CURRENTYEAR'            ),
	'currenttime'            => array( 1,    'CURRENTTIME'            ),
	'numberofarticles'       => array( 1,    'NUMBEROFARTICLES'       ),
	'numberoffiles'          => array( 1,    'NUMBEROFFILES'          ),
	'pagename'               => array( 1,    'PAGENAME'               ),
	'pagenamee'              => array( 1,    'PAGENAMEE'              ),
	'namespace'              => array( 1,    'NAMESPACE'              ),
	'msg'                    => array( 0,    'MSG:'                   ),
	'subst'                  => array( 0,    'SUBST:'                 ),
	'msgnw'                  => array( 0,    'MSGNW:'                 ),
	'img_thumbnail'          => array( 1,    'thumbnail', 'thumb'     ),
	'img_manualthumb'        => array( 1,    'thumbnail=$1', 'thumb=$1'),
	'img_right'              => array( 1,    'right', 'direita'       ),
	'img_left'               => array( 1,    'left', 'esquerda'       ),
	'img_none'               => array( 1,    'none', 'nenhum'         ),
	'img_width'              => array( 1,    '$1px'                   ),
	'img_center'             => array( 1,    'center', 'centre'       ),
	'img_framed'             => array( 1,    'framed', 'enframed', 'frame' ),
	'img_page'               => array( 1,    'page=$1', 'page $1'     ),
	'int'                    => array( 0,    'INT:'                   ),
	'sitename'               => array( 1,    'SITENAME'               ),
	'ns'                     => array( 0,    'NS:'                    ),
	'localurl'               => array( 0,    'LOCALURL:'              ),
	'localurle'              => array( 0,    'LOCALURLE:'             ),
	'server'                 => array( 0,    'SERVER'                 ),
	'servername'             => array( 0,    'SERVERNAME'             ),
	'scriptpath'             => array( 0,    'SCRIPTPATH'             ),
	'grammar'                => array( 0,    'GRAMMAR:'               ),
	'notitleconvert'         => array( 0,    '__NOTITLECONVERT__', '__NOTC__'),
	'nocontentconvert'       => array( 0,    '__NOCONTENTCONVERT__', '__NOCC__'),
	'currentweek'            => array( 1,    'CURRENTWEEK'            ),
	'currentdow'             => array( 1,    'CURRENTDOW'             ),
	'revisionid'             => array( 1,    'REVISIONID'             ),
);

$separatorTransformTable = array(',' => ' ', '.' => ',' );
#$linkTrail = '/^([a-z]+)(.*)$/sD';# ignore list

$messages = array(
# User preference toggles
'tog-underline'               => 'Sublinhar hiperligações',
'tog-highlightbroken'         => 'Formatar links quebrados <a href="" class="new">como isto</a> (alternativa: como isto<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Justificar parágrafos',
'tog-hideminor'               => 'Esconder edições secundárias nas mudanças recentes',
'tog-extendwatchlist'         => 'Expandir a lista de artigos vigiados para mostrar todas as alterações aplicáveis',
'tog-usenewrc'                => 'Mudanças recentes melhoradas (JavaScript)',
'tog-numberheadings'          => 'Auto-numerar cabeçalhos',
'tog-showtoolbar'             => 'Mostrar barra de edição (JavaScript)',
'tog-editondblclick'          => 'Editar páginas quando houver clique duplo (JavaScript)',
'tog-editsection'             => 'Habilitar edição de secção via links [editar]',
'tog-editsectiononrightclick' => 'Habilitar edição de secção por clique <br /> com o botão direito no título da secção (JavaScript)',
'tog-showtoc'                 => 'Mostrar Tabela de Conteúdos (para páginas com mais de três cabeçalhos)',
'tog-rememberpassword'        => 'Lembrar palavra-chave entre sessões',
'tog-editwidth'               => 'Caixa de edição com largura completa',
'tog-watchcreations'          => 'Adicionar páginas criadas por mim à minha lista de artigos vigiados',
'tog-watchdefault'            => 'Adicionar páginas editadas por mim à minha lista de artigos vigiados',
'tog-watchmoves'              => 'Adicionar páginas movidas por mim à minha lista de artigos vigiados',
'tog-watchdeletion'           => 'Adicionar páginas eliminadas por mim à minha lista de artigos vigiados',
'tog-minordefault'            => 'Marcar todas as edições como secundárias, por padrão',
'tog-previewontop'            => 'Mostrar previsão antes da caixa de edição ao invés de ser após',
'tog-previewonfirst'          => 'Mostrar previsão na primeira edição',
'tog-nocache'                 => 'Desactivar caching de páginas',
'tog-enotifwatchlistpages'    => 'Enviar-me um email quando houver mudanças nas páginas',
'tog-enotifusertalkpages'     => 'Enviar-me um email quando a minha página de discussão for editada',
'tog-enotifminoredits'        => 'Enviar-me um email também quando forem edições menores',
'tog-enotifrevealaddr'        => 'Revelar o meu endereço de email nas notificações',
'tog-shownumberswatching'     => 'Mostrar o número de utilizadores a vigiar',
'tog-fancysig'                => 'Assinaturas sem atalhos automáticos.',
'tog-externaleditor'          => 'Utilizar editor externo por padrão',
'tog-externaldiff'            => 'Utilizar diferenças externas por padrão',
'tog-showjumplinks'           => 'Activar hiperligações de acessibilidade "ir para"',
'tog-uselivepreview'          => 'Utilizar pré-visualização em tempo real (JavaScript) (Experimental)',
'tog-forceeditsummary'        => 'Avisar-me ao introduzir um sumário vazio',
'tog-watchlisthideown'        => 'Esconder as minhas edições da lista de artigos vigiados',
'tog-watchlisthidebots'       => 'Esconder edições efectuadas por robôs da lista de artigos vigiados',
'tog-watchlisthideminor'      => 'Esconder edições menores da lista de artigos vigiados',
'tog-nolangconversion'        => 'Desabilitar conversão de variantes de idioma',
'tog-ccmeonemails'            => 'Enviar para mim cópias de e-mails que eu enviar a outros utilizadores',
'tog-diffonly'                => 'Não mostrar o conteúdo da página ao comparar duas edições',

'underline-always'  => 'Sempre',
'underline-never'   => 'Nunca',
'underline-default' => 'Padrão do navegador',

'skinpreview' => '(Pré-visualizar)',

# Dates
'sunday'        => 'Domingo',
'monday'        => 'Segunda-feira',
'tuesday'       => 'Terça-feira',
'wednesday'     => 'Quarta-feira',
'thursday'      => 'Quinta-feira',
'friday'        => 'Sexta-feira',
'saturday'      => 'Sábado',
'sun'           => 'Dom',
'mon'           => 'Seg',
'tue'           => 'Ter',
'wed'           => 'Qua',
'thu'           => 'Qui',
'fri'           => 'Sex',
'sat'           => 'Sáb',
'january'       => 'Janeiro',
'february'      => 'Fevereiro',
'march'         => 'Março',
'april'         => 'Abril',
'may_long'      => 'Maio',
'june'          => 'Junho',
'july'          => 'Julho',
'august'        => 'Agosto',
'september'     => 'Setembro',
'october'       => 'Outubro',
'november'      => 'Novembro',
'december'      => 'Dezembro',
'january-gen'   => 'Janeiro',
'february-gen'  => 'Fevereiro',
'march-gen'     => 'Março',
'april-gen'     => 'Abril',
'may-gen'       => 'Maio',
'june-gen'      => 'Junho',
'july-gen'      => 'Julho',
'august-gen'    => 'Agosto',
'september-gen' => 'Setembro',
'october-gen'   => 'Outubro',
'november-gen'  => 'Novembro',
'december-gen'  => 'Dezembro',
'jan'           => 'Jan',
'feb'           => 'Fev',
'mar'           => 'Mar',
'apr'           => 'Abr',
'may'           => 'Mai',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Ago',
'sep'           => 'Set',
'oct'           => 'Out',
'nov'           => 'Nov',
'dec'           => 'Dez',

# Bits of text used by many pages
'categories'            => 'Categorias',
'pagecategories'        => '{{PLURAL:$1|Categoria|Categorias}}',
'category_header'       => 'Páginas na categoria "$1"',
'subcategories'         => 'Subcategorias',
'category-media-header' => 'Multimídia na categoria "$1"',

'mainpagetext'      => "<big>'''MediaWiki instalado com sucesso.'''</big>",
'mainpagedocfooter' => 'Consulte o [http://meta.wikimedia.org/wiki/Help:Contents Guia de Utilizadores] para informações acerca de como utilizar o software wiki.

== Começando ==

* [http://www.mediawiki.org/wiki/Help:Configuration_settings Lista de configuração de opções]
* [http://www.mediawiki.org/wiki/Help:FAQ MediaWiki Perguntas e respostas frequentes]
* [http://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Lista de e-mail de anúncios de novas versões do MediaWiki]',

'about'          => 'Sobre',
'article'        => 'Artigo',
'newwindow'      => '(abre numa nova janela)',
'cancel'         => 'Cancelar',
'qbfind'         => 'Procurar',
'qbbrowse'       => 'Navegar',
'qbedit'         => 'Editar',
'qbpageoptions'  => 'Esta página',
'qbpageinfo'     => 'Informação da página',
'qbmyoptions'    => 'Minhas opções',
'qbspecialpages' => 'Páginas especiais',
'moredotdotdot'  => 'Mais...',
'mypage'         => 'Minha página',
'mytalk'         => 'Minha discussão',
'anontalk'       => 'Discussão para este IP',
'navigation'     => 'Navegação',

# Metadata in edit box
'metadata_help' => 'Metadados:',

'errorpagetitle'    => 'Erro',
'returnto'          => 'Retornar para $1.',
'tagline'           => 'De {{SITENAME}}',
'help'              => 'Ajuda',
'search'            => 'Pesquisa',
'searchbutton'      => 'Pesquisa',
'go'                => 'Ir',
'searcharticle'     => 'Ir',
'history'           => 'Histórico',
'history_short'     => 'História',
'updatedmarker'     => 'actualizado desde a minha última visita',
'info_short'        => 'Informação',
'printableversion'  => 'Versão para impressão',
'permalink'         => 'Ligação permanente',
'print'             => 'Imprimir',
'edit'              => 'Editar',
'editthispage'      => 'Editar esta página',
'delete'            => 'Eliminar',
'deletethispage'    => 'Eliminar esta página',
'undelete_short'    => 'Restaurar {{PLURAL:$1|uma edição|$1 edições}}',
'protect'           => 'Proteger',
'protect_change'    => 'alterar protecção',
'protectthispage'   => 'Proteger esta página',
'unprotect'         => 'desproteger',
'unprotectthispage' => 'Desproteger esta página',
'newpage'           => 'Nova página',
'talkpage'          => 'Discutir esta página',
'talkpagelinktext'  => 'Discussão',
'specialpage'       => 'Página Especial',
'personaltools'     => 'Ferramentas pessoais',
'postcomment'       => 'Envie um comentário',
'articlepage'       => 'Ver página de conteúdo',
'talk'              => 'Discussão',
'views'             => 'Acessos',
'toolbox'           => 'Ferramentas',
'userpage'          => 'Ver página de utilizador',
'projectpage'       => 'Ver página de projecto',
'imagepage'         => 'Ver página de imagens',
'mediawikipage'     => 'Ver página de mensagens',
'templatepage'      => 'Ver página de predefinições',
'viewhelppage'      => 'Ver página de ajuda',
'categorypage'      => 'Ver página de categorias',
'viewtalkpage'      => 'Ver discussão',
'otherlanguages'    => 'Outras línguas',
'redirectedfrom'    => '(Redireccionado de <b>$1</b>)',
'redirectpagesub'   => 'Página de redireccionamento',
'lastmodifiedat'    => 'Esta página foi modificada pela última vez a $2, $1.', # $1 date, $2 time
'viewcount'         => 'Esta página foi acedida {{plural:$1|uma vez|$1 vezes}}.',
'protectedpage'     => 'Página protegida',
'jumpto'            => 'Ir para:',
'jumptonavigation'  => 'navegação',
'jumptosearch'      => 'pesquisa',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'Sobre',
'aboutpage'         => '{{ns:project}}:Sobre',
'bugreports'        => 'Relatar bugs',
'bugreportspage'    => '{{ns:project}}:Relatos_de_bugs',
'copyright'         => 'Conteúdo disponível sob $1.',
'copyrightpagename' => 'Direitos autorais da {{SITENAME}}',
'copyrightpage'     => '{{ns:project}}:Direitos_de_autor',
'currentevents'     => 'Eventos actuais',
'currentevents-url' => 'Eventos actuais',
'disclaimers'       => 'Alerta de Conteúdo',
'disclaimerpage'    => '{{ns:project}}:Aviso_geral',
'edithelp'          => 'Ajuda de edição',
'edithelppage'      => 'Ajuda:Editar',
'faq'               => 'FAQ',
'faqpage'           => '{{ns:project}}:FAQ',
'helppage'          => 'Ajuda:Conteúdos',
'mainpage'          => 'Página principal',
'policy-url'        => 'Project:Políticas',
'portal'            => 'Portal comunitário',
'portal-url'        => '{{ns:project}}:Portal comunitário',
'privacy'           => 'Política de privacidade',
'privacypage'       => '{{ns:project}}:Política_de_privacidade',
'sitesupport'       => 'Doações',
'sitesupport-url'   => '{{ns:project}}:Apoio',

'badaccess'        => 'Erro de permissão',
'badaccess-group0' => 'Você não está autorizado a executar a acção requisitada.',
'badaccess-group1' => 'A acção que você requisitou está limitada a utilizadores do grupo $1.',
'badaccess-group2' => 'A acção que você requisitou está limitada a utilizadores de um dos seguintes grupos: $1.',
'badaccess-groups' => 'A acção que você requisitou está limitada a utilizadores de um dos seguintes grupos: $1.',

'versionrequired'     => 'É necessária a versão $1 do MediaWiki',
'versionrequiredtext' => 'Esta página requer a versão $1 do MediaWiki para poder ser utilizada. Consulte [[{{ns:special}}:Version|a página sobre a versão do sistema]]',

'ok'                  => 'OK',
'pagetitle'           => '$1 - {{SITENAME}}',
'retrievedfrom'       => 'Obtido em "$1"',
'youhavenewmessages'  => 'Você tem $1 ($2).',
'newmessageslink'     => 'novas mensagens',
'newmessagesdifflink' => 'comparar com a penúltima revisão',
'editsection'         => 'editar',
'editold'             => 'editar',
'editsectionhint'     => 'Editar secção: $1',
'toc'                 => 'Tabela de conteúdo',
'showtoc'             => 'mostrar',
'hidetoc'             => 'esconder',
'thisisdeleted'       => 'Ver ou restaurar $1?',
'viewdeleted'         => 'Ver $1?',
'restorelink'         => '{{PLURAL:$1|uma edição eliminada|$1 edições eliminadas}}',
'feedlinks'           => 'Feed:',
'feed-invalid'        => 'Tipo de subscrição feed inválido.',

# Short words for each namespace, by default used in the 'article' tab in monobook
'nstab-main'      => 'Artigo',
'nstab-user'      => 'Página de utilizador',
'nstab-media'     => 'Mídia',
'nstab-special'   => 'Especial',
'nstab-project'   => 'Página de projecto',
'nstab-image'     => 'Ficheiro',
'nstab-mediawiki' => 'Mensagem',
'nstab-template'  => 'Predefinição',
'nstab-help'      => 'Ajuda',
'nstab-category'  => 'Categoria',

# Main script and global functions
'nosuchaction'      => 'Acção não existente',
'nosuchactiontext'  => 'A acção especificada pelo URL não é reconhecida pelo MediaWiki',
'nosuchspecialpage' => 'Não existe a página especial requisitada',
'nospecialpagetext' => 'Você requisitou uma página especial inválida; uma lista de páginas especiais válidas poderá ser encontrada em [[{{ns:special}}:Specialpages]].',

# General errors
'error'                => 'Erro',
'databaseerror'        => 'Erro na base de dados',
'dberrortext'          => 'Ocorreu um erro de sintaxe na pesquisa à base de dados.
A última tentativa de busca na base de dados foi:
<blockquote><tt>$1</tt></blockquote>
na função "<tt>$2</tt>".
O MySQL retornou o erro "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Ocorre um erro de sintaxe na pesquisa à base de dados.
A última tentativa de busca na base de dados foi:
<blockquote><tt>$1</tt></blockquote>
na função "<tt>$2</tt>".
O MySQL retornou o erro "<tt>$3: $4</tt>".',
'noconnect'            => 'Desculpe! A wiki está a experienciar algumas dificuldades técnicas e não pode contactar o servidor da base de dados. <br />
$1',
'nodb'                 => 'Não foi possível seleccionar a base de dados $1',
'cachederror'          => 'A página apresentada é uma cópia em cache da página requisitada e pode não estar actualizada.',
'laggedslavemode'      => 'Aviso: A página poderá não conter actualizações recentes.',
'readonly'             => 'Base de dados no modo "somente leitura"',
'enterlockreason'      => 'Introduza um motivo para trancar, incluindo uma estimativa de quando poderá ser destrancada',
'readonlytext'         => 'A base de dados está actualmente trancada para novas entradas e outras modificações, provavelmente por uma manutenção de rotina; a situação deverá ser normalizada dentro de algum tempo.

Quem fez o bloqueio oferece a seguinte explicação: $1',
'missingarticle'       => 'A base de dados não encontrou o texto de uma página que deveria ter encontrado. A página em questão é "$1".

Isto é geralmente causado ao se acessar um diff ou link de histórico que leva a uma página que foi eliminada.

Se este não for o caso, você pode ter encontrado um "bug" no software.
Por favor, tome nota do URL e comunique o erro a um administrador do sistema.',
'readonly_lag'         => 'A base de dados foi automaticamente bloqueada enquanto os servidores secundários se sincronizam com o principal',
'internalerror'        => 'Erro interno',
'filecopyerror'        => 'Não foi possível copiar o ficheiro "$1" para "$2".',
'filerenameerror'      => 'Não foi possível renomear o ficheiro "$1" para "$2".',
'filedeleteerror'      => 'Não foi possível eliminar o ficheiro "$1".',
'filenotfound'         => 'Não foi possível encontrar o ficheiro "$1".',
'unexpected'           => 'Valor não esperado: "$1"="$2".',
'formerror'            => 'Erro: Não foi possível enviar o formulário',
'badarticleerror'      => 'Esta acção não pode ser realizada nesta página.',
'cannotdelete'         => 'Não foi possível eliminar a página ou ficheiro especificado (provavelmente por já ter sido eliminada por outra pessoa.)',
'badtitle'             => 'Título inválido',
'badtitletext'         => 'O título de página requisitado é inválido, vazio, ou uma ligação incorrecta de inter-linguagem ou título inter-wiki. Pode ser que ele contenha um ou mais caracteres que não podem ser utilizados em títulos.',
'perfdisabled'         => 'Desculpe-nos! Esta opção foi temporariamente desabilitada devido a tornar a base de dados lenta demais, a ponto de impossibilitar o funcionamento da wiki.',
'perfdisabledsub'      => 'Está disponível uma cópia de $1 salvaguardada:', # obsolete?
'perfcached'           => 'Os dados seguintes encontram-se na cache e podem não estar actualizados.',
'perfcachedts'         => 'Os seguintes dados encontram-se armazenados na cache e foram actualizados pela última vez a $1.',
'querypage-no-updates' => 'Momentaneamente as atualizações para esta página estão desativadas. Por enquanto, os dados aqui presentes não poderão ser atualizados.',
'wrong_wfQuery_params' => 'Parâmetros incorrectos para wfQuery()<br />
Function: $1<br />
Query: $2',
'viewsource'           => 'Ver código',
'viewsourcefor'        => 'para $1',
'protectedpagetext'    => 'Esta página foi protegida contra novas edições.',
'viewsourcetext'       => 'Você pode ver e copiar o código desta página:',
'protectedinterface'   => 'Esta página fornece texto de interface ao software e encontra-se trancada para prevenir abusos.',
'editinginterface'     => "'''Aviso:''' Encontra-se a editar uma página que é utilizada para fornecer texto de interface ao software. Alterações nesta página irão afectar a aparência da interface de utilizador para outros utilizadores.",
'sqlhidden'            => '(Consulta SQL em segundo-plano)',
'cascadeprotected'     => 'Esta página foi protegida contra edições por estar incluída {{PLURAL:$1|na página listada|nas páginas listadas}} a seguir ({{PLURAL:$1|página essa que está protegida|páginas essas que estão protegidas}} com a opção de "proteção progressiva" ativada):',

# Login and logout pages
'logouttitle'                => 'Desautenticar do sistema',
'logouttext'                 => '<strong>Você agora está desautenticado.</strong><br />
Pode continuar a utilizar a {{SITENAME}} anonimamente, ou pode autenticar-se
novamente com o mesmo nome de utilizador ou com um nome de utilizador diferente. Tenha em atenção que algumas páginas poderão
continuar a ser apresentadas como se você ainda estivesse, até que a cache
de seu navegador seja limpa.',
'welcomecreation'            => '== Bem-vindo, $1! ==

A sua conta foi criada. Não se esqueça de personalizar as suas [[{{ns:special}}:Preferences|preferências]] na {{SITENAME}}.',
'loginpagetitle'             => 'Autenticação de utilizador',
'yourname'                   => 'Seu nome de utilizador',
'yourpassword'               => 'Palavra-chave',
'yourpasswordagain'          => 'Repita a sua palavra-chave',
'remembermypassword'         => 'Lembrar a minha palavra-chave entre sessões.',
'yourdomainname'             => 'Seu domínio',
'externaldberror'            => 'Ocorreu um erro externo à base de dados durante a autenticação ou não lhe é permitido actualizar a sua conta externa.',
'loginproblem'               => '<b>Houve um problema com a sua autenticação.</b><br />Tente novamente!',
'alreadyloggedin'            => '<strong>Utilizador $1, você já está autenticado!</strong><br />',
'login'                      => 'Entrar',
'loginprompt'                => 'Você necessita de ter os <i>cookies</i> ligados para poder autenticar-se na {{SITENAME}}.',
'userlogin'                  => 'Criar uma conta ou entrar',
'logout'                     => 'Sair',
'userlogout'                 => 'Sair',
'notloggedin'                => 'Não autenticado',
'nologin'                    => 'Não possui uma conta? $1.',
'nologinlink'                => 'Criar uma conta',
'createaccount'              => 'Criar nova conta',
'gotaccount'                 => 'Já possui uma conta? $1.',
'gotaccountlink'             => 'Entrar',
'createaccountmail'          => 'por email',
'badretype'                  => 'As palavras-chaves que introduziu não são iguais.',
'userexists'                 => 'O nome de utilizador que introduziu já existe. Por favor, escolha um nome diferente.',
'youremail'                  => 'Endereço de email *:',
'username'                   => 'Nome de utilizador:',
'uid'                        => 'Número de identificação:',
'yourrealname'               => 'Nome verdadeiro *:',
'yourlanguage'               => 'Idioma:',
'yourvariant'                => 'Variante',
'yournick'                   => 'Alcunha:',
'badsig'                     => 'Assinatura inválida; verifique o código HTML utilizado.',
'email'                      => 'E-mail',
'prefs-help-realname'        => 'O fornecimento de seu Nome verdadeiro é opcional, mas, caso decida o revelar, este será utilizado para lhe dar crédito pelo seu trabalho.',
'loginerror'                 => 'Erro de autenticação',
'prefs-help-email'           => 'O fornecimento de um endereço de e-mail é opcional, mas permite que os utilizadores entrem em contacto consigo sem que tenha de lhes revelar o seu endereço de e-mail.',
'nocookiesnew'               => 'A conta de utilizador foi criada, mas você não foi autenticado. {{SITENAME}} utiliza <i>cookies</i> para ligar os utilizadores às suas contas. Por favor, os active, depois autentique-se com o seu nome de utilizador e a sua palavra-chave.',
'nocookieslogin'             => 'Você tem os <i>cookies</i> desactivados no seu navegador, e a {{SITENAME}} utiliza <i>cookies</i> para ligar os utilizadores às suas contas. Por favor os active e tente novamente.',
'noname'                     => 'Você não colocou um nome de utilizador válido.',
'loginsuccesstitle'          => 'Login bem sucedido',
'loginsuccess'               => "'''Encontra-se agora ligado à {{SITENAME}} como \"\$1\"'''.",
'nosuchuser'                 => 'Não existe nenhum utilizador com o nome "$1".
Verifique o nome que introduziu, ou crie uma nova conta de utilizador.',
'nosuchusershort'            => 'Não existe um utilizador com o nome "$1". Verifique o nome que introduziu.',
'nouserspecified'            => 'Precisa de especificar um nome de utilizador.',
'wrongpassword'              => 'A palavra-chave que introduziu é inválida. Por favor, tente novamente.',
'wrongpasswordempty'         => 'A palavra-chave introduzida está em branco. Por favor, tente novamente.',
'mailmypassword'             => 'Enviar uma nova palavra-chave por correio electrónico',
'passwordremindertitle'      => 'Lembrador de palavras-chave da {{SITENAME}}',
'passwordremindertext'       => 'Alguém (provavelmente você, a partir do endereço de IP $1) solicitou que fosse lhe enviada uma nova palavra-chave para {{SITENAME}} ($4).
A palavra-chave para o utilizador "$2" é a partir de agora "$3". Você pode entrar na sua conta e alterar a palavra-chave.

Caso tenha sido outra pessoa a fazer este pedido, ou caso você já se tenha lembrado da sua palavra-chave não deseja a alterar, pode ignorar esta mensagem e continuar a utilizar a palavra-chave antiga.',
'noemail'                    => 'Não há um endereço de correio electrónico associado ao utilizador "$1".',
'passwordsent'               => 'Uma nova palavra-chave encontra-se a ser enviada para o endereço de correio electrónico associado ao utilizador "$1".
Por favor, volte a efectuar a autenticação ao recebê-la.',
'blocked-mailpassword'       => 'O seu endereço de IP foi bloqueado de editar e, portanto, não será possível utilizar o lembrete de palavra-chave (para serem evitados envios abusivos a outras pessoas).',
'eauthentsent'               => 'Um email de confirmação foi enviado para o endereço de correio electrónico nomeado.
Antes de qualquer outro email seja enviado para a conta, terá seguir as instruções no email,
de modo a confirmar que a conta é mesmo sua.',
'throttled-mailpassword'     => 'Um lembrete de palavra-chave já foi enviado nas últimas
$1 horas. Para prevenir abusos, apenas um lembrete poderá ser enviado a cada
$1 horas.',
'mailerror'                  => 'Erro a enviar o mail: $1',
'acct_creation_throttle_hit' => 'Pedimos desculpa, mas já foram criadas $1 contas por si. Não lhe é possível criar mais nenhuma.',
'emailauthenticated'         => 'O seu endereço de correio electrónico foi autenticado em $1.',
'emailnotauthenticated'      => 'O seu endereço de correio electrónico ainda não foi autenticado. Não lhe será enviado nenhum correio sobre nenhuma das seguintes funcionalidades.',
'noemailprefs'               => 'Especifique um endereço de e-mail para que os seguintes recursos funcionem.',
'emailconfirmlink'           => 'Confirme o seu endereço de correio electrónico',
'invalidemailaddress'        => 'O endereço de correio electrónico não pode ser aceite devido a talvez possuír um formato inválido. Por favor, introduza um endereço bem formatado ou esvazie o campo.',
'accountcreated'             => 'Conta criada',
'accountcreatedtext'         => 'A conta de utilizador para $1 foi criada.',

# Password reset dialog
'resetpass'               => 'Criar nova palavra-chave',
'resetpass_announce'      => 'Você foi autenticado através de uma palavra-chave temporária. Para prosseguir, será necessário definir uma nova palavra-chave.',
'resetpass_text'          => '<!-- Adicionar texto aqui -->',
'resetpass_header'        => 'Criar nova palavra-chave',
'resetpass_submit'        => 'Definir palavra-chave e entrar',
'resetpass_success'       => 'Sua palavra-chave foi alterada com sucesso! Autenticando-se...',
'resetpass_bad_temporary' => 'Palavra-chave temporária incorrecta. Pode ser que você já tenha conseguido alterar a sua palavra-chave ou pedido que uma nova temporária fosse gerada.',
'resetpass_forbidden'     => 'Não é possível alterar palavras-chave neste wiki',
'resetpass_missing'       => 'Sem dados no formulário.',

# Edit page toolbar
'bold_sample'     => 'Texto a negrito',
'bold_tip'        => 'Texto a negrito',
'italic_sample'   => 'Texto em itálico',
'italic_tip'      => 'Texto em itálico',
'link_sample'     => 'Título da ligação',
'link_tip'        => 'Ligação interna',
'extlink_sample'  => 'http://www.wikimedia.org ligação externa',
'extlink_tip'     => 'Ligação externa (lembre-se do prefixo http://)',
'headline_sample' => 'Texto de cabeçalho',
'headline_tip'    => 'Secção de nível 2',
'math_sample'     => 'Inserir fórmula aqui',
'math_tip'        => 'Fórmula matemática (LaTeX)',
'nowiki_sample'   => 'Inserir texto não-formatado aqui',
'nowiki_tip'      => 'Ignorar formato wiki',
'image_sample'    => 'Exemplo.jpg',
'image_tip'       => 'Imagem anexa',
'media_sample'    => 'Exemplo.ogg',
'media_tip'       => 'Ligação a ficheiro interno de multimédia',
'sig_tip'         => 'Sua assinatura, com hora e data',
'hr_tip'          => 'Linha horizontal (utilize moderadamente)',

# Edit pages
'summary'                   => 'Sumário',
'subject'                   => 'Assunto/cabeçalho',
'minoredit'                 => 'Marcar como edição menor',
'watchthis'                 => 'Observar esta página',
'savearticle'               => 'Salvar página',
'preview'                   => 'Prever',
'showpreview'               => 'Mostrar previsão',
'showlivepreview'           => 'Pré-visualização em tempo real',
'showdiff'                  => 'Mostrar alterações',
'anoneditwarning'           => "'''Atenção''': Você não se encontra autenticado. O seu endereço de IP será registado no histórico de edições desta página.",
'missingsummary'            => "'''Lembrete:''' Você não introduziu um sumário de edição. Se carregar novamente em Salvar a sua edição será salva sem um sumário.",
'missingcommenttext'        => 'Por favor, introduzida um comentário abaixo.',
'missingcommentheader'      => "'''Lembrete:''' Você não introduziu um assunto/título para este comentário. Se carregar novamente em Salvar a sua edição será salva sem um título/assunto.",
'summary-preview'           => 'Previsão de sumário',
'subject-preview'           => 'Previsão de assunto/título',
'blockedtitle'              => 'O utilizador está bloqueado',
'blockedtext'               => '<big>O seu nome de utilizador ou endereço de IP foi bloqueado</big>

O bloqueio foi realizado por $1. O motivo apresentado foi \'\'$2\'\'.

Expiração do bloqueio: $6

Você pode contactar $1 ou outro [[{{MediaWiki:grouppage-sysop}}|administrador]] para discutir sobre o bloqueio.

Note que não poderá utilizar a funcionalidade "Contactar utilizador" se não possuir uma conta neste wiki ({{SITENAME}}) e um endereço de email válido indicado nas suas [[{{ns:special}}|preferências de utilizador]].

O seu endereço de IP é $3 e a ID de bloqueio é $5. Por favor, inclua um desses (ou ambos) dados em quaisquer tentativas de esclarecimentos.',
'autoblockedtext'           => 'O seu endereço de IP foi bloqueado de forma automática uma vez que foi utilizado recentemente por outro utilizador, o qual foi bloqueado por $1.
O motivo apresentado foi:

:\'\'$2\'\'

Expiração do bloqueio: $6

Você pode contactar $1 ou outro [[{{MediaWiki:grouppage-sysop}}|administrador]] para discutir sobre o bloqueio.

Note que não poderá utilizar a funcionalidade "Contactar utilizador" se não possuir uma conta neste wiki ({{SITENAME}}) e um endereço de email válido indicado nas suas [[{{ns:special}}|preferências de utilizador]].

Sua ID de bloqueio é $5. Por favor, inclua esse dado em qualquer tentativa de esclarecimentos.',
'blockedoriginalsource'     => "O código de '''$1''' é mostrado abaixo:",
'blockededitsource'         => "O texto das '''suas edições''' em '''$1''' é mostrado abaixo:",
'whitelistedittitle'        => 'Autentificação necessária para visualizar',
'whitelistedittext'         => 'Precisa de se $1 para poder editar páginas.',
'whitelistreadtitle'        => 'É necessária a autentificação para poder visualizar',
'whitelistreadtext'         => 'Precisa de se [[{{ns:special}}:Userlogin|autenticar]] para poder visualizar páginas.',
'whitelistacctitle'         => 'Não lhe é permitido criar uma conta',
'whitelistacctext'          => 'De modo a poder criar contas de utilizador neste Wiki terá que se [[{{ns:special}}:Userlogin|autenticar]] e possuir as devidas permissões.',
'confirmedittitle'          => 'Confirmação de e-mail requerida para editar',
'confirmedittext'           => 'Você precisa confirmar o seu endereço de e-mail antes de começar a editar páginas. Por favor, introduza um e valide-o através das suas [[{{ns:special}}:Preferences|preferências de utilizador]].',
'nosuchsectiontitle'        => 'Secção inexistente',
'nosuchsectiontext'         => 'Você tentou editar uma secção que não existe. Uma vez que não há a secção $1, não há um local para salvar a sua edição.',
'loginreqtitle'             => 'Autenticação Requerida',
'loginreqlink'              => 'autenticar-se',
'loginreqpagetext'          => 'Você precisa de $1 para poder visualizar outras páginas.',
'accmailtitle'              => 'Palavra-chave enviada.',
'accmailtext'               => "A palavra-chave para '$1' foi enviada para $2.",
'newarticle'                => '(Novo)',
'newarticletext'            => "Você seguiu um link para uma página que ainda não existe. 
Para criá-la, escreva o seu conteúdo na caixa abaixo
(veja a [[{{MediaWiki:helppage}}|página de ajuda]] para mais detalhes).
Se você chegou até aqui por engano, clique no botão '''voltar''' (ou ''back'') do seu navegador.",
'anontalkpagetext'          => "----
''Esta é a página de discussão para um utilizador anónimo que ainda não criou uma conta ou que não a utiliza, de modo a que temos que utilizar o endereço de IP para identificá-lo(a). Um endereço de IP pode ser partilhado por vários utilizadores. Se é um utilizador anónimo e sente que comentários irrelevantes foram direccionados a você, por favor [[{{ns:special}}:Userlogin|crie uma conta ou autentique-se]] para evitar futuras confusões com outros utilizadores anónimos.''",
'noarticletext'             => 'Não existe actualmente texto nesta página; você pode [[{{ns:special}}:Search/{{PAGENAME}}|pesquisar pelo título desta página noutras páginas]] ou [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta página].',
'clearyourcache'            => "'''Nota:''' Após salvar, terá de limpar a cache do seu navegador para ver as alterações.
'''Mozilla / Firefox / Safari:''' pressione ''Shift'' enquanto clica em ''Recarregar'', ou pressione ''Ctrl-Shift-R'' (''Cmd-Shift-R'' no Apple Mac); '''IE:''' pressione ''Ctrl'' enquanto clica em ''Recarregar'', ou pressione ''Ctrl-F5''; '''Konqueror:''': simplesmente clique no botão ''Recarregar'', ou pressione ''F5''; utilizadores do navegador '''Opera''' talvez precisem limpar completamente a sua cache em ''Ferramentas→Preferências''.",
'usercssjsyoucanpreview'    => '<strong>Dica:</strong> Utilize o botão "Mostrar previsão" para testar seu novo CSS/JS antes de salvar.',
'usercsspreview'            => "'''Lembre-se que está apenas a prever o seu CSS particular e que ele ainda não foi salvo!'''",
'userjspreview'             => "'''Lembre-se que está apenas a testar/prever o seu JavaScript particular e que ele ainda não foi salvo!'''",
'userinvalidcssjstitle'     => "'''Aviso:''' Não existe um tema \"\$1\". Lembre-se que as páginas .css e  .js utilizam um título em minúsculas, exemplo: {{ns:user}}:Alguém/monobook.css aposto a {{ns:user}}:Alguém/Monobook.css.",
'updated'                   => '(Actualizado)',
'note'                      => '<strong>Nota:</strong>',
'previewnote'               => '<strong>Isto é apenas uma previsão. As modificações ainda não foram salvas!</strong>',
'previewconflict'           => 'Esta previsão reflete o texto que está na área de edição acima e como ele aparecerá se você escolher salvar.',
'session_fail_preview'      => '<strong>Pedimos desculpas, mas não foi possível processar a sua edição devido à perda de dados da sua sessão.
Por favor tente novamente. Caso continue a não funcionar, tente sair e voltar a entrar na sua conta.</strong>',
'session_fail_preview_html' => "<strong>Desculpe-nos! Não foi possível processar a sua edição devido a uma perda de dados de sessão.</strong>

''Devido a este wiki possuir HTML raw activo, a previsão não será exibida como forma de precaução contra ataques por JavaScript.''

<strong>Por favor, tente novamente caso esta seja uma tentativa de edição legítima. Caso continue a não funcionar, tente desautenticar-se e voltar a entrar na sua conta.</strong>",
'importing'                 => 'Importando $1',
'editing'                   => 'Editando $1',
'editinguser'               => 'Editando utilizador $1',
'editingsection'            => 'Editando $1 (secção)',
'editingcomment'            => 'Editando $1 (comentário)',
'editconflict'              => 'Conflito de edição: $1',
'explainconflict'           => 'Alguém mudou a página enquanto você a estava editando.
A área de texto acima mostra o texto da forma como está no momento.
Suas mudanças são mostradas na área abaixo
Você terá que mesclar suas modificações no texto existente.
<b>SOMENTE</b> o texto na área acima será salvo quando você pressionar
"Salvar página".<br />',
'yourtext'                  => 'Seu texto',
'storedversion'             => 'Versão guardada',
'nonunicodebrowser'         => '<strong>AVISO: O seu navegador não é compatível com as especificações unicode. Um contorno terá de ser utilizado para permitir que você possa editar com segurança os artigos: os caracteres não-ASCII aparecerão na caixa de edição no formato de códigos hexadecimais.</strong>',
'editingold'                => '<strong>CUIDADO: Encontra-se a editar uma revisão 
desactualizada desta página.
Se salvá-la, todas as mudanças feitas a partir desta revisão serão perdidas.</strong>',
'yourdiff'                  => 'Diferenças',
'copyrightwarning'          => 'Por favor, note que todas as suas contributições em {{SITENAME}} são consideradas como lançadas nos termos da licença $2 (veja $1 para detalhes). Se você não deseja que o seu texto seja inexoravelmente editado e redistribuído de tal forma, não o envie.<br />
Você está, ao mesmo tempo, garantindo a nós que isto é algo escrito por você mesmo ou algo copiado de alguma fonte de textos em domínio público ou similarmente de teor livre.
<strong>NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS AUTORAIS SEM A DEVIDA PERMISSÃO!</strong>',
'copyrightwarning2'         => 'Por favor, note que todas as suas contributições em {{SITENAME}} podem ser editadas, alteradas ou removidas por outros contribuidores. Se você não deseja que o seu texto seja inexoravelmente editado, não o envie.<br />
Você está, ao mesmo tempo, garantindo a nós que isto é algo escrito por você mesmo ou algo copiado de alguma fonte de textos em domínio público ou similarmente de teor livre (veja $1 para detalhes).
<strong>NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS AUTORAIS SEM A DEVIDA PERMISSÃO!</strong>',
'longpagewarning'           => '<strong>AVISO: Esta página possui $1 kilobytes; alguns 
navegadores possuem problemas em editar páginas maiores que 32kb.
Por favor, considere seccionar a página em secções de menor dimensão.</strong>',
'longpageerror'             => '<strong>ERRO: O texto de página que você submeteu tem mais de $1 kilobytes em tamanho, que é maior que o máximo de $2 kilobytes. A página não pode ser salva.</strong>',
'readonlywarning'           => '<strong>AVISO: A base de dados foi bloqueada para manutenção, pelo que não poderá salvar a sua edição neste momento. Pode, no entanto, copiar o seu texto num editor externo e guardá-lo para posterior submissão.</strong>',
'protectedpagewarning'      => '<strong>AVISO: Esta página foi protegida e poderá ser editada apenas por utilizadores com privilégios sysop (administradores).</strong>',
'semiprotectedpagewarning'  => "'''Nota:''' Esta página foi protegida de modo a que apenas utilizadores registados a possam editar.",
'cascadeprotectedwarning'   => "'''Atenção:''' Esta página se encontra protegida de forma que apenas {{int:group-sysop}} possam editá-la, uma vez que se encontra incluída {{PLURAL:\$1|na seguinte página protegida|nas seguintes páginas protegidas}} com a \"proteção progressiva\":",
'templatesused'             => 'Predefinições utilizadas nesta página:',
'templatesusedpreview'      => 'Predefinições utilizadas nesta previsão:',
'templatesusedsection'      => 'Predefinições utilizadas nesta secção:',
'template-protected'        => '(protegida)',
'template-semiprotected'    => '(semi-protegida)',
'edittools'                 => '<!-- O texto aqui disponibilizado será exibido abaixo dos formulários de edição e de envio de ficheiros. -->',
'nocreatetitle'             => 'A criação de páginas encontra-se limitada',
'nocreatetext'              => 'Este website tem restringida a habilidade de criar novas páginas.
Pode voltar atrás e editar uma página já existente, ou [[{{ns:special}}:Userlogin|autenticar-se ou criar uma conta]].',

# "Undo" feature
'undo-success' => 'A edição pôde ser desfeita. Por gentileza, verifique o comparativo a seguir para se certificar  de que é isto que deseja fazer, salvando as alterações após ter terminado de revisá-las.',
'undo-failure' => 'A edição não pôde ser desfeita devido a alterações intermediárias conflitantes.',
'undo-summary' => 'Desfeita a edição $1 de [[{{ns:special}}:Contributions/$2|$2]] ([[User talk:$2|Discussão]])',

# Account creation failure
'cantcreateaccounttitle' => 'Não é possível criar uma conta',
'cantcreateaccounttext'  => 'A criação de contas a partir deste endereço IP (<b>$1</b>) foi bloqueada. 
Isto é provavelmente devido a vandalismo persistente efectuada a partir da sua escola ou ISP.',

# History pages
'revhistory'          => 'Histórico de edições',
'viewpagelogs'        => 'Ver registos para esta página',
'nohistory'           => 'Não há histórico de edições para esta página.',
'revnotfound'         => 'Revisão não encontrada',
'revnotfoundtext'     => 'A antiga revisão desta página que requesitou não pode ser encontrada. Por favor verifique o URL que utilizou para aceder esta página.',
'loadhist'            => 'Carregando histórico',
'currentrev'          => 'Revisão actual',
'revisionasof'        => 'Revisão de $1',
'revision-info'       => 'Revisão de $1; $2',
'previousrevision'    => '← Versão anterior',
'nextrevision'        => 'Versão posterior →',
'currentrevisionlink' => 'ver versão actual',
'cur'                 => 'act',
'next'                => 'prox',
'last'                => 'ult',
'orig'                => 'orig',
'page_first'          => 'primeira',
'page_last'           => 'última',
'histlegend'          => 'Selecção de diferença: marque as caixas em uma das versões que deseja comparar e carregue no botão.<br />
Legenda: (actu) = diferenças da versão actual,
(ult) = diferença da versão precedente, m = edição menor',
'deletedrev'          => '[eliminada]',
'histfirst'           => 'Mais antigas',
'histlast'            => 'Mais recentes',
'historysize'         => '($1 bytes)',
'historyempty'        => '(vazio)',

# Revision feed
'history-feed-title'          => 'História de revisão',
'history-feed-description'    => 'Histórico de revisões para esta página nesta wiki',
'history-feed-item-nocomment' => '$1 a $2', # user at time
'history-feed-empty'          => 'A página requisitada não existe.
Poderá ter sido eliminada da wiki ou renomeada.
Tente [[{{ns:special}}:Search|pesquisar na wiki]] por páginas relevantes.',

# Revision deletion
'rev-deleted-comment'         => '(comentário removido)',
'rev-deleted-user'            => '(nome de utilizador removido)',
'rev-deleted-event'           => '(entrada removida)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Esta revisão desta página foi removida dos arquivos públicos.
Poderão existir detalhes no [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} registo de eliminação].
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
A revisão desta página foi removida dos arquivos públicos.
Como um administrador desta wiki pode a ver;
mais detalhes no [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} registo de eliminação].
</div>',
'rev-delundel'                => 'mostrar/esconder',
'revisiondelete'              => 'Eliminar/restaurar edições',
'revdelete-nooldid-title'     => 'Nenhuma revisão seleccionada',
'revdelete-nooldid-text'      => 'Não especificou nenhuma revisão, ou revisões,
no qual aplicar esta função.',
'revdelete-selected'          => "{{PLURAL:$2|Edição seleccionada|Edições seleccionadas}} para '''[[:$1]]''':",
'logdelete-selected'          => "{{PLURAL:$2|Evento de registo selecionado|Eventos de registo selecionados}} para '''$1:'''",
'revdelete-text'              => "Revisões eliminadas continuarão a aparecer no histórico da página, apesar de o seu conteúdo textual estar inacessível ao público.

Outros administradores nesta wiki continuarão a poder aceder ao conteúdo escondido e restaurá-lo através desta mesma ''interface'', a menos que uma restrição adicional seja definida.",
'revdelete-legend'            => 'Atribuir restrições de revisões:',
'revdelete-hide-text'         => 'Esconder texto de revisão',
'revdelete-hide-name'         => 'Ocultar acção e alvo',
'revdelete-hide-comment'      => 'Esconder comentário de edição',
'revdelete-hide-user'         => 'Esconder nome de utilizador/IP do editor',
'revdelete-hide-restricted'   => 'Aplicar estas restrições a administrador tal como a outros',
'revdelete-suppress'          => 'Suprimir dados de administradores, bem como de outros',
'revdelete-hide-image'        => 'Ocultar conteúdos do ficheiro',
'revdelete-unsuppress'        => 'Remover restrições das edições restauradas',
'revdelete-log'               => 'Comentário de registo:',
'revdelete-submit'            => 'Aplicar a revisões seleccionadas',
'revdelete-logentry'          => 'modificada visibilidade de revisão para [[$1]]',
'logdelete-logentry'          => 'alterada visibilidade de eventos para [[$1]]',
'revdelete-logaction'         => '$1 {{PLURAL:$1|edição definida|edições definidas}} como $2',
'logdelete-logaction'         => '$1 {{PLURAL:$1|evento|eventos}} de [[$3]] {{PLURAL:$1|definido|definidos}} como $2',
'revdelete-success'           => 'Visibilidade de edição definida com sucesso.',
'logdelete-success'           => 'Visibilidade de evento definida com sucesso.',

# Oversight log
'oversightlog'    => 'Registo de edições ocultadas',
'overlogpagetext' => 'É exibida a seguir uma listagem das deleções e bloqueios mais recentes envolvendo conteúdos ocultados por {{int:group-sysop}}. Veja a [[{{ns:special}}:Ipblocklist|lista de bloqueios]] para os bloqueios e banimentos atualmente vigentes.',

# Diffs
'difference'                => '(Diferença entre revisões)',
'loadingrev'                => 'carregando a pesquisa por diferenças',
'lineno'                    => 'Linha $1:',
'editcurrent'               => 'Editar a versão actual desta página',
'selectnewerversionfordiff' => 'Seleccione uma versão mais recente para comparação',
'selectolderversionfordiff' => 'Seleccione uma versão mais antiga para comparação',
'compareselectedversions'   => 'Compare as versões seleccionadas',
'editundo'                  => 'desfazer',
'diff-multi'                => '({{PLURAL:$1|uma edição intermediária não está sendo exibida|$1 edições intermediárias não estão sendo exibidas}}.)',

# Search results
'searchresults'         => 'Resultados de pesquisa',
'searchresulttext'      => 'Para mais informações de como pesquisar na {{SITENAME}}, consulte [[{{ns:project}}:Pesquisa|Pesquisando {{SITENAME}}]].',
'searchsubtitle'        => 'Você pesquisou por "[[:$1]]"',
'searchsubtitleinvalid' => 'Você pesquisou por "$1"',
'badquery'              => 'Termo de pesquisa inválido',
'badquerytext'          => 'Não foi possível processar a sua pesquisa.
Isso provavelmente aconteceu porque você tentou procurar por uma palavra com menos de três letras, o que ainda não é suportado pelo sistema. Isto também pode ter ocorrido porque você digitou incorrectamente a expressão, por exemplo, "peixes <strong>e e</strong> escalas".
Por favor, tente pesquisar de outra forma.',
'matchtotals'           => 'A pesquisa "$1" resultou $2 títulos de artigos
e $3 artigos com o texto procurado.',
'noexactmatch'          => "'''Não existe uma página com o título \"\$1\".''' Você pode [[:\$1|criar tal página]].",
'titlematches'          => 'Resultados nos títulos das páginas',
'notitlematches'        => 'Nenhum título de página coincide',
'textmatches'           => 'Resultados dos textos das páginas',
'notextmatches'         => 'Nenhum texto nas páginas coincide',
'prevn'                 => 'anteriores $1',
'nextn'                 => 'próximos $1',
'viewprevnext'          => 'Ver ($1) ($2) ($3).',
'showingresults'        => "A seguir {{PLURAL:$1|é mostrado '''um''' resultado|são mostrados até '''$1''' resultados}}, iniciando no '''$2'''º.",
'showingresultsnum'     => "A seguir {{PLURAL:$3|é mostrado '''um''' resultado|são mostrados '''$3''' resultados}}, iniciando com o '''$2'''º.",
'nonefound'             => '<strong>Nota</strong>: pesquisas mal sucedidas são geralmente causadas devido ao uso de palavras muito comuns como "tem" e "de",
que não são indexadas, ou pela especificação de mais de um termo (somente as páginas contendo todos os termos aparecerão nos resultados).',
'powersearch'           => 'Pesquisa',
'powersearchtext'       => 'Pesquisar nos espaços nominais:<br />$1<br />$2 Listar redireccionamentos<br />Pesquisar por $3 $9',
'searchdisabled'        => 'O motor de pesquisa na {{SITENAME}} foi desactivado por motivos de desempenho. Enquanto isso pode fazer a sua pesquisa através do Google ou do Yahoo!.<br />
Note que os índices do conteúdo da {{SITENAME}} destes sites podem estar desactualizados.',
'blanknamespace'        => '(Principal)',

# Preferences page
'preferences'              => 'Preferências',
'mypreferences'            => 'Minhas preferências',
'prefsnologin'             => 'Não autenticado',
'prefsnologintext'         => 'Precisa estar [[{{ns:special}}:Userlogin|autenticado]] para definir suas preferências.',
'prefsreset'               => 'As preferências foram restauradas tal como se encontravam na base de dados.',
'qbsettings'               => 'Barra Rápida',
'qbsettings-none'          => 'Nenhuma',
'qbsettings-fixedleft'     => 'Fixo à esquerda',
'qbsettings-fixedright'    => 'Fixo à direita',
'qbsettings-floatingleft'  => 'Flutuando à esquerda',
'qbsettings-floatingright' => 'Flutuando à direita',
'changepassword'           => 'Alterar palavra-chave',
'skin'                     => 'Tema',
'math'                     => 'Matemática',
'dateformat'               => 'Formato da data',
'datedefault'              => 'Sem preferência',
'datetime'                 => 'Data e hora',
'math_failure'             => 'Falhou ao verificar gramática',
'math_unknown_error'       => 'Erro desconhecido',
'math_unknown_function'    => 'Função desconhecida',
'math_lexing_error'        => 'Erro léxico',
'math_syntax_error'        => 'Erro de sintaxe',
'math_image_error'         => 'Falha na conversão para PNG. Verifique a instalação do latex, dvips, gs e convert',
'math_bad_tmpdir'          => 'Ocorreram problemas na criação ou escrita no directorio temporário math',
'math_bad_output'          => 'Ocorreram problemas na criação ou escrita no directorio de resultados math',
'math_notexvc'             => 'O executável texvc não foi encontrado. Consulte math/README para instruções da configuração.',
'prefs-personal'           => 'Perfil de utilizador',
'prefs-rc'                 => 'Mudanças recentes',
'prefs-watchlist'          => 'Lista de artigos vigiados',
'prefs-watchlist-days'     => 'Número de dias a mostrar na lista de artigos vigiados:',
'prefs-watchlist-edits'    => 'Numéro de edições a mostrar na lista de artigos vigados expandida:',
'prefs-misc'               => 'Diversos',
'saveprefs'                => 'Salvar',
'resetprefs'               => 'Restaurar',
'oldpassword'              => 'Palavra-chave antiga',
'newpassword'              => 'Nova palavra-chave',
'retypenew'                => 'Reintroduza a nova palavra-chave',
'textboxsize'              => 'Opções de edição',
'rows'                     => 'Linhas:',
'columns'                  => 'Colunas:',
'searchresultshead'        => 'Pesquisa',
'resultsperpage'           => 'Resultados por página:',
'contextlines'             => 'Linhas por resultado:',
'contextchars'             => 'Contexto por linha:',
'stubthreshold'            => 'Variação para a visualização de esboços:',
'recentchangesdays'        => 'Dias a serem exibidos nas Mudanças recentes:',
'recentchangescount'       => 'Número de artigos nas mudanças recentes:',
'savedprefs'               => 'As suas preferências foram salvas.',
'timezonelegend'           => 'Fuso horário',
'timezonetext'             => 'Número de horas que o seu horário local difere do horário do servidor (UTC).',
'localtime'                => 'Hora local',
'timezoneoffset'           => 'Diferença horária¹',
'servertime'               => 'Horário do servidor',
'guesstimezone'            => 'Preencher a partir do navegador (browser)',
'allowemail'               => 'Permitir email de outros utilizadores',
'defaultns'                => 'Pesquisar por padrão nestes espaços nominais:',
'default'                  => 'padrão',
'files'                    => 'Ficheiros',

# User rights
'userrights-lookup-user'     => 'Gerir grupos de utilizadores',
'userrights-user-editname'   => 'Intruduza um nome de utilizador:',
'editusergroup'              => 'Editar Grupos de Utilizadores',
'userrights-editusergroup'   => 'Editar grupos do utilizador',
'saveusergroups'             => 'Salvar Grupos do Utilizador',
'userrights-groupsmember'    => 'Membro de:',
'userrights-groupsavailable' => 'Grupos disponíveis:',
'userrights-groupshelp'      => 'Seleccione os grupos no qual deseja que o utilizador seja removido ou adicionado.
Grupos não seleccionados, não serão alterados. Pode seleccionar ou remover a selecção a um grupo com CTRL + Click esquerdo',
'userrights-reason'          => 'Motivo de alterações:',

# Groups
'group'            => 'Grupo:',
'group-bot'        => 'Robôs',
'group-sysop'      => 'Administradores',
'group-bureaucrat' => 'Burocratas',
'group-all'        => '(todos)',

'group-bot-member'        => 'Robô',
'group-sysop-member'      => 'Administrador',
'group-bureaucrat-member' => 'Burocrata',

'grouppage-bot'        => '{{ns:project}}:Robôs',
'grouppage-sysop'      => '{{ns:project}}:Administradores',
'grouppage-bureaucrat' => '{{ns:project}}:Burocratas',

# User rights log
'rightslog'      => 'Registo de direitos de utilizador',
'rightslogtext'  => 'Este é um registo de mudanças nos direitos dos utilizadores.',
'rightslogentry' => 'Alterado grupo de acesso de $1 (de $2 para $3)',
'rightsnone'     => '(nenhum)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|alteração|alterações}}',
'recentchanges'                     => 'Mudanças recentes',
'recentchangestext'                 => 'Veja as mais novas mudanças na {{SITENAME}} nesta página.',
'recentchanges-feed-description'    => 'Acompanhe as Mudanças recentes deste wiki por este feed.',
'rcnote'                            => "A seguir {{PLURAL:$1|está listada '''uma''' alteração ocorrida|estão listadas '''$1''' alterações ocorridas}} {{PLURAL:$2|no último dia|nos últimos '''$2''' dias}}, a partir de $3.",
'rcnotefrom'                        => 'Abaixo estão as mudanças desde <b>$2</b> (mostradas até <b>$1</b>).',
'rclistfrom'                        => 'Mostrar as novas alterações a partir de $1',
'rcshowhideminor'                   => '$1 edições menores',
'rcshowhidebots'                    => '$1 robôs',
'rcshowhideliu'                     => '$1 utilizadores registados',
'rcshowhideanons'                   => '$1 utilizadores anónimos',
'rcshowhidepatr'                    => '$1 edições verificadas',
'rcshowhidemine'                    => '$1 as minhas edições',
'rclinks'                           => 'Mostrar as últimas $1 mudanças nos últimos $2 dias<br />$3',
'diff'                              => 'dif',
'hist'                              => 'hist',
'hide'                              => 'Esconder',
'show'                              => 'Mostrar',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'r',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|$1 utilizador|$1 utilizadores}} a vigiar]',
'rc_categories'                     => 'Limite para categorias (separar com "|")',
'rc_categories_any'                 => 'Qualquer',

# Recent changes linked
'recentchangeslinked'          => 'Alterações relacionadas',
'recentchangeslinked-noresult' => 'Não ocorreram alterações em páginas relacionadas no intervalo de tempo fornecido.',
'recentchangeslinked-summary'  => "Esta página especial lista as alterações mais recentes de páginas que possuam um link a outra. Páginas que estejam em sua lista de artigos vigiados são exibidas em '''negrito'''.",

# Upload
'upload'                      => 'Carregar ficheiro',
'uploadbtn'                   => 'Carregar ficheiro',
'reupload'                    => 'Re-enviar',
'reuploaddesc'                => 'Voltar ao formulário de carregamento.',
'uploadnologin'               => 'Não autenticado',
'uploadnologintext'           => 'Você necessita estar [[{{ns:special}}:Userlogin|autenticado]] para enviar ficheiros.',
'upload_directory_read_only'  => 'O directório de recebimento de ficheiros ($1) não tem permissões de escrita para o servidor Web.',
'uploaderror'                 => 'Erro ao carregar',
'uploadtext'                  => "Utilize o formulário abaixo para carregar novos ficheiros. Para ver ou pesquisar imagens anteriormente carregadas consulte a [[{{ns:special}}:Imagelist|lista de ficheiros carregados]]. Carregamentos e eliminações são também registados no [[{{ns:special}}:Log|registo do projecto]].

Para incluír a imagem numa página, utilize o link na forma de
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:ficheiro.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:ficheiro.png|texto]]</nowiki>''' ou
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:ficheiro.ogg]]</nowiki>''' para uma ligação directa ao ficheiro.",
'uploadlog'                   => 'registo de carregamento',
'uploadlogpage'               => 'Registo de carregamento',
'uploadlogpagetext'           => 'Segue-se uma lista dos carregamentos mais recentes.',
'filename'                    => 'Nome do ficheiro',
'filedesc'                    => 'Descrição do ficheiro',
'fileuploadsummary'           => 'Sumário:',
'filestatus'                  => 'Estado de direitos autorais',
'filesource'                  => 'Fonte',
'uploadedfiles'               => 'Ficheiros carregados',
'ignorewarning'               => 'Ignorar aviso e salvar de qualquer forma.',
'ignorewarnings'              => 'Ignorar todos os avisos',
'minlength'                   => 'O nome de um ficheiro tem de ter no mínimo três letras.',
'illegalfilename'             => 'O ficheiro "$1" possui caracteres que não são permitidos no título de uma página. Por favor, altere o nome do ficheiro e tente carregar novamente.',
'badfilename'                 => 'O nome do ficheiro foi alterado para "$1".',
'filetype-badmime'            => 'Ficheiros de tipo MIME "$1" não são permitidos de serem enviados.',
'filetype-badtype'            => "'''\".\$1\"''' é um formato de ficheiro não desejado ou inesperado
: Lista de tipos de ficheiros permitidos: \$2",
'filetype-missing'            => 'O ficheiro não possui uma extensão (como, por exemplo, ".jpg").',
'large-file'                  => 'É recomendável que os ficheiros não sejam maiores que $1; este possui $2.',
'largefileserver'             => 'O tamanho deste ficheiro é superior ao qual o servidor encontra-se configurado para permitir.',
'emptyfile'                   => 'O ficheiro que está a tentar carregar parece encontrar-se vazio. Isto poderá ser devido a um erro na escrita do nome do ficheiro. Por favor verifique se realmente deseja carregar este ficheiro.',
'fileexists'                  => 'Já existe um ficheiro com este nome. Por favor, verifique <strong><tt>$1</tt></strong> caso não tenha a certeza se deseja alterar o ficheiro actual.',
'fileexists-extension'        => 'Já existe um ficheiro de nome similar:<br />
Nome do ficheiro que está sendo enviado: <strong><tt>$1</tt></strong><br />
Nome do ficheiro existente: <strong><tt>$2</tt></strong><br />
Por gentileza, escolha um nome diferente.',
'fileexists-thumb'            => "'''<center>Imagem existente</center>'''",
'fileexists-thumbnail-yes'    => 'O ficheiro aparenta ser uma imagem de tamanho reduzido (<i>miniatura</i>, ou <i>thumbnail)</i>. Por gentileza, verifique o ficheiro <strong><tt>$1</tt></strong>.<br />
Se o ficheiro enviado é o mesmo do de tamanho original, não é necessário enviar uma versão de miniatura adicional.',
'file-thumbnail-no'           => 'O nome do ficheiro começa com <strong><tt>$1</tt></strong>. Isso faz parecer se tratar de uma imagem de tamanho reduzido (<i>miniatura</i>, ou <i>thumbnail)</i>.
Por gentileza, se você tem acesso à imagem de tamanho completo, prefira envia-la no lugar desta. Caso não seja o caso, altere o nome de ficheiro.',
'fileexists-forbidden'        => 'Já existe um ficheiro com este nome. Por favor, volte atrás e carregue este ficheiro sob um novo nome. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Já existe um ficheiro com este nome no repositório de ficheiros partilhados. Por favor, volte atrás e carregue este ficheiro sob um novo nome. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'Envio efectuado com sucesso',
'fileuploaded'                => 'O ficheiro foi $1 enviado com sucesso.
Por favor, siga para a página de descrição ($2) e preencha a informação acerca deste ficheiro, tais como a sua origem, quando foi criado e por quem, e quaisquer outros dados que tenha conhecimento sobre o mesmo. Caso este ficheiro seja uma imagem, pode inseri-lo desta forma: <tt><nowiki>[[</nowiki>{{ns:image}}<nowiki>:$1|thumb|Descrição]]</nowiki></tt>',
'uploadwarning'               => 'Aviso de envio',
'savefile'                    => 'Salvar ficheiro',
'uploadedimage'               => 'enviado "[[$1]]"',
'uploaddisabled'              => 'Carregamentos desactivados',
'uploaddisabledtext'          => 'O carregamento de ficheiros encontra-se desactivado nesta wiki.',
'uploadscripted'              => 'Este ficheiro contém HTML ou código que pode ser erradamente interpretado por um navegador web.',
'uploadcorrupt'               => 'O ficheiro encontra-se corrompido ou tem uma extensão incorreta. Por gentileza, verifique o ocorrido e tente novamente.',
'uploadvirus'                 => 'O ficheiro contém vírus! Detalhes: $1',
'sourcefilename'              => 'Nome do ficheiro de origem',
'destfilename'                => 'Nome do ficheiro de destino',
'watchthisupload'             => 'Vigiar esta página',
'filewasdeleted'              => 'Um ficheiro com este nome foi carregado anteriormente e subsequentemente eliminado. Você precisa verificar o $1 antes de proceder ao carregamento novamente.',

'upload-proto-error'      => 'Protocolo incorrecto',
'upload-proto-error-text' => 'O envio de ficheiros remotos requer endereços (URLs) que iniciem com <code>http://</code> ou <code>ftp://</code>.',
'upload-file-error'       => 'Erro interno',
'upload-file-error-text'  => 'Ocorreu um erro interno ao se tentar criar um arquivo temporário no servidor. Por gentileza, contate um administrador de sistema.',
'upload-misc-error'       => 'Erro desconhecido de envio',
'upload-misc-error-text'  => 'Ocorreu um erro desconhecido durante o envio. Por gentileza, verifique se o endereço (URL) é válido e acessível e tente novamente. Caso o problema persista, contacte um administrador de sistema.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Não foi possível acessar a URL',
'upload-curl-error6-text'  => 'Não foi possível acessar o endereço (URL) fornecido. Por gentileza, se certifique de o endereço foi fornecido corretamente e de que o sítio esteja acessível.',
'upload-curl-error28'      => 'Tempo limite para o envio do ficheiro excedido',
'upload-curl-error28-text' => 'O sítio demorou muito tempo a responder. Por gentileza, verifique se o sítio está acessível, aguarde alguns momentos e tente novamente. Talvez você deseje fazer nova tentativa em um horário menos congestionado.',

'license'            => 'Licença',
'nolicense'          => 'Nenhuma seleccionada',
'upload_source_url'  => ' (um URL válido, publicamente acessível)',
'upload_source_file' => ' (um ficheiro no seu computador)',

# Image list
'imagelist'                 => 'Lista de ficheiros',
'imagelisttext'             => "É exibida a seguir uma listagem {{PLURAL:$1|de '''um''' ficheiro organizado|de '''$1''' ficheiros organizados}} por $2.",
'imagelistforuser'          => 'Esta lista apenas mostra imagens carregadas por $1.',
'getimagelist'              => 'carregando lista de ficheiros',
'ilsubmit'                  => 'Procurar',
'showlast'                  => 'Mostrar últimos $1 ficheiros organizados $2.',
'byname'                    => 'por nome',
'bydate'                    => 'por data',
'bysize'                    => 'por tamanho',
'imgdelete'                 => 'eli',
'imgdesc'                   => 'desc',
'imgfile'                   => 'ficheiro',
'imglegend'                 => 'Legenda: (desc) = mostrar/editar descrição de imagem.',
'imghistory'                => 'Histórico',
'revertimg'                 => 'rev',
'deleteimg'                 => 'eli',
'deleteimgcompletely'       => 'Eliminar todas revisões deste ficheiro',
'imghistlegend'             => 'Legenda: (actu) = imagem actual, (eli) = eliminar versão antiga, (rev) = reverter para versão antiga.
<br /><i>Clique na data para ver as imagens carregadas nessa data</i>.',
'imagelinks'                => 'Ligações',
'linkstoimage'              => 'As seguintes páginas apontam para este ficheiro:',
'nolinkstoimage'            => 'Nenhuma página aponta para este ficheiro.',
'sharedupload'              => 'Este ficheiro encontra-se partilhado e pode ser utilizado por outros projectos.',
'shareduploadwiki'          => 'Por favor, consulte a $1 para mais informações.',
'shareduploadwiki-linktext' => 'página de descrição',
'noimage'                   => 'Não existe nenhum ficheiro com este nome. Se desejar, pode $1',
'noimage-linktext'          => 'carrega-lo',
'uploadnewversion-linktext' => 'Carregar uma nova versão deste ficheiro',
'imagelist_date'            => 'Data',
'imagelist_name'            => 'Nome',
'imagelist_user'            => 'Utilizador',
'imagelist_size'            => 'Tamanho (bytes)',
'imagelist_description'     => 'Descrição',
'imagelist_search_for'      => 'Pesquisar por nome de imagem:',

# MIME search
'mimesearch'         => 'Pesquisa MIME',
'mimesearch-summary' => 'Esta página possibilita que os ficheiros sejam filtrados a partir de seu tipo MIME. Sintaxe de busca: tipo/subtipo (por exemplo, <tt>image/jpeg</tt>).',
'mimetype'           => 'tipo MIME:',
'download'           => 'download',

# Unwatched pages
'unwatchedpages' => 'Páginas não vigiadas',

# List redirects
'listredirects' => 'Listar redireccionamentos',

# Unused templates
'unusedtemplates'     => 'Predefinições não utilizadas',
'unusedtemplatestext' => 'Esta página lista todas as páginas no espaço nominal {{ns:10}} que não estão incluídas numa outra página. Lembre-se de verificar por outras ligações para as predefinições antes de as apagar.',
'unusedtemplateswlh'  => 'outras ligações',

# Random redirect
'randomredirect'         => 'Redireccionamento aleatório',
'randomredirect-nopages' => 'Não há redireccionamentos neste espaço nominal.',

# Statistics
'statistics'             => 'Estatísticas',
'sitestats'              => 'Estatísticas do site',
'userstats'              => 'Estatística dos utilizadores',
'sitestatstext'          => "Há actualmente um total de {{PLURAL:\$1|'''\$1''' página|'''\$1''' páginas}} na base de dados.
Isto inclui páginas de \"discussão\", páginas sobre o projecto ({{SITENAME}}), páginas de rascunho, redireccionamentos e outras que provavelmente não são qualificadas como páginas de conteúdo.
Excluindo estas, há {{PLURAL:\$2|'''\$2''' página que provavelmente é uma página de conteúdo legítima|'''\$2''' páginas que provavelmente são páginas de conteúdo legítimos}}.

'''\$8''' {{PLURAL:\$8|ficheiro foi carregado|ficheiros foram carregados}}.

Há um total de '''\$3''' {{PLURAL:\$3|página vista|páginas vistas}} e '''\$4''' {{PLURAL:\$4|edição|edições}} em páginas desde que este wiki foi instalado.
Isso nos leva a aproximadamente '''\$5''' edições por página e '''\$6''' vistas por edição.

O tamanho da [http://meta.wikimedia.org/wiki/Help:Job_queue fila de tarefas] é de actualmente '''\$7'''.",
'userstatstext'          => "Há actualmente {{PLURAL:$1|'''$1''' utilizador registado|'''$1''' utilizadores registados}}, dentre os quais '''$2''' (ou '''$4%''') {{PLURAL:$2|é|são}} $5.",
'statistics-mostpopular' => 'Páginas mais vistas',

'disambiguations'      => 'Página de desambiguações',
'disambiguationspage'  => 'Template:disambig',
'disambiguations-text' => 'As páginas a seguir ligam a "páginas de desambiguação" ao invés de aos tópicos adequados.<br /> Uma página é considerada como de desambiguação se utilizar uma predefinição que esteja definida em [[MediaWiki:disambiguationspage]]',

'doubleredirects'     => 'Redireccionamentos duplos',
'doubleredirectstext' => 'Cada linha contém ligações para o primeiro e segundo redireccionamento, bem como a primeira linha de conteúdo do segundo redireccionamento, geralmente contendo a página destino "real", que devia ser o destino do primeiro redireccionamento.',

'brokenredirects'        => 'Redireccionamentos quebrados',
'brokenredirectstext'    => 'Os seguintes redireccionamentos ligam para páginas inexistentes:',
'brokenredirects-edit'   => '(editar)',
'brokenredirects-delete' => '(eliminar)',

'withoutinterwiki'        => 'Páginas sem interwikis de idiomas',
'withoutinterwiki-header' => 'As seguintes páginas não possuem links para versões em outros idiomas:',

'fewestrevisions' => 'Páginas de conteúdo com menos edições',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categoria|categorias}}',
'nlinks'                  => '$1 {{PLURAL:$1|link|links}}',
'nmembers'                => '$1 {{PLURAL:$1|membro|membros}}',
'nrevisions'              => '$1 {{PLURAL:$1|revisão|revisões}}',
'nviews'                  => '$1 {{PLURAL:$1|visita|visitas}}',
'specialpage-empty'       => 'Actualmente não há dados a serem exibidos nesta página.',
'lonelypages'             => 'Páginas órfãs',
'lonelypagestext'         => 'As seguintes páginas não têm hiperligações a apontar para elas a partir de outras páginas nesta wiki.',
'uncategorizedpages'      => 'Páginas não categorizadas',
'uncategorizedcategories' => 'Categorias não categorizadas',
'uncategorizedimages'     => 'Imagens não categorizadas',
'unusedcategories'        => 'Categorias não utilizadas',
'unusedimages'            => 'Ficheiros não utilizados',
'popularpages'            => 'Páginas populares',
'wantedcategories'        => 'Categorias pedidas',
'wantedpages'             => 'Páginas pedidas',
'mostlinked'              => 'Páginas com mais afluentes',
'mostlinkedcategories'    => 'Categorias com mais afluentes',
'mostcategories'          => 'Páginas de conteúdo com mais categorias',
'mostimages'              => 'Imagens com mais afluentes',
'mostrevisions'           => 'Páginas de conteúdo com mais revisões',
'allpages'                => 'Todas as páginas',
'prefixindex'             => 'Índice de prefixo',
'randompage'              => 'Página aleatória',
'randompage-nopages'      => 'Não há páginas neste espaço nominal.',
'shortpages'              => 'Páginas curtas',
'longpages'               => 'Páginas longas',
'deadendpages'            => 'Páginas sem saída',
'deadendpagestext'        => 'As seguintes páginas não contêm hiperligações para outras páginas nesta wiki.',
'protectedpages'          => 'Páginas protegidas',
'protectedpagestext'      => 'As seguintes páginas encontram-se protegidas contra edições ou movimentações',
'protectedpagesempty'     => 'Não existem páginas, neste momento, protegidas com tais parâmetros.',
'listusers'               => 'Lista de utilizadores',
'specialpages'            => 'Páginas especiais',
'spheading'               => 'Páginas especiais para todos os utilizadores',
'restrictedpheading'      => 'Páginas especiais restritas',
'rclsub'                  => '(para páginas com links a partir de "$1")',
'newpages'                => 'Páginas novas',
'newpages-username'       => 'Nome de utilizador:',
'ancientpages'            => 'Páginas mais antigas',
'intl'                    => 'Ligações interlínguas',
'move'                    => 'Mover',
'movethispage'            => 'Mover esta página',
'unusedimagestext'        => '<p>Por favor, note que outros websites podem apontar para uma imagem através de um URL directamente e, por isso, podem estar a não aparecer aqui, mesmo estando em uso.</p>',
'unusedcategoriestext'    => 'As seguintes categorias existem embora nenhum artigo ou categoria faça uso delas.',

# Book sources
'booksources'               => 'Fontes de livros',
'booksources-search-legend' => 'Procurar por fontes livreiras',
'booksources-isbn'          => 'ISBN:',
'booksources-go'            => 'Ir',
'booksources-text'          => 'É exibida a seguir uma listagem de links para outros sítios que vendem livros novos e usados e que possam possuir informações adicionais sobre os livros que você está pesquisando:',

'categoriespagetext' => 'As seguintes categorias existem na wiki.',
'data'               => 'Dados',
'userrights'         => 'Gestão de privilégios do utilizador',
'groups'             => 'Grupos de utilizadores',
'isbn'               => 'ISBN',
'alphaindexline'     => '$1 até $2',
'version'            => 'Versão',

# Special:Log
'specialloguserlabel'  => 'Utilizador:',
'speciallogtitlelabel' => 'Título:',
'log'                  => 'Registos',
'log-search-legend'    => 'Pesquisar nos registos',
'log-search-submit'    => 'Ir',
'alllogstext'          => 'Exposição combinada de todos registos disponíveis no wiki {{SITENAME}}.
Você pode diminuir a lista escolhendo um tipo de registo, um nome de utilizar, ou uma página afectada.',
'logempty'             => 'Nenhum item idêntico no registo.',
'log-title-wildcard'   => 'Procurar por títulos que sejam iniciados com o seguinte texto',

# Special:Allpages
'nextpage'          => 'Próxima página ($1)',
'prevpage'          => 'Página anterior ($1)',
'allpagesfrom'      => 'Mostrar páginas começando em:',
'allarticles'       => 'Todos artigos',
'allinnamespace'    => 'Todas as páginas (espaço nominal $1)',
'allnotinnamespace' => 'Todas as páginas (excepto as do espaço nominal $1)',
'allpagesprev'      => 'Anterior',
'allpagesnext'      => 'Próximo',
'allpagessubmit'    => 'Ir',
'allpagesprefix'    => 'Exibir páginas com o prefixo:',
'allpagesbadtitle'  => 'O título de página fornecido encontrava-se inválido ou tinha um prefixo interlíngua ou inter-wiki. Ele poderá conter um ou mais caracteres que não podem ser utilizados em títulos.',

# Special:Listusers
'listusersfrom'      => 'Mostrar utilizadores começando em:',
'listusers-submit'   => 'Exibir',
'listusers-noresult' => 'Não foram encontrados utilizadores para a forma pesquisada.',

# E-mail user
'mailnologin'     => 'Nenhum endereço de envio',
'mailnologintext' => 'Necessita de estar [[{{ns:special}}:Userlogin|autenticado]]
e de possuir um endereço de e-mail válido nas suas [[{{ns:special}}:Preferences|preferências]]
para poder enviar um e-mail a outros utilizadores.',
'emailuser'       => 'Contactar este utilizador',
'emailpage'       => 'Contactar utilizador',
'emailpagetext'   => 'Se o utilizador introduziu um endereço válido de e-mail
nas suas preferências, poderá usar o formulário abaixo para lhe enviar uma mensagem.
O endereço que introduziu nas suas preferências irá aparecer no campo "From" do e-mail
para que o destinatário lhe possa responder.',
'usermailererror' => 'Objecto de correio retornou um erro:',
'defemailsubject' => 'E-mail: {{SITENAME}}',
'noemailtitle'    => 'Sem endereço de e-mail',
'noemailtext'     => 'Este utilizador não especificou um endereço de e-mail válido, ou optou por não receber e-mail de outros utilizadores.',
'emailfrom'       => 'De',
'emailto'         => 'Para',
'emailsubject'    => 'Assunto',
'emailmessage'    => 'Mensagem',
'emailsend'       => 'Enviar',
'emailccme'       => 'Enviar ao meu e-mail uma cópia de minha mensagem.',
'emailccsubject'  => 'Cópia de sua mensagem para $1: $2',
'emailsent'       => 'E-mail enviado',
'emailsenttext'   => 'A sua mensagem foi enviada.',

# Watchlist
'watchlist'            => 'Artigos vigiados',
'mywatchlist'          => 'Artigos vigiados',
'watchlistfor'         => "(para '''$1''')",
'nowatchlist'          => 'Não existem itens na sua lista de artigos vigiados.',
'watchlistanontext'    => 'Por favor $1 para ver ou editar os itens na sua lista de artigos vigiados.',
'watchlistcount'       => "'''Tem {{PLURAL:$1|$1 item|$1 items}} na sua lista de artigos vigiados, incluindo páginas de discussão.'''",
'clearwatchlist'       => 'Limpar lista de artigos vigiados',
'watchlistcleartext'   => 'Tem a certeza que deseja removê-los?',
'watchlistclearbutton' => 'Limpar',
'watchlistcleardone'   => 'A sua lista de artigos vigiados foi limpa. {{PLURAL:$1|$1 item foi removido|$1 items foram removidos}}.',
'watchnologin'         => 'Não está autenticado',
'watchnologintext'     => 'Você precisa estar [[{{ns:special}}:Userlogin|autenticado]] para modificar a sua lista de artigos vigiados.',
'addedwatch'           => 'Adicionado à lista',
'addedwatchtext'       => "A página \"[[\$1]]\" foi adicionada à sua [[{{ns:special}}:Watchlist|lista de artigos vigiados]].
Modificações futuras em tal página e páginas de discussão associadas serão listadas lá, com a página aparecendo a '''negrito''' na [[{{ns:special}}:Recentchanges|lista de mudanças recentes]], para que possa encontrá-la com maior facilidade.

Se desejar remover a página da sua lista de artigos vigiados, clique em \"Desinteressar-se\" na barra lateral ou de topo.",
'removedwatch'         => 'Removida da lista de artigos vigiados',
'removedwatchtext'     => 'A página "$1" foi removida de sua lista de artigos vigiados.',
'watch'                => 'Vigiar',
'watchthispage'        => 'Vigiar esta página',
'unwatch'              => 'Desinteressar-se',
'unwatchthispage'      => 'Parar de vigiar esta página',
'notanarticle'         => 'Não é uma página de conteúdo',
'watchnochange'        => 'Nenhum dos itens vigiados foram editados no período exibido.',
'watchdetails'         => '* {{PLURAL:$1|$1 página vigiada|$1 páginas vigiadas}}, excluindo páginas de discussão
* [[{{ns:special}}:Watchlist/edit|Mostrar e editar a lista completa]]
* [[{{ns:special}}:Watchlist/clear|Remover todas as páginas]]',
'wlheader-enotif'      => '* A notificação por email encontra-se activada.',
'wlheader-showupdated' => "* As páginas modificadas desde a sua última visita são mostradas a '''negrito'''",
'watchmethod-recent'   => 'verificando edições recentes para os artigos vigiados',
'watchmethod-list'     => 'verificando páginas vigiadas para edições recentes',
'removechecked'        => 'Remover itens seleccionados',
'watchlistcontains'    => 'Sua lista de vigiados contém $1 {{PLURAL:$1|página|páginas}}.',
'watcheditlist'        => "Aqui está uma lista alfabética de sua lista de artigos vigiados. Marque as caixas dos artigos que você deseja remover da lista e clique no botão 'Remover itens seleccionados' na parte de baixo do ecrã (removendo uma página de discussão remove também a página associada e vice versa).",
'removingchecked'      => 'Removendo os itens solicitados de sua lista de artigos vigiados...',
'couldntremove'        => "Não foi possível remover o item '$1'...",
'iteminvalidname'      => "Problema com item '$1', nome inválido...",
'wlnote'               => "A seguir {{PLURAL:$1|está a última alteração ocorrida|estão as últimas '''$1''' alterações ocorridas}} {{PLURAL:$2|na última hora|nas últimas '''$2''' horas}}.",
'wlshowlast'           => 'Ver últimas $1 horas $2 dias $3',
'wlsaved'              => 'Esta é uma versão salva de sua lista de artigos vigiados.',
'watchlist-show-bots'  => 'Mostrar edições de robôs',
'watchlist-hide-bots'  => 'Ocultar edições de robôs',
'watchlist-show-own'   => 'Exibir minhas edições',
'watchlist-hide-own'   => 'Ocultar minhas edições',
'watchlist-show-minor' => 'Exibir edições menores',
'watchlist-hide-minor' => 'Ocultar edições menores',
'wldone'               => 'Concluído.',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Vigiando...',
'unwatching' => 'Deixando de vigiar...',

'enotif_mailer'                => '{{SITENAME}} Correio de Notificação',
'enotif_reset'                 => 'Marcar todas páginas como visitadas',
'enotif_newpagetext'           => 'Esta é uma página nova.',
'enotif_impersonal_salutation' => 'Utilizador do projeto "{{SITENAME}}"',
'changed'                      => 'alterada',
'created'                      => 'criada',
'enotif_subject'               => '{{SITENAME}}: A página $PAGETITLE foi $CHANGEDORCREATED por $PAGEEDITOR',
'enotif_lastvisited'           => 'Consulte $1 para todas as alterações efectuadas desde a sua última visita.',
'enotif_lastdiff'              => 'Acesse $1 para ver esta alteração.',
'enotif_anon_editor'           => 'utilizador anonimo $1',
'enotif_body'                  => 'Caro $WATCHINGUSERNAME,
	

A página $PAGETITLE na {{SITENAME}} foi $CHANGEDORCREATED a $PAGEEDITDATE por $PAGEEDITOR; consulte $PAGETITLE_URL para a versão actual.

$NEWPAGE

Sumário de edição: $PAGESUMMARY $PAGEMINOREDIT

Contacte o editor:
e-mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Não haverá mais notificações no caso de futuras alterações a não ser que visite esta página. Poderá também restaurar as bandeiras de notificação para todas as suas páginas vigiadas na sua lista de artigos vigiados.

             O seu amigável sistema de notificação da {{SITENAME}}

--
Para alterar as suas preferências da lista de artigos vigiados, visite
{{fullurl:Special:Watchlist/edit}}

Contacto e assistência
{{fullurl:{{MediaWiki:helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Eliminar página',
'confirm'                     => 'Confirmar',
'excontent'                   => "conteúdo era: '$1'",
'excontentauthor'             => "o conteúdo era: '$1' (e o único editor era '[[{{ns:special}}:Contributions/$2|$2]]')",
'exbeforeblank'               => "o conteúdo antes de esvaziar era: '$1'",
'exblank'                     => 'página esvaziada',
'confirmdelete'               => 'Confirmar eliminação',
'deletesub'                   => '(Eliminando "$1")',
'historywarning'              => 'Aviso: A página que está prestes a eliminar possui um histórico:',
'confirmdeletetext'           => 'Encontra-se prestes a eliminar permanentemente uma página ou uma imagem e todo o seu histórico.
Por favor, confirme que possui a intenção de fazer isto, que compreende as consequências e que encontra-se a fazer isto de acordo com as [[{{MediaWiki:policy-url}}|políticas]] do projecto.',
'actioncomplete'              => 'Acção completada',
'deletedtext'                 => '"$1" foi eliminada.
Consulte $2 para um registo de eliminações recentes.',
'deletedarticle'              => 'eliminada "[[$1]]"',
'dellogpage'                  => 'Registo de eliminação',
'dellogpagetext'              => 'Abaixo uma lista das eliminações mais recentes.',
'deletionlog'                 => 'registo de eliminação',
'reverted'                    => 'Revertido para versão mais nova',
'deletecomment'               => 'Motivo de eliminação',
'imagereverted'               => 'A reversão para a versão mais nova foi bem sucedida.',
'rollback'                    => 'Reverter edições',
'rollback_short'              => 'Voltar',
'rollbacklink'                => 'voltar',
'rollbackfailed'              => 'A reversão falhou',
'cantrollback'                => 'Não foi possível reverter a edição; o último contribuidor é o único autor desta página',
'alreadyrolled'               => 'Não foi possível reverter as edições de [[:$1]]
por [[{{ns:user}}:$2|$2]] ([[{{ns:user_talk}}:$2|Discussão]]); alguém editou ou já reverteu o artigo.

A última edição foi de [[{{ns:user}}:$3|$3]] ([[{{ns:user_talk}}:$3|Discussão]]).',
'editcomment'                 => 'O sumário de edição era: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'                  => 'Revertidas edições por [[Special:Contributions/$2|$2]] ([[User talk:$2|Talk]]) para a última versão por [[User:$1|$1]]',
'sessionfailure'              => 'Foram detectados problemas com a sua sessão;
Esta acção foi cancelada como medida de protecção contra a intercepção de sessões.
Experimente usar o botão "Voltar" e refrescar a página de onde veio e tente novamente.',
'protectlogpage'              => 'Registo de protecção',
'protectlogtext'              => 'Abaixo encontra-se o registo de protecção e desprotecção de páginas.
Veja [[{{ns:project}}:Página protegida]] para mais informações.',
'protectedarticle'            => 'protegeu "[[$1]]"',
'unprotectedarticle'          => 'desprotegeu "[[$1]]"',
'protectsub'                  => '(Protegendo "$1")',
'confirmprotecttext'          => 'Deseja realmente proteger esta página?',
'confirmprotect'              => 'Confirmar protecção',
'protectmoveonly'             => 'Impedir apenas que a página seja movida.',
'protectcomment'              => 'Motivo de protecção',
'protectexpiry'               => 'Expiração',
'protect_expiry_invalid'      => 'O tempo de expiração fornecido é inválido.',
'protect_expiry_old'          => 'O tempo de expiração fornecido se situa no passado.',
'unprotectsub'                => '(Desprotegendo "$1")',
'confirmunprotecttext'        => 'Deseja realmente desproteger esta página?',
'confirmunprotect'            => 'Confirmar desprotecção',
'unprotectcomment'            => 'Motivo de desprotecção',
'protect-unchain'             => 'Desbloquear permissões de moção',
'protect-text'                => 'Pode ver e alterar aqui, o nível de protecção para a página <strong>$1</strong>.
Por favor tenha a certeza que segue as [[{{ns:project}}:Página protegida|normas do projecto]].',
'protect-locked-blocked'      => 'Você não poderá alterar os níveis de proteção enquanto estiver bloqueado. Esta é a configuração atual para a página <strong>$1</strong>:',
'protect-locked-dblock'       => 'Não é possível alterar os níveis de proteção, uma vez que a base de dados se encontra trancada.
Esta é a configuração atual para a página <strong>$1</strong>:',
'protect-locked-access'       => 'Sua conta não possui permissões para alterar os níveis de proteção de uma página.
Esta é a configuração atual para a página <strong>$1</strong>:',
'protect-cascadeon'           => 'Esta página se encontra protegida, uma vez que se encontra incluída {{PLURAL:$1|na página listada a seguir, protegida|nas páginas listadas a seguir, protegidas}} com a "proteção progressiva" ativada. Você poderá alterar o nível de proteção desta página, mas isso não afetará a "proteção progressiva".',
'protect-default'             => '(padrão)',
'protect-level-autoconfirmed' => 'Bloquear utilizadores não-registados',
'protect-level-sysop'         => 'Apenas administradores',
'protect-summary-cascade'     => 'p. progressiva',
'protect-expiring'            => 'expira em $1 (UTC)',
'protect-cascade'             => '"Proteção progressiva" - proteja quaisquer páginas que estejam incluídas nesta.',
'restriction-type'            => 'Permissão:',
'restriction-level'           => 'Nível de restrição:',
'minimum-size'                => 'Tam. mínimo',
'maximum-size'                => 'Tam. máximo',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Editar',
'restriction-move' => 'Mover',

# Restriction levels
'restriction-level-sysop'         => 'totalmente protegida',
'restriction-level-autoconfirmed' => 'semi-protegida',
'restriction-level-all'           => 'qualquer nível',

# Undelete
'undelete'                 => 'Ver páginas eliminadas',
'undeletepage'             => 'Ver e restaurar páginas eliminadas',
'viewdeletedpage'          => 'Ver páginas eliminadas',
'undeletepagetext'         => 'As seguintes páginas foram eliminadas, apesar de ainda permanecem na base de dados e poderem ser restauradas. O arquivo pode periodicamente ser limpo.',
'undeleteextrahelp'        => "Para restaurar a página inteira, deixe todas as caixas de selecção desseleccionadas e clique em '''''Restaurar'''''. Para efectuar uma restauração selectiva, seleccione as caixas correspondentes às
edições a serem restauradas e clique em '''''Restaurar'''''. Clicar em '''''Limpar''''' irá limpar o
campo de comentário e todas as caixas de selecção.",
'undeleterevisions'        => '$1 {{PLURAL:$1|edição disponível|edições disponíveis}}',
'undeletehistory'          => 'Se restaurar uma página, todas as edições serão restauradas para o histórico.
Se uma nova página foi criada com o mesmo nome desde a eliminação, as edições restauradas aparecerão primeiro no histórico e a página actual não será automaticamente trocada. Note que as restrições de acesso às edições serão perdidas ao ser feita a restauração.',
'undeleterevdel'           => "Undeletion will not be performed if it will result in the top page revision being
partially deleted. In such cases, you must uncheck or unhide the newest deleted revisions. Revisions of files
that you don't have permission to view will not be restored.",
'undeletehistorynoadmin'   => 'Esta página foi eliminada. O motivo de eliminação é apresentado no súmario abaixo, junto dos detalhes do utilizador que editou esta página antes de eliminar. O texto actual destas edições eliminadas encontra-se agora apenas disponível para administradores.',
'undelete-revision'        => 'A edição $1 de $2 foi eliminada:',
'undeleterevision-missing' => 'Invalid or missing revision. You may have a bad link, or the
revision may have been restored or removed from the archive.',
'undeletebtn'              => 'Restaurar',
'undeletereset'            => 'Limpar',
'undeletecomment'          => 'Comentário:',
'undeletedarticle'         => 'restaurado "[[$1]]"',
'undeletedrevisions'       => '$1 {{PLURAL:$1|edição restaurada|edições restauradas}}',
'undeletedrevisions-files' => '$1 {{PLURAL:$2|edição restaurada|edições restauradas}} e $2 {{PLURAL:$2|ficheiro restaurado|ficheiros restaurados}}',
'undeletedfiles'           => '{{PLURAL:$1|ficheiro restaurado|$1 ficheiros restaurados}}',
'cannotundelete'           => 'Restauração falhada; alguém talvez já restaurou a página.',
'undeletedpage'            => "<big>'''$1 foi restaurada'''</big>

Consulte o [[Special:Log/delete|registo de eliminações]] para um registo das eliminações e restaurações mais recentes.",
'undelete-header'          => 'Veja o [[{{ns:special}}:Log/delete|registo de deleções]] para as páginas recentemente eliminadas.',
'undelete-search-box'      => 'Pesquisar páginas eliminadas',
'undelete-search-prefix'   => 'Exibir páginas que iniciem com:',
'undelete-search-submit'   => 'Pesquisar',
'undelete-no-results'      => 'Não foram encontradas edições relacionadas com o que foi buscado no arquivo de edições eliminadas.',

# Namespace form on various pages
'namespace' => 'Espaço nominal:',
'invert'    => 'Inverter selecção',

# Contributions
'contributions' => 'Contribuições do utilizador',
'mycontris'     => 'Minhas contribuições',
'contribsub2'   => 'Para $1 ($2)',
'nocontribs'    => 'Não foram encontradas mudanças com este critério.',
'ucnote'        => 'Segue as últimas <b>$1</b> mudanças nos últimos <b>$2</b> dias deste utilizador.',
'uclinks'       => 'Ver as últimas $1 mudanças; ver os últimos $2 dias.',
'uctop'         => ' (revisão actual)',

'sp-contributions-newest'      => 'Mais recente',
'sp-contributions-oldest'      => 'Mais antigo',
'sp-contributions-newer'       => 'Novo $1',
'sp-contributions-older'       => 'Antigo $1',
'sp-contributions-newbies'     => 'Pesquisar apenas nas contribuições de contas recentes',
'sp-contributions-newbies-sub' => 'Para contas novas',
'sp-contributions-blocklog'    => 'Registo de bloqueios',
'sp-contributions-search'      => 'Pesquisar contribuições',
'sp-contributions-username'    => 'Endereço de IP ou utilizador:',
'sp-contributions-submit'      => 'Pesquisar',

'sp-newimages-showfrom' => 'Mostrar novas imagens começando de $1',

# What links here
'whatlinkshere'      => 'Páginas afluentes',
'notargettitle'      => 'Sem alvo',
'notargettext'       => 'Você não especificou uma página alvo ou um utilizador para executar esta função.',
'linklistsub'        => '(Lista de ligações)',
'linkshere'          => "As seguintes páginas possuem ligações para '''[[:$1]]''':",
'nolinkshere'        => "Não existem ligações para '''[[:$1]]'''.",
'nolinkshere-ns'     => "Não há links para '''[[:$1]]''' no espaço nominal selecionado.",
'isredirect'         => 'página de redireccionamento',
'istemplate'         => 'inclusão',
'whatlinkshere-prev' => '{{PLURAL:$1|anterior|$1 anteriores}}',
'whatlinkshere-next' => '{{PLURAL:$1|próximo|próximos $1}}',

# Block/unblock
'blockip'                     => 'Bloquear utilizador',
'blockiptext'                 => 'Utilize o formulário abaixo para bloquear o acesso à escrita de um endereço específico de IP ou nome de utilizador.
Isto só deve ser feito para prevenir vandalismo, e de acordo com a [[{{MediaWiki:policy-url}}|política]]. Preencha com um motivo específico a seguir (por exemplo, citando páginas que sofreram vandalismo).',
'ipaddress'                   => 'Endereço de IP:',
'ipadressorusername'          => 'Endereço de IP ou nome de utilizador:',
'ipbexpiry'                   => 'Expiração:',
'ipbreason'                   => 'Motivo:',
'ipbreasonotherlist'          => 'Outro motivo',
'ipbreason-dropdown'          => '*Razões comuns para um bloqueio
** Inserindo informações falsas
** Removendo o conteúdo de páginas
** Fazendo "spam" de sítios externos
** Inserindo conteúdo sem sentido/incompreensível nas páginas
** Comportamento intimidador/inoportuno
** Uso abusivo de contas múltiplas
** Nome de utilizador inaceitável',
'ipbanononly'                 => 'Bloquear apenas utilizadores anónimos',
'ipbcreateaccount'            => 'Prevenir criação de conta de utilizador',
'ipbenableautoblock'          => 'Bloquear automaticamente o endereço de IP mais recente usado por este utilizador e todos os IPs subseqüentes dos quais ele tentar editar',
'ipbsubmit'                   => 'Bloquear este utilizador',
'ipbother'                    => 'Outro período:',
'ipboptions'                  => '2 horas:2 hours,1 dia:1 day,3 dias:3 days,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,infinito:infinite',
'ipbotheroption'              => 'outro',
'ipbotherreason'              => 'Outro motivo/motivo adicional:',
'ipbhidename'                 => 'Ocultar utilizador/IP do registo de bloqueios, lista de bloqueios e lista de utilizadores',
'badipaddress'                => 'Endereço de IP inválido',
'blockipsuccesssub'           => 'Bloqueio bem sucedido',
'blockipsuccesstext'          => '[[{{ns:Special}}:Contributions/$1|$1]] foi bloqueado.<br />Consulte a [[Special:Ipblocklist|lista de IPs bloqueados]] para rever os bloqueios.',
'ipb-edit-dropdown'           => 'Editar motivos de bloqueio',
'ipb-unblock-addr'            => 'Desbloquear $1',
'ipb-unblock'                 => 'Desbloquear um utilizador ou endereço de IP',
'ipb-blocklist-addr'          => 'Ver bloqueios em vigência para $1',
'ipb-blocklist'               => 'Ver bloqueios em vigência',
'unblockip'                   => 'Desbloquear utilizador',
'unblockiptext'               => 'Utilize o formulário a seguir para restaurar o acesso à escrita para um endereço de IP ou utilizador previamente bloqueado.',
'ipusubmit'                   => 'Desbloquear este utilizador',
'unblocked'                   => '[[User:$1|$1]] foi desbloqueado',
'unblocked-id'                => 'O bloqueio de $1 foi removido com sucesso',
'ipblocklist'                 => 'Lista de IPs bloqueados',
'ipblocklist-submit'          => 'Pesquisar',
'blocklistline'               => '$1, $2 bloqueou $3 ($4)',
'infiniteblock'               => 'infinito',
'expiringblock'               => 'expira em $1',
'anononlyblock'               => 'anón. apenas',
'noautoblockblock'            => 'bloqueio automático desabilitado',
'createaccountblock'          => 'criação de conta de utilizador bloqueada',
'ipblocklist-empty'           => 'A lista de bloqueios encontra-se vazia.',
'ipblocklist-no-results'      => 'O endereço de IP ou nome de utilizador procurado não se encontra bloqueado.',
'blocklink'                   => 'bloquear',
'unblocklink'                 => 'desbloquear',
'contribslink'                => 'contribs',
'autoblocker'                 => 'Você foi automaticamente bloqueado, pois partilha um endereço de IP com "$1". O motivo apresentado foi: "$2".',
'blocklogpage'                => 'Registo de bloqueio',
'blocklogentry'               => '"[[$1]]" foi bloqueado com um tempo de expiração de $2 $3',
'blocklogtext'                => 'Este é um registo de acções de bloqueio e desbloqueio. Endereços IP sujeitos a bloqueio automático não são listados. Consulte a [[{{ns:special}}:Ipblocklist|lista de IPs bloqueados]] para obter a lista de bloqueios e banimentos actualmente válidos.',
'unblocklogentry'             => 'desbloqueou $1',
'block-log-flags-anononly'    => 'apenas utilizadores anonimos',
'block-log-flags-nocreate'    => 'criação de contas desabilitada',
'block-log-flags-noautoblock' => 'bloqueio automático desabilitado',
'range_block_disabled'        => 'A funcionalidade de bloquear gamas de IPs encontra-se desactivada.',
'ipb_expiry_invalid'          => 'Tempo de expiração inválido.',
'ipb_already_blocked'         => '"$1" já encontra-se bloqueado',
'ip_range_invalid'            => 'Gama de IPs inválida.',
'proxyblocker'                => 'Bloqueador de proxy',
'ipb_cant_unblock'            => 'Erro: Bloqueio com ID $1 não encontrado. Poderá já ter sido desbloqueado.',
'proxyblockreason'            => 'O seu endereço de IP foi bloqueado por ser um proxy público. Por favor contacte o seu fornecedor do serviço de Internet ou o apoio técnico e informe-os deste problema de segurança grave.',
'proxyblocksuccess'           => 'Concluído.',
'sorbs'                       => 'SORBS DNSBL',
'sorbsreason'                 => 'O seu endereço IP encontra-se listado como proxy aberto pela DNSBL utilizada por este sítio.',
'sorbs_create_account_reason' => 'O seu endereço de IP encontra-se listado como proxy aberto na DNSBL utilizada por este sítio. Você não pode criar uma conta',

# Developer tools
'lockdb'              => 'Trancar base de dados',
'unlockdb'            => 'Destrancar base de dados',
'lockdbtext'          => 'Trancar a base de dados suspenderá a habilidade de todos os utilizadores de editarem páginas, mudarem suas preferências, lista de artigos vigiados e outras coisas que requerem mudanças na base de dados.<br />
Por favor, confirme que você realmente pretende fazer isso e que vai destrancar a base de dados quando a manutenção estiver concluída.',
'unlockdbtext'        => 'Desbloquear a base de dados vai restaurar a habilidade de todos os utilizadores de editarem páginas,  mudarem suas preferências, alterarem suas listas de artigos vigiados e outras coisas que requerem mudanças na base de dados. Por favor, confirme que realmente pretende fazer isso.',
'lockconfirm'         => 'Sim, eu realmente desejo bloquear a base de dados.',
'unlockconfirm'       => 'Sim, eu realmente desejo desbloquear a base de dados.',
'lockbtn'             => 'Bloquear base de dados',
'unlockbtn'           => 'Desbloquear base de dados',
'locknoconfirm'       => 'Você não seleccionou a caixa de confirmação.',
'lockdbsuccesssub'    => 'Bloqueio bem sucedido',
'unlockdbsuccesssub'  => 'Desbloqueio bem sucedido',
'lockdbsuccesstext'   => 'A base de dados da {{SITENAME}} foi bloqueada.
<br />Lembre-se de remover o bloqueio após a manutenção.',
'unlockdbsuccesstext' => 'A base de dados foi desbloqueada.',
'lockfilenotwritable' => 'O ficheiro de bloqueio da base de dados não pode ser escrito. Para bloquear ou desbloquear a base de dados, este precisa de poder ser escrito pelo servidor Web.',
'databasenotlocked'   => 'A base de dados não encontra-se bloqueada.',

# Move page
'movepage'                => 'Mover página',
'movepagetext'            => "Utilizando o seguinte formulário você poderá renomear uma página, movendo todo o histórico para o novo título. O título anterior será transformado num redireccionamento para o novo.

Links para as páginas antigas não serão mudados; certifique-se de verificar por redireccionamentos quebrados ou duplos. Você é responsável por certificar-se que os links continuam apontando para onde eles deveriam apontar.

Note que a página '''não''' será movida se já existir uma página com o novo título, a não ser que ele esteja vazio ou seja um redircecionamento e não tenha histórico de edições. Isto significa que pode renomear uma página de volta para o nome que tinha anteriormente se cometer algum engano e que não pode sobrescrever uma página.

<b>CUIDADO!</b>
Isto pode ser uma mudança drástica e inesperada para uma página popular; por favor, tenha certeza de que compreende as consequências da mudança antes de prosseguir.",
'movepagetalktext'        => "A página de \"discussão\" associada, se existir, será automaticamente movida, '''a não ser que:'''
*Uma página de discussão com conteúdo já exista sob o novo título, ou
*Você não marque a caixa abaixo.

Nestes casos, você terá que mover ou mesclar a página manualmente, se assim desejar.",
'movearticle'             => 'Mover página',
'movenologin'             => 'Não autenticado',
'movenologintext'         => 'Você precisa ser um utilizador registado e [[{{ns:special}}:Userlogin|autenticado]] para poder mover uma página.',
'newtitle'                => 'Para novo título',
'move-watch'              => 'Vigiar esta página',
'movepagebtn'             => 'Mover página',
'pagemovedsub'            => 'Página movida com sucesso',
'pagemovedtext'           => 'Página "[[$1]]" movida para "[[$2]]".',
'articleexists'           => 'Uma página com este título já existe, ou o título que escolheu é inválido.
Por favor, escolha outro nome.',
'talkexists'              => "'''A página em si foi movida com sucesso. No entanto, a página de discussão não foi movida, uma vez que já existia uma com este título. Por favor, mescle-as manualmente.'''",
'movedto'                 => 'movido para',
'movetalk'                => 'Mover também a página de discussão associada.',
'talkpagemoved'           => 'A página de discussão correspondente foi movida com sucesso.',
'talkpagenotmoved'        => 'A página de discussão correspondente <strong>não</strong> foi movida.',
'1movedto2'               => '[[$1]] movido para [[$2]]',
'1movedto2_redir'         => '[[$1]] movido para [[$2]] sob redireccionamento',
'movelogpage'             => 'Registo de movimento',
'movelogpagetext'         => 'Abaixo encontra-se uma lista de páginas movidas.',
'movereason'              => 'Motivo',
'revertmove'              => 'reverter',
'delete_and_move'         => 'Eliminar e mover',
'delete_and_move_text'    => '==Eliminação necessária==
A página de destino ("[[$1]]") já existe. Deseja eliminá-la de modo a poder mover?',
'delete_and_move_confirm' => 'Sim, eliminar a página',
'delete_and_move_reason'  => 'Eliminada para poder mover outra página para este título',
'selfmove'                => 'O título fonte e o título destinatário são os mesmos; não é possível mover uma página para ela mesma.',
'immobile_namespace'      => 'O título destinatário é de um tipo especial; não é possível mover páginas para esse espaço nominal.',

# Export
'export'            => 'Exportação de páginas',
'exporttext'        => 'Você pode exportar o texto e o histórico de edições de uma página em particular para um ficheiro XML. Poderá então importar esse conteúdo noutra wiki que utilize o software MediaWiki através da [[{{ns:special}}:Import|página de imprtações]].

Para exportar páginas, introduza os títulos na caixa de texto abaixo, um título por linha, e seleccione se deseja todas as versões, com as linhas de histórico de edições, ou apenas a edição atual e informações apenas sobre a mais recente das edições.

Se desejar, pode utilizar uma ligação, por exemplo [[{{ns:Special}}:Export/{{Mediawiki:mainpage}}]] para a [[{{Mediawiki:mainpage}}]].',
'exportcuronly'     => 'Incluir apenas a revisão actual, não o histórico inteiro',
'exportnohistory'   => "----
'''Nota:''' a exportação do histórico completo das páginas através deste formulário foi desactivada devido a motivos de performance.",
'export-submit'     => 'Exportar',
'export-addcattext' => 'Adicionar à listagem páginas da categoria:',
'export-addcat'     => 'Adicionar',

# Namespace 8 related
'allmessages'               => 'Todas as mensagens de sistema',
'allmessagesname'           => 'Nome',
'allmessagesdefault'        => 'Texto padrão',
'allmessagescurrent'        => 'Texto actual',
'allmessagestext'           => 'Esta é uma lista de todas mensagens de sistema disponíveis no espaço nominal {{ns:8}}:.',
'allmessagesnotsupportedUI' => 'O seu idioma actual de interface (<b>$1</b>) não é suportado pelo {{ns:special}}:Allmessages deste sítio.',
'allmessagesnotsupportedDB' => '{{ns:special}}:Allmessages não pode ser utilizado devido ao wgUseDatabaseMessages estar desligado.',
'allmessagesfilter'         => 'Filtro de nome de mensagem:',
'allmessagesmodified'       => 'Mostrar apenas modificados',

# Thumbnails
'thumbnail-more'           => 'Ampliar',
'missingimage'             => '<b>Imagem não encontrada</b><br /><i>$1</i>',
'filemissing'              => 'Ficheiro não encontrado',
'thumbnail_error'          => 'Erro ao criar miniatura: $1',
'djvu_page_error'          => 'página DjVu inacessível',
'djvu_no_xml'              => 'Não foi possível acessar o XML do ficheiro DjVU',
'thumbnail_invalid_params' => 'Parâmetros de miniatura inválidos',
'thumbnail_dest_directory' => 'Não foi possível criar o diretório de destino',

# Special:Import
'import'                     => 'Importar páginas',
'importinterwiki'            => 'Importação transwiki',
'import-interwiki-text'      => 'Seleccione uma wiki e um título de página a importar.
As datas das edições e os seus editores serão mantidos.
Todas as acções de importação transwiki são registadas no [[{{ns:special}}:Log/import|Registo de importações]].',
'import-interwiki-history'   => 'Copiar todas as edições desta página',
'import-interwiki-submit'    => 'Importar',
'import-interwiki-namespace' => 'Transferir páginas para o espaço nominal:',
'importtext'                 => 'Por favor, exporte o ficheiro da fonte wiki utilizando a ferramenta {{ns:special}}:Export, salve o ficheiro para o seu disco e importe-o aqui.',
'importstart'                => 'Importando páginas...',
'import-revision-count'      => '$1 {{PLURAL:$1|revisão|revisões}}',
'importnopages'              => 'Não existem páginas a importar.',
'importfailed'               => 'A importação falhou: $1',
'importunknownsource'        => 'Tipo de fonte de importação desconhecida',
'importcantopen'             => 'Não foi possível abrir o ficheiro de importação',
'importbadinterwiki'         => 'Ligação de interwiki incorrecta',
'importnotext'               => 'Vazio ou sem texto',
'importsuccess'              => 'Importação bem sucedida!',
'importhistoryconflict'      => 'Existem conflitos de edições no histórico (talvez esta página já foi importada antes)',
'importnosources'            => 'Não foram definidas fontes de importação transwiki e o carregamento directo de históricos encontra-se desactivado.',
'importnofile'               => 'Nenhum ficheiro de importação foi carregado.',
'importuploaderror'          => 'O carregamento do ficheiro de importação falhou; talvez o ficheiro seja maior do que o tamanho de carregamento permitido.',

# Import log
'importlogpage'                    => 'Registo de importações',
'importlogpagetext'                => 'Importações administrativas de páginas com a preservação do histórico de edição de outras wikis.',
'import-logentry-upload'           => 'importado [[$1]] através de ficheiro de importação',
'import-logentry-upload-detail'    => '{{PLURAL:$1|revisão|revisões}}',
'import-logentry-interwiki'        => 'transwiki $1',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|$1 revisão|$1 revisões}} de $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Minha página de utilizador',
'tooltip-pt-anonuserpage'         => 'A página de utilizador para o ip que está a utilizar para editar',
'tooltip-pt-mytalk'               => 'Minha página de discussão',
'tooltip-pt-anontalk'             => 'Discussão sobre edições deste endereço de ip',
'tooltip-pt-preferences'          => 'Minhas preferências',
'tooltip-pt-watchlist'            => 'Lista de artigos vigiados.',
'tooltip-pt-mycontris'            => 'Lista das minhas contribuições',
'tooltip-pt-login'                => 'Você é encorajado a autenticar-se, apesar disso não ser obrigatório.',
'tooltip-pt-anonlogin'            => 'Você é encorajado a autenticar-se, apesar disso não ser obrigatório.',
'tooltip-pt-logout'               => 'Sair',
'tooltip-ca-talk'                 => 'Discussão sobre o conteúdo da página',
'tooltip-ca-edit'                 => 'Você pode editar esta página. Por favor, utilize o botão Mostrar Previsão antes de salvar.',
'tooltip-ca-addsection'           => 'Adicionar comentário a essa discussão.',
'tooltip-ca-viewsource'           => 'Esta página está protegida; você pode exibir seu código, no entanto.',
'tooltip-ca-history'              => 'Edições anteriores desta página.',
'tooltip-ca-protect'              => 'Proteger esta página',
'tooltip-ca-delete'               => 'Apagar esta página',
'tooltip-ca-undelete'             => 'Restaurar edições feitas a esta página antes da eliminação',
'tooltip-ca-move'                 => 'Mover esta página',
'tooltip-ca-watch'                => 'Adicionar esta página aos artigos vigiados',
'tooltip-ca-unwatch'              => 'Remover esta página dos artigos vigiados',
'tooltip-search'                  => 'Pesquisar nesta wiki',
'tooltip-p-logo'                  => 'Página principal',
'tooltip-n-mainpage'              => 'Visitar a página principal',
'tooltip-n-portal'                => 'Sobre o projecto',
'tooltip-n-currentevents'         => 'Informação temática sobre eventos actuais',
'tooltip-n-recentchanges'         => 'A lista de mudanças recentes nesta wiki.',
'tooltip-n-randompage'            => 'Carregar página aleatória',
'tooltip-n-help'                  => 'Um local reservado para auxílio.',
'tooltip-n-sitesupport'           => 'Ajude-nos',
'tooltip-t-whatlinkshere'         => 'Lista de todas as páginas que ligam-se a esta',
'tooltip-t-recentchangeslinked'   => 'Mudanças recentes em páginas relacionadas a esta',
'tooltip-feed-rss'                => 'Feed RSS desta página',
'tooltip-feed-atom'               => 'Feed Atom desta página',
'tooltip-t-contributions'         => 'Ver as contribuições deste utilizador',
'tooltip-t-emailuser'             => 'Enviar um e-mail a este utilizador',
'tooltip-t-upload'                => 'Carregar imagens ou ficheiros media',
'tooltip-t-specialpages'          => 'Lista de páginas especiais',
'tooltip-t-print'                 => 'Versão para impressão desta página',
'tooltip-t-permalink'             => 'Link permanente para esta versão desta página',
'tooltip-ca-nstab-main'           => 'Ver a página de conteúdo',
'tooltip-ca-nstab-user'           => 'Ver a página de utilizador',
'tooltip-ca-nstab-media'          => 'Ver a página de media',
'tooltip-ca-nstab-special'        => 'Esta é uma página especial, não pode ser editada.',
'tooltip-ca-nstab-project'        => 'Ver a página de projecto',
'tooltip-ca-nstab-image'          => 'Ver a página de imagem',
'tooltip-ca-nstab-mediawiki'      => 'Ver a mensagem de sistema',
'tooltip-ca-nstab-template'       => 'Ver a predefinição',
'tooltip-ca-nstab-help'           => 'Ver a página de ajuda',
'tooltip-ca-nstab-category'       => 'Ver a página da categoria',
'tooltip-minoredit'               => 'Marcar como edição menor',
'tooltip-save'                    => 'Salvar as alterações',
'tooltip-preview'                 => 'Prever as alterações, por favor utilizar antes de salvar!',
'tooltip-diff'                    => 'Mostrar alterações que fez a este texto.',
'tooltip-compareselectedversions' => 'Ver as diferenças entre as duas versões seleccionadas desta página.',
'tooltip-watch'                   => 'Adicionar esta página à sua lista de artigos vigiados',
'tooltip-recreate'                => 'Recriar a página apesar de ter sido eliminada',

# Stylesheets
'common.css'   => '/** o código CSS colocado aqui será aplicado a todos os temas */',
'monobook.css' => '/* o código CSS colocado aqui terá efeito nos utilizadores do tema Monobook */',

# Scripts
'common.js'   => '/* Códigos javascript aqui colocados serão carregados por todos aqueles que acessarem alguma página deste wiki */',
'monobook.js' => '/* Em desuso, prefira utilizar [[MediaWiki:Common.js]] */',

# Metadata
'nodublincore'      => 'Os metadados RDF para Dublin Core estão desabilitados neste servidor.',
'nocreativecommons' => 'Os metadados RDF para Creative Commons estão desabilitados neste servidor.',
'notacceptable'     => 'O servidor não pode fornecer os dados num formato que o seu cliente possa ler.',

# Attribution
'anonymous'        => 'Utilizador(es) anónimo(s) da {{SITENAME}}',
'siteuser'         => '{{SITENAME}} utilizador $1',
'lastmodifiedatby' => 'Esta página foi modificada pela última vez a $2, $1 por $3.', # $1 date, $2 time, $3 user
'and'              => 'e',
'othercontribs'    => 'Baseado no trabalho de $1.',
'others'           => 'outros',
'siteusers'        => '{{SITENAME}} utilizador(es) $1',
'creditspage'      => 'Créditos da página',
'nocredits'        => 'Não há informação disponível sobre os créditos desta página.',

# Spam protection
'spamprotectiontitle'    => 'Filtro de protecção contra spam',
'spamprotectiontext'     => 'A página que deseja salvar foi bloqueada pelo filtro de spam. Tal bloqueio foi provavelmente causado por uma ligação para um website externo.',
'spamprotectionmatch'    => 'O seguinte texto activou o filtro de spam: $1',
'subcategorycount'       => '{{PLURAL:$1|Existe uma subcategoria|Existem $1 subcategorias}} nesta categoria.',
'categoryarticlecount'   => '{{PLURAL:$1|Existe uma página|Existem $1 páginas}} nesta categoria.',
'category-media-count'   => '{{PLURAL:$1|Há um ficheiro|Há $1 ficheiros}} nesta categoria.',
'listingcontinuesabbrev' => ' cont.',
'spambot_username'       => 'MediaWiki limpeza de spam',
'spam_reverting'         => 'Revertendo para a última versão não contendo hiperligações para $1',
'spam_blanking'          => 'Todas revisões contendo hiperligações para $1, limpando',

# Info page
'infosubtitle'   => 'Informação para página',
'numedits'       => 'Número de edições (página): $1',
'numtalkedits'   => 'Número de edições (página de discussão): $1',
'numwatchers'    => 'Número de pessoas vigiando: $1',
'numauthors'     => 'Número de autores distintos (página): $1',
'numtalkauthors' => 'Número de autores distintos (página de discussão): $1',

# Math options
'mw_math_png'    => 'Gerar sempre como PNG',
'mw_math_simple' => 'HTML caso seja simples, caso contrário, PNG',
'mw_math_html'   => 'HTML se possível, caso contrário, PNG',
'mw_math_source' => 'Deixar como TeX (para navegadores de texto)',
'mw_math_modern' => 'Recomendado para navegadores modernos',
'mw_math_mathml' => 'MathML se possível (experimental)',

# Patrolling
'markaspatrolleddiff'                 => 'Marcar como verificado',
'markaspatrolledtext'                 => 'Marcar este artigo como verificado',
'markedaspatrolled'                   => 'Marcado como verificado',
'markedaspatrolledtext'               => 'A revisão seleccionada foi marcada como verificada.',
'rcpatroldisabled'                    => 'Edições verificadas nas Mudanças Recentes desactivadas',
'rcpatroldisabledtext'                => 'A funcionalidade de Edições verificadas nas Mudanças Recentes está actualmente desactivada.',
'markedaspatrollederror'              => 'Não é possível marcar como verificado',
'markedaspatrollederrortext'          => 'Você precisa de especificar uma revisão para poder marcar como verificado.',
'markedaspatrollederror-noautopatrol' => 'Você não está autorizado a marcar suas próprias edições como edições patrulhadas.',

# Patrol log
'patrol-log-page' => 'Registo de edições patrulhadas',
'patrol-log-line' => 'marcou a edição $1 de $2 como uma edição patrulhada $3',
'patrol-log-auto' => 'automaticamente',
'patrol-log-diff' => 'r$1',

# Image deletion
'deletedrevision' => 'Apagada a versão antiga $1.',

# Browsing diffs
'previousdiff' => '← Ver a alteração anterior',
'nextdiff'     => 'Ver a alteração posterior →',

# Media information
'mediawarning'         => "'''Aviso''': Este ficheiro pode conter código malicioso. Ao executar, o seu sistema poderá estar comprometido.<hr />",
'imagemaxsize'         => 'Limitar imagens nas páginas de descrição a:',
'thumbsize'            => 'Tamanho de miniaturas:',
'file-info'            => '(tamanho: $1, tipo MIME: $2)',
'file-info-size'       => '($1 × $2 pixels, tamanho: $3, tipo MIME: $4)',
'file-nohires'         => '<small>Sem resolução maior disponível.</small>',
'file-svg'             => '<small>Esta é uma imagem vetorial escalável livre de perdas de exibição. Medidas da imagem-base: $1 × $2 pixels.</small>',
'show-big-image'       => 'Resolução completa',
'show-big-image-thumb' => '<small>Tamanho desta previsão: $1 × $2 pixels</small>',

'newimages'    => 'Galeria de novos ficheiros',
'showhidebots' => '($1 robôs)',
'noimages'     => 'Nada para ver.',

'passwordtooshort' => 'A sua palavra-chave é demasiado curta. Deve ter no mínimo $1 caracteres.',

# Metadata
'metadata'          => 'Metadados',
'metadata-help'     => 'Este ficheiro contém informação adicional, provavelmente adicionada a partir da câmara digital ou scanner utilizada para criar ou digitalizar a imagem. Caso o ficheiro tenha sido modificado a partir do seu estado original, alguns detalhes poderão não reflectir completamente as mudanças efectuadas.',
'metadata-expand'   => 'Mostrar restantes detalhes',
'metadata-collapse' => 'Esconder detalhes restantes',
'metadata-fields'   => 'Os campos de metadados EXIF listados nesta mensagem poderão estar presente na exibição da página de imagem quando a tabela de metadados estiver no modo "expandida". Outros poderão estar escondidos por padrão.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength',

# EXIF tags
'exif-imagewidth'                  => 'Largura',
'exif-imagelength'                 => 'Altura',
'exif-bitspersample'               => 'Bits por componente',
'exif-compression'                 => 'Esquema de compressão',
'exif-photometricinterpretation'   => 'Composição pixel',
'exif-orientation'                 => 'Orientação',
'exif-samplesperpixel'             => 'Número de componentes',
'exif-planarconfiguration'         => 'Arranjo de dados',
'exif-ycbcrsubsampling'            => 'Subsampling ratio of Y to C',
'exif-ycbcrpositioning'            => 'Posicionamento Y e C',
'exif-xresolution'                 => 'Resolução horizontal',
'exif-yresolution'                 => 'Resolução vertical',
'exif-resolutionunit'              => 'Unit of X and Y resolution',
'exif-stripoffsets'                => 'Localização de dados da imagem',
'exif-rowsperstrip'                => 'Number of rows per strip',
'exif-stripbytecounts'             => 'Bytes per compressed strip',
'exif-jpeginterchangeformat'       => 'Offset to JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes de dados JPEG',
'exif-transferfunction'            => 'Função de transferência',
'exif-whitepoint'                  => 'White point chromaticity',
'exif-primarychromaticities'       => 'Chromaticities of primarities',
'exif-ycbcrcoefficients'           => 'Color space transformation matrix coefficients',
'exif-referenceblackwhite'         => 'Par de valores de referência de preto e branco',
'exif-datetime'                    => 'Data e hora de modificação do ficheiro',
'exif-imagedescription'            => 'Título',
'exif-make'                        => 'Fabricante da câmara',
'exif-model'                       => 'Modelo da câmara',
'exif-software'                    => 'Software utilizado',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => 'Licença',
'exif-exifversion'                 => 'Versão Exif',
'exif-flashpixversion'             => 'Versão de Flashpix suportada',
'exif-colorspace'                  => 'Espaço de cor',
'exif-componentsconfiguration'     => 'Significado de cada componente',
'exif-compressedbitsperpixel'      => 'Modo de compressão de imagem',
'exif-pixelydimension'             => 'Largura de imagem válida',
'exif-pixelxdimension'             => 'Altura de imagem válida',
'exif-makernote'                   => 'Anotações do fabricante',
'exif-usercomment'                 => 'Comentários de utilizadores',
'exif-relatedsoundfile'            => 'Ficheiro áudio relacionado',
'exif-datetimeoriginal'            => 'Data e hora de geração de dados',
'exif-datetimedigitized'           => 'Data e hora de digitalização',
'exif-subsectime'                  => 'DateTime subseconds',
'exif-subsectimeoriginal'          => 'DateTimeOriginal subseconds',
'exif-subsectimedigitized'         => 'DateTimeDigitized subseconds',
'exif-exposuretime'                => 'Tempo de exposição',
'exif-exposuretime-format'         => '$1 seg ($2)',
'exif-fnumber'                     => 'Número F',
'exif-fnumber-format'              => 'f/$1',
'exif-exposureprogram'             => 'Programa de exposição',
'exif-spectralsensitivity'         => 'Spectral sensitivity',
'exif-isospeedratings'             => 'Taxa de velocidade ISO',
'exif-oecf'                        => 'Factor optoelectrónico de conversão.',
'exif-shutterspeedvalue'           => 'Velocidade do obturador',
'exif-aperturevalue'               => 'Abertura',
'exif-brightnessvalue'             => 'Brilho',
'exif-exposurebiasvalue'           => 'Polarização de exposição',
'exif-maxaperturevalue'            => 'Abertura máxima',
'exif-subjectdistance'             => 'Distância do sujeito',
'exif-meteringmode'                => 'Metering mode',
'exif-lightsource'                 => 'Fonte de luz',
'exif-flash'                       => 'Flash',
'exif-focallength'                 => 'Comprimento de foco da lente',
'exif-focallength-format'          => '$1 mm',
'exif-subjectarea'                 => 'Área de sujeito',
'exif-flashenergy'                 => 'Energia do flash',
'exif-spatialfrequencyresponse'    => 'Spatial frequency response',
'exif-focalplanexresolution'       => 'Focal plane X resolution',
'exif-focalplaneyresolution'       => 'Focal plane Y resolution',
'exif-focalplaneresolutionunit'    => 'Focal plane resolution unit',
'exif-subjectlocation'             => 'Localização de sujeito',
'exif-exposureindex'               => 'Índice de exposição',
'exif-sensingmethod'               => 'Método de sensação',
'exif-filesource'                  => 'Fonte do ficheiro',
'exif-scenetype'                   => 'Tipo de cena',
'exif-cfapattern'                  => 'padrão CFA',
'exif-customrendered'              => 'Custom image processing',
'exif-exposuremode'                => 'Modo de exposição',
'exif-whitebalance'                => 'White Balance',
'exif-digitalzoomratio'            => 'Proporção de zoom digital',
'exif-focallengthin35mmfilm'       => 'Focal length in 35 mm film',
'exif-scenecapturetype'            => 'Tipo de captura de cena',
'exif-gaincontrol'                 => 'Controlo de cena',
'exif-contrast'                    => 'Contraste',
'exif-saturation'                  => 'Saturação',
'exif-sharpness'                   => 'Sharpness',
'exif-devicesettingdescription'    => 'Descrição das configurações do dispositivo',
'exif-subjectdistancerange'        => 'Distância de alcance do sujeito',
'exif-imageuniqueid'               => 'Identificação única da imagem',
'exif-gpsversionid'                => 'Versão de GPS',
'exif-gpslatituderef'              => 'Latitude Norte ou Sul',
'exif-gpslatitude'                 => 'Latitude',
'exif-gpslongituderef'             => 'Longitude Leste ou Oeste',
'exif-gpslongitude'                => 'Longitude',
'exif-gpsaltituderef'              => 'Referência de altitude',
'exif-gpsaltitude'                 => 'Altitude',
'exif-gpstimestamp'                => 'Tempo GPS (relógio atómico)',
'exif-gpssatellites'               => 'Satélites utilizados para a medição',
'exif-gpsstatus'                   => 'Estado do receptor',
'exif-gpsmeasuremode'              => 'Modo da medição',
'exif-gpsdop'                      => 'Precisão da medição',
'exif-gpsspeedref'                 => 'Unidade da velocidade',
'exif-gpsspeed'                    => 'Velocidade do receptor GPS',
'exif-gpstrackref'                 => 'Referência para a direcção do movimento',
'exif-gpstrack'                    => 'Direcção do movimento',
'exif-gpsimgdirectionref'          => 'Referência para a direcção da imagem',
'exif-gpsimgdirection'             => 'Direcção da imagem',
'exif-gpsmapdatum'                 => 'Utilizados dados do estudo Geodetic',
'exif-gpsdestlatituderef'          => 'Referência para a latitude do destino',
'exif-gpsdestlatitude'             => 'Latitude do destino',
'exif-gpsdestlongituderef'         => 'Referência para a longitude do destino',
'exif-gpsdestlongitude'            => 'Longitude do destino',
'exif-gpsdestbearingref'           => 'Reference for bearing of destination',
'exif-gpsdestbearing'              => 'Bearing of destination',
'exif-gpsdestdistanceref'          => 'Referência de distância para o destino',
'exif-gpsdestdistance'             => 'Distância para o destino',
'exif-gpsprocessingmethod'         => 'Nome do método de processamento do GPS',
'exif-gpsareainformation'          => 'Nome da área do GPS',
'exif-gpsdatestamp'                => 'Data do GPS',
'exif-gpsdifferential'             => 'Correcção do diferencial do GPS',

# EXIF attributes
'exif-compression-1' => 'Descomprimido',
'exif-compression-6' => 'JPEG',

'exif-photometricinterpretation-2' => 'RGB',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-unknowndate' => 'Data desconhecida',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Flipped horizontally', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Rotated 180Â°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Flipped vertically', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Rotated 90Â° CCW and flipped vertically', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Rotated 90Â° CW', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Rotated 90Â° CW and flipped vertically', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Rotated 90Â° CCW', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'formato irregular',
'exif-planarconfiguration-2' => 'formato plano',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1'      => 'sRGB',
'exif-colorspace-ffff.h' => 'FFFF.H',

'exif-componentsconfiguration-0' => 'não existe',
'exif-componentsconfiguration-1' => 'Y',
'exif-componentsconfiguration-2' => 'Cb',
'exif-componentsconfiguration-3' => 'Cr',
'exif-componentsconfiguration-4' => 'R',
'exif-componentsconfiguration-5' => 'G',
'exif-componentsconfiguration-6' => 'B',

'exif-exposureprogram-0' => 'Não definido',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Aperture priority',
'exif-exposureprogram-4' => 'Shutter priority',
'exif-exposureprogram-5' => 'Creative program (biased toward depth of field)',
'exif-exposureprogram-6' => 'Programa de movimento (tende a velocidade de disparo mais rápida)',
'exif-exposureprogram-7' => 'Modo de retrato (para fotos em <i>closeup</i> com o fundo fora de foco)',
'exif-exposureprogram-8' => 'Modo de paisagem (para fotos de paisagem com o fundo em foco)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0' => 'Desconhecido',

'exif-lightsource-0'   => 'Desconhecida',
'exif-lightsource-1'   => 'Luz do dia',
'exif-lightsource-2'   => 'Fluorescente',
'exif-lightsource-10'  => 'Tempo nublado',
'exif-lightsource-255' => 'Outra fonte de luz',

'exif-focalplaneresolutionunit-2' => 'polegadas',

'exif-customrendered-0' => 'Processo normal',
'exif-customrendered-1' => 'Processo personalizado',

'exif-exposuremode-0' => 'Exposição automática',
'exif-exposuremode-1' => 'Exposição manual',
'exif-exposuremode-2' => 'Auto bracket',

'exif-scenecapturetype-0' => 'Padrão',
'exif-scenecapturetype-1' => 'Paisagem',
'exif-scenecapturetype-2' => 'Retrato',
'exif-scenecapturetype-3' => 'Cena noturna',

'exif-subjectdistancerange-0' => 'Desconhecida',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista próxima',
'exif-subjectdistancerange-3' => 'Vista distante',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitude Norte',
'exif-gpslatitude-s' => 'Latitude Sul',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitude Leste',
'exif-gpslongitude-w' => 'Longitude Oeste',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Quilómetros por hora',
'exif-gpsspeed-m' => 'Milhas por hora',
'exif-gpsspeed-n' => 'Nós',

# External editor support
'edit-externally'      => 'Editar este ficheiro utilizando uma aplicação externa',
'edit-externally-help' => 'Consulte as [http://meta.wikimedia.org/wiki/Help:External_editors instruções de instalação] para mais informação.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'todas',
'imagelistall'     => 'todas',
'watchlistall1'    => 'todas',
'watchlistall2'    => 'todas',
'namespacesall'    => 'todas',

# E-mail address confirmation
'confirmemail'            => 'Confirmar endereço de E-mail',
'confirmemail_noemail'    => 'Não possui um endereço de e-mail válido indicado nas suas [[{{ns:special}}:Preferences|preferências de utilizador]].',
'confirmemail_text'       => 'Esta wiki requer que valide o seu endereço de e-mail antes de utilizar as funcionalidades que requerem um endereço de e-mail. Active o botão abaixo para enviar uma confirmação para o seu endereço de e-mail. A mensagem incluíra um endereço que contém um código; carregue o endereço no seu navegador para confirmar que o seu endereço de e-mail encontra-se válido.',
'confirmemail_pending'    => '<div class="error">
Um código de confirmação já foi enviado para você; caso tenha criado sua conta recentemente, é recomendável aguardar alguns minutos para o receber antes de tentar pedir um novo código.
</div>',
'confirmemail_send'       => 'Enviar código de confirmação',
'confirmemail_sent'       => 'E-mail de confirmação enviado.',
'confirmemail_oncreate'   => 'Foi enviado um código de confirmação para o seu endereço de e-mail.
Tal código não é exigido para que possa se autenticar no sistema, mas será necessário que você o forneça antes de habilitar qualquer ferramenta baseada no uso de e-mail deste wiki.',
'confirmemail_sendfailed' => 'Não foi possível enviar o email de confirmação. Por favor verifique o seu endereço de e-mail.

Mailer retornou: $1',
'confirmemail_invalid'    => 'Código de confirmação inválido. O código poderá ter expirado.',
'confirmemail_needlogin'  => 'Precisa de $1 para confirmar o seu endereço de correio electrónico.',
'confirmemail_success'    => 'O seu endereço de e-mail foi confirmado. Pode agora se ligar.',
'confirmemail_loggedin'   => 'O seu endereço de e-mail foi agora confirmado.',
'confirmemail_error'      => 'Alguma coisa correu mal ao guardar a sua confirmação.',
'confirmemail_subject'    => '{{SITENAME}} confirmação de endereço de e-mail',
'confirmemail_body'       => 'Alguém, provavelmente você com o endereço de IP $1, registou uma conta "$2" com este endereço de e-mail na {{SITENAME}}.

Para confirmar que esta conta realmente é sua, e para activar
as funcionalidades de e-mail na {{SITENAME}}, abra o seguinte endereço no seu navegador:

$3

Caso este *não* seja você, não siga o endereço. Este código de confirmação
irá expirar a $4.',

# Inputbox extension, may be useful in other contexts as well
'tryexact'       => 'Tentar a exata expressão',
'searchfulltext' => 'Pesquisar no texto completo',
'createarticle'  => 'Criar artigo',

# Scary transclusion
'scarytranscludedisabled' => '[A transclusão de páginas de outros wikis encontra-se desabilitada]',
'scarytranscludefailed'   => '[Não foi possível obter a predefinição a partir de $1; desculpe-nos]',
'scarytranscludetoolong'  => '[URL longa demais, desculpe-nos]',

# Trackbacks
'trackbackbox'      => "<div id='mw_trackbacks'>
Trackbacks para esta página:<br />
$1
</div>",
'trackbackremove'   => ' ([$1 Eliminar])',
'trackbacklink'     => 'Trackback',
'trackbackdeleteok' => 'O trackback foi eliminado com sucesso.',

# Delete conflict
'deletedwhileediting' => 'Aviso: Esta página foi eliminada após você ter começado a editar!',
'confirmrecreate'     => "O utilizador [[{{ns:user}}:$1|$1]] ([[{{ns:user_talk}}:$1|Discussão]]) eliminou esta página após você ter começado a editar, pelo seguinte motivo:
: ''$2''
Por favor, confirme que realmente deseja recriar esta página.",
'recreate'            => 'Recriar',

# HTML dump
'redirectingto' => 'Redireccionando para [[$1]]...',

# action=purge
'confirm_purge'        => 'Limpar a memória cache desta página?

$1',
'confirm_purge_button' => 'OK',

'youhavenewmessagesmulti' => 'Tem novas mensagens em $1',

'searchcontaining' => "Pesquisar por páginas contendo ''$1''.",
'searchnamed'      => "Pesquisar por páginas nomeadas como ''$1''.",
'articletitles'    => "Páginas começando com ''$1''",
'hideresults'      => 'Esconder resultados',

# DISPLAYTITLE
'displaytitle' => '(Ligar a esta página como [[$1]])',

'loginlanguagelabel' => 'Idioma: $1',

# Multipage image navigation
'imgmultipageprev'   => '&larr; página anterior',
'imgmultipagenext'   => 'próxima página &rarr;',
'imgmultigo'         => 'Ir!',
'imgmultigotopre'    => 'Mostrar página',
'imgmultiparseerror' => 'O ficheiro aparenta estar corrompido ou com algum outro erro. Por conta disso, não será possível exibir uma listagem de páginas no wiki {{SITENAME}}.',

# Table pager
'ascending_abbrev'         => 'asc',
'descending_abbrev'        => 'desc',
'table_pager_next'         => 'Próxima página',
'table_pager_prev'         => 'Página anterior',
'table_pager_first'        => 'Primeira página',
'table_pager_last'         => 'Última página',
'table_pager_limit'        => 'Mostrar $1 items por página',
'table_pager_limit_submit' => 'Ir',
'table_pager_empty'        => 'Sem resultados',

# Auto-summaries
'autosumm-blank'   => 'Foi removido o conteúdo completo desta página',
'autosumm-replace' => "Página substituída por '$1'",
'autoredircomment' => 'Redireccionando para [[$1]]', # This should be changed to the new naming convention, but existed beforehand
'autosumm-new'     => 'Nova página: $1',

# Size units
'size-bytes'     => '$1 B',
'size-kilobytes' => '$1 KB',
'size-megabytes' => '$1 MB',
'size-gigabytes' => '$1 GB',

# Live preview
'livepreview-loading' => 'Carregando…',
'livepreview-ready'   => 'Carregando… Pronto!',
'livepreview-failed'  => 'A previsão instantânea falhou!
Tente a previsão comum.',
'livepreview-error'   => 'Falha ao conectar: $1 "$2"
Tente a previsão comum.',

);

?>
