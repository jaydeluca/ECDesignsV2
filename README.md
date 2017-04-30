# ECDesignsV2

New Portfolio site, built with

- Laravel 
- Vue.js
- Bulma

## Setup

Using SQLite for this one:

```
touch database/database.sqlite
```

Set ENV:
```
DB_CONNECTION=sqlite
DB_DATABASE=/database/database.sqlite
```


## Installing

```
composer install
yarn
npm run dev
php artisan migrate
php artisan db:seed
```


### Data Structures

**PortfolioItem**
```
[
    'name' => 'Item Name',
    'thumbnail' => 'images/v1/thumbnail.jpg',
    'image' => 'images/v1/featured.jpg',
    'description' => 'whatever text you want here'
]
```


**PortfolioAsset**
```
[
    'item_id' => parent_id,
    'type'  => 'image'
    'asset' => 'images/v1/image.jpg'
]
```

