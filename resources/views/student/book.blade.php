
	

		
<form action="/books/save" method="POST">
	@csrf
id:<input type="text" name="id"><br>
isbn:<input type="text" name="isbn"><br>
name:<input type="text" name="name"><br>
author:<input type="text" name="author"><br>
publisher:<input type="text" name="publisher"><br>
editor:<input type="text" name="editor"><br>
copies:<input type="text" name="editor"><br>
cost:<input type="text" name="cost"><br>
<input type="submit" value="submit">
</form>
</body>
