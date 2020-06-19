# fernanda-soy-widget

## Instrucciones de instalación para prueba

### Prerequisitos (ambiente de desarrollo utilizado)

* Servidor Web con soporte a PHP 7.3 en máquina local (localhost)  
* Servidor de MySQL versión 5.7 (o superior)
* Wordpress versión 5.4.2
* Acceso a Internet para acceder a REST API

### Pasos para instalación y prueba

1. Copiar la carpeta de Wordpress en la raíz del servidor web.
1. Renombrar la carpeta de Wordpress a _**noticias**_.
1. Ir a la carpeta _**noticias/wp-content/plugins**_ y clonar el repositorio del plugin.

    ```bash
    cd noticias/wp-content/plugins
    git clone https://github.com/ferpoz/fernanda-soy-widget.git
    ```

1. Ir a la carpeta _**fernanda-soy-widget**_ recién creada.
1. Crear BD de wordpress con el archivo noticias.sql.
1. Crear el usuario admin\_noticias en la BD (MySQL o MariaDB) con la contraseña _1W8ZOi5pS!Se_.  

    ```sql
    -- Código de ejemplo para crear usuario en MySQL
    CREATE USER 'admin_noticias'@'localhost' IDENTIFIED BY '1W8ZOi5pS!Se';
    SET PASSWORD FOR 'admin_noticias'@'localhost' = '1W8ZOi5pS!Se';
    GRANT ALL PRIVILEGES ON noticias.* TO 'admin_noticias'@'localhost';
    FLUSH PRIVILEGES;
    ```

1. Copiar archivo de configuración _**wp-config.php**_ a la carpeta _**noticias**_.
1. Usar el navegador para ir a la URL _**<http://localhost/noticias>**_. Las 10 últimas noticias aparecerán en el pie de página 2.
1. También es posible ver la prueba en la URL  _**<https://dev.strichpunkt.io/noticias>**_.
