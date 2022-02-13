#сделан отдельный SQL-скрипт который выводит название книги и ее авторов для жанра “Фантастика”
SELECT s.genre,s.title,author.lastname_author FROM
 (SELECT * FROM Books
 Join book_genre on books.ISBN_Books = book_genre.ISBN_Books_bg
 Join Genre on book_genre.id_genre_bg = Genre.id_genre
 WHERE(Genre.genre='Роман')
 )as s Inner
 join book_author on s.ISBN_Books=book_author.ISBN_Books_ba
 join author on book_author.id_author_ba = author.id_author
 
#сделан отдельный SQL-скрипт который выводит автора, который написал больше всего книг
SELECT author.lastname_author FROM book_author INNER JOIN author ON book_author.id_author_ba = author.id_author GROUP BY author.lastname_author HAVING Count(book_author.ISBN_Books_ba)>= All (SELECT Count(book_author.ISBN_Books_ba) FROM book_author GROUP BY book_author.id_author_ba) 

 
 