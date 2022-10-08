### Laravel and MySQL

### Running serve

```js
php artisan serve
```

### Check list

```js
php artisan list
```

### Create controller

```js
php artisan make:controller ProductController
```

### Link to storage

```js
php artisan storage:link
```

### DB

```js
mysql -u root -p
show databases;
```

### Create database

```js
create database laravel
```

### Show all databases

```js
show databases;
```

### Use database

```js
use database_name;
```

### Show tables

```js
show tables;
```

### Create model and migration

```js
php artisan make:model Post -m

```

### Migrate

```js
php artisan migrate
```

### Describe

```js
describe posts;
```

### Reset database: delete all table

```js
php artisan migrate:reset
```

### Refresh database : migrate and rollback

```js
php artisan migrate:refresh
```

### Fake data

```js
php artisan make:factory PostFactory
```

### Create factory: php artisan tinker

```js
\App\Models\Post::factory()->create();
\App\Models\Post::factory()->count(5)->create();
```

### SELECT CMD

```js
SELECT * FROM table_name;
```

### EXIT CMD INSIDE DB

```js
exit;
```
### DROP TABLE MySQL
```js
DROP TABLE IF EXISTS food; 
```


### Create rule validate
```js
php artisan make:rule Uppercase
```

### Create request validate
```js
php artisan make:request CreateValidationRequest
```

### Add column
```js
php artisan make:migration add_image_to_foods
```