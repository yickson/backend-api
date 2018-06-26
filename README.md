Backend de administración de usuarios
====================

Backend para aplicaciones web con KumbiaPHP con la elegancia de Bootstrap de Twitter.

Con el DBKM podrás gestionar de manera rápida y segura los usuarios, perfiles, recursos, menús, y mucho más!.
-------------------

Usuario: admin

Pass: 123456

Instalación
-------------------
Para instalar el DBKM simplemente lo descargas, creas una base de datos e importas el archivo backup-1.sql ubicado en la carpeta "BaseDatos", editas el databases.ini y databases.org.ini con los parámetros de conexión.

Usuario: admin

Pass: 123456

Perfiles
-------------------
La gestión de perfiles permite administrar los diferentes roles de los usuarios que acceden al sistema, debes definir diferentes tipos de perfiles para distintos tipos de usuarios, ya que el perfil es quien se enlaza con los recursos de la aplicación dejando el acceso o no al usuario que le definamos dicho perfil.

Recursos
-------------------
Los recursos son las acciones o métodos que se pueden ejecutar en los controladores

Privilegios
-------------------
Los privilegios son los recursos que puede acceder cada perfil creado, brindando una mayor seguridad y escalabilidad al sistema

Menús
-------------------
La administración de menús permite gestionar los diferentes menús para que los usuarios accedan a los recursos.  Por ahora cada menú puede tener un submenú

Sucursales
-------------------
Si esta opción está habilitada, permite gestionar las sucursales de la empresa y asignarla a un usuario específico

Accesos
-------------------
Permite la visualización de las entradas y salidas de los usuarios del sistema

Backups
-------------------
Permite crear copias de seguridad y restaurar el sistema en un punto específico

Auditorías
-------------------
Las acciones que realizan los usuarios en el sistema se registran para tener un control sobre los eventos generados.

Visor de sucesos
-------------------
Si está activo, permite la visualización de los logs de las consultas generadas en la base de datos, para tener un control sobre la base de datos

Mantenimiento
-------------------
Permite optimizar, vaciar el cache, desfragmentar y reparar (si es posible) las tablas de la base de datos

Archivos de configuración
-------------------
Permite editar los diferentes archivos de configuración del sistema ubicados en la carpeta "config" de la aplicación
