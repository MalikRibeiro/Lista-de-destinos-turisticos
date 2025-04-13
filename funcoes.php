<?php
session_start();

function carregardestinos() {
    $destinos = [
        [
            'id' => 1,
            'nome' => 'Cataratas do Iguaçu',
            'regiao' => 'Oeste do Paraná',
            'tipo' => 'Natureza',
            'nota' => 9.5,
            'atracoes' => 'Cataratas, Parque das Aves, Marco das Três Fronteiras',
            'descricao' => 'As Cataratas do Iguaçu, localizadas em Foz do Iguaçu, são uma das Sete Maravilhas Naturais do Mundo, com 275 quedas d’água e uma biodiversidade única no Parque Nacional do Iguaçu. É um destinos imperdível para amantes da natureza.',
            'imagem' => 'https://emalgumlugardomundo.com.br/wp-content/uploads/2021/12/cataratas-do-iguacu-8.jpg'
        ],
        [
            'id' => 2,
            'nome' => 'Ilha do Mel',
            'regiao' => 'Litoral do Paraná',
            'tipo' => 'Praia',
            'nota' => 8.8,
            'atracoes' => 'Praia de Encantadas, Fortaleza de Nossa Senhora dos Prazeres, Farol das Conchas',
            'descricao' => 'A Ilha do Mel é um paraíso ecológico com praias preservadas e trilhas na natureza. Sem carros, o acesso é feito a pé ou de barco, proporcionando uma experiência rústica e tranquila.',
            'imagem' => 'https://www.viagensecaminhos.com/wp-content/uploads/2017/08/ilha-do-mel-parana-1068x712.jpg'
        ],
        [
            'id' => 3,
            'nome' => 'Curitiba',
            'regiao' => 'Região Metropolitana de Curitiba',
            'tipo' => 'Urbano',
            'nota' => 8.5,
            'atracoes' => 'Jardim Botânico, Museu Oscar Niemeyer, Parque Tanguá',
            'descricao' => 'Curitiba, a capital do Paraná, é conhecida por seus parques, arquitetura e planejamento urbano. O Jardim Botânico e o Museu Oscar Niemeyer são cartões-postais da cidade.',
            'imagem' => 'https://www.thetripblogger.com/wp-content/uploads/2014/05/Botanical_Gardens_-_Curitiba_-_Brazil.jpg'
        ],
        [
            'id' => 4,
            'nome' => 'Prudentópolis',
            'regiao' => 'Campos Gerais',
            'tipo' => 'Natureza',
            'nota' => 8.7,
            'atracoes' => 'Salto São Francisco, cachoeiras gigantes, cultura ucraniana',
            'descricao' => 'Conhecida como a "Terra das Cachoeiras Gigantes", Prudentópolis tem mais de 100 cachoeiras, incluindo o Salto São Francisco, com 196 metros de altura. A cidade também preserva a cultura ucraniana.',
            'imagem' => 'https://rota1976.com/wp-content/uploads/2021/11/260484239_10159167940237672_1574693250435241380_n.jpg'
        ],
        [
            'id' => 5,
            'nome' => 'Morretes',
            'regiao' => 'Litoral do Paraná',
            'tipo' => 'Histórico',
            'nota' => 8.3,
            'atracoes' => 'Passeio de trem pela Serra do Mar, centro histórico, barreado',
            'descricao' => 'Morretes é uma cidade histórica famosa pelo passeio de trem pela Serra do Mar, partindo de Curitiba, e pelo prato típico barreado. Suas paisagens e casarões antigos encantam os visitantes.',
            'imagem' => 'https://www.temporadalivre.com/blog-media/posts/cover/10590/conheca-a-historica-morretes-no-parana-99dd25e4.jpg'
        ],
        [
            'id' => 6,
            'nome' => 'Ponta Grossa',
            'regiao' => 'Campos Gerais',
            'tipo' => 'Natureza',
            'nota' => 8.4,
            'atracoes' => 'Parque Estadual de Vila Velha, Buraco do Padre, Cânion Guartelá',
            'descricao' => 'Ponta Grossa é conhecida pelo Parque Estadual de Vila Velha, com formações rochosas únicas, e pelo Cânion Guartelá, um dos maiores do Brasil. É ideal para quem gosta de ecoturismo.',
            'imagem' => 'https://www.viagensecaminhos.com/wp-content/uploads/2019/01/vista-aerea-centro-ponta-grossa-1068x600.jpg'
        ],
        [
            'id' => 7,
            'nome' => 'São Luiz do Purunã',
            'regiao' => 'Região Metropolitana de Curitiba',
            'tipo' => 'Rural',
            'nota' => 8.0,
            'atracoes' => 'Fazendas, passeios a cavalo, paisagens rurais',
            'descricao' => 'São Luiz do Purunã é um destinos rural próximo a Curitiba, perfeito para quem busca tranquilidade, contato com a natureza e atividades como passeios a cavalo.',
            'imagem' => 'https://institutopuruna.com.br/wp-content/uploads/2019/01/IMG_3322b-1024x683.jpg'
        ],
        [
            'id' => 8,
            'nome' => 'Porto Rico',
            'regiao' => 'Noroeste do Paraná',
            'tipo' => 'Praia',
            'nota' => 7.8,
            'atracoes' => 'Praias de água doce no Rio Paraná, esportes aquáticos, Ilha do Sol',
            'descricao' => 'Porto Rico é um destinos no Noroeste do Paraná, famoso por suas praias de água doce no Rio Paraná, ideal para esportes aquáticos e relaxamento.',
            'imagem' => 'https://www.viajeparana.com/sites/viaje-parana/arquivos_restritos/files/imagem/2019-04/190310_praia_de_santa_rosa_4995.jpg'
        ],
        [
            'id' => 9,
            'nome' => 'Antonina',
            'regiao' => 'Litoral do Paraná',
            'tipo' => 'Histórico',
            'nota' => 8.1,
            'atracoes' => 'Centro histórico, Baía de Antonina, Carnaval tradicional',
            'descricao' => 'Antonina é uma cidade histórica no litoral do Paraná, conhecida por seu centro colonial preservado, sua baía e o tradicional Carnaval de rua.',
            'imagem' => 'https://www.viagensecaminhos.com/wp-content/uploads/2017/09/baia-de-antonina.jpg'
        ],
        [
            'id' => 10,
            'nome' => 'Guaratuba',
            'regiao' => 'Litoral do Paraná',
            'tipo' => 'Praia',
            'nota' => 8.0,
            'atracoes' => 'Praia Central, Morro do Cristo, Baía de Guaratuba',
            'descricao' => 'Guaratuba é um dos destinos de praia mais populares do Paraná, com uma extensa faixa de areia, o Morro do Cristo e uma baía ideal para esportes náuticos.',
            'imagem' => 'https://www.temporadalivre.com/uploads/editor/pictures/806f1204212b/content_mountain-road-1556177_1920.jpg'
        ],
        [
            'id' => 11,
            'nome' => 'Tibagi',
            'regiao' => 'Campos Gerais',
            'tipo' => 'Natureza',
            'nota' => 8.2,
            'atracoes' => 'Cânion Guartelá, Salto Puxa-Nervos, rafting no Rio Tibagi',
            'descricao' => 'Tibagi é um destinos para amantes da natureza, com o impressionante Cânion Guartelá, o Salto Puxa-Nervos e atividades como rafting no Rio Tibagi.',
            'imagem' => 'https://www.viajeparana.com/sites/viaje-parana/arquivos_restritos/files/styles/escala_e_corta_915_555_/public/imagem/2019-03/igreja_aerea.jpg?itok=NUWtlMx-'
        ]
    ];

    if (isset($_SESSION['novos_destinos']) && is_array($_SESSION['novos_destinos'])) {
        $destinos = array_merge($destinos, $_SESSION['novos_destinos']);
    }

    return $destinos;
}

