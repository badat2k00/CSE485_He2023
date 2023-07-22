<div >
    <h1 >Danh sách sách</h1>
    <form action="add_book.php" method="post">
        <div >
            <label for="title">Tên sách:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div >
            <label for="author">Tác giả:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div >
            <label for="publisher">Nhà xuất bản:</label>
            <input type="text" id="publisher" name="publisher" class="form-control" required>
        </div>
        <div >
            <label for="publicationYear">Năm xuất bản:</label>
            <input type="number" id="publicationYear" name="publicationYear" class="form-control" required>
        </div>
        <div >
            <label for="ISBN">ISBN:</label>
            <input type="text" id="ISBN" name="ISBN" class="form-control" required>
        </div>
        <div >
            <label for="chapters">Danh mục các chương:</label>
            <input type="text" id="chapters" name="chapters" class="form-control" required>
        </div>
        <button type="submit" >Thêm sách mới</button>
    </form>