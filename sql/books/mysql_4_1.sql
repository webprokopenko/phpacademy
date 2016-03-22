select b.id, b.title, b.price, c.title as category_title
from books b, categories c
where b.category_id = c.id;

select b.id, b.title, b.price, c.title as category_title
from books b
left join categories c on b.category_id = c.id
where c.title is null;