# moviesplace
Stap 1:  Command prompt <br>
symfony new my_project_directory --version="5.4.*" --webapp <br>
Stap 2: (PHPStorm) <br>
Ga naar env. bestand <br>
DATABASE_URL="mysql://root:@127.0.0.1:3306/oefening?serverVersion=10.4.27-MariaDB&charset=utf8mb4" <br>
Stap 3: Terminal  <br>
php bin/console doctrine:database:create <br>
php bin/console make:entity <br>
php bin/console make:migration <br>
php bin/console doctrine:migrations:migrate <br>
Stap 5: Controller <br>
php bin/console make controller <br>
Stap 6: Form <br>
php bin/console make:form  <br>
