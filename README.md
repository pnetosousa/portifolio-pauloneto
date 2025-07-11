<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Portfólio Paulo Neto

Este é um portfólio pessoal desenvolvido em Laravel, com suporte completo a dois idiomas (português e inglês), layout moderno e responsivo, e foco em backend PHP, banco de dados e integrações.

## Funcionalidades
- Alternância de idioma (PT/EN) via dropdown com bandeiras
- Textos traduzidos usando arquivos de tradução Laravel
- Persistência do idioma via sessão
- Estrutura MVC (Controllers, Views, Middleware)
- Layout responsivo e estilizado
- Rodapé e textos longos traduzidos
- Proteção de arquivos sensíveis e imagens privadas via `.gitignore`

## Instalação
1. Clone o repositório:
   ```sh
   git clone https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
   cd site-pauloneto
   ```
2. Instale as dependências:
   ```sh
   composer install
   npm install && npm run build
   ```
3. Copie o arquivo de ambiente:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure o banco de dados em `.env` (SQLite por padrão):
   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=./database/database.sqlite
   ```
5. Rode as migrations:
   ```sh
   php artisan migrate
   ```
6. Inicie o servidor:
   ```sh
   php artisan serve
   ```

## Como trocar o idioma
- Use o dropdown no canto superior direito para alternar entre português e inglês.
- O idioma é salvo na sessão e persiste entre páginas.

## Estrutura de Pastas
- `app/` - Controllers, Middleware
- `resources/views/` - Templates Blade
- `resources/lang/` - Traduções PT/EN
- `public/img/` - Imagens públicas (logo apenas)
- `routes/web.php` - Rotas principais
- `app/Http/Middleware/SetLocale.php` - Middleware de idioma

## Testes
- Testes básicos em `tests/`
- Para rodar:
  ```sh
  php artisan test
  ```

## Deploy
- Pronto para deploy em qualquer serviço Laravel (Heroku, Vercel, etc)
- Recomenda-se configurar variáveis de ambiente e storage conforme o serviço

## Contribuição
Pull requests são bem-vindos! Para contribuir:
1. Crie uma branch:
   ```sh
   git checkout -b minha-feature
   ```
2. Faça suas alterações
3. Envie para o repositório:
   ```sh
   git add .
   git commit -m "Minha feature"
   git push origin minha-feature
   ```
4. Abra um Pull Request

## Licença
Este projeto é open-source sob a licença MIT.

## Direitos Autorais
Este site é um portfólio pessoal. Todas as imagens públicas (logo, ícones, fotos) possuem direitos autorais e não podem ser utilizadas ou reproduzidas sem autorização do autor.

---

**Dúvidas ou sugestões?**
Entre em contato pelo LinkedIn ou WhatsApp disponíveis no site.
