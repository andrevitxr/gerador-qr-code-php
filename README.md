# Gerador de QR Code PHP

Bem-vindo ao repositório do **Gerador de QR Code PHP**!

Este projeto é uma aplicação simples para gerar códigos QR usando PHP, baseada na biblioteca [php-qrcode](https://github.com/psyon/php-qrcode).

## 💻 Como Executar

### 1. Clone o Repositório

Comece clonando o repositório para o seu dispositivo. Abra o terminal e execute o seguinte comando:

git clone https://github.com/andrevitxr/gerador-qr-code-php.git

### 2. Crie a pasta

Navegue até o local do repositório e dentro dele crie a pasta: **files/**, é lá que as imagens dos Codigos QR gerados pelo site ficarão salvas.

### 3. Execução

Se você estiver usando Apache, coloque sua pasta do repositório no diretório de documentos do servidor (por exemplo, C:\wamp64\www\ ou C:\xampp\htdocs\ em XAMPP no Windows). Você pode acessar o arquivo PHP através do navegador com uma URL como: http://localhost/gerador-qr-code-php (você pode renomear o nome da pasta para facilitar na hora de acessar o link).

![Exemplo](https://i.imgur.com/CqDoS45.png)

## 📁 Estrutura do Projeto

```bash
/gerador-qr-code-php
│
├── files/                   # Pasta para salvar imagens dos códigos QR
│
├── index.php                # Script para gerar códigos QR
│ 
├── qrcode.php               # Biblioteca usada no codigo
│
├── style.css                # Estilização do site
│
└── README.md                # Este arquivo
