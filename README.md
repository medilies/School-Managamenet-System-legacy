

![db URL diagram](./db.png)

## DB notes

**cycles** and **class_types** are seeded with values according to the [algerian educational system](https://education.gov.dz/wp-content/uploads/2015/01/RESTRUCTURATION-DU-POST-OBLIGATOIRE.jpg) to keep data integrity and help in search filtring (joinning)

The creation of an **Establishement** is followed by the creation of records in **establishment_classes** that brings all _types_ from **class_types** and associate them with the **Establishment**

Admins have to insert a **Year** record then **year_classes** will automatically be filled with rows according to **establishment_classes**


The **clients** table refers to **parents** :

> Unable to use the word _parent_ as an eloquent model name. [Ref](https://laravel.com/docs/8.x/eloquent#table-names)

```php
class Client extends Model
```

the **parental link** is a pure _bridge table_

Only **studies_in** table doesn't respect Laravel naming conventions

Due to the non-IT background of the app users and their expected laziness we made the choice of not setting **phone** & **email** columns to _unique_ and set them to nullable as much as possible

**WARN**: do not rename tables, that will cuase complications wtih conventional names like foreign keys `{table}_id` and [constrains names](https://laravel.com/docs/8.x/migrations#renaming-tables-with-foreign-keys)

## TODO
