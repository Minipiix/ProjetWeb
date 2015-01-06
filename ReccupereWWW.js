#!/bin/bash
# Script qui permet d importer le www dans le dossier pour le git


echo ------------------------
echo Copie des dossiers de www vers dossier de git

echo Copie de app
sudo cp -Rp /var/www/app /home/potetoes/Bureau/ProjetWeb

echo Copie de public
sudo cp -Rp /var/www/public /home/potetoes/Bureau/ProjetWeb

echo Droit de public 777
sudo chmod -R 777 public


echo Done
echo ------------------------


exit 0
