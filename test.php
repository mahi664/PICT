<!--<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="https://www.google.com/jsapi">
</script>
<script type="text/javascript">

// Load the Google Transliterate API
google.load("elements", "1", {
packages: "transliteration"
});

function onLoad() {
var options = {
sourceLanguage:
google.elements.transliteration.LanguageCode.ENGLISH,
destinationLanguage:
[google.elements.transliteration.LanguageCode.HINDI],
//shortcutKey: 'ctrl+g',
transliterationEnabled: true
};

// Create an instance on TransliterationControl with the required
// options.
var control =
new google.elements.transliteration.TransliterationControl(options);

// Enable transliteration in the textbox with id
// 'transliterateTextarea'.
control.makeTransliteratable(['transliterateTextarea']);
}
google.setOnLoadCallback(onLoad);
</script>
</head>
<body>
Type in Hindi (Press Ctrl+g to toggle between English and Hindi)<br>
<textarea id="transliterateTextarea" style="width:600px;height:200px"></textarea>
</body>
</html>-->

<?php 
require "connect.php";
$sql = "SELECT * from questions ORDER BY rand() limit 3";
$query = $conn->query($sql);
if($query)
{
  while($row = $query->fetch_assoc())
  {
    echo $row['qid'];
    echo $row['question'];
    echo $row['A'];
    echo $row['B'];
    echo $row['C'];
    echo $row['D'];
    echo $row['correctopt'];
    echo $row['subject'];
    echo "";
  }
}
?>