SELECT categories.id as id,categories.name as category_name,group_concat(products.name) as products
FROM categories LEFT JOIN products on categories.id = products.category_id
group by categories.id