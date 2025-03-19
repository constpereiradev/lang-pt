# lang-pt

**lang-pt** é um pacote de tradução para projetos Laravel, fornecendo traduções para o português brasileiro.

## Instalação

Para instalar o pacote, utilize o Composer:

```bash
composer require constpereiradev/lang-pt:dev-main
```

Após a instalação, publique os arquivos de tradução:

```bash
php artisan vendor:publish --tag=lang-pt
```

## Uso

Após a publicação, os arquivos de tradução estarão disponíveis no diretório `resources/lang/pt`.
Certifique-se de que a configuração de localidade (`locale`) no arquivo `config/app.php` esteja definida para `pt`:

```php
'locale' => 'pt',
```

## Contribuição

Contribuições são bem-vindas!
Sinta-se à vontade para abrir issues e pull requests no repositório do GitHub.

##  Licença

Este projeto está licenciado sob a licença MIT.