function buscarDestinoPorId($id) {
    $destinos = carregarDestinos();
    $destino = array_filter($destinos, function($d) use ($id) {
        return $d['id'] === $id;
    });
    return reset($destino);
}


function filtrardestinos($criterios = []) {
    $destinos = carregardestinos();
    return array_filter($destinos, function($destinos) use ($criterios) {
        $match = true;

        if (isset($criterios['busca'])) {
            $termo = $criterios['busca'];
            $match = $match && (stripos($destinos['nome'], $termo) !== false || stripos($destinos['tipo'], $termo) !== false);
        }

        if (isset($criterios['regiao'])) {
            $regiao = $criterios['regiao'];
            $match = $match && ($regiao ? stripos($destinos['regiao'], $regiao) !== false : true);
        }

        if (isset($criterios['tipo'])) {
            $tipo = $criterios['tipo'];
            $match = $match && ($tipo ? stripos($destinos['tipo'], $tipo) !== false : true);
        }

        return $match;
    });
}

function usuarioEstaLogado() {
    return isset($_SESSION['logado']) && $_SESSION['logado'] === true;
}

function autenticarUsuario($usuario, $senha) {
    $usuarios = [
        'admin' => '123',
        'malik' => '789',
        'ygor' => '456'
    ];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
        $_SESSION['logado'] = true;
        return true;
    }
    return false;
}


function adicionardestinos($dados) {
    $novodestinos = [
        'id' => time(), 
        'nome' => $dados['nome'],
        'regiao' => $dados['regiao'],
        'tipo' => $dados['tipo'],
        'nota' => floatval($dados['nota']),
        'atracoes' => $dados['atracoes'],
        'descricao' => $dados['descricao'],
        'imagem' => $dados['imagem']
    ];

    if (!isset($_SESSION['novos_destinos'])) {
        $_SESSION['novos_destinos'] = [];
    }

    $_SESSION['novos_destinos'][] = $novodestinos;
}
?>