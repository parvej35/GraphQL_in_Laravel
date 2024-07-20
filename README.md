### Parvej Chowdhury (parvej35@gmail.com)

We are going to do the basics of GraphQL using Laravel. These are the fundamentals of GraphQL and essential trainings.

## Step to create the project:

#### 1) Install composer in your system from :
    https://getcomposer.org/

#### 2) Open terminal and run the command :
    `composer create-project laravel/laravel GraphQL_in_Laravel`

#### 3) After that, run the command :
    `cd GraphQL_in_Laravel`

#### 4) Now, run the command :
    `php artisan serve`

#### 5) Open the browser and type the URL :

## Database step and project configuration:

=> Open the .env file and set the database configuration.<br><br>
=> Run the command `php artisan migrate` to create the table in the database.<br>

=> Create the seeder file:
- Run the command `php artisan make:seeder UserSeeder`.
- Open the UserSeeder file and write the code to insert the data in the table.
- Run the command `php artisan db:seed` to insert the data in the table.<br>

#### OR ####

- Create the sample user using 'tinker' command.
- Run the command `php artisan tinker` to open the tinker.
- Run this command on the terminal: `\App\Models\User::factory(10)->create()`<br>

## Install the 'lighthouse' package:
Lighthouse is a framework for serving GraphQL from Laravel: https://lighthouse-php.com/

## Install GraphQL client library (Development Tool) such as 'GraphQL Playground':
`composer require mll-lab/laravel-graphiql`

This is a tool like postman for developing REST APIs. After installation, visit '/graphiql' to try it.


## Project setup:

1) Create directory in the project root folder called '<b>graphql</b>'.
2) Create the '<b>graphql.schema</b>' file in the '<b>graphql</b>' folder. 
3) Create a 'Query' class.<br><br>
- Create a 'Query' class in the 'app/GraphQL/Query' folder.
- open the terminal and run the command `php artisan lighthouse:query Greetings`.
- This command will create the 'Greetings' class in the 'app/GraphQL/Query' folder.<br><br>
