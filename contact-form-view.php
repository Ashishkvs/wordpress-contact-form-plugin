<div class="contact-form">

</div>
<h1>Contact Form</h1>
<table class="table" border="2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
         $results= get_contact_form();
        $count =0;
        foreach($results as $result) { 
            $count++;
            // print_r($result);
            echo <<<CONTACT_FORM
                <tr>
                    <th scope="row">$count</th>
                    <td> $result->name </td>
                    <td>  $result->email  </td>
                    <td> $result->subject </td>
                    <td> $result->message </td>
                    <td> $result->created_at </td>
                </tr>
            CONTACT_FORM;
        }
    ?>
   
</tbody>
</table>