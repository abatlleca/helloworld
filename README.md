# Projecte helloworld multi-idioma

## Instal·lació en Windows:
Per instal·lar l'aplicació en un entorn Windows, és necessari instal·lar la següent llista d'aplicacions:

(NOTA: la majoria de les webs només tenen versió en anglès)

### Paquet XAMPP Apache + MariaDB + PHP + Perl
Aquest conjunt d'aplicacions gestiona l'execució i accés al codi PHP
- Descarregar el fitxer d'instal·lació des de la pàgina oficial
https://www.apachefriends.org/es/download.html
(Triar la última versió)
- Executar el fitxer un cop descarregat

### Composer
Aquesta aplicació gestiona la instal·lació de part del codi del projecte
- Descarregar el fitxer d'instal·lació des de la pàgina oficial
https://getcomposer.org/download/
o des de l'enllaç següent
https://getcomposer.org/Composer-Setup.exe
- Executar el fitxer un cop descarregat 

### Git
Aquesta aplicació gestiona la descarrega del codi i permet actualitzar-lo en cas d'haver actualitzacions

NOTA: Durant el procés d'instal·lació també s'instal·larà la consola GitBash
- Descarregar el fitxer d'instal·lació des de la pàgina oficial
https://git-scm.com/download/win
- Executar el fitxer un cop descarregat

## Descarregar el projecte
Per descarregar el projecte s'han de seguir els següents passos:
1. Obrir GitBash → Premer la tecla Windows del teclat i escriure 'Gitbash'
2. Executar les següents instruccions (prémer 'Enter' després de les instruccions)
   1. Escriure `cd c:/xampp/htdocs` per accedir a la carpeta ón es descarregarà el projecte
   2. Escriure `git clone https://github.com/abatlleca/helloworld.git`

   Aquesta instrucció crearà la carpeta 'helloworld' i descarregarà el codi dintre la carpeta

   3. Escriure `cd helloworld` per accedir a la carpeta del projecte
   4. Escriure `composer install` per instal·lar les dependencies

## Accedir al projecte
(NOTA: L'aplicació XAMPP ha d'estar funcionant així com el mòdul de PHP)

Per accedir al projecte, obrirem un navegador i a la barra de direccions escriurem la URL: 
http://localhost/helloworld

### Configuració alternativa
Seguir les següents instruccions en cas de
- voler descarregar el projecte en una carpeta diferent a 'c:/xampp/htdocs'
- voler una URL alternativa per accedir al projecte (per exemple http://helloworld)

1. Obrir el fitxer `httpd-vhosts.conf` amb un editor de text (ex.: Bloc de Notes)
   - El fitxer està ubicat a la ruta C:\xampp\apache\conf\extra
2. Al final del fitxer, afegir un VirtualHost per al projecte

Ex.:
``` 
<VirtualHost helloworld:80>
   DocumentRoot "ruta_carpeta_projecte"
   <Directory "ruta_carpeta_projecte">
      Options Indexes FollowSymLinks
      AllowOverride All
      Require all granted
   </Directory>
</VirtualHost>
```
3. Desar el fitxer i tancar l'editor
4. Obrir un editor de text en mode administrador i obrir el fitxer `hosts`

(Windows) C:\Windows\system32\drivers\etc\
(Linux i Mac OS) /etc/hosts
- Afegir el text entre cometes al final `127.0.0.1 helloworld`
5. Desar el fitxer i tancar l'editor

(NOTA: si dóna error al desar, és perquè l'editor no s'ha obert en mode administrador)

6. Ja podeu accedir al projecte fent servir la URL http://helloworld