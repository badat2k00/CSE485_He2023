<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
  
</head>
<body>
    <div >
        <h1 >Danh sách sách</h1>
        <div>
            <!-- <button class="btn btn-primary mr-2" onclick="addBook()">Thêm sách</button> -->
            <a onclick="addBook()">Thêm sách</a>
            <button onclick="sortBooksByAuthor()">Sắp xếp theo tác giả</button>
            <button onclick="sortBooksByTitle()">Sắp xếp theo tên sách</button>
            <button  onclick="sortBooksByPublicationYear()">Sắp xếp theo năm xuất bản</button>
        </div>

        <table >
            <thead>
                <tr>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Năm xuất bản</th>
                    <th>Số hiệu ISBN</th>
                    <th>Danh mục các chương</th>
                </tr>
            </thead>
            <tbody >
                <?php
                   
                    require_once 'books.php';

                    if (isset($_GET['sort']) && $_GET['sort'] === 'author') {
                        $books = sortBooksByAuthor();
                    } else {
                        $books = getBooks();
                    }
                    
                    $books = getBooks();
                    foreach ($books as $book) {
                        echo "<tr>";
                        echo "<td>{$book['title']}</td>";
                        echo "<td>{$book['author']}</td>";
                        echo "<td>{$book['publisher']}</td>";
                        echo "<td>{$book['publicationYear']}</td>";
                        echo "<td>{$book['ISBN']}</td>";
                        echo "<td>{$book['chapters']}</td>";
                        echo "</tr>";
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>