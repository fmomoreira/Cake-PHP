# Cake-PHP
Iniciando com Framework PHP


# Requisitos Minimos 


Requisitos¶
HTTP Server. Por exemplo: Apache. De preferência com mod_rewrite ativo, mas não é obrigatório.
PHP 5.6.0 ou superior.
extensão mbstring
extensão intl


*Important

Tanto no XAMPP quanto no WAMP, as extensões mcrypt e mbstring são setadas por padrão.

Se você estiver usando o XAMPP, já tem a extensão intl inclusa, mas é preciso descomentar a linha extension=php_intl.dll no arquivo php.ini e então, reiniciar o servidor através do painel de controle do XAMPP.

Caso você esteja usando o WAMP, a extensão intl está “ativa” por padrão, mas não está funcional. Para fazê-la funcionar, você deve ir à pasta do php (que por padrão é) C:\wamp\bin\php\php{version}, copiar todos os arquivos que se pareçam com icu***.dll e colá-los no diretório “bin” do apache C:\wamp\bin\apache\apache{version}\bin. Reiniciando todos os serviços a extensão já deve ficar ok.


Para saber mais, segue o link da documentação oficial  -> https://book.cakephp.org/3.0/pt/installation.html



1 Passo


Com tudo configurado baixe o projeto dentro da pasta Htdocs do Xampp


2 Passo

Inicie o apache e mysql no Xampp Control

3  Passo 

Acesse a url localhost/*diretorio do projeto



Dentro da Pasta principal, tem o arquivo para importação do banco no mysql. Será necessario fazer a configuração da conexao com o banco no caminho

Configurando o banco de dados
Em seguida, vamos dizer ao CakePHP onde o nosso banco de dados está e como se conectar a ele. Para muitos, esta será a primeira e última vez que você vai precisar configurar qualquer coisa.

A configuração é bem simples: basta alterar os valores do array Datasources.default no arquivo config/app.php pelos que se aplicam à sua configuração. A amostra completa da gama de configurações pode ser algo como o seguinte:

return [
    // Mais configuração acima.
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'username' => 'cakephp',
            'password' => 'AngelF00dC4k3~',
            'database' => 'cake_bookmarks',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
        ],
    ],
    // Mais configuração abaixo.
];
Depois de salvar o seu arquivo config/app.php, você deve notar que a mensagem ‘CakePHP is able to connect to the database’ tem uma marca de verificação.

Uma cópia do arquivo de configuração padrão do CakePHP é encontrado em config/app.default.php.



Duvidas acesse o link oficial da documentação -> https://book.cakephp.org/3.0/pt/quickstart.html




*Obs   irei melhorar a documentação para facilitar  o uso deste projeto exemplo(em desenvolvimento)

