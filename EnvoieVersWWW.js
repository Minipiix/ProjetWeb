#!/bin/bash
# Script qui permet d importer les dossiers du git  dans le dossier www


echo ------------------------
echo Copie des dossiers de ProjetWeb vers WWW

echo Effectue une save de WWW 
sudo cp -pR /var/www /var/wwwAutoSave


echo Copie de app vers www
sudo cp -pR /home/potetoes/Bureau/ProjetWeb/app /var/www

echo Droit de public 777
sudo chmod -R 777 public

echo Copie de public vers www
sudo cp -pR /home/potetoes/Bureau/ProjetWeb/public /var/www/



echo Done
echo ------------------------


exit 0
