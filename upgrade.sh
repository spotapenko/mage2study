./bin/magento setup:upgrade
./bin/magento setup:static-content:deploy -f
./bin/magento indexer:reindex
./bin/magento cache:flush
