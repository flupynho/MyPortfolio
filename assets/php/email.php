<?php
// Multiple recipients
$to = 'felippeipb@gmail.com'; // note the comma

// Subject
$subject = 'Contato - Felippe';

// Message
$mensagem = felippeipb@gmail.com'
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Felipe <felippesantos.ccp@gmail.com>';


// Mail it
if(mail($to, $subject, $mesagem, implode("\r\n", $headers));
?>
