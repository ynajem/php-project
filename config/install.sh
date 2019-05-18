echo "Hi, This will install all the required packages";

# Install nodejs, npm
curl -sL https://deb.nodesource.com/setup_11.x | sudo bash -
sudo apt install nodejs

# Install global nodejs packages
sudo npm i -g http-server grunt-cli live-server

# Install yarn
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt update
sudo apt install yarn

# Install LAMP Stack (Apache2 mysql php and phpmyadmin)
sudo apt install apache2 -y
sudo apt install mysql-server -y
sudo apt install php libapache2-mod-php php-mysql -y
sudo apt install phpmyadmin php-mbstring php-gettext -y
sudo phpenmod mbstring

# Enable rewrite module for apache2
sudo a2enmod rewrite

# Enable cgi module for apache2
sudo a2enmod cgid 

