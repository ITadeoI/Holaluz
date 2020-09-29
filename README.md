Kata Holaluz - Algorithms, Miscellaneous & SuspiciousReadingDetector
===================
<p align="center"><img src="https://www.marketingdirecto.com/wp-content/uploads/2019/04/holaluz-logo.jpg" width="600"></p>

### System requirements

* docker
* docker-compose

### Start environment using Docker compose
    
1. Run docker with

```bash
docker-compose up -d
```
    
2. Run composer with

```bash
docker-compose exec php php composer.phar install
```

3. To access the server go to the url:

    http://localhost:32777/
    
If everything is fine you'll see the Symfony welcome page.

### How To Run Test

```bash
php bin/phpunit tests
```

<p align="center"><img src="https://i.ibb.co/ynm6NCX/Selection-095.png" width="600"></p>

### Built With

  * [Symfony](https://symfony.com/) - Web Application Framework
  * [Composer](https://getcomposer.org/doc/) - Dependency management
  * [Docker](https://docs.docker.com/) - OS-level virtualization (PaaS)
  * [GitHub](https://github.com/ITadeoI) - DevOps platform,
  * [Postman](https://www.getpostman.com/) - API Client for testing
  
### Author

[Alejandro Tadeo](https://github.com/ITadeoI) 