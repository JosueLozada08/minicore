# Gestión de Gastos

Este proyecto es una aplicación web desarrollada con **Laravel 11.x**, que permite gestionar y filtrar los gastos de una empresa en función de un rango de fechas seleccionado por el usuario. La aplicación también calcula automáticamente el total de los montos dentro del rango seleccionado.

## **Características**

- Filtrar gastos por rango de fechas.
- Mostrar la relación entre empleados, departamentos y gastos.
- Calcular automáticamente la sumatoria de los montos de los gastos filtrados.
- Limpiar el formulario para realizar nuevas consultas.
- Interfaz limpia y moderna gracias a **Bootstrap 5**.

## **Requisitos del Sistema**

- **PHP**: >= 8.3
- **Composer**
- **MySQL** o cualquier base de datos compatible con Laravel.
- **Node.js y npm** (para compilar los recursos frontend si es necesario).

## **Instalación**

Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local:

1. Clonar el repositorio:
    ```bash
    git clone https://github.com/JosueLozada08/minicore.git
    cd minicore
    ```

2. Instalar las dependencias de PHP con Composer:
    ```bash
    composer install
    ```

3. Configurar el archivo `.env`:
    - Copia el archivo `.env.example` a `.env`:
        ```bash
        cp .env.example .env
        ```
    - Configura los valores de conexión a la base de datos:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nombre_de_tu_base_de_datos
        DB_USERNAME=tu_usuario
        DB_PASSWORD=tu_contraseña
        ```

4. Generar la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```

5. Migrar las tablas y poblarlas con datos:
    ```bash
    php artisan migrate --seed
    ```


## **Uso**

1. Ingresa un rango de fechas en el formulario de filtrado para consultar los gastos registrados en ese periodo.
2. Haz clic en "Filtrar" para ver los resultados en la tabla.
3. El total de los montos dentro del rango se muestra justo arriba de la tabla.
4. Haz clic en "Limpiar" para restablecer el formulario y ver todos los gastos registrados.

## **Estructura del Proyecto**

### **Modelos Principales**
- `Departamento`: Representa los departamentos dentro de la empresa.
- `Empleado`: Representa los empleados asociados a los departamentos.
- `Gasto`: Representa los gastos relacionados con los empleados.

### **Controlador Principal**
- `GastoController`: Maneja el filtrado por fechas, cálculo de totales, y la lógica para limpiar los filtros.

### **Base de Datos**
El proyecto utiliza una base de datos con las siguientes tablas:
- `departamentos`: Almacena los nombres de los departamentos.
- `empleados`: Relaciona a los empleados con los departamentos.
- `gastos`: Registra los detalles de los gastos, incluyendo su monto, fecha, y empleado asociado.

## **Capturas de Pantalla**

### **Vista Principal**
![Vista principal de la aplicación](https://via.placeholder.com/800x400)

### **Resultados Filtrados**
![Resultados filtrados](https://via.placeholder.com/800x400)

## **Tecnologías Utilizadas**

- **Framework Backend**: Laravel 11.x
- **Frontend**: Blade con Bootstrap 5.
- **Base de Datos**: MySQL.
- **Despliegue Local**: Laragon.

## **Contribuciones**

Si deseas contribuir a este proyecto:
1. Haz un fork del repositorio.
2. Crea una rama con tu nueva funcionalidad:
    ```bash
    git checkout -b nueva-funcionalidad
    ```
3. Haz un commit de tus cambios:
    ```bash
    git commit -m "Agregada nueva funcionalidad"
    ```
4. Haz push a la rama:
    ```bash
    git push origin nueva-funcionalidad
    ```
5. Abre un Pull Request en este repositorio.

## **Contacto**

- Autor: [Tu Nombre]
- Email: [tu-email@example.com]
- LinkedIn: [https://linkedin.com/in/tu-usuario](https://linkedin.com/in/tu-usuario)






<!-- aqui empieza el readme de laravel -->
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
