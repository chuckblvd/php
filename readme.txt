# 1.0
----------------------------------------------------
Example 1
----------------------------------------------------

// Select multiple records from the database and print them out..

$users = $db->get_results("SELECT name, email FROM users");

foreach($users as $user){
	// Access data using object syntax
	echo $user->name;
	echo $user->email;
}
 
----------------------------------------------------
Example 2
----------------------------------------------------

// Get one row from the database and print it out..

$user = $db->get_row("SELECT name, email FROM users WHERE id = 2");

echo $user->name;
echo $user->email;

----------------------------------------------------
Example 3
----------------------------------------------------

// Get one variable from the database and print it out..

$var = $db->get_var("SELECT count(*) FROM users");
echo $var;

----------------------------------------------------
Example 4
----------------------------------------------------

// Print raw query..

$var = $db->raw_query("SELECT $some_value FROM $some_table");
echo $var;

----------------------------------------------------
Example 5
----------------------------------------------------

// Insert into table..

$table_name = "Some_Table";

$values = array(
	"name" => "John Doe",
	"email" => "johndoe@example.com"
);

$var = $db->insert($table_name,$values);

// raw query
// INSERT INTO Some_Table VALUES ('John Doe','jd@example.com')

----------------------------------------------------
Example 6
----------------------------------------------------

// Update row in table..

$table_name = "Some_Table";

$values = array(
	"name" => "John Doe",
	"email" => "jd@example.com"
);

$var = $db->update($table_name,$values,'name','John Doe');

// raw query
// UPDATE Some_Table SET name = 'John Doe', email = 'jd@example.com' WHERE name = 'John Doe'

----------------------------------------------------
Example 7
----------------------------------------------------

// Delete row from table..

$table_name = "Some_Table";

$var = $db->delete($table_name,'name','John Doe');

// raw query
// DELETE FROM Some_Table WHERE name = 'John Doe'