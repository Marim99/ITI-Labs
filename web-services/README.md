# web-services

## Day 1

## task 1

Use CURL for getting the weather information

## task 2

using Guzzle 

video demo

https://user-images.githubusercontent.com/78925756/224489158-15fa499a-e73f-4a1a-8b1f-81a2cd25fc82.mp4

## Day 2

| Product | Endpoints | Action |
| --- | --- | --- |
| GET | /Day2/index.php/product | get all products |
| GET | /Day2/index.php/product/:id | get a product by id |
| POST | /Day2/index.php/product | add product  |
| PUT | /Day2/index.php/product/:id | update a product by id  |
| DELETE | /Day2/index.php/product/:id | delete a product by id |

### product body Example

```
   {
        "id": "4",
        "name": "Product 4",
        "price": "100",
        "units_in_stock": "10"
    },
```
