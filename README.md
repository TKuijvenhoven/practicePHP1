# moviesplace
Stap 1:  Command prompt
symfony new my_project_directory --version="5.4.*" --webapp
Stap 2: (PHPStorm)
Ga naar env. bestand
DATABASE_URL="mysql://root:@127.0.0.1:3306/oefening?serverVersion=10.4.27-MariaDB&charset=utf8mb4"
Stap 3: Terminal 
php bin/console doctrine:database:create
php bin/console make:entity
php bin/console make:migration
php bin/console doctrine:migrations:migrate
Stap 5: Controller
php bin/console make controller
Stap 6: Form
php bin/console make:form 
