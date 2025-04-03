## 📍 Catálogo de Destinos Turísticos do Paraná

Este projeto é um site desenvolvido em **PHP** que apresenta um catálogo de destinos turísticos do estado do Paraná, Brasil. O site permite que os usuários explorem diferentes cidades e atrações turísticas, filtrem destinos por região ou tipo de turismo, vejam detalhes de cada destino e, para usuários autenticados, adicionem novos destinos ao catálogo. O projeto foi construído com o framework **Bootstrap 5** para estilização e responsividade, garantindo uma interface amigável e acessível em dispositivos móveis e desktops.

---

### 🚀 Funcionalidades

- **Catálogo de Destinos**: Exibe uma lista de destinos turísticos do Paraná com imagens, nomes e tipos de turismo (ex.: Natureza, Praia, Urbano).
- **Detalhes dos Destinos**: Permite visualizar informações detalhadas de cada destino, como região, nota, principais atrações e descrição.
- **Filtro de Destinos**: Oferece a opção de filtrar destinos por região (ex.: Campos Gerais, Litoral do Paraná) ou tipo de turismo.
- **Autenticação**: Inclui uma página de login para acesso a funcionalidades restritas (usuário: `admin`, senha: `123`).
- **Adicionar Destinos**: Usuários autenticados podem adicionar novos destinos ao catálogo (os dados são salvos na sessão).
- **Responsividade**: O site é totalmente responsivo, adaptando-se a diferentes tamanhos de tela (celular, tablet, desktop).

---

### 🛠️ Tecnologias Utilizadas

- **PHP**: Linguagem principal para a lógica do backend e manipulação de dados.
- **Bootstrap 5**: Framework CSS para estilização e responsividade.
- **HTML/CSS**: Estrutura e estilização adicional do site.
- **Sessões PHP**: Para autenticação de usuários e armazenamento temporário de novos destinos.

---

### 📂 Estrutura do Projeto

O projeto é composto pelos seguintes arquivos:

- **`index.php`**: Página inicial que exibe o catálogo de destinos com uma barra de busca.
- **`detalhes.php`**: Página que mostra informações detalhadas de um destino específico.
- **`filtrar.php`**: Página para filtrar destinos por região ou tipo de turismo.
- **`login.php`**: Página de login para autenticação de usuários.
- **`protegido.php`**: Página restrita para usuários autenticados, onde é possível adicionar novos destinos.
- **`funcoes.php`**: Arquivo com funções reutilizáveis, como carregar os dados dos destinos, filtrar, autenticar usuários e adicionar novos destinos.
- **`estilos.css`**: Arquivo CSS personalizado para ajustes visuais (ex.: tamanho das imagens, cor da barra de navegação).

---

### 📋 Pré-requisitos

Para executar o projeto, você precisa de:

- Um servidor web com suporte a PHP (ex.: Apache). Você pode usar:
  - **XAMPP**, **WAMP** ou **MAMP** para um ambiente local.
  - Um servidor online com PHP instalado.
- PHP versão 7.4 ou superior.
- Um navegador web moderno (ex.: Chrome, Firefox, Edge).

---

### ⚙️ Instalação e Configuração

Siga os passos abaixo para rodar o projeto localmente:

1. **Clone ou Baixe o Projeto**:
   - Se estiver usando Git, clone o repositório:
     ```bash
     git clone https://github.com/MalikRibeiro/Turistico
     ```
   - Ou baixe os arquivos manualmente e extraia para uma pasta.

2. **Configure o Servidor Web**:
   - Se estiver usando o **XAMPP**:
     - Coloque a pasta do projeto dentro de `C:\xampp\htdocs` (Windows) ou `/Applications/XAMPP/htdocs` (Mac).
     - Inicie o Apache no painel de controle do XAMPP.
   - Se estiver usando outro servidor, coloque os arquivos no diretório raiz do servidor (ex.: `/var/www/html` no Linux).

3. **Acesse o Site**:
   - Abra o navegador e acesse:
     ```
     http://localhost/aula/Projeto/index.php
     ```
   - Exemplo: Se a pasta do projeto for `destinos-parana`, acesse `http://localhost/destinos-parana/index.php`.

4. **Teste o Login**:
   - Para acessar a página protegida (`protegido.php`), use as credenciais:
     - Usuário: `admin`
     - Senha: `123`

---

### 🖼️ Destinos Incluídos

O catálogo inicial inclui os seguintes destinos turísticos do Paraná:

