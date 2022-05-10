*Para empezar con symfony es necesario*

Tienes que tener instalado Composer y PHP 8.0 o superior para poder utilizar Symfony

$ symfony check:requirements // Comprueba si están instalados los requerimientos para el proyecto

$ scoop install symfony-cli // Instala el CLI de Symfony

### $ symfony new my_project_directory --webapp //Symfony con todos los Paquetes incluidos

$ symfony new my_project_directory //Symfony base

$ symfony server:start //Inicia el servidor de Symfony


******************************************************************************

$ composer require annotations //Instala el paquete Annotations

$ composer require logger //Instala el paquete Logger


******************************************************************************

$ composer require symfony/orm-pack //Instala el paquete ORM (Gestor Bd)

$ composer require --dev symfony/maker-bundle //Instala el paquete Maker (Generador de Bd)

//Hay que configurar el .env.local para que funcione el ORM y el Maker
### .env.local example -> DATABASE_URL="mysql://root:@127.0.0.1:3306/symfony-library?serverVersion=5.7&charset=utf8mb4"

$ php bin/console doctrine:database:create //Crea la base de datos

$ php bin/console make:entity //Crea una entidad con sus atributos (columna en la Bd) y una clase para la entidad

$ php bin/console make:migration //Crea una migración para la base de datos creando una nueva version de la BD

$ php bin/console doctrine:migrations:migrate //Migra la base de datos para que se utilice con la version que acabamos de crear
