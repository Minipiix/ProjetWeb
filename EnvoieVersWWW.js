#!/bin/bash
# Script qui permet d importer le www dans le dossier pour le git


echo ------------------------
echo Copie des dossiers de ProjetWeb vers WWW

echo Effectue une save de WWW 
sudo cp -R /var/www wwwAutoSave


echo Copie de app vers www
sudo cp -R /home/potetoes/Bureau/ProjetWeb/app /var/www

echo Droit de public 777
sudo chmod -R 777 public

echo Copie de public vers www
sudo cp -R /home/potetoes/Bureau/ProjetWeb/public /var/www/



echo Done
echo ------------------------


exit 0
