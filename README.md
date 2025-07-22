## App Notas Mágicas

**Notas Mágicas** Envía notas seguras y cifradas que se autodestruyen una vez leídas. Está diseñado para:

* **Sin publicidad y libre** Sin desorden, sin sobrecarga, sin dependencias complejas. Notas Mágicas está desarrollado con PHP, por lo que es rápido y fácil de implementar.

* **Código abierto y refinado.** [Notas mágicas](https://github.com/JMVS/notasmagicas) es de código abierto y disponible en GitHub.

* **Contraseña opcional.** Establecer una contraseña opcional para los mensajes que se autodestruyen.

* **Autodestrucción automática.** La nota caducará después de un número determinado de días., **por defecto 7 días**


### :zap: Instalación utilizando [laravel\valet](https://laravel.com/docs/10.x/valet)

- Clonar el repositorio.
```bash
git clone https://github.com/JMVS/notasmagicas.git
```

- Cambiar el dicrectorio de trabajo actual
```bash
cd notasmagicas
```

- Asegurarse que la versión de `php es ^8.0`
```bash
php -v
```

- Instalar las dependencias con composer
```bash
composer install
```

- Copiar el archivo .env 
```bash
cp .env.example .env
```

- Editar las credenciales de la base de datos en el `archivo .env`
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notasmagicas
DB_USERNAME=root
DB_PASSWORD=root
```

- Edite la URL de la aplicación a 'https://burnernote.test' ya que los recursos se sirven a través de una URL segura

- Generar clave de aplicación y migrar base de datos
```bash
php artisan key:generate
php artisan migrate
```

- Servir el sitio a través de valet
```bash
valet link
valet secure
```

- Visitar 'https://burnernote.test' desde el navegador


## Licencia
Notas mágicas es un software de código abierto bajo la licencia [GNU License](https://github.com/Gigamick/burnernote/blob/main/LICENSE).
Notas mágicas está basado en [Burnernote](https://github.com/Gigamick/burnernote/).