- **Cataratas do Iguaçu** (Oeste do Paraná, Natureza)
- **Ilha do Mel** (Litoral do Paraná, Praia)
- **Curitiba** (Região Metropolitana de Curitiba, Urbano)
- **Prudentópolis** (Campos Gerais, Natureza)
- **Morretes** (Litoral do Paraná, Histórico)
- **Ponta Grossa** (Campos Gerais, Natureza)
- **São Luiz do Purunã** (Região Metropolitana de Curitiba, Rural)
- **Porto Rico** (Noroeste do Paraná, Praia)
- **Antonina** (Litoral do Paraná, Histórico)
- **Guaratuba** (Litoral do Paraná, Praia)
- **Tibagi** (Campos Gerais, Natureza)

Os dados dos destinos estão no arquivo `funcoes.php`, na função `carregarDestinos()`.

---

### 🎨 Personalização Visual

- **Bootstrap 5**: O site usa o Bootstrap para estilização, o que dá um visual moderno e responsivo.
- **Cores**: A barra de navegação foi personalizada para um tom de azul escuro (`#1a3c5e`) no arquivo `estilos.css`.
- **Imagens**: Todas as imagens dos destinos têm tamanhos uniformes (200px de altura nos cards, 300px na página de detalhes), definidos no `estilos.css`.

Para alterar cores ou estilos:
- Edite o arquivo `estilos.css` para personalizar elementos como a cor da barra de navegação, fundo do site, etc.
- Exemplo: Para mudar a cor dos botões "Ver mais" (atualmente azul), adicione ao `estilos.css`:
  ```css
  .btn-primary {
      background-color: #28a745;
      border-color: #28a745;
  }
  ```

---

### 📝 Como Adicionar Novos Destinos

#### **Opção 1: Editar o Código**
1. Abra o arquivo `funcoes.php`.
2. Localize a função `carregarDestinos()` e adicione um novo array ao `$destinos` com os dados do novo destino. Exemplo:
   ```php
   [
       'id' => 12,
       'nome' => 'Nova Cidade',
       'regiao' => 'Região do Paraná',
       'tipo' => 'Tipo de Turismo',
       'nota' => 8.0,
       'atracoes' => 'Atração 1, Atração 2',
       'descricao' => 'Descrição do destino.',
       'imagem' => 'https://example.com/imagem.jpg'
   ]
   ```
3. Salve o arquivo e atualize a página.

#### **Opção 2: Usar a Página Protegida**
1. Faça login em `login.php` (usuário: `admin`, senha: `123`).
2. Acesse `protegido.php`.
3. Preencha o formulário com os dados do novo destino e clique em "Cadastrar Destino".
4. **Nota**: Os destinos adicionados via formulário são salvos na sessão e serão perdidos ao encerrar a sessão. Para persistência permanente, edite o `funcoes.php` ou implemente um banco de dados.

---

### 🔍 Possíveis Melhorias Futuras

- **Banco de Dados**: Substituir o array de destinos por um banco de dados (ex.: MySQL) para melhor gerenciamento e persistência de dados.
- **Upload de Imagens**: Adicionar a funcionalidade de upload de imagens para os destinos, em vez de usar URLs.
- **Edição e Exclusão**: Implementar funcionalidades para editar ou excluir destinos existentes.
- **Mais Filtros**: Adicionar mais opções de filtro (ex.: por nota, por atrações específicas).
- **Autenticação Avançada**: Implementar um sistema de autenticação mais robusto com banco de dados de usuários.

---

### 🐛 Solução de Problemas

- **Imagens Não Carregam**:
  - Verifique se as URLs das imagens no `funcoes.php` estão corretas.
  - Alternativamente, use imagens locais: crie uma pasta `imagens/`, salve as imagens lá e atualize os caminhos (ex.: `'imagem' => 'imagens/nova_cidade.jpg'`).

- **Erro de Acesso ao `protegido.php`**:
  - Certifique-se de estar logado (usuário: `admin`, senha: `123`).
  - Verifique se as sessões PHP estão funcionando corretamente no seu servidor.

- **Layout Desalinhado**:
  - Confirme que o link do Bootstrap está funcionando:
    ```html
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    ```
  - Verifique se o `estilos.css` está sendo carregado corretamente.

---

### 📜 Licença

Este projeto é de uso livre para fins educacionais. Sinta-se à vontade para modificá-lo e adaptá-lo às suas necessidades.

---

### 🤝 Contribuições

Contribuições são bem-vindas! Se você tiver sugestões de melhorias, novos destinos ou correções, abra uma *issue* ou envie um *pull request* no repositório.

---

### 📧 Contato

Se precisar de ajuda ou tiver dúvidas, entre em contato:
- **E-mail**: malik_ribeiromourad@hotmail.com e pygor32@gmail.com
- **GitHub**: MalikRibeiro e CbYgor

---
malik é gay
**Desenvolvido com 💻 e ☕ por Malik Ribeiro e Ygor Pereira**
