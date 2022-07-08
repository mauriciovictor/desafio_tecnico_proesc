select 
    c.name,
    count(*) total_products
from 
    products  p inner join
    categories c on
    p.category_id = c.id
group by 
    c.name