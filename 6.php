SELECT categories.name,group_concat(products.name) as products
FROM categories LEFT JOIN products on categories.category_id = products.category_id
group by categories.category_id
