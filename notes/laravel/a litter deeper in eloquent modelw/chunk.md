```
User::chunk(100, function ($users) 
{ 
foreach ($users as $user)
 { $some_value = ($user->some_field > 0)
 ? 1 : 0; 
// might be more logic here
 $user->update
(['some_other_field' => $some_value]); } });


``` 