# Unidad 5 - Administrar las sesiones

## Introducción

El protocolo HTTP es un protocolo **sin estado** (`stateless`), lo que significa que no puede recordar información entre las interacciones de un usuario con una aplicación web. En PHP, el alcance de una variable se limita al script en el que se define y su tiempo de ejecución.

## Concepto de sesión

Una **sesión** es el período en el que un usuario interactúa de manera continua con una aplicación web.

**Administrar una sesión** implica identificar al usuario y realizar un seguimiento de su actividad mediante:

-   **Identificación del usuario:**
    -   Formularios, arrays, ficheros o bases de datos.
    -   Autenticación HTTP (función `header` y encabezados HTTP).
-   **Seguimiento del usuario:**
    -   Usar características nativas de PHP:
        -   `$_SESSION` (gestión de sesiones con funciones específicas).
        -   `$_COOKIE` (cookies para almacenar datos del usuario).

## Características nativas de PHP para gestionar sesiones:

### Funciones específicas (variable `$_SESSION`)

Cuando un cliente solicita una aplicación web, el servidor genera un **SID** (identificador único de sesión) y lo asocia a una cookie. La superglobal `$_SESSION` almacena información de la sesión del usuario.

**Funciones clave para la gestión de sesiones:**

-   `session_start()` → Abre o reactiva una sesión.
-   `session_id()` → Devuelve el SID.
-   `session_name()` → Devuelve el nombre de la variable que almacena el SID.
-   `session_abort()` → Cancela cambios en la sesión excepto los del script actual.
-   `session_reset()` → Revierte todos los cambios en la sesión.
-   `session_status()` → Devuelve el estado de las sesiones (0 = deshabilitadas, 1 = habilitadas, 2 = activas).
-   `session_destroy()` → Elimina la sesión y el SID.
    -   Para limpiar los datos: `$_SESSION = array();`
    -   Para eliminar la cookie de sesión: `setcookie(session_name(), "", time() - 1)`.

### Cookies (variable `$_COOKIE`)

Una cookie es un pequeño archivo almacenado en el dispositivo del usuario que permite guardar información para futuras solicitudes.

**Proceso:**

1. **Servidor:** El sitio web crea la cookie con `setcookie` y se almacena en el dispositivo del usuario.
2. **Cliente:** El navegador reenvía automáticamente las cookies al servidor en las siguientes solicitudes. Estas se almacenan en la matriz asociativa `$_COOKIE`, donde la clave es el nombre de la cookie.

**Tipos de cookies:**

-   **De sesión:** Expiran al finalizar la sesión.
-   **Persistentes:** Permanecen según el tiempo definido en el parámetro `TimeUnix` de `setcookie`.

```php
setcookie(string nombre_cookie, [string valor_cookie], [TimeUnix vencimiento_cookie])
```

### Directivas `php.ini` control sesiones

-   `session.save_path` → Ruta para guardar las sesiones (`c:/wamp64/tmp`).
-   `session.use_cookies` → Habilita cookies para transmitir el SID (1 = habilitado).
-   `session.use_only_cookies` → Solo permite cookies para el SID (1 = habilitado).
-   `session.name` → Nombre predeterminado del SID (`PHPSESSID`).
-   `session.auto_start` → Controla si las sesiones inician automáticamente (0 = deshabilitado).
-   `session.use_trans_sid` → Evita el uso de URL para transmitir el SID (0 = deshabilitado).

**Nota:** Estas configuraciones por defecto están orientadas a mejorar la seguridad.
