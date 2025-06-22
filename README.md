<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">API Pix - Laravel</h1>

<p align="center">
  API desenvolvida em Laravel utilizando os recursos da <strong>API Pix v2 do Banco do Brasil</strong> para criação de cobranças via Pix.
</p>

---

## 📖 Sobre o Projeto

Este projeto tem como objetivo a construção de uma API RESTful que implementa os recursos da **API Pix v2 do Banco do Brasil**, focando principalmente na criação de cobranças via Pix.

Além de ser uma API funcional, este projeto é uma forma de colocar em prática meus conhecimentos adquiridos das utilizar **melhores práticas de desenvolvimento de software profissional**, como:

- 🏛️ **Arquitetura limpa (Clean Architecture)**
- 📐 **Princípios SOLID**
- ✅ **Test-Driven Development (TDD)**
- 📜 **Commits padronizados seguindo Conventional Commits**
- 🐳 **Uso de Docker para desenvolvimento e ambiente isolado**
- 🔍 **Alta cobertura de testes**
- 🧹 **Código limpo (Clean Code)**
- 📑 **Documentação clara e bem estruturada**
- 🌐 **Documentar em Open API 3.0 (Antigo Swagger)**


---

## 🚀 Tecnologias e Ferramentas

- [Laravel](https://laravel.com/)
- [PHP](https://www.php.net/) 8+
- [Docker](https://www.docker.com/)
- [PHPUnit](https://phpunit.de/) — Testes
- [Laravel Pint](https://laravel.com/docs/10.x/pint) — Code Style
- [Commitizen](https://commitizen-tools.github.io/commitizen/) — Commits semânticos
- [Insomnia](https://insomnia.rest/) ou [Postman](https://www.postman.com/) — Teste da API

---

## 🎯 Objetivos do Projeto

- ✅ Implementar a integração com a **API Pix v2 do Banco do Brasil**.
- ✅ Praticar e reforçar princípios como **SOLID**, **TDD**, **Clean Code** e **Arquitetura limpa**.
- ✅ Manter um código altamente testável e sustentável.
- ✅ Aplicar ferramentas modernas de desenvolvimento como **Docker** e **commits semânticos**.
- ✅ Gerar uma documentação clara tanto da API quanto do projeto como um todo, utilizando também Open API 3.0.

---

## 🗺️ Funcionalidades da API

- 🔸 Criar cobranças Pix.
- 🔸 Consultar cobranças (em desenvolvimento ou planejado).
- 🔸 Webhook para notificações (em desenvolvimento ou planejado).

*(Funcionalidades serão expandidas conforme evolução do projeto.)*

---

## 🏗️ Padrões e Boas Práticas Aplicadas

- 🔧 **Arquitetura limpa (Clean Architecture)**
- 🚦 **Testes automatizados guiando o desenvolvimento (TDD)**
- 🏛️ **Princípios SOLID aplicados**
- ✍️ **Commits padronizados (`feat`, `fix`, `test`, `chore`, etc.)**
- 🧽 **Clean Code — código claro, legível e sustentável**
- 🐳 **Ambiente isolado via Docker**
- 🧪 **Cobertura de testes como métrica de qualidade**
- 📑 **Documentação da API e do projeto**

---

## 🐳 Como rodar o projeto (via Docker)

```bash
# Clonar o projeto
git clone https://github.com/edurodriguesn/api-pix-bb.git

# Acessar o diretório
cd seu-repositorio

# Subir o ambiente
docker-compose up -d

# Instalar dependências
docker exec -it app composer install

# Rodar as migrations
docker exec -it app php artisan migrate

# (Opcional) Rodar os testes
docker exec -it app php artisan test
