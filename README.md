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
