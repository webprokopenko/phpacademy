select * from books;
select * from categories;

select b.id, b.title, b.price, c.title as category_title
from books b, categories c
where b.category_id = c.id;

select b.id, b.title, b.price, c.title as category_title,
a.title as author_name
from books b, categories c, authors a, books_authors ba
where b.category_id = c.id # orange
  and b.id = ba.book_id # blue
  and a.id = ba.author_id # red 
;



select b.id, b.title, b.price, c.title as category_title,
group_concat(a.title) as authors_list
from books b, categories c, authors a, books_authors ba
where b.category_id = c.id # orange
  and b.id = ba.book_id # blue
  and a.id = ba.author_id # red 
group by 1,2,3,4;


