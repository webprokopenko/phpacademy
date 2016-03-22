select a.title, b.title 
from categories a left join categories b on a.id = b.parent_id ;

select a.title, group_concat(b.title)
from categories a left join categories b on a.id = b.parent_id
group by 1;