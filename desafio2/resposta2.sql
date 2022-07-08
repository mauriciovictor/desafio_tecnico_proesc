select 
    c.name,
    cast((sum(p.price)/count(*)) as numeric(16,2)) average_price 
from 
    products  p inner join
    categories c on
    p.category_id = c.id
group by 
    c.name