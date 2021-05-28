# Manual para rodar ambiente Frontend / Api

mkdir containers
mkdir containers/mysql
mkdir containers/redis


## Importar banco de dados para container mysql

docker exec -i saas_mysql mysql -uroot -proot api_webservice < arquivo.sql