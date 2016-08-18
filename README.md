# PHP-Database-Class
A simple and generic database class for PHP and MYSQL

<p>This is a very simple and generic class for PHP that makes accessing the database easier.</p>
<h3>Usage</h3>
<p>copy class.db.php and db_conn.php into your project.</p>
<p>Edit the DB settings in db_conn.php</p>

<p>Include or require class.db.php on any page. </p>
<p>Instantiate a new instance of the class</p>
<p>$quiz = new Quiz();</p>

<p>Now you can call any of the public functions.<p>
<p><b>Example:</b></p>
<p>$result =$quiz->selectFromDb('*','myTableName');</p>
