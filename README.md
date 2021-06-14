# Laramonster

Get a monster and send it to fight versus another one ! 🐣

## How to Run ?

1. **Verify** that you have docker installed on your machine
2. **Go** to root folder and **run** `./vendor/bin/sail up` in order to execute all the containers and services inside _docker-compose.yaml_

    > Pro tip : You can make an alias for `./vendor/bin/sail up`
    > With it you could male all the commands easier to excute like `sail up`
    > The 'alias' version will be used inside this documentation

3. **Run** `sail artisan migrate` for migrating to the last version of the database
4. **Run** `sail composer install` to install all the php package dependencies
5. **Run** `sail npm install` to install all the node package dependencies
6. **Run** `sail npm run dev` to run the Laravel Application localy.

    > If there are some issues with "breeze" related things, see the documentation to install the dependencies, but normaly its ok.

7. **Go** to _localhost_ or _127.0.0.1_ address
