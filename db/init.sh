#!/bin/bash

echo "⏳ Waiting for MySQL..."

until mysqladmin ping -h "localhost" --silent; do
  sleep 2
done

echo "✅ MySQL is up. Running init..."

mysql -uroot -proot <<EOF

CREATE DATABASE IF NOT EXISTS web1_db;
CREATE DATABASE IF NOT EXISTS web2_db;

EOF

echo "📥 Importing web1..."
mysql -uroot -proot web1_db < /docker-entrypoint-initdb.d/web1.sql

echo "📥 Importing web2..."
mysql -uroot -proot web2_db < /docker-entrypoint-initdb.d/web2.sql

echo "🎉 Done!"